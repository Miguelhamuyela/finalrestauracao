<?php


namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Cowork;
use App\Models\Member;
use App\Models\Payment;
use App\Models\Scheldule;
use App\Models\DocumentsStartup;
use App\Models\Startup;
use PDF;
use Illuminate\Http\Request;

class StartupsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['startups'] = Startup::with('startupDocuments','payments', 'scheldules', 'members')->get();
        $this->Logger->log('info', 'Lista de Startups');
        return view('admin.startup.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->Logger->log('info', 'Criar Startups');
        return view('admin.startup.create.index');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            /**Startup informatio */
            'name' => 'required|string|max:255',
            'roomName' => 'required|string|max:255',
            'site' => 'max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'incubatorModel' => 'required|string|max:50',
            'StartupDetails' => 'required|string|min:5',
            'document' => 'mimes:pdf,docx,xlsx',


            /***Payment Information */
            'type' => 'required|string|max:255',
            'value' =>  'required|numeric|min:2',
            'reference'  => 'max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            /**Scheldules Information */
            'started' => 'required|string|max:255',
            'end' => 'required|string|max:255',

            /**Clients information */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'max:50',
            'clienttype' => 'max:50'

        ]);


        $payment = Payment::create([
            'type' => $request->type,
            'value' => $request->value,
            'reference' => $request->reference,
            'currency' => $request->currency,
            'status' => $request->status,
            'origin' => "Startup",
            'code' =>  'DIGITAL' . "-" . rand() . "-" . date('Y')
        ]);
        $schedule = Scheldule::create($request->all());




        $startup = Startup::create([
            'name' => $request->name,
            'roomName' => $request->roomName,
            'site' => $request->site,
            'email' => $request->email,
            'tel' => $request->tel,
            'nif' => $request->nif,
            'incubatorModel' => $request->incubatorModel,
            'StartupDetails' => $request->StartupDetails,
            'fk_Payments_id' => $payment->id,
            'fk_Scheldules_id' => $schedule->id

        ]);

        $client = Client::create([
            'name' => $startup->name,
            'nif' => $startup->nif,
            'tel' => $startup->tel,
            'email' => $startup->email,
            'origin' => "Startup"
        ]);

        $this->Logger->log('info', 'Cadastrou Startups');
        return redirect()->route('admin.startup.list.index')->with('create', '1');
    }

    public function show($id)
    {

        $response['startup'] = Startup::with('startupDocuments','payments', 'scheldules', 'members')->find($id);

        $this->Logger->log('info', 'Detalhes de Startups');
        return view('admin.startup.details.index', $response);
    }

    
    public function print($id)
    {


        $this->Logger->Log('info', 'Imprimiu Informações sobre a startup com id ' . $id);

        $data = Startup::where('id', $id)->with('payments', 'scheldules')->first();
        $response['singleStartup'] = $data;

        $pdf = PDF::loadView('pdf/singleStartup/index', $response);
        $pdf->setPaper('A3', 'landscape');
        return $pdf->stream('Emitiu informações sobre a startup com id ' . $data->id . ".pdf");
    }




    public function edit($id)
    {
        $middle = Startup::find($id);
        $response['startup'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);

        $this->Logger->log('info', 'Editar Startups');
        return view('admin.startup.edit.index', $response);
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'roomName' => 'required|string|max:255',
            'site' => 'max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'incubatorModel' => 'required|string|max:50',
            'nif' => 'required|string|max:50',
            'StartupDetails' => 'required|string|min:5',
            'document' => 'mimes:pdf,docx,xlsx',

            /**Payments Information */


            /**Payments Information End */
            'started' => 'required|string|max:255',
            'end' => 'required|string|max:255',

            /**Clients information */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'max:50',
            'clienttype' => 'max:50'

        ]);


        if ($middle = $request->file('document')) {
            $file = $middle->storeAs('document', 'document-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file = Startup::find($id)->document;
        }

        Startup::find($id)->update([

            'name' => $request->name,
            'roomName' => $request->roomName,
            'site' => $request->site,
            'email' => $request->email,
            'tel' => $request->tel,
            'incubatorModel' => $request->incubatorModel,
            'nif' => $request->nif,
            'StartupDetails' => $request->StartupDetails,
            'document' => $file

        ]);
        $startup = Startup::find($id);


        Client::where([['nif', $startup->nif], ['origin', '=', 'Startup']])->update([
            'name' => $startup->name,
            'email' => $startup->email,
            'tel' => $startup->tel,
            'nif' => $startup->nif,
            'origin' => "Startup"
        ]);

        Payment::find($startup->fk_Payments_id)->update($request->all());
        Scheldule::find($startup->fk_Scheldules_id)->update($request->all());

        $this->Logger->log('info', 'Actualizou Startups');
        return redirect()->route('admin.startup.list.index')->with('edit', '1');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {

        $sp = Startup::find($id);

        Payment::where('id', $sp->fk_Payments_id)->delete();
        Scheldule::where('id', $sp->fk_Scheldules_id)->delete();
        Member::where('fk_startups_id', $id)->delete();
        DocumentsStartup::where('fk_startups_id', $id)->delete();
        Client::where('name', $sp->name)->delete();


        Startup::find($id)->delete();

        $this->Logger->log('info', 'Eliminou Startups');
        return redirect()->route('admin.startup.list.index')->with('destroy', '1');
    }
}
