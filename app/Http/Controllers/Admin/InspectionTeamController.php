<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inspection;
use App\Classes\Logger;
class InspectionTeamController extends Controller
{

     private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
         $response['inspections'] =  Inspection::get();
        //Logger
        $this->Logger->log('info', 'Listou os Funcionários');
        return view('admin.inspections.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar Funcionário');
        return view('admin.inspections.create.index');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'tel' => 'max:12',
            'nif' => 'required|string|max:50',
            'occupation' => 'required|string|max:100',
            'departament' => 'required|string|max:255',
            'photoEmployee' => 'mimes:jpg,png,gif,SVG,EPS'
        ]);


        if ($middle = $request->file('photoEmployee')) {
            $file = $middle->storeAs('photoEmployee', 'photoEmployee-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file = null;
        }
        $inspections = Inspection::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'photoEmployee' => $file,
            'occupation' => $request->occupation,
            'departament' => $request->departament,
            'nif' => $request->nif
        ]);

        //Logger
        $this->Logger->log('info', 'Cadastrou um Funcionário com o identificador ' . $inspections->id);
        return redirect()->route('admin.inspections.index')->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $response['inspections'] =  Inspection::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um Funcionário com o identificador ' . $id);
        return view('admin.inspections.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['inspections'] = Inspection::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um Funcionário  com o identificador ' . $id);
        return view('admin.inspections.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'tel' => 'max:12',
            'nif' => 'required|string|max:50',
            'occupation' => 'required|string|max:50',
            'departament' => 'required|string|max:255',
            'photoEmployee' => 'mimes:jpg,png,gif,SVG,EPS'
        ]);


        if ($middle = $request->file('photoEmployee')) {
            $file = $middle->storeAs('photoEmployee', 'photoEmployee-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file =  Inspection::find($id)->photoEmployee;;
        }

        $inspections = Inspection::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'photoEmployee' => $file,
            'occupation' => $request->occupation,
            'departament' => $request->departament,
            'nif' => $request->nif
        ]);


        //Logger
        $this->Logger->log('info', 'Editou um Funcionário com o identificador ' . $id);
        return redirect()->route('admin.Inspection.index')->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um Funcionário com o identificador ' . $id);
        return  redirect()->route('admin.Inspection.index')->with('destroy', '1');
    }
}
