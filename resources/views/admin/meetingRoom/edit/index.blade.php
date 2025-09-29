@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Salas de Reuniões')
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <h3 class="my-2 text-center">Editar  {{$meetingRoom->title}} </h3>

            <div class="row align-items-center">

                <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST" action="{{ route('admin.meetingRoom.update', $meetingRoom->id) }}">
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
                    <h4 class="card-title"><b>Salas de Reuniões</b></h4>
                        <hr>
                        @include('forms._formMeetingRoom.index')
                    </div>


                    @isset($meetingRoom->scheduling)
                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Agendamento</b></h4>
                        <hr>
                        @include('forms._formScheduling.index')
                    </div>
                    @endisset


                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Período de Agendamento</b></h4>
                        <hr>
                        @include('forms._formScheldulesMeet.index')
                    </div>


                    @if (($meetingRoom->MeetingRooms->status == 'Pago'))
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
