<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EquipmentRepair;
use App\Models\Payment;
use App\Models\Scheldule;
use Illuminate\Http\Request;

class EquipmentRepairsController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['equipmentRepairs'] = EquipmentRepair::with('payments', 'scheldules', 'clients')->get();
        //Logger
        $this->Logger->log('info', 'Entrou em Listar Reparação de  Equipamentos ');
        return view('admin.equipmentRepair.list.index', $response);
    }

    public function create()
    {
        $response['employees'] = Employee::where('departament', 'Departamento de Gestão de Infra-Estruturas Tecnológicas e Serviços Partilhados')->orderBy('name', 'asc')->get();
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar  Reparação de  Equipamentos ');
        return view('admin.equipmentRepair.create.index', $response);
    }

    public function store(Request $request)
    {
        $request->validate([
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'clienttype' => 'required|string|max:50',
            /**Scheldules Information */
            'started' => 'required|string|max:255',
            'end' => 'required|string|max:255',
            /***Payment Information */
            'type' => 'required|string|max:255',
            'value' =>  'required|numeric|min:2',
            'reference'  => 'max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            /**EquipmentRepair */
            'equipmentName' => 'required|string|max:50',
            'model' => 'required|string|max:50',
            'image' => 'mimes:jpg,png,gif,SVG,EPS',
            'problemDetails' => 'required',
            'referenceEquipment' => 'required|unique:equipment_repairs',
            'macAddress' => 'max:255',
            'serialNumber' => 'max:255'
        ]);

        $client = Client::create($request->all());
        $payment = Payment::create([
            'type' => $request->type,
            'value' => $request->value,
            'reference' => $request->reference,
            'currency' => $request->currency,
            'status' => $request->status,
            'origin' => "Reparação de Equipamentos",
            'code' =>  'DIGITAL' . "-" . rand() . "-" . date('Y')
        ]);
        $schedule = Scheldule::create($request->all());

        if ($middle = $request->file('image')) {
            $file = $middle->storeAs('equipmentRepairs', 'Equipamento-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file = null;
        }
        $EquipmentRepair = EquipmentRepair::create([
            'equipmentName' => $request->equipmentName,
            'model' => $request->model,
            'image' =>  $file,
            'referenceEquipment' => $request->referenceEquipment,
            'problemDetails' => $request->problemDetails,
            'macAddress'=> $request->macAddress,
            'serialNumber'=> $request->serialNumber,
            'fk_Payments_id' => $payment->id,
            'fk_Employees_id' => $request->fk_Employees_id,
            'fk_Clients_id' => $client->id,
            'fk_Scheldules_id' => $schedule->id
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou Reparação de  Equipamentos com o Identificador ' . $EquipmentRepair->id);
        return redirect("admin/reparação-equipamentos/show/$EquipmentRepair->id")->with('create', '1');
    }


    public function show($id)
    {
        $response['equipmentRepair'] = EquipmentRepair::with('payments', 'scheldules', 'clients', 'employees')->find($id);
        //Logger
        //Logger
        $this->Logger->log('info', 'Visualizou Reparação de Equipamentos com o identificador ' . $id);
        return view('admin.equipmentRepair.details.index', $response);
    }


    public function edit($id)
    {
        $response['equipmentRepair'] = EquipmentRepair::with('payments', 'scheldules', 'clients', 'employees')->find($id);
        $middle = EquipmentRepair::find($id);
        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);
        $response['client'] =  Helper::client($middle->fk_Clients_id);
        $response['employees'] = Employee::where('departament', 'Departamento de Gestão de Infra-Estruturas Tecnológicas e Serviços Partilhados')->get();
        //Logger
        $this->Logger->log('info', 'Entrou em editar Reparação  Equipamento  com o identificador ' . $id);
        return view('admin.equipmentRepair.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'clienttype' => 'required|string|max:50',

            /**Scheldules Information */
            'started' => 'required|string|max:255',
            'end' => 'required|string|max:255',



            /**EquipmentRepair */
            'equipmentName' => 'required|string|max:50',
            'model' => 'required|string|max:50',
            'problemDetails' => 'required',
            'referenceEquipment' => 'required',
            'macAddress' => 'max:255',
            'serialNumber' => 'max:255'
        ]);

        if ($middle = $request->file('image')) {
            $file = $middle->storeAs('equipmentRepairs', 'Equipamento-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file = EquipmentRepair::find($id)->image;
        }

        $EquipmentRepair =  EquipmentRepair::find($id);

        Client::find($EquipmentRepair->fk_Clients_id)->update($request->all());
        $client = Client::find($EquipmentRepair->fk_Clients_id);
        $schedule = Scheldule::find($EquipmentRepair->fk_Scheldules_id)->update($request->all());
        $payment =  Payment::find($EquipmentRepair->fk_Payments_id)->update($request->all());

        $EquipmentRepair = EquipmentRepair::find($id)->update([
            'equipmentName' => $request->equipmentName,
            'model' => $request->model,
            'image' =>  $file,
            'referenceEquipment' => $request->referenceEquipment,
            'problemDetails' => $request->problemDetails,
            'macAddress'=> $request->macAddress,
            'serialNumber'=> $request->serialNumber,
            'fk_Payments_id' => $EquipmentRepair->fk_Payments_id,
            'fk_Employees_id' => $request->fk_Employees_id,
            'fk_Clients_id' => $EquipmentRepair->fk_Clients_id,
            'fk_Scheldules_id' => $EquipmentRepair->fk_Scheldules_id,
        ]);
        return redirect()->route('admin.equipmentRepair.show', $id)->with('edit', '1');
    }

    public function destroy($id)
    {

        $er = EquipmentRepair::find($id);

        Payment::where('id', $er->fk_Payments_id)->delete();
        Client::where('id', $er->fk_Clients_id)->delete();
        Scheldule::where('id', $er->fk_Scheldules_id)->delete();

        EquipmentRepair::find($id)->delete();

        //Logger
        $this->Logger->log('info', 'Eliminou Reparação de Equipamentos com o identificador ' . $id);

        return redirect('admin/reparação-equipamentos/list')->with('destroy', '1');
    }
}
