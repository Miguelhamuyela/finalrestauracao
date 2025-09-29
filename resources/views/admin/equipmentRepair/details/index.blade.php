@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes de Reparação de Equipamentos')

@section('content')


    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <b>
                    <a href="{{ url('admin/reparação-equipamentos/list') }}">Listar Reparação de Equipamentos</a>
                    > Detalhes de Reparação de Equipamentos - {{ $equipmentRepair->title }}
                </b>
            </h2>
        </div>
    </div>


    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="row  align-items-center">


                            <div class="col-12 mt-2">
                                <h5 class=""><b> Detalhes da Reparação </b> </h5>
                                <hr>
                            </div>

                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b> Nome do Equipamento</b><br>
                                            <small> {{ $equipmentRepair->equipmentName }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Modelo</b><br>
                                            <small> {{ $equipmentRepair->model }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Funcionário</b><br>
                                            <small> {{ $equipmentRepair->employees->name }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Referência do Equipamento</b><br>
                                            <small> {{ $equipmentRepair->referenceEquipment }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Endereço MAC</b><br>
                                            <small> {{ $equipmentRepair->macAddress }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Número de Série</b><br>
                                            <small> {{ $equipmentRepair->serialNumber }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Imagem</b><br>
                                            @if (isset($equipmentRepair->image))
                                                <small> <a href="/storage/{{ $equipmentRepair->image }}"
                                                        target="_blank">Anexo</a> </small>
                                            @endif

                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Detalhes do Equipamento e do Problema</b><br>
                                            <small>

                                                {!! html_entity_decode($equipmentRepair->problemDetails) !!}
                                            </small>
                                        </p>
                                    </div>

                                </div>
                                <div class="col-12 mt-2">
                                    <h5 class=""><b>Informações do Cliente </b> </h5>
                                    <hr>
                                </div>
                                <div class="col-12 mb-5">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Nome do Cliente</b><br>
                                                <small> {{ $equipmentRepair->clients->name }}</small>
                                            </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Número de Identificação Fiscal</b><br>
                                                <small> {{ $equipmentRepair->clients->nif }}</small>
                                            </p>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Email</b><br>
                                                <small> {{ $equipmentRepair->clients->email }}</small>
                                            </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Telefone</b><br>
                                                <small> {{ $equipmentRepair->clients->tel }}</small>
                                            </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Tipo de Cliente</b><br>
                                                <small> {{ $equipmentRepair->clients->clienttype }}</small>
                                            </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="text-dark">
                                                <b>Endereço</b><br>
                                                <small> {{ $equipmentRepair->clients->address }}</small>
                                            </p>
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <div class="col-12 mt-2">
                                <h5 class=""><b>Período do Contrato</b> </h5>
                                <hr>
                            </div>

                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Data da Entrada</b><br>
                                            <small> {{ $equipmentRepair->scheldules->started }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Data da Entrega</b><br>
                                            <small> {{ $equipmentRepair->scheldules->end }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Data da Retirada</b><br>
                                            <small> {{ $equipmentRepair->scheldules->prespective }}</small>
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
                                            <small> {{ $equipmentRepair->payments->type }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Valores a Pagar</b><br>
                                            <small>

                                                {!! number_format($equipmentRepair->payments->value, 2, ',', '.') . ' ' !!}
                                            </small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Referência </b><br>
                                            <small> {{ $equipmentRepair->payments->reference }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Moeda</b><br>
                                            <small> {{ $equipmentRepair->payments->status }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">

                                            <b>Estado do Pagamento</b> <br>
                                            @if ($equipmentRepair->payments->status == 'Pago')
                                                <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                    {{ $equipmentRepair->payments->status }}</div>
                                            @elseif($equipmentRepair->payments->status == 'Não Pago')
                                                <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                    {{ $equipmentRepair->payments->status }}</div>
                                            @elseif($equipmentRepair->payments->status == 'Em Validação')
                                                <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                    {{ $equipmentRepair->payments->status }}</div>
                                            @else
                                                <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                    {{ $equipmentRepair->payments->status }}</div>
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
                                            {{ $equipmentRepair->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $equipmentRepair->updated_at }}
                                        </small>
                                    </div>


                                    <div class="col-md-4 text-dark text-right">
                                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                                            href='{{ url("admin/reparação-equipamentos/edit/{$equipmentRepair->id}") }}'>
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                        <br>


                                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                                            value="{{ $equipmentRepair->id }}">
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
    </div>


    @include('admin.extras.modal.delete.equipmentRepair.index')
@endsection
