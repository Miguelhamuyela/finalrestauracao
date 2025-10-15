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
use App\Models\Schedule;
use PDF;







class SchedulesController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['schedules'] = Schedule::with('startupDocuments','payments', 'scheldules', 'members')->get();
        $this->Logger->log('info', 'Lista de autinspection');
        return view('admin.schedule.list.index', $response);
    }


    public function create()
    {
         $this->Logger->log('info', 'Criar uma agenda');
        return view('admin.schedule.create.index');
    }



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




        $schedule = Schedule::create([
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

            'name' => $schedule->name,
            'nif' => $schedule->nif,
            'tel' => $schedule->tel,
            'email' => $schedule->email,
            'origin' =>"hamuyela"

        ]);

        $this->Logger->log('info', 'Cadastrou uma Agenda de Vistoria');
        return redirect()->route('admin.schedule.list.index')->with('create', '1');

    }


    public function show($id)
    {
        $response['schedule'] = Schedule::with('startupDocuments','payments', 'scheldules', 'members')->find($id);

        $this->Logger->log('info', 'Detalhes de Agenda de Vistoria');
        return view('admin.schedule.details.index', $response);
    }



    public function print($id)
    {


        $this->Logger->Log('info', 'Imprimiu Informações sobre agenda de Vistoria com id ' . $id);

        $data = Schedule::where('id', $id)->with('payments', 'scheldules')->first();
        $response['singleStartup'] = $data;

        $pdf = PDF::loadView('pdf/singleStartup/index', $response);
        $pdf->setPaper('A3', 'landscape');
        return $pdf->stream('Emitiu informações sobre agenda de Vistoria com id ' . $data->id . ".pdf");
    }



    public function edit($id)
    {
        $middle = Schedule::find($id);
        $response['schedule'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);

        $this->Logger->log('info', 'Editar Agenda');
        return view('admin.schedule.edit.index', $response);
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
            $file = Schedule::find($id)->document;
        }

        Schedule::find($id)->update([

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
        $schedule = Schedule::find($id);


        Client::where([['nif', $schedule->nif], ['origin', '=', 'Agenda de Vistoria']])->update([
            'name' => $schedule->name,
            'email' => $schedule->email,
            'tel' => $schedule->tel,
            'nif' => $schedule->nif,
            'origin' => "HAMUYELA"
        ]);

        Payment::find($schedule->fk_Payments_id)->update($request->all());
        Scheldule::find($schedule->fk_Scheldules_id)->update($request->all());

        $this->Logger->log('info', 'Actualizou uma Agenda de Vistoria');
        return redirect()->route('admin.schedule.list.index')->with('edit', '1');

    }


    public function destroy($id)
    {
         $sp = Schedule::find($id);

        Payment::where('id', $sp->fk_Payments_id)->delete();
        Scheldule::where('id', $sp->fk_Scheldules_id)->delete();
        Member::where('fk_schedules_id', $id)->delete();
        DocumentsStartup::where('fk_schedules_id', $id)->delete();
        Client::where('name', $sp->name)->delete();


        Schedule::find($id)->delete();

        $this->Logger->log('info', 'Eliminou uma agenda de Vistoria');
        return redirect()->route('admin.schedule.list.index')->with('destroy', '1');
    }
}
