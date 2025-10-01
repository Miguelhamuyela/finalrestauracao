@extends('layouts.merge.dashboard')
@section('titulo', 'Novo Membro')

@section('content')
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5>
                        <b><a href="{{ url('admin/startup/show/' . $startup->id) }}">Detalhes da Startup </a>
                            > Membro da Startup -
                            {{ $startup->name }}
                        </b>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form method="POST" enctype="multipart/form-data" action="{{ url('admin/member/store/' . $startup->id) }}">
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


                        @include('forms._formMember.index')
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
