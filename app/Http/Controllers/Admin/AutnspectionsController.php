<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Helpers\Helper;
use App\Models\Client;
use App\Models\Cowork;
use App\Models\Member;
use App\Models\Payment;
use App\Models\Scheldule;
use App\Models\DocumentsStartup;
use App\Models\Startup;
use App\Models\Autinspection;
use PDF;
class AutnspectionsController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['autinspections'] = Autinspection::with('startupDocuments','payments', 'scheldules', 'members')->get();
        $this->Logger->log('info', 'Lista de autinspection');
        return view('admin.autinspection.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Criar autinspection');
        return view('admin.autinspection.create.index');
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
           // 'roomName' => 'required|string|max:255',
          //  'site' => 'max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
          //  'incubatorModel' => 'required|string|max:50',
            'StartupDetails' => 'required|string|min:5',
            'document' => 'mimes:pdf,docx,xlsx',




            'bedNumber' => 'max:255',
            'tableNumber' => 'required|string|max:50',
            'yearSelfinspection' => 'required|string|max:255',
            'monthselfInspection' => 'max:50',
            'workforce' => 'required|string|max:50',

            'men' => 'required|string|max:255',
            'women' => 'max:255',
            'expatriateWork' => 'required|string|max:50',

            'expatriateWork' => 'max:255',
            'agreeInstallation' => 'required|string|max:255',



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
           // 'address' => 'max:50',
            'clienttype' => 'max:50'

        ]);


        $payment = Payment::create([
            'type' => $request->type,
            'value' => $request->value,
            'reference' => $request->reference,
            'currency' => $request->currency,
            'status' => $request->status,
            'origin' => "Autinspection",
            'code' =>  'HAMUYELA' . "-" . rand() . "-" . date('Y')
        ]);
        $schedule = Scheldule::create($request->all());




        $autinspection = Autinspection::create([
            'name' => $request->name,
           // 'roomName' => $request->roomName,
          //  'site' => $request->site,
            'email' => $request->email,
            'tel' => $request->tel,
            'nif' => $request->nif,
            'numberRoomm' => $request->numberRoomm,
            'bedNumber' => $request->bedNumber,
            'tableNumber' => $request->tableNumber,
            'yearSelfinspection' => $request->yearSelfinspection,
            'monthselfInspection' => $request->monthselfInspection,
            'workforce' => $request->workforce,
            'men' => $request->men,
            'women' => $request->women,
            'expatriateWork' => $request->expatriateWork,
            'expatriateWork' => $request->expatriateWork,
            'agreeInstallation' => $request->agreeInstallation,
            'incubatorModel' => $request->incubatorModel,
            'StartupDetails' => $request->StartupDetails,
            'fk_Payments_id' => $payment->id,
            'fk_Scheldules_id' => $schedule->id

        ]);

        $client = Client::create([
            'name' => $autinspection->name,
            'nif' => $autinspection->nif,
            'tel' => $autinspection->tel,
            'email' => $autinspection->email,
            'origin' => "Autinspection"
        ]);

        $this->Logger->log('info', 'Cadastrou autinspection');
        return redirect()->route('admin.autinspection.list.index')->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $response['autinspection'] = Autinspection::with('startupDocuments','payments', 'scheldules', 'members')->find($id);

        $this->Logger->log('info', 'Detalhes de Startups');
        return view('admin.autinspection.details.index', $response);
    }



    public function print($id)
    {

        $this->Logger->Log('info', 'Imprimiu Informações sobre a autinspection com id ' . $id);

        $data = autinspection::where('id', $id)->with('payments', 'scheldules')->first();
        $response['singleStartup'] = $data;

        $pdf = PDF::loadView('pdf/singleStartup/index', $response);
        $pdf->setPaper('A3', 'landscape');
        return $pdf->stream('Emitiu informações sobre a autinspection com id ' . $data->id . ".pdf");
    }



    public function edit($id)
    {
        $middle = autinspection::find($id);
        $response['autinspection'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);

        $this->Logger->log('info', 'Editar Startups');
        return view('admin.autinspection.edit.index', $response);
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
            $file = Autinspection::find($id)->document;
        }

        Autinspection::find($id)->update([

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
        $autinspection = Autinspection::find($id);


        Client::where([['nif', $autinspection->nif], ['origin', '=', 'autinspection']])->update([
            'name' => $autinspection->name,
            'email' => $autinspection->email,
            'tel' => $autinspection->tel,
            'nif' => $autinspection->nif,
            'origin' => "autinspection"
        ]);

        Payment::find($autinspection->fk_Payments_id)->update($request->all());
        Scheldule::find($autinspection->fk_Scheldules_id)->update($request->all());

        $this->Logger->log('info', 'Actualizou empresa');
        return redirect()->route('admin.autinspection.list.index')->with('edit', '1');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $sp = Autinspection::find($id);

        Payment::where('id', $sp->fk_Payments_id)->delete();
        Scheldule::where('id', $sp->fk_Scheldules_id)->delete();
        Member::where('fk_startups_id', $id)->delete();
        DocumentsStartup::where('fk_startups_id', $id)->delete();
        Client::where('name', $sp->name)->delete();


        Startup::find($id)->delete();

        $this->Logger->log('info', 'Eliminou Uma empresa');
        return redirect()->route('admin.autinspection.list.index')->with('destroy', '1');
    }
}
