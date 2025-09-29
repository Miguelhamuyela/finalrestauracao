@extends('layouts.merge.dashboard')
@section('titulo', 'Coworks')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Coworks</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.coworks.create.index') }}" class="btn btn-primary">Cadastrar</a>

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
                                    <th>FIM DE CONTRATO</th>
                                    <th>STATUS</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coworks as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>

                                        <td>{{ $item->clients->name }} </td>
                                        <td>{{ $item->clients->tel }} </td>
                                        <td>{{ $item->scheldules->end }} </td>
                                        @if ($item->payments->status == 'Pago')
                                            <td>
                                                <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                    {{ $item->payments->status }}</div>
                                            </td>
                                        @elseif($item->payments->status == 'Não Pago')
                                            <td>
                                                <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                    {{ $item->payments->status }}</div>
                                            </td>
                                        @elseif($item->payments->status == 'Em Validação')
                                            <td>
                                                <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                    {{ $item->payments->status }}</div>
                                            </td>
                                        @else
                                            <td>
                                                <div class="btn btn-dark btn-fw btn-rounded text-white ">
                                                    {{ $item->payments->status }}</div>
                                            </td>
                                        @endif
                                        <td>


                                            <div class="dropdown">
                                                <button class="btn btn-primary text-white btn-sm dropdown-toggle"
                                                    type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a href='{{ url("admin/cowork/show/{$item->id}") }}'
                                                        class="dropdown-item">Detalhes</a>
                                                    @if ($item->payments->status == 'Pago')
                                                        <a href="{{ url('admin/pagamentos/fatura/'. $item->payments->code . '/' . $item->payments->origin . '/' . $item->payments->value . '/' . $item->clients->name. '/' . $item->payments->status. '/' . $item->clients->nif. '/' .$item->updated_at) }}"
                                                            class="dropdown-item mt-2" target="_blank">Emitir Fatura</a>
                                                    @endif
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
