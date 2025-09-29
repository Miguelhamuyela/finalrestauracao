@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Clientes')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form  method="POST" action="{{ route('admin.client.store') }}" >
                    @csrf
                <div class="card-body bg-light">
                    <h4 class="card-title"><b>Lista de Clientes</b></h4>
                    <hr>
                    @include('forms._formClients.index')
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
