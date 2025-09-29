@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Reparação  Equipamento')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form  enctype="multipart/form-data"  method="POST" action="{{ route('admin.equipmentRepair.store') }}" >
                    @csrf

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
                    <h4 class="card-title"><b>
                        <a href="{{ url('admin/reparação-equipamentos/list') }}">Listar Reparação de Equipamentos</a>
                > Reparação de Equipamentos
                     </b></h4>
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
                    @include('forms._formPeriodEquipament.index')
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
