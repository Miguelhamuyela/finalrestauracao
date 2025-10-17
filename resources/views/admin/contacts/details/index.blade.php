@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes de Contactos')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <b>
                     <a href="{{ route('admin.contacts.list') }}">Lista de Contactos</a>
                    > Detalhes de Contacto - {{ $contact->subject }}

                </b>
            </h2>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="row  align-items-center">


                        <div class="col-12 mt-2">
                            <h5 class=""><b>Informações do Empresa </b> </h5>
                            <hr>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Nome do Cliente</b><br>
                                        <small> {{ $contact->name }}</small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Número de Telefone</b><br>
                                        <small> {{ $contact->phone }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Email</b><br>
                                        <small> {{ $contact->email }}</small>
                                    </p>
                                </div>
                                {{-- <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Telefone</b><br>
                                        <small> {{ '$contact->clients->tel' }}</small>
                                    </p>
                                </div> --}}
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Assunto</b><br>
                                        <small> {{ $contact->subject }}</small>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p class="text-dark">
                                        <b>Mensagem</b><br>
                                        <small> {{ $contact->message }}</small>
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- .row -->
                </div>

            </div>

        </div>

    </div> <!-- .container-fluid -->
@endsection
