<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DocumentsStartup;
use App\Models\Startup;
use Illuminate\Http\Request;
use League\CommonMark\Node\Block\Document;

class DocumentsStartupController extends Controller
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
            'Cadastrar documento da startup com identificador ' . $id
        );
        return view('admin.documentsStartup.create.index', $response);
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
            'documentStartup' => 'required|min:1'
        ]);


        for ($i = 0; $i < count($request->allFiles()['documentStartup']); $i++) {
            $file = $request->allFiles()['documentStartup'][$i];
            $DocumentStartup = DocumentsStartup::create([
                'documentStartup' => $file->store("DocumentStartup/$id"),
                'fk_startups_id' => $id
            ]);
        }


        $this->Logger->log(
            'info',
            'Cadastrou documento da Startup com identificador ' . $id
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
            'Eliminou documentos da Startup com identificador ' . $id
        );
        DocumentsStartup::find($id)->delete();

        return redirect()
            ->back()
            ->with('destroy', '1');
    }


}
