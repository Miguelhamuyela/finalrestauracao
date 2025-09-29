<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Scheldule;
use App\Models\Cowork;

class CoworkController extends Controller
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

        $response['coworks'] = Cowork::get();
        $this->Logger->log('info', 'Lista de Coworks');
        return view('admin.coworks.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Criar Coworks');
        return view('admin.coworks.create.index');

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


            /**Cowork Information */
            'title'=> 'required|string|min:5',
            'activities'=> 'required|string|min:5'


        ]);


        $client = Client::create($request->all());

        $payment = Payment::create([
            'type' => $request->type,
            'value' => $request->value,
            'reference' => $request->reference,
            'currency' => $request->currency,
            'status' => $request->status,
            'origin' => "Cowork",
            'code' =>  'DIGITAL' . "-" . rand() . "-" . date('Y')

        ]);

        $schedule = Scheldule::create($request->all());

        $cowork = Cowork::create([
            'title' => $request->title,
            'activities' => $request->activities,
            'fk_Payments_id' => $payment->id,
            'fk_Scheldules_id' => $schedule->id,
            'fk_Clients_id' => $client->id
        ]
        );
        $this->Logger->log('info', 'Cadastrou Coworks');
        return redirect("admin/cowork/show/$cowork->id")->with('create', '1');

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
        $response['cowork'] = Cowork::with('payments', 'scheldules','clients')->find($id);
        $this->Logger->log('info', 'Detalhes de Coworks');
        return view('admin.coworks.details.index', $response);
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

        $middle = Cowork::find($id);
        $response['cowork'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);
        $response['client'] =  Helper::client($middle->fk_Clients_id);

        $this->Logger->log('info', 'Editar Coworks');
        return view('admin.coworks.edit.index', $response);
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
        //

        $request->validate([
             /**Clients information */
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

             /**Cowork Information */
            'title'=> 'required|string|min:5',
            'activities'=> 'required|string|min:5'

        ]);

       Cowork::find($id)->update($request->all());
       $cowork = Cowork::find($id);

        Client::find($cowork->fk_Clients_id)->update($request->all());
        Scheldule::find($cowork->fk_Scheldules_id)->update($request->all());
        Payment::find($cowork->fk_Payments_id)->update($request->all());

        $this->Logger->log('info', 'Actualizar Coworks');
        return redirect()->route('admin.coworks.list.index')->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $ck = Cowork::find($id);

        Payment::where('id', $ck->fk_Payments_id)->delete();
        Client::where('id', $ck->fk_Clients_id)->delete();
        Scheldule::where('id', $ck->fk_Scheldules_id)->delete();
        Cowork::find($id)->delete();

        $this->Logger->log('info', 'Eliminou Coworks');
        return redirect()->route('admin.coworks.list.index')->with('destroy', '1');
    }
}
