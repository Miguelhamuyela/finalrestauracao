@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Auditorio')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>

                    <a href="{{ url('admin/auditoriums/list') }}">Listar Auditório </a>
                    > Detalhes do Auditório - {{ $auditorium->titleConference }}
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
                                            <b>Nome do Cliente</b><br>
                                            <small> {{ $auditorium->clients->name }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Número de Identificação Fiscal</b><br>
                                            <small> {{ $auditorium->clients->nif }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email</b><br>
                                            <small> {{ $auditorium->clients->email }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Telefone</b><br>
                                            <small> {{ $auditorium->clients->tel }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Tipo de cliente</b><br>
                                            <small> {{ $auditorium->clients->clienttype }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Endereço</b><br>
                                            <small> {{ $auditorium->clients->address }}</small>
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
                                            <small> {{ $auditorium->scheldules->started }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Fim do Contracto</b><br>
                                            <small> {{ $auditorium->scheldules->end }}</small>
                                        </p>
                                    </div>

                                    @isset($auditorium->scheduling)

                                    <div class="col-12 mt-2">
                                        <h5 class=""><b>Agendamento </b> </h5>

                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Data de Entrada</b><br>
                                            <small> {{ $auditorium->scheduling->startedSchelduling }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Data de Saída</b><br>
                                            <small> {{ $auditorium->scheduling->endSchelduling }}</small>
                                        </p>
                                    </div>


                                    @endisset



                                </div>
                            </div>


                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações de Pagamento </b> </h5>
                                <hr>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Tipo de Pagamento</b><br>
                                            <small> {{ $auditorium->payments->type }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Valores a Pagar</b><br>
                                            <small> {{ $auditorium->payments->value }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Referência </b><br>
                                            <small> {{ $auditorium->payments->reference }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Moeda</b><br>
                                            <small> {{ $auditorium->payments->currency }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">

                                            <b>Estado do Pagamento</b> <br>

                                            @if ($auditorium->payments->status == 'Pago')
                                                <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                    {{ $auditorium->payments->status }}</div>
                                            @elseif($auditorium->payments->status == 'Não Pago')
                                                <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                    {{ $auditorium->payments->status }}</div>
                                            @elseif($auditorium->payments->status == 'Em Validação')
                                                <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                    {{ $auditorium->payments->status }}</div>
                                            @else
                                                <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                    {{ $auditorium->payments->status }}</div>
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
                                            {{ $auditorium->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $auditorium->updated_at }}
                                        </small>
                                    </div>


                                    <div class="col-md-4 text-dark text-right">
                                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                                            href='{{ url("admin/auditoriums/edit/{$auditorium->id}") }}'>
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                        <br>


                                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                                            value="{{ $auditorium->id }}">
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

    @include('admin.extras.modal.delete.auditoriums.index')
@endsection
