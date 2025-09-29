<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use PDF;

class PaymentsController extends Controller
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
        $response['totalPayments'] = Payment::where('status', '=', 'Pago')
            ->where('currency', '=', 'Kwanza')
            ->sum('value');
        $response['paidStatus'] = Payment::Where(
            'status',
            '=',
            'Pago'
        )->count();
        $response['unpaidStatus'] = Payment::Where(
            'status',
            '=',
            'Não Pago'
        )->count();
        $response['payments'] = Payment::orderBy('created_at', 'desc')->get();
        //Logger
        $this->Logger->log('info', 'Lista de Pagamentos');
        return view('admin.payments.list.index', $response);
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
        $response['payment'] = Payment::find($id);
        //Logger
        $this->Logger->log(
            'info',
            'Visualizou pagamentos com o identificador ' . $id
        );
        return view('admin.payments.details.index', $response);
    }

    public function printPayment(Request $request)
    {
        $response['checkbox'] =  $request->all();
  
        if ($request->origin == 'all') {
            $response['totalPayments'] = Payment::where('status', '=', 'Pago')
                ->where('currency', '=', 'Kwanza')
                ->sum('value');
            $response['paidStatus'] = Payment::Where(
                'status',
                '=',
                'Pago'
            )->count();
            $response['unpaidStatus'] = Payment::Where(
                'status',
                '=',
                'Não Pago'
            )->count();
            $response['payments'] = Payment::orderBy(
                'created_at',
                'desc'
            )->get();
        } else {
            $response['totalPayments'] = Payment::where('status', '=', 'Pago')
                ->where('currency', '=', 'Kwanza')
                ->sum('value');
            $response['totalPayments'] = Payment::where(
                'origin',
                $request->origin
            )
                ->where('status', '=', 'Pago')
                ->where('currency', '=', 'Kwanza')
                ->sum('value');
            $response['paidStatus'] = Payment::where('origin', $request->origin)
                ->Where('status', '=', 'Pago')
                ->count();
            $response['unpaidStatus'] = Payment::where(
                'origin',
                $request->origin
            )
                ->Where('status', '=', 'Não Pago')
                ->count();
            $response['payments'] = Payment::where('origin', $request->origin)
                ->orderBy('created_at', 'desc')
                ->get();
        }

        //Logger
        $this->Logger->log('info', 'Imprimiu lista de Pagamentos');

        $pdf = PDF::loadview('pdf.payments.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }
}
