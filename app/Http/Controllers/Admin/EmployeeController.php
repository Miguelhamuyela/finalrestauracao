<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['employees'] =  Employee::get();
        //Logger
        $this->Logger->log('info', 'Listou os Integrate');
        return view('admin.employees.list.index', $response);
    }


    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar Integrate');
        return view('admin.employees.create.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'teamLeader' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'email' => 'required|string|email',
            'tel' => 'max:255',
            'address' => 'max:255',
            'nif' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'ministry' => 'required|string|max:255',
            'departament' => 'required|string|max:255',
            'photoEmployee' => 'mimes:jpg,png,gif,SVG,EPS'
        ]);


        if ($middle = $request->file('photoEmployee')) {
            $file = $middle->storeAs('photoEmployee', 'photoEmployee-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file = null;
        }

        $employee = Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'photoEmployee' => $file,
            'occupation' => $request->occupation,
            'ministry' => $request->ministry,
            'departament' => $request->departament,
            'teamLeader' => $request->teamLeader,
            'description' => $request->description,
            'address' => $request->address,
            'nif' => $request->nif
        ]);

        //Logger
        $this->Logger->log('info', 'Cadastrou um Integrate com o identificador ' . $employee->id);
        return redirect()->route('admin.employees.index')->with('create', '1');
    }

    public function show($id)
    {

        $response['Employee'] =  Employee::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um Integrate com o identificador ' . $id);
        return view('admin.employees.details.index', $response);
    }

    public function edit($id)
    {
        $response['employee'] = Employee::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um Integrate  com o identificador ' . $id);
        return view('admin.employees.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'name' => 'required|string|max:255',
            'teamLeader' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'email' => 'required|string|email',
            'tel' => 'max:255',
            'address' => 'max:255',
            'nif' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'ministry' => 'required|string|max:255',
            'departament' => 'required|string|max:255',
            'photoEmployee' => 'mimes:jpg,png,gif,SVG,EPS'
        ]);


        if ($middle = $request->file('photoEmployee')) {
            $file = $middle->storeAs('photoEmployee', 'photoEmployee-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file =  Employee::find($id)->photoEmployee;;
        }

        $employee = Employee::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'photoEmployee' => $file,
            'occupation' => $request->occupation,
            'ministry' => $request->ministry,
            'departament' => $request->departament,
            'teamLeader' => $request->teamLeader,
            'description' => $request->description,
            'address' => $request->address,
            'nif' => $request->nif
        ]);


        //Logger
        $this->Logger->log('info', 'Editou um Integrate com o identificador ' . $id);
        return redirect()->route('admin.employees.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        Employee::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um Integrate com o identificador ' . $id);
        return  redirect()->route('admin.employees.index')->with('destroy', '1');
    }

}
