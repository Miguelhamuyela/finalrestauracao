@extends('layouts.merge.dashboard')
@section('titulo', 'Salas de Reunião')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.meetingRoom.store') }}">
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
                            <a href="{{ url('admin/sala-de-reunião/list') }}">Listar Salas de Reunião</a>
                > Salas de Reunião
                        </b></h4>
                        <hr>
                        @include('forms._formMeetingRoom.index')
                    </div>



                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Período de Agendamento</b></h4>
                        <hr>
                        @include('forms._formScheldulesMeet.index')
                    </div>

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Pagamentos</b></h4>
                        <hr>
                        @include('forms._formPaymentMeet.index')
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
