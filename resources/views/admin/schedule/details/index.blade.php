@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Agenda')

@section('content')

    <div class="card">
        <div class="col-lg-12">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5><b>
                                <a href="{{ url('admin/schedule/list') }}">Ver a Listade  agenda de Vistoria </a>
                                > Detalhes da Agenda de Vistoria  - {{ $schedule->name }}


                            </b></h5>
                    </div>

                    <div class="col">
                        <div class="float-right mb-">

                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mais ...
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a target="_blank" class="dropdown-item "
                                        href="{{ url("admin/schedule/print/{$schedule->id}") }}"> <i
                                            class="fa fa-print fa-16 mr-2"></i> Imprimir</a>
                                    <a class="dropdown-item" href="{{ url("admin/documentos/create/{$schedule->id}") }}"> <i
                                            class="fa fa-file-pdf-o fa-16 mr-2"></i> Adicionar documento</a>
                                    <a class="dropdown-item" href="#"> <i class="fa fa-money mr-2"></i> Adicionar pagamento</a>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-12">



                    <div class="row  align-items-center">


                        <div class="col-12 mt-2">
                            <h5 class=""><b>Informações sobre Vistoria da Empresas </b> </h5>
                            <hr>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Nome da Empresa</b><br>
                                        <small> {{ $schedule->name }}</small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Número de Identificação Fiscal</b><br>
                                        <small> {{ $schedule->nif }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Telefone</b><br>
                                        <small> {{ $schedule->tel }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Email</b><br>
                                        <small> {{ $schedule->email }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Sala</b><br>
                                        <small> {{ $schedule->name }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Site</b><br>
                                        <small> {{ $schedule->site }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Tipo de Empresa</b><br>
                                        <small> {{ $schedule->incubatorModel }}</small>
                                    </p>
                                </div>



                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Detalhes Sobre a Empresa</b><br>
                                        <small> {{ $schedule->StartupDetails }}</small>
                                    </p>
                                </div>



                        @isset($schedule->startupDocuments)
                        <div class="col-md-6">
                            <p class="text-dark">
                                <b>Documentação</b><br>


                                @foreach ($schedule->startupDocuments as $item)
                                    <small class="mr-3">
                                        <a target="_blank"
                                            href="/storage/{{$item->documentStartup}}">Documento-{{ $item->id}}</a></small>
                                @endforeach

                            </p>
                        </div>
                        @endisset

                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <h5 class=""><b>Período De Vistoria </b> </h5>
                            <hr>
                        </div>

                        <div class="col-12 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Inicio do Contracto</b><br>
                                        <small> {{ $schedule->scheldules->started }}</small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Fim do Contracto</b><br>
                                        <small> {{ $schedule->scheldules->end }}</small>
                                    </p>
                                </div>



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
                                        <small> {{ $schedule->payments->type }}</small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Valores a Pagar</b><br>
                                        <small> {{ $schedule->payments->value }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Referência</b><br>
                                        <small> {{ $schedule->payments->reference }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Moeda</b><br>
                                        <small> {{ $schedule->payments->currency }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">

                                        <b>Estado do Pagamento</b> <br>
                                        @if ($schedule->payments->status == 'Pago')
                                            <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                {{ $schedule->payments->status }}</div>
                                        @elseif($schedule->payments->status == 'Não Pago')
                                            <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                {{ $schedule->payments->status }}</div>
                                        @elseif($schedule->payments->status == 'Em Validação')
                                            <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                {{ $schedule->payments->status }}</div>
                                        @else
                                            <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                {{ $schedule->payments->status }}</div>
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
                                        {{ $schedule->created_at }}
                                    </small><br>
                                    <small class="mb-1 text-dark">
                                        <b>Última Actualização:</b>
                                        {{ $schedule->updated_at }}
                                    </small>
                                </div>


                                <div class="col-md-4 text-dark text-right">
                                    <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                                        href='{{ url("admin/schedule/edit/{$schedule->id}") }}'>
                                        <i class="fa fa-edit"></i>
                                        Editar
                                    </a>
                                    <br>


                                    <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                                        value="{{ $schedule->id }}">
                                        <i class="fa fa-trash"></i>
                                        Eliminar
                                    </button>

                                </div>





                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div> <!-- .row -->


    </div> <!-- .container-fluid -->




    @include('admin.extras.modal.delete.schedule.index')

@endsection
