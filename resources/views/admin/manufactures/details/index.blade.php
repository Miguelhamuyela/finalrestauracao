@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Fábrica de Softwares')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/manufactures/list') }}">Listar Fábrica de Softwares</a>
                    > Detalhes da Fábrica de Software - {{ $manufacture->nameSoftware }}


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
                                            <small> {{ $manufacture->clients->name }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Número de Identificação Fiscal</b><br>
                                            <small> {{ $manufacture->clients->nif }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email</b><br>
                                            <small> {{ $manufacture->clients->email }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Telefone</b><br>
                                            <small> {{ $manufacture->clients->tel }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Endereço</b><br>
                                            <small> {{ $manufacture->clients->address }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Tipo de Cliente</b><br>
                                            <small> {{ $manufacture->clients->clienttype }}</small>
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <h5 class=""><b>Fábrica de Software </b> </h5>
                                <hr>
                            </div>


                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="text-dark">
                                            <b>Nome do Software</b><br>
                                            <small> {{ $manufacture->category }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-dark">
                                            <b>Categoria</b><br>
                                            <small> {{ $manufacture->category }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="text-dark">
                                            <b>Documentação</b><br>
                                            <small> <a target="_blank"
                                                    href="/storage/{{ $manufacture->file }}">Documento</a></small>
                                        </p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="text-dark">
                                            <b>Descrição</b><br>
                                            <small> {{ $manufacture->description }}</small>
                                        </p>
                                    </div>


                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <h5 class=""><b>Período De Desenvolvimento</b> </h5>
                                <hr>
                            </div>

                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Início do Projeto</b><br>
                                            <small> {{ $manufacture->scheldules->started }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Entrega do Projeto</b><br>
                                            <small> {{ $manufacture->scheldules->end }}</small>
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
                                            <small> {{ $manufacture->payments->type }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Valores a Pagar</b><br>
                                            <small> {{ $manufacture->payments->value }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Referência</b><br>
                                            <small> {{ $manufacture->payments->reference }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Moeda</b><br>
                                            <small> {{ $manufacture->payments->currency }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Estado do Pagamento</b> <br>
                                            @if ($manufacture->payments->status == 'Pago')
                                                <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                    {{ $manufacture->payments->status }}</div>
                                            @elseif($manufacture->payments->status == 'Não Pago')
                                                <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                    {{ $manufacture->payments->status }}</div>
                                            @elseif($manufacture->payments->status == 'Em Validação')
                                                <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                    {{ $manufacture->payments->status }}</div>
                                            @else
                                                <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                    {{ $manufacture->payments->status }}</div>
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
                                            {{ $manufacture->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $manufacture->updated_at }}
                                        </small>
                                    </div>



                                    <div class="col-md-4 text-dark text-right">
                                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                                            href='{{ url("admin/manufactures/edit/{$manufacture->id}") }}'>
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                        <br>


                                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                                            value="{{ $manufacture->id }}">
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


    @include('admin.extras.modal.delete.manufactures.index')
@endsection
