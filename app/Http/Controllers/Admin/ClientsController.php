<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Controllers\Controller;

use PDF;

class ClientsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['client'] = Client::get();
        return view('admin.clients.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.clients.create.index');
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
            /**Clients informatio */
            'name' => 'required|string|max:255',
            // 'TypesHotel' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
        ]);

        $client = Client::create($request->all());

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
        $response['client'] = Client::find($id);
        return view('admin.clients.details.index', $response);
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
        $response['client'] = Client::find($id);
        return view('admin.clients.edit.index', $response);
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
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'TypesHotel' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
        ]);

        Client::find($id)->update($request->all());

        return redirect()
            ->route('admin.client.list.index')
            ->with('edit', '1');
    }




    /**Imprimir Lista de Clientes */
    public function printClient(Request $request)
    {
        $response['checkbox'] = $request->all();

        if ($request->origin == 'all') {

            $response['clients'] = Client::get();
        } else {
            $response['clients'] = Client::where('origin', $request->origin)->get();
        }

        //Logger
        $this->Logger->log('info', 'Imprimiu lista de Pagamentos');

        $pdf = PDF::loadview('pdf.client.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()
            ->route('admin.client.list.index')
            ->with('destroy', '1');
    }

    /* client nif */
    public function getClientNif($id)
    {
        $client = \App\Models\Client::find($id);

        if ($client) {
            return response()->json(['nif' => $client->nif]);
        }

        return response()->json(['nif' => null], 404);
    }
}
