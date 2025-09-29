@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Clientes')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-9">
                        <h5><b>Lista de Clientes</b></h5>
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-file-pdf-o text-white"></i>Imprimir Relatório
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                            <thead class="bg-primary thead-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>NOME DO CLIENTE</th>
                                    <th>NIF</th>
                                    <th>ORIGEM</th>
                                    <th>TELEFONE</th>
                                    <th class="text-left">ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->nif }} </td>
                                        <td>{{ $item->origin }} </td>
                                        <td>{{ $item->tel }} </td>
                                        <td>

                                            <a href='{{ url("admin/client/show/{$item->id}") }}' type="button"
                                                class="btn btn-icons btn-rounded btn-primary">
                                                <i class="mdi mdi-eye"></i>
                                            </a>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    @include('admin.extras.modal.clients.index')
@endsection
