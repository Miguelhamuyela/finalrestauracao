<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use App\Models\Auditorium;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Scheduling;
use App\Models\Scheldule;

class AuditoriumsController extends Controller
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
        //
        $response['auditoriums'] = Auditorium::with('clients')->get();
        $this->Logger->log('info', 'Lista de Auditórios');
        return view('admin.auditoriums.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->Logger->log('info', 'Criar Auditório');
        return view('admin.auditoriums.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:200',
            'clienttype' => 'required|string|max:50',

            /**Scheldules Information */
            'started' => 'max:255',
            'end' => 'max:255',


            /***Payment Information */
            'type' => 'required|string|max:255',
            'value' =>  'required|numeric|min:2',
            'reference'  => 'max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            /**Auditoriums Information */
            'titleConference' => 'required|string|max:200',

            'startedSchelduling' => 'string|max:255',
            'endSchelduling' => 'string|max:255',


        ]);

        $client = Client::create($request->all());
        $scheduling = Scheduling::create($request->all());
        $payment = Payment::create([
            'type' => $request->type,
            'value' => $request->value,
            'reference' => $request->reference,
            'currency' => $request->currency,
            'status' => $request->status,
            'origin' => "Auditório",
            'code' =>  'DIGITAL' . "-" . rand() . "-" . date('Y')
        ]);
        $schedule = Scheldule::create($request->all());
        $auditorium = Auditorium::create(
            [
                'titleConference' => $request->titleConference,
                'fk_Payments_id' => $payment->id,
                'fk_Scheldules_id' => $schedule->id,
                'fk_Clients_id' => $client->id,
                'fk_Schelduling_id'=> $scheduling->id
            ]
        );


        $this->Logger->log('info', 'Criou Auditório');
        return redirect()->route('admin.auditoriums.show', $auditorium->id)->with('create', '1');
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
        $response['auditorium'] = Auditorium::with('payments','scheldules','clients','scheduling')->find($id);
        $this->Logger->log('info', 'Detalhes de Auditório');
        return view('admin.auditoriums.details.index', $response);
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

        $middle = Auditorium::find($id);
        $response['auditorium'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['scheduling'] =  Helper::schelduling($middle->fk_Schelduling_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);
        $response['client'] =  Helper::client($middle->fk_Clients_id);

        $this->Logger->log('info', 'Editou Auditório');
        return view('admin.auditoriums.edit.index', $response);
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
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'clienttype' => 'required|string|max:50',

            /**Scheldules Information */
            'started' => 'max:255',
            'end' => 'max:255',


            /***Payment Information */


            /**Auditoriums Information */
            'titleConference' => 'required|string|max:200',

            'startedSchelduling' => 'string|max:255',
            'endSchelduling' => 'string|max:255',


        ]);

        Auditorium::find($id)->update($request->all());
        $cowork = Auditorium::find($id);

        Client::find($cowork->fk_Clients_id)->update($request->all());
        Scheduling::find($cowork->fk_Schelduling_id)->update($request->all());
        Scheldule::find($cowork->fk_Scheldules_id)->update($request->all());
        Payment::find($cowork->fk_Payments_id)->update([
            'type' => $request->type,
            'value' => $request->value,
            'reference' => $request->reference,
            'currency' => $request->currency,
            'status' => $request->status,
            'origin' => "Auditório"
        ]);

        $this->Logger->log('info', 'Actualizou Auditório');
        return redirect()->route('admin.auditoriums.list.index')->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ms = Auditorium::find($id);

        Payment::where('id', $ms->fk_Payments_id)->delete();
        Client::where('id', $ms->fk_Clients_id)->delete();
        Scheldule::where('id', $ms->fk_Scheldules_id)->delete();
        Scheduling::where('id',$ms->fk_Schelduling_id)->delete();

        Auditorium::find($id)->delete();


        $this->Logger->log('info', 'Eliminou Auditório');
        return redirect()->route('admin.auditoriums.list.index')->with('destroy', '1');
    }
}
