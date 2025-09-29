<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\MeetingRoom;
use App\Models\Payment;
use App\Models\Scheldule;
class MeetingRoomsController extends Controller
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
        $response['meetingRoom'] = MeetingRoom::get();
        $this->Logger->log('info', 'Listar Sala de Reuniões');
        return view('admin.meetingRoom.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->Logger->log('info', 'Cadastrar Sala de Reuniões');
        return view('admin.meetingRoom.create.index');
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
        $validateMeetingRoom = MeetingRoom::where(
            'meetRoom',
            $request->meetRoom
        )->count();
        $validateDate = Scheldule::where('end', $request->end)->count();

        if ($validateMeetingRoom > 0 and $validateDate > 0) {
            return redirect()
                ->back()
                ->with('NoPermit', '1');
        } else {
            $request->validate([
                /**Clients informatio */
                'title' => 'required|string|max:50',
                'description' => 'required|string|min:5',
                'phone' => 'max:50',
                'meetRoom' => 'required|string|max:50',
                'name' => 'required|string|max:50',
                'email' => 'required|string|max:255',

                    /***Payment Information */
                'type' => 'string|max:255',
                'value' =>  'max:255',
                'reference'  => 'max:255',
                'currency' => 'string|max:255',
                'status' => 'string|max:255',

                /**Scheldules Information */
                'started' => 'required|string|max:255',
                'end' => 'required|string|max:255',



            ]);

            $payment = Payment::create([
                'type' => $request->type,
                'value' => $request->value,
                'reference' => $request->reference,
                'currency' => $request->currency,
                'status' => $request->status,
                'origin' => "Sala de Reunioes",
                'code' =>  'DIGITAL' . "-" . rand() . "-" . date('Y')
            ]);

            $schedule = Scheldule::create($request->all());
            $meetingRoom = MeetingRoom::create([
                'title' => $request->title,
                'description' => $request->description,
                'phone' => $request->phone,
                'meetRoom' => $request->meetRoom,
                'name' => $request->name,
                'email' => $request->email,
                'fk_Scheldules_id' => $schedule->id,
                'fk_Payments_id' => $payment->id
            ]);





            $this->Logger->log('info', 'Cadastrou Sala de Reunião');
            return redirect()
                ->route('admin.meetingRoom.show', $meetingRoom->id)
                ->with('create', '1');
        }
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

        $response['meetingRoom'] = MeetingRoom::with('MeetingRooms','scheldules')->find($id);
        $this->Logger->log('info', 'Detalhes de Salas de Reunião');
        return view('admin.meetingRoom.details.index', $response);
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

        $middle = MeetingRoom::find($id);
        $response['meetingRoom'] = $middle;

        $response['scheldule'] = Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);

        $this->Logger->log('info', 'Editar Salas de Reunião');
        return view('admin.meetingRoom.edit.index', $response);
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
            'title' => 'required|string|max:50',
            'description' => 'required|string|min:5',
            'phone' => 'max:50',
            'meetRoom' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:255',

            /**Scheldules Information */
            'started' => 'required|string|max:255',
            'end' => 'required|string|max:255',

        ]);

        MeetingRoom::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'phone' => $request->phone,
            'meetRoom' => $request->meetRoom,
            'name' => $request->name,
            'email' => $request->email,
        ]);


        $meetingRoom = MeetingRoom::find($id);
        Scheldule::find($meetingRoom->fk_Scheldules_id)->update(
            $request->all()
        );


        $payment = Payment::find($meetingRoom->fk_Payments_id)->update([
            'type' => $request->type,
            'value' => $request->value,
            'reference' => $request->reference,
            'currency' => $request->currency,
            'status' => $request->status,
            'origin' => "Sala de Reunioes",
            'code' =>  'DIGITAL' . "-" . rand() . "-" . date('Y')
        ]);

        $this->Logger->log('info', 'Actualizou Sala de Reunião');
        return redirect()
            ->route('admin.meetingRoom.list.index')
            ->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mr = MeetingRoom::find($id);

        Scheldule::where('id', $mr->fk_Scheldules_id)->delete();
        Payment::where('id', $mr->fk_Payments_id)->delete();
        MeetingRoom::find($id)->delete();

        $this->Logger->log('info', 'Eliminou Sala de Reunião');
        return redirect()
            ->route('admin.meetingRoom.list.index')
            ->with('destroy', '1');
    }
}
