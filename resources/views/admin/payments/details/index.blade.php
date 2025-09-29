@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes de Pagamentos')

@section('content')

    <div class="card">
        <div class="col-lg-12">
            <div class="card-body">
                <h5><b>
                        <a href="{{ url('admin/pagamentos/list') }}">Listar Pagamentos</a>
                        > Detalhes de Pagamentos - {{ $payment->id }}
                    </b></h5>
            </div>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="row  align-items-center">

                        <div class="col-12 mt-2">
                            <h5 class=""><b>Informações de Pagamento </b> </h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Tipo de Pagamento</b><br>
                                        <small> {{ $payment->type }}</small>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Valores a Pagar</b><br>
                                        <small> {{ $payment->value }}</small>
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Referência</b><br>
                                        <small> {{ $payment->reference }}</small>
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Moeda</b><br>
                                        <small> {{ $payment->currency }}</small>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Origem</b><br>
                                        <small> {{ $payment->origin }}</small>
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Estado do Pagamento</b> <br>
                                        @if ($payment->status == 'Pago')
                                            <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                {{ $payment->status }}</div>

                                        @elseif($payment->status == 'Não Pago')

                                            <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                {{ $payment->status }}</div>

                                        @elseif($payment->status == 'Em Validação')

                                            <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                {{ $payment->status }}</div>

                                        @else

                                            <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                {{ $payment->status }}</div>
                                        @endif
                                    </p>
                                </div>


                            </div>
                        </div>



                        <div class="col-12 my-5">
                            <hr>
                            <div class="row">


                                <div class="col-md-8">
                                    <small class="mb-1 text-dark">
                                        <b>Data de Cadastro:</b>
                                        {{ $payment->created_at }}
                                    </small><br>
                                    <small class="mb-1 text-dark">
                                        <b>Última Actualização:</b>
                                        {{ $payment->updated_at }}
                                    </small>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div> <!-- .row -->


    </div> <!-- .container-fluid -->

@endsection
