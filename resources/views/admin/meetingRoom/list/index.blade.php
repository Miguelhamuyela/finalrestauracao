@extends('layouts.merge.dashboard')
@section('titulo', 'Listar Salas de Reunião')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Sala de Reuniões</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.meetingRoom.create.index') }}" class="btn btn-primary">Cadastrar</a>
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
                                <th>TÍTULO DA REUNIÃO</th>
                                <th>AGENDAMENTO</th>
                                <th>NOME DO SOLICITANTE</th>
                                <th>TELEFONE</th>
                                <th>EMAIL</th>
                                <th>SALA</th>

                                <th class="text-center">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meetingRoom as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }} </td>
                                    <td>{{ $item->scheldules->started }} - {{ $item->scheldules->end }} </td>
                                    <td>{{ $item->name }} </td>
                                    <td>{{ $item->phone }} </td>
                                    <td>{{ $item->email }} </td>
                                    <td>{{ $item->meetRoom }} </td>


                                    <td>
                                        <a href='{{ url("admin/sala-de-reunião/show/{$item->id}") }}' type="button"
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
