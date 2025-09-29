@extends('layouts.merge.dashboard')
@section('titulo', 'E-lerning')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>E-learning</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.elernings.create.index') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped  my-5" id="dataTable-1">
                          <thead class="bg-primary thead-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>CURSO</th>
                                    <th>CLIENTE</th>
                                    <th>TELEFONE</th>

                                    <th class="text-center">ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($elernings as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->course }} </td>
                                        <td>{{ $item->clients->name }} </td>
                                        <td>{{ $item->clients->tel }} </td>
                                        <td>
                                            <a href='{{ url("admin/elernings/show/{$item->id}") }}' type="button"
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
