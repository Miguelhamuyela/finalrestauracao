@extends('layouts.merge.dashboard')
@section('titulo', '  Detalhes de  E-learning ')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                <a href="{{ url('admin/elernings/list') }}">Listar E-learnings</a>
                        >  Detalhes de E-learnings - {{ $elerning->course }}

            </b></h2>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="row  align-items-center">


                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações do Cliente </b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Cliente</b><br>
                                            <small> {{ $elerning->clients->name }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Número de Identificação Fiscal (NIF)</b><br>
                                            <small> {{ $elerning->clients->nif }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email</b><br>
                                            <small> {{ $elerning->clients->email }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Telefone</b><br>
                                            <small> {{ $elerning->clients->tel }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Tipo de cliente</b><br>
                                            <small> {{ $elerning->clients->clienttype}}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Endereço</b><br>
                                            <small> {{ $elerning->clients->address }}</small>
                                        </p>
                                    </div>

                                </div>
                            </div>



                            <div class="col-12 mt-2">
                                <h5 class=""><b>Período do Contracto </b> </h5>
                                <hr>
                            </div>

                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Inicio do Contracto</b><br>
                                            <small> {{ $elerning->scheldules->started }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Fim do Contracto</b><br>
                                            <small> {{ $elerning->scheldules->end }}</small>
                                        </p>
                                    </div>



                                </div>
                            </div>


                            @if($elerning->payments !== NULL)

                                <div class="col-12 mt-2">
                                    <h5 class=""><b>Informações de Pagamento </b> </h5>
                                    <hr>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Tipo de Pagamento</b><br>
                                                <small> {{ $elerning->payments->type }}</small>
                                            </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Valores a Pagar</b><br>
                                                <small> {{ $elerning->payments->value }}</small>
                                            </p>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Referência</b><br>
                                                <small> {{ $elerning->payments->reference }}</small>
                                            </p>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Moeda</b><br>
                                                <small> {{ $elerning->payments->currency }}</small>
                                            </p>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Estado do Pagamento</b> <br>

                                                @if ($elerning->payments->status == 'Pago')
                                                    <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                        {{ $elerning->payments->status }}</div>
                                                @elseif($elerning->payments->status == 'Não Pago')
                                                    <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                        {{ $elerning->payments->status }}</div>
                                                @elseif($elerning->payments->status == 'Em Validação')
                                                    <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                        {{ $elerning->payments->status }}</div>
                                                @else
                                                    <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                        {{ $elerning->payments->status }}</div>
                                                @endif

                                            </p>
                                        </div>


                                    </div>
                                </div>

                                @endif







                            <div class="col-12 my-5">
                                <hr>
                                <div class="row">


                                    <div class="col-md-8">
                                        <small class="mb-1 text-dark">
                                            <b>Data de Cadastro:</b>
                                            {{ $elerning->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $elerning->updated_at }}
                                        </small>
                                    </div>


                                    <div class="col-md-4 text-dark text-right">
                                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw" href='{{ url("admin/elernings/edit/{$elerning->id}") }}'>
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                        <br>


                                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn" value="{{ $elerning->id }}">
                                            <i class="fa fa-trash"></i>
                                            Eliminar
                                        </button>

                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div> <!-- /.col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    @include('admin.extras.modal.delete.elernings.index')
@endsection
