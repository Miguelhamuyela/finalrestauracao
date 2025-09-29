@extends('layouts.merge.dashboard')
@section('titulo', 'Auditorio')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form  method="POST" action="{{route('admin.auditoriums.store')}}" >
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
                        <a href="{{ url('admin/auditoriums/list') }}">Listar Auditório </a>
                        > Auditório</b></h4>
                        <hr>
                        @include('forms._formAuditoriums.index')
                    </div>

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Cliente</b></h4>
                        <hr>
                        @include('forms._formClients.index')
                    </div>

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Agendamento</b></h4>
                        <hr>
                        @include('forms._formScheduling.index')
                    </div>

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Período do Contrato</b></h4>
                        <hr>
                        @include('forms._formScheldulesAudi.index')
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
