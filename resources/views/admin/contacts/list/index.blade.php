@extends('layouts.merge.dashboard')
@section('titulo', 'Empresa')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Contactos</b></h5>
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
                                    <th>TELEFONE</th>
                                    <th>E-MAIL</th>
                                    <th>Assunto</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>

                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->phone }} </td>
                                        <td>{{ $item->email }} </td>
                                        <td>{{ $item->subject }} </td>
                                        <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary text-white btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='{{ route('admin.contacts.show', ['id' => $item->id]) }}'
                                                    class="dropdown-item">Detalhes</a>
                                                <a href='{{ route('admin.contacts.delete', ['id' => $item->id]) }}'
                                                    class="dropdown-item">Delete</a>

                                            </div>
                                        </div>
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
