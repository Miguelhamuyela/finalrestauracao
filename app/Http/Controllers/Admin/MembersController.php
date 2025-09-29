<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Controllers\Controller;
use App\Models\Startup;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;

class MembersController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $response['startup'] = Startup::find($id);
        $this->Logger->log(
            'info',
            'Cadastrar membros da Startup com identificador ' . $id
        );
        return view('admin.member.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            /**Member Information */
            'name' => 'required|string|max:255',
            'occupation' => '|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'string|max:50',
            'foto' => 'mimes:jpg,png,gif,SVG,JPEG',
        ]);

        if ($middle = $request->file('foto')) {
            $file = $middle->storeAs(
                'foto',
                'foto-' . uniqid(rand(1, 5)) . '.' . $middle->extension()
            );
        } else {
            $file = null;
        }

        $member = Member::create([
            'name' => $request->name,
            'occupation' => $request->occupation,
            'email' => $request->email,
            'tel' => $request->tel,
            'nif' => $request->nif,
            'foto' => $file,
            'fk_startups_id' => $id,
        ]);
        $this->Logger->log(
            'info',
            'Cadastrou membros da Startup com identificador ' . $id
        );
        return redirect("admin/startup/show/$id")->with('create', '1');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Logger->log(
            'info',
            'Eliminou membros da Startup com identificador ' . $id
        );
        Member::find($id)->delete();

        return redirect()
            ->back()
            ->with('destroy', '1');
    }

    public function qrcode($id)
    {
        $this->Logger->log(
            'info',
            'Visualizou os Detalhes de um membro da startup com identificador ' .
                $id
        );
        $response['member'] = Member::with('startup')->find($id);

        return view('admin.member.credential.index', $response);
    }

    public function qrfind($nif)
    {
        $response['member'] = Member::where('nif', $nif)
            ->with('startup')
            ->first();

        return view('pdf.credential.startup.index', $response);
    }

    public function print($nif)
    {
        $this->Logger->Log(
            'info',
            'Emitiu Uma credencial do membro com o NIF ' . $nif
        );

        $data = Member::where('nif', $nif)
            ->with('startup')
            ->first();
        $response['member'] = $data;

        $response['qrcode'] = QrCode::size(150)->generate(
            url('membro/startup/' . $data->nif)
        );
        $pdf = PDF::loadView('pdf/qrcard/startup/index', $response);

        return $pdf->stream('credencial de ' . $data->nif . '.pdf');
    }
}
