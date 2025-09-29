@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Elernings')
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <h3 class="my-2 text-center">Editar {{ $elerning->course }} </h3>

            <div class="row align-items-center">

                <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST"
                    action="{{ route('admin.elernings.update', $elerning->id) }}">
                    @csrf
                    @method('PUT')

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>E-learnings</b></h4>
                        <hr>
                        @include('forms._formElernings.index')
                    </div>

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Cliente</b></h4>
                        <hr>
                        @include('forms._formClients.index')
                    </div>

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Período do Contrato</b></h4>
                        <hr>
                        @include('forms._formScheldules.index')
                    </div>

                    @if (($elerning->payments->status == 'Pago'))
                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Pagamentos</b></h4>
                        <hr>
                        @include('forms._formPaymentMeetPaid.index')
                    </div>
                    @else
                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Pagamentos</b></h4>
                        <hr>
                        @include('forms._formPaymentMeet.index')
                    </div>
                    @endif





                    <div class="card-body bg-light">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn px-5 col-md-4 btn-primary">
                                    Salvar Alterações
                                </button>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
