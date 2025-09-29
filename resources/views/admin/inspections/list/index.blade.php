@extends('layouts.merge.dashboard')
@section('titulo', 'Lista dA Equipa de Vistoria ')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista da Equipa de Vistoria </b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.inspections.create') }}" class="btn btn-primary">Cadastrar</a>
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
                                <tr class="text-center ">
                                    <th>#</th>
                                    <th>NOME</th>
                                    <th>DEPARTAMENTO</th>
                                    <th>TELEFONE</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($inspections as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->departament }} </td>

                                        <td>{{ $item->tel }} </td>
                                        <td>


                                            <a href='{{ url("admin/inspections/show/{$item->id}") }}' type="button"
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


@endsection
