<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Empresa Verificada - {{ date('d-m-Y') }}</title>

    <style>

        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>

<body style='height:auto; width:100%; background: url("dashboard/images/digital.canvas.png") no-repeat center;'>
    <header>
        <img src="dashboard/images/logo_blue.png" alt="logo vistoria" width="200">
        <br>
        <b>Data:</b> {{ date('d-m-Y') }}
        <br>

        <p>
        <h2 class="text-center mb-2">{{ $autinspection->name }}</h2>

        </p>
    </header>

    <section class="">

        <div class="container-fluid">
                <div class="row">

                    <div class="col-12 mt-2">
                        <h5 class=""><b>Informações da Empresa Verificada </b> </h5>
                        <hr>
                    </div>

                    <div style="" class="col-12 mb-5">

                        <div style="display: inline-block;" class="mr-4">
                            <b>Nome da Empresa</b>
                        <p>{{$autinspection->client->name}}</p>

                        </div>

                        <div style="display: inline-block;" class="mr-4">
                            <b>Número de Identificação Fiscal</b>
                        <p>{{$autinspection->client->nif}}</p>
                        </div>

                        <div style="display: inline-block;" class="mr-4">
                            <b>Telefone</b>
                            <p>{{$autinspection->client->tel}}</p>
                        </div>

                        <div style="display: inline-block;" class="mr-4">
                            <b>Email</b>
                            <p>{{$autinspection->client->email}}</p>
                        </div>


                        {{-- @isset($autinspection->site)

                        <div style="display: inline-block;" class="mr-4">
                            <b>Site</b>
                            <p>{{$autinspection->site}}</p>
                        </div>

                        @endisset --}}




                        <div style="display: inline-block;" class="mr-4">
                            <b>Tipo de Empresa</b>
                            <p>{{$autinspection->client->TypesHotel}}</p>
                        </div>

                        <div style="display: inline-block;" class="mr-4">
                            <b> Detalhes Sobre a Empresa</b>
                            <p>{{$autinspection->client->StartupDetails }}</p>
                        </div>



                    </div>



                    <div class="col-12 mt-2">
                        <h5 class=""><b>Período de Vistoria</b> </h5>
                        <hr>
                    </div>

                    <div class="col-12 mb-5">

                        <div style="display: inline-block;" class="mr-4">
                            <b> Inicio do Contracto</b>
                            <p>{{$autinspection->scheldules->started }}</p>
                        </div>

                        <div style="display: inline-block;" class="mr-4">
                            <b> Fim do Contracto</b>
                            <p>{{$autinspection->scheldules->started }}</p>
                        </div>

                    </div>




                    <div class="col-12 mt-2">
                        <h5 class=""><b>Informações de Pagamento </b> </h5>
                        <hr>
                    </div>

                    <div class="col-12">

                        <div style="display: inline-block;" class="mr-4">
                            <b>Tipo de Pagamento</b>
                            <p>{{ $autinspection->payments->type }}</p>
                        </div>

                        <div style="display: inline-block;" class="mr-4">
                            <b>Valores a Pagar</b>
                            <p>{{ $autinspection->payments->value }}</p>
                        </div>


                        @isset($autinspection->payments->reference)
                        <div style="display: inline-block;" class="mr-4">
                            <b>Referência</b>
                            <p>{{ $autinspection->payments->reference }}</p>
                        </div>
                        @endisset


                        <div style="display: inline-block;" class="mr-4">
                            <b>Moeda</b>
                            <p>{{ $autinspection->payments->currency }}</p>
                        </div>


                        <div style="display: inline-block;" class="mr-4">
                            <b>Estado do Pagamento</b>
                            <p>{{ $autinspection->payments->status }}</p>
                        </div>

                    </div>


                </div>
        </div>
    </section>

    <footer class="col-12 mt-2" id="footer">
        <div class="text-right">
            <img src="dashboard/images/minttics.jpg" width="350">
        </div>
    </footer>
</body>

</html>
