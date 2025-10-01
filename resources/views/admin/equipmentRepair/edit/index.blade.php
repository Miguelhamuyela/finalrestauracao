@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Reparação Equipamento ')
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <h3 class="my-2 text-center">Editar Reparação  Equipamento {{$equipmentRepair->name}} </h3>

             @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
            <div class="row align-items-center">

                <form enctype="multipart/form-data" class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST" action="{{ route('admin.equipmentRepair.update', $equipmentRepair->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Detalhes da Reparação  </b></h4>
                        <hr>
                        @include('forms._formEquipmentRepairs.index')
                    </div>
                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Cliente</b></h4>
                        <hr>
                        @include('forms._formClients.index')
                    </div>
                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Período de Reparação </b></h4>
                        <hr>
                        @include('forms._formPeriod.index')
                    </div>

                    @if (($equipmentRepair->payments->status == 'Pago'))
                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Pagamentos</b></h4>
                        <hr>
                        @include('forms._formPaymentsPaid.index')
                    </div>

                    @else

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Pagamentos</b></h4>
                        <hr>
                        @include('forms._formPayments.index')
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
