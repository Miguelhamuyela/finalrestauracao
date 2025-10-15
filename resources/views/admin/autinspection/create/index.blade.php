@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Empresa Verificada')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.autinspection.store') }}">
                    @csrf
                    <div class="card-body bg-light">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h4 class="card-title"><b>
                                <a href="{{ url('admin/autinspection/list') }}">Listar Empresas Verificadas</a>
                                > Empresa
                            </b></h4>
                        <hr>
                        @include('forms._formAutinspections.index')
                    </div>



                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Período da Vistoria</b></h4>
                        <hr>
                        @include('forms._formScheldules.index')
                    </div>


                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Pagamentos</b></h4>
                        <hr>
                        @include('forms._formPayments.index')
                    </div>


                    <div class="card-body bg-light">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn px-5 col-md-4 btn-primary">
                                    Salvar
                                </button>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>


@endsection
