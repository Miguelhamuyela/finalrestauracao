<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inspection;
use PDF;

class InspectionsController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
        //

        $response['inspection'] = Inspection::get();
        return view('admin.inspections.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
        ]);

        $inspection = Inspection::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //
        $response['inspection'] = Inspection::find($id);
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
         //
        $response['inspection'] = Inspection::find($id);
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
            /**Inspection informatio */
            'name' => 'required|string|max:255',
            'TypesHotel' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
        ]);

        Inspection::find($id)->update($request->all());

        return redirect()
            ->route('admin.inspection.list.index')
            ->with('edit', '1');
    }



    

 /**Imprimir Lista de Inspections */
    public function printInspection(Request $request)
    {
        $response['checkbox'] = $request->all();

        if ($request->origin == 'all') {

            $response['inspections'] = Inspection::get();
        } else {
            $response['inspections'] = Inspection::where('origin', $request->origin)->get();
        }

        //Logger
        $this->Logger->log('info', 'Imprimiu lista de Pagamentos');

        $pdf = PDF::loadview('pdf.inspection.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');

    }



    public function destroy($id)
    {
         Inspection::find($id)->delete();
        return redirect()
            ->route('admin.inspection.list.index')
            ->with('destroy', '1');
    }
}
