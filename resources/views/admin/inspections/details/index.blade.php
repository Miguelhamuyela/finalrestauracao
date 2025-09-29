@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Equipa de Vistoria')

@section('content')


    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/inspections/list') }}">Listar a Equipa de Vistoria</a>
                    > Detalhes de Funcionários - {{ $inspections->name }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12 mt-2">
                <h5 class=""><b>Informações da Equipa de Vistoria </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome do Funcionário </b><br>
                            <small> {{ $inspections->name }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Número de Identificação Fiscal</b><br>
                            <small> {{ $inspections->nif }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Email</b><br>
                            <small> {{ $inspections->email }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Telefone</b><br>
                            <small> {{ $inspections->tel }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Ocupação </b><br>
                            <small> {{ $inspections->occupation }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Departamento</b><br>
                            <small>{{ $inspections->departament }} </small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Foto </b><br>

                            @if (!isset($inspections->photoinspections))
                                <small>
                                    <img src="/dashboard/User-595b40b85ba036ed117da56f.svg"
                                        class="mr-2 rounded-circle img-fluid" alt="Cinque Terre" width="90" height="90">

                                </small>
                            @else
                                <small>
                                    <img src="/storage/{{$inspections->photoInspections}}"
                                        class="mr-2 rounded-circle img-fluid" alt="Cinque Terre" width="90" height="90">

                                </small>
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
                            {{ $inspections->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $inspections->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/funcionários/edit/{$inspections->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>

                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $inspections->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>

                    </div>
                </div>

            </div>

        </div>

    </div>


    @include('admin.extras.modal.delete.inspections.index')
@endsection
