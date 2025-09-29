<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Relatório de Pagamentos - {{ date('d-m-Y') }}</title>

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


        <img src="dashboard/images/logo_blue.png" alt="logo digital.ao" width="200">

        <p>
        <h2 class="text-center">Relatório de Pagamentos</h2>

        @if ($checkbox['origin'] != 'all')
            <b> Origem:</b> {{ $checkbox['origin'] }}<br>
        @endif

        <b>Data:</b> {{ date('d-m-Y') }}
        <br>
        <b>Quantidade de Status Pago: </b>{{ $paidStatus }}<br>
        <b>Quantidade de Status Não Pago: </b>{{ $unpaidStatus }}<br>
        <b> Valor Total de Pagamentos: </b>{!! number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ' !!}

        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    @isset($checkbox['type'])
                        <th>TIPO DE PAGAMENTO</th>
                    @endisset
                    @if ($checkbox['origin'] == 'all')
                        <th>ORIGEM</th>
                    @endif
                    @isset($checkbox['value'])
                        <th>VALORES A PAGAR</th>
                    @endisset
                    @isset($checkbox['currency'])
                        <th>MOEDA</th>
                    @endisset
                    @isset($checkbox['reference'])
                        <th>REFERÊNCIA</th>
                    @endisset
                    @isset($checkbox['status'])
                        <th>STATUS</th>
                    @endisset
                    @isset($checkbox['created_at'])
                        <th>DATA</th>
                    @endisset
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $item)
                    <tr class="text-center text-dark">
                        @isset($checkbox['type'])
                            <td>{{ $item->type }} </td>
                        @endisset
                        @if ($checkbox['origin'] == 'all')
                            <td>{{ $item->origin }} </td>
                        @endif
                        @isset($checkbox['value'])
                            <td>{!! number_format($item->value, 2, ',', '.') !!}</td>
                        @endisset
                        @isset($checkbox['currency'])
                            <td>{{ $item->currency }} </td>
                        @endisset
                        @isset($checkbox['reference'])
                            <td>{{ $item->reference }} </td>
                        @endisset
                        @isset($checkbox['status'])
                            <td>{{ $item->status }} </td>
                        @endisset
                        @isset($checkbox['created_at'])
                            <td>{{ $item->created_at }}</td>
                        @endisset

                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>

    <footer class="col-12 mt-2" id="footer">
        <div class="text-right">
            <img src="dashboard/images/minttics.jpg" width="350">
        </div>
    </footer>
</body>

</html>
