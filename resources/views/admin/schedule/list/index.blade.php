@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Agenda de Vistoria')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Agenda de Vistoria</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.schedule.create.index') }}" class="btn btn-primary">Cadastrar</a>
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
                                    <th>status</th>
                                    <th>NOME DA EMPRESA</th>
                                    <th>TELEFONE</th>
                                    <th>TIPO DE EMPRESA</th>
                                    <th>DATA DE INICIO</th>
                                    <th>DATA DE FIM</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->client->name }} </td>
                                        <td>{{ $item->client->tel }} </td>
                                        <td>{{ $item->client->TypesHotel }} </td>
                                        <td>{{ $item->started}}</td>
                                        <td>{{ $item->end }} </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary text-white btn-sm dropdown-toggle"
                                                    type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a href='{{ url("admin/schedule/show/{$item->id}") }}'
                                                        class="dropdown-item">Detalhes</a>
                                                    {{-- @if ($item->payments->status == 'Pago')
                                                        <a href="{{ url('admin/pagamentos/fatura/'. $item->payments->code . '/' . $item->payments->origin . '/' . $item->payments->value . '/' . $item->name. '/' . $item->payments->status.'/'.$item->nif.'/'.$item->updated_at) }}"
                                                            class="dropdown-item mt-2" target="_blank">Emitir Fatura</a>
                                                    @endif --}}
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
