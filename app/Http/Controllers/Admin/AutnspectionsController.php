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
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;

class AutnspectionsController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        /* $response['autinspection'] = Autinspection::with('clients')->get(); */
        $response['autinspections'] = Autinspection::with('client','startupDocuments','payments', 'scheldules', 'members')->get();
        $this->Logger->log('info', 'Lista uma Agenda de Vistoria');
        return view('admin.autinspection.list.index', $response);
    }

    public function create()
    {
        $response['clients'] = Client::orderByDesc('id')->get();
        $this->Logger->log('info', 'Criar Agenda de Vistoria');
        return view('admin.autinspection.create.index', $response);
    }

    public function store(Request $request)
    {
         $request->validate([

            /* 'name' => 'required|string|max:255',
            'classification' => 'string',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'StartupDetails' => 'required|string|min:5',
            'document' => 'mimes:pdf,docx,xlsx', */


            'client_id' => 'required',
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
            /* 'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50', */
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

           /*  'name' => $request->name, */
           // 'roomName' => $request->roomName,
          //  'site' => $request->site,
            /* 'email' => $request->email,
            'classification' => $request->classification,
            'tel' => $request->tel,
            'nif' => $request->nif, */


            'client_id' => $request->client_id,
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

        /* $client = Client::create([
            'name' => $autinspection->name,
            'nif' => $autinspection->nif,
            'tel' => $autinspection->tel,
            'classification' => $autinspection->classification,
            'email' => $autinspection->email,
            'origin' => "Autinspection"
        ]); */

        $this->Logger->log('info', 'Cadastrou uma agenda de Vistoria');
        return redirect()->route('admin.autinspection.list.index')->with('create', '1');
    }

  
    public function show($id)
    {
        $response['autinspection'] = Autinspection::with('startupDocuments','payments', 'scheldules', 'members')->find($id);
        $response['autinspection'] = Autinspection:: findOrFail($id);
        $this->Logger->log('info', 'Detalhes de uma agenda Verificada');
        return view('admin.autinspection.details.index', $response);
    }



    public function print($id)
    {

        $this->Logger->Log('info', 'Imprimiu Informações sobre a uma agenda de vistoria com id ' . $id);

        $data = autinspection::where('id', $id)->with('payments', 'scheldules')->first();
        $response['singleStartup'] = $data;

        $pdf = PDF::loadView('pdf/singleStartup/index', $response);
        $pdf->setPaper('A3', 'landscape');
        return $pdf->stream('Emitiu informações sobre a agenda vistoria com id ' . $data->id . ".pdf");
    }



    public function edit($id)
    {
        $response['autinspection'] = Autinspection::find($id);
        $middle = autinspection::find($id);
        $response['autinspection'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);

        $this->Logger->log('info', 'Editar agenda de vistoria');
        return view('admin.autinspection.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
       $request->validate([
            /* 'name' => 'required|string|max:255',
            'roomName' => 'required|string|max:255',
            'site' => 'max:255',
            'classification' => 'string',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'incubatorModel' => 'required|string|max:50',
            'nif' => 'required|string|max:50',
            'StartupDetails' => 'required|string|min:5',
            'document' => 'mimes:pdf,docx,xlsx', */

            'client_id' => 'required',
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


            /**Payments Information */


            /**Payments Information End */
            'started' => 'required|string|max:255',
            'end' => 'required|string|max:255',

            /**Clients information */
            /* 'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'max:50',
            'clienttype' => 'max:50' */

        ]);


        if ($middle = $request->file('document')) {
            $file = $middle->storeAs('document', 'document-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file = Autinspection::find($id)->document;
        }

        Autinspection::find($id)->update([

            /* 'name' => $request->name,
            'roomName' => $request->roomName,
            'site' => $request->site,
            'classification' => $request->classification,
            'email' => $request->email,
            'tel' => $request->tel,
            'incubatorModel' => $request->incubatorModel,
            'nif' => $request->nif,
            'StartupDetails' => $request->StartupDetails,
            'document' => $file */

            'client_id' => $request->client_id,
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

        ]);
        $autinspection = Autinspection::find($id);


        /* Client::where([['nif', $autinspection->nif], ['origin', '=', 'agenda de vistoria']])->update([
            'name' => $autinspection->name,
            'email' => $autinspection->email,
            'tel' => $autinspection->tel,
            'nif' => $autinspection->nif,
            'origin' => "autinspection"
        ]); */

        Payment::find($autinspection->fk_Payments_id)->update($request->all());
        Scheldule::find($autinspection->fk_Scheldules_id)->update($request->all());
         $response['autinspection'] = Autinspection::get();
        $this->Logger->log('info', 'Actualizou agenda de vistoria');
        return redirect()->route('admin.autinspection.list.index')->with('edit', '1');

    }


    public function destroy($id)
    {
         $sp = Autinspection::find($id);

        Payment::where('id', $sp->fk_Payments_id)->delete();
        Scheldule::where('id', $sp->fk_Scheldules_id)->delete();
        Member::where('fk_autinspections_id', $id)->delete();
        DocumentsStartup::where('fk_autinspections_id', $id)->delete();
        Client::where('name', $sp->name)->delete();


        Autinspection::find($id)->delete();

        $this->Logger->log('info', 'Eliminou  uma agenda de vistoria');
        return redirect()->route('admin.autinspection.list.index')->with('destroy', '1');
    }
}
