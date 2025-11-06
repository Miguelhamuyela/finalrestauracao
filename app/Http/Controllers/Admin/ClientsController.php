<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Models\DocumentsStartup;
use Barryvdh\DomPDF\Facade\Pdf;

class ClientsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
        //
        $response['client'] = Client::get();
        return view('admin.clients.list.index', $response);
    }

    public function create()
    {
        //
        return view('admin.clients.create.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'TypesHotel' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'classification' => 'string',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'document' => 'file',
        ]);

        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'TypesHotel' => $request->TypesHotel,
            'classification' => $request->classification,
            'tel' => $request->tel,
            'nif' => $request->nif,
            'address' => $request->address
        ]);

        /* if ($request->document) {
            //upload do arquivo
            $fileName = null;
            if ($request->hasFile('document') && $request->file('document')->isValid()) {
                $file = $request->file('document');
                $extension = $file->extension();
                $fileName = md5($file->getClientOriginalName() . strtotime('now')) . '.' . $extension;
                $file->move(public_path('files/documents'), $fileName);
            }

            $document = DocumentsStartup::create([
                'documentsStartup' => $fileName,
                'client_id' => $client->id
            ]);
        } */
        /* if ($request->document) {
            $documentation = DocumentsStartup::create([
                'documentsStartup' => $request->document,
                'client_id' => $client->id
            ]);
        } */
        /* return redirect()
            ->back()
            ->with('create', '1'); */
            $this->Logger->log('info', 'Cadastrou uma empresa');
        return redirect()->route('admin.client.list.index')->with('create', '1');
    }

    public function show($id)
    {
        //
        $response['client'] = Client::find($id);
        return view('admin.clients.details.index', $response);
    }

    public function edit($id)
    {
        //
        $response['client'] = Client::find($id);
        return view('admin.clients.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'TypesHotel' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'classification' => 'string',
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
            return response()->json(['data' => $client]);
        }

        return response()->json(['nif' => null], 404);
    }
}
