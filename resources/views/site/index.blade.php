@extends('layouts.merge.dashboardWithoutMenu')
@section('titulo', 'Fatura Verificada')
@section('content')
   
    <div class="bg-white">

        <div class="col-md-6 grid-margin stretch-card mx-auto bg-secondary">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fatura emitida pelo Sistema de Gestão do <b> DIGITAL.AO</b></h4>

                    <div class="template-demo">

                        <h5>Serviço: <small class="text-dark"> {{ $service }}</small>
                        </h5>
                        <h5>Cliente: <small class="text-dark"> {{ $client }} </small>
                        </h5>
                        <h5>NIF: <small class="text-dark">{{ $nif }}</small>
                        </h5>
                        <h5>Valores Pago: <small class="text-dark">{!! number_format($value, 2, ',', '.') . ' ' . 'Kz' !!}</small>
                        </h5>

                    </div>
                    <div class="text-center mt-5">
                        <img src="/dashboard/images/infosi.svg" width="150" class="mr-4">
                        <img src="/dashboard/images/minttics.jpg" width="300">
            
                    </div>
                </div>
            </div>
        </div>


    </div>
   
@endsection
