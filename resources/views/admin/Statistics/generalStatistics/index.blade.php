@extends('layouts.merge.dashboard')
@section('titulo', 'Dashboard')
@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="card-options text-left">
                        <h6 class="text-right"> Total Geral: {!! number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
                        <form method="POST" action="{{ route('admin.StatistiYerar.store') }}">
                            @csrf
                        <div class="form-group col-md-4">

                            <label for="year">Pesquise por Ano</label>
                            <input type="search" class="form-control" placeholder="Digite o Ano" id="year" name="year"
                                required autofocu /><br><br>

                        </div>

                    </form>

                    <canvas height="450" id="myChart" style="height:10%; width:1cm "></canvas>


                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                    <script>
                        window.onload = function() {

                            var janManufacture = JSON.parse('<?php echo $janManufacture; ?>');
                            var feManufacture = JSON.parse('<?php echo $feManufacture; ?>');
                            var marManufacture = JSON.parse('<?php echo $marManufacture; ?>');
                            var abrManufacture = JSON.parse('<?php echo $abrManufacture; ?>');
                            var maioManufacture = JSON.parse('<?php echo $maioManufacture; ?>');
                            var junManufacture = JSON.parse('<?php echo $junManufacture; ?>');
                            var julManufacture = JSON.parse('<?php echo $julManufacture; ?>');
                            var agoManufacture = JSON.parse('<?php echo $agoManufacture; ?>');
                            var setManufacture = JSON.parse('<?php echo $setManufacture; ?>');
                            var outManufacture = JSON.parse('<?php echo $outManufacture; ?>');
                            var novManufacture = JSON.parse('<?php echo $novManufacture; ?>');
                            var dezManufacture = JSON.parse('<?php echo $dezManufacture; ?>');

                            var janEquipament = JSON.parse('<?php echo $janEquipament; ?>');
                            var fevEquipament = JSON.parse('<?php echo $fevEquipament; ?>');
                            var marEquipament = JSON.parse('<?php echo $marEquipament; ?>');
                            var abrEquipament = JSON.parse('<?php echo $abrEquipament; ?>');
                            var maioEquipament = JSON.parse('<?php echo $maioEquipament; ?>');
                            var junEquipament = JSON.parse('<?php echo $junEquipament; ?>');
                            var julEquipament = JSON.parse('<?php echo $julEquipament; ?>');
                            var agoEquipament = JSON.parse('<?php echo $agoEquipament; ?>');
                            var setEquipament = JSON.parse('<?php echo $setEquipament; ?>');
                            var outEquipament = JSON.parse('<?php echo $outEquipament; ?>');
                            var novEquipament = JSON.parse('<?php echo $novEquipament; ?>');
                            var dezEquipament = JSON.parse('<?php echo $dezEquipament; ?>');

                            var janMeeting = JSON.parse('<?php echo $janMeeting; ?>');
                            var fevMeeting = JSON.parse('<?php echo $fevMeeting; ?>');
                            var marMeeting = JSON.parse('<?php echo $marMeeting; ?>');
                            var abrMeeting = JSON.parse('<?php echo $abrMeeting; ?>');
                            var maioMeeting = JSON.parse('<?php echo $maioMeeting; ?>');
                            var junMeeting = JSON.parse('<?php echo $junMeeting; ?>');
                            var julMeeting = JSON.parse('<?php echo $julMeeting; ?>');
                            var agoMeeting = JSON.parse('<?php echo $agoMeeting; ?>');
                            var setMeeting = JSON.parse('<?php echo $setMeeting; ?>');
                            var outMeeting = JSON.parse('<?php echo $outMeeting; ?>');
                            var novMeeting = JSON.parse('<?php echo $novMeeting; ?>');
                            var dezMeeting = JSON.parse('<?php echo $dezMeeting; ?>');





                            var janStartups = JSON.parse('<?php echo $janStartups; ?>');
                            var fevStartups = JSON.parse('<?php echo $fevStartups; ?>');
                            var marStartups = JSON.parse('<?php echo $marStartups; ?>');
                            var abrStartups = JSON.parse('<?php echo $abrStartups; ?>');
                            var maioStartups = JSON.parse('<?php echo $maioStartups; ?>');
                            var junStartups = JSON.parse('<?php echo $junStartups; ?>');
                            var julStartups = JSON.parse('<?php echo $julStartups; ?>');
                            var agoStartups = JSON.parse('<?php echo $agoStartups; ?>');
                            var setStartups = JSON.parse('<?php echo $setStartups; ?>');
                            var outStartups = JSON.parse('<?php echo $outStartups; ?>');
                            var novStartups = JSON.parse('<?php echo $novStartups; ?>');
                            var dezStartups = JSON.parse('<?php echo $dezStartups; ?>');

                            var jancowork = JSON.parse('<?php echo $jancowork; ?>');
                            var fecowork = JSON.parse('<?php echo $fecowork; ?>');
                            var marcowork = JSON.parse('<?php echo $marcowork; ?>');
                            var abrcowork = JSON.parse('<?php echo $abrcowork; ?>');
                            var maiocowork = JSON.parse('<?php echo $maiocowork; ?>');
                            var juncowork = JSON.parse('<?php echo $juncowork; ?>');
                            var julcowork = JSON.parse('<?php echo $julcowork; ?>');
                            var agocowork = JSON.parse('<?php echo $agocowork; ?>');
                            var setcowork = JSON.parse('<?php echo $setcowork; ?>');
                            var outcowork = JSON.parse('<?php echo $outcowork; ?>');
                            var novcowork = JSON.parse('<?php echo $novcowork; ?>');
                            var dezcowork = JSON.parse('<?php echo $dezcowork; ?>');

                            var janAuditoriums = JSON.parse('<?php echo $janAuditoriums; ?>');
                            var feAuditoriums = JSON.parse('<?php echo $feAuditoriums; ?>');
                            var marAuditoriums = JSON.parse('<?php echo $marAuditoriums; ?>');
                            var abrAuditoriums = JSON.parse('<?php echo $abrAuditoriums; ?>');
                            var maioAuditoriums = JSON.parse('<?php echo $maioAuditoriums; ?>');
                            var junAuditoriums = JSON.parse('<?php echo $junAuditoriums; ?>');
                            var julAuditoriums = JSON.parse('<?php echo $julAuditoriums; ?>');
                            var agoAuditoriums = JSON.parse('<?php echo $agoAuditoriums; ?>');
                            var setAuditoriums = JSON.parse('<?php echo $setAuditoriums; ?>');
                            var outAuditoriums = JSON.parse('<?php echo $outAuditoriums; ?>');
                            var novAuditoriums = JSON.parse('<?php echo $novAuditoriums; ?>');
                            var dezAuditoriums = JSON.parse('<?php echo $dezAuditoriums; ?>');


                            var janElerning = JSON.parse('<?php echo $janElerning; ?>');
                            var fevElerning = JSON.parse('<?php echo $fevElerning; ?>');
                            var marElerning = JSON.parse('<?php echo $marElerning; ?>');
                            var abrElerning = JSON.parse('<?php echo $abrElerning; ?>');
                            var maioElerning = JSON.parse('<?php echo $maioElerning; ?>');
                            var junElerning = JSON.parse('<?php echo $junElerning; ?>');
                            var julElerning = JSON.parse('<?php echo $julElerning; ?>');
                            var agoElerning = JSON.parse('<?php echo $agoElerning; ?>');
                            var setElerning = JSON.parse('<?php echo $setElerning; ?>');
                            var outElerning = JSON.parse('<?php echo $outElerning; ?>');
                            var novElerning = JSON.parse('<?php echo $novElerning; ?>');
                            var dezElerning = JSON.parse('<?php echo $dezElerning; ?>');



                            var janTotal = JSON.parse('<?php echo $janTotal; ?>');
                            var fevTotal = JSON.parse('<?php echo $fevTotal; ?>');
                            var marTotal = JSON.parse('<?php echo $marTotal; ?>');
                            var abrTotal = JSON.parse('<?php echo $abrTotal; ?>');
                            var maioTotal = JSON.parse('<?php echo $maioTotal; ?>');
                            var junTotal = JSON.parse('<?php echo $junTotal; ?>');
                            var julTotal= JSON.parse('<?php echo $julTotal; ?>');
                            var agoTotal = JSON.parse('<?php echo $agoTotal; ?>');
                            var setTotal = JSON.parse('<?php echo $setTotal; ?>');
                            var outTotal = JSON.parse('<?php echo $outTotal; ?>');
                            var novTotal = JSON.parse('<?php echo $novTotal; ?>');
                            var dezTotal = JSON.parse('<?php echo $dezTotal; ?>');



                            var chart = new CanvasJS.Chart("chartContainer", {
                                theme: "light2",
                                animationEnabled: true,
                                title: {
                                    text: "Estatística Geral"
                                },
                                axisY: {
                                    title: "",
                                    suffix: ""
                                },
                                toolTip: {
                                    shared: "true"
                                },
                                legend: {
                                    cursor: "pointer",
                                    itemclick: toggleDataSeries
                                },
                                data: [{
                                        type: "spline",
                                        visible: true,
                                        showInLegend: true,
                                        yValueFormatString: "##.00KZ",
                                        name: "Fábrica Software",
                                        dataPoints: [{
                                                label: "Janeiro",
                                                y: janManufacture
                                            },
                                            {
                                                label: "Fevereiro",
                                                y: feManufacture
                                            },
                                            {
                                                label: "Março",
                                                y: marManufacture
                                            },
                                            {
                                                label: "Abril",
                                                y: abrManufacture
                                            },
                                            {
                                                label: "Maio",
                                                y: maioManufacture
                                            },
                                            {
                                                label: "Junho",
                                                y: junManufacture
                                            },
                                            {
                                                label: "Julho",
                                                y: julManufacture
                                            },
                                            {
                                                label: "Ago",
                                                y: agoManufacture
                                            },
                                            {
                                                label: "Setembro",
                                                y: setManufacture
                                            },
                                            {
                                                label: "Outubro",
                                                y: outManufacture
                                            },
                                            {
                                                label: "Novembro",
                                                y: novManufacture
                                            },
                                            {
                                                label: "Dezembro",
                                                y: dezManufacture
                                            }
                                        ]
                                    },
                                    {
                                        type: "spline",
                                        showInLegend: true,
                                        visible: true,
                                        yValueFormatString: "##.00KZ",
                                        name: "Reparação de Equipamentos",
                                        dataPoints: [{
                                                label: "Janeiro",
                                                y: janEquipament
                                            },
                                            {
                                                label: "Fevereiro",
                                                y: fevEquipament
                                            },
                                            {
                                                label: "Março",
                                                y: marEquipament
                                            },
                                            {
                                                label: "Abril",
                                                y: abrEquipament
                                            },
                                            {
                                                label: "Maio",
                                                y: maioEquipament
                                            },
                                            {
                                                label: "Junho",
                                                y: junEquipament
                                            },
                                            {
                                                label: "Julho",
                                                y: julEquipament
                                            },
                                            {
                                                label: "Ago",
                                                y: agoEquipament
                                            },
                                            {
                                                label: "Setembro",
                                                y: setEquipament
                                            },
                                            {
                                                label: "Outubro",
                                                y: outEquipament
                                            },
                                            {
                                                label: "Novembro",
                                                y: novEquipament
                                            },
                                            {
                                                label: "Dezembro",
                                                y: dezEquipament
                                            }
                                        ]
                                    },
                                    {
                                        type: "spline",
                                        visible: true,
                                        showInLegend: true,
                                        yValueFormatString: "##.00kz",
                                        name: "Startup",
                                        dataPoints: [{
                                                label: "Janeiro",
                                                y: janStartups
                                            },
                                            {
                                                label: "Fevereiro",
                                                y: fevStartups
                                            },
                                            {
                                                label: "Março",
                                                y: marStartups
                                            },
                                            {
                                                label: "Abril",
                                                y: abrStartups
                                            },
                                            {
                                                label: "Maio",
                                                y: maioStartups
                                            },
                                            {
                                                label: "Junho",
                                                y: junStartups
                                            },
                                            {
                                                label: "Julho",
                                                y: julStartups
                                            },
                                            {
                                                label: "Ago",
                                                y: agoStartups
                                            },
                                            {
                                                label: "Setembro",
                                                y: setStartups
                                            },
                                            {
                                                label: "Outubro",
                                                y: outStartups
                                            },
                                            {
                                                label: "Novembro",
                                                y: novStartups
                                            }, {
                                                label: "Dezembro",
                                                y: dezStartups
                                            }
                                        ]
                                    },
                                    {
                                        type: "spline",
                                        visible: true,
                                        showInLegend: true,
                                        yValueFormatString: "##.00KZ",
                                        name: "Cowork",
                                        dataPoints: [{
                                                label: "Janeiro",
                                                y: jancowork
                                            },
                                            {
                                                label: "Fevereiro",
                                                y: fecowork
                                            },
                                            {
                                                label: "Março",
                                                y: marcowork
                                            },
                                            {
                                                label: "Abril",
                                                y: abrcowork
                                            },
                                            {
                                                label: "Maio",
                                                y: maiocowork
                                            },
                                            {
                                                label: "Junho",
                                                y: juncowork
                                            },
                                            {
                                                label: "Julho",
                                                y: julcowork
                                            },
                                            {
                                                label: "Ago",
                                                y: agocowork
                                            },
                                            {
                                                label: "Setembro",
                                                y: setcowork
                                            },
                                            {
                                                label: "Outubro",
                                                y: outcowork
                                            },
                                            {
                                                label: "Novembro",
                                                y: novcowork
                                            }, {
                                                label: "Dezembro",
                                                y: dezcowork
                                            }
                                        ]
                                    },
                                    {
                                        type: "spline",
                                        showInLegend: true,
                                        yValueFormatString: "##.00KZ",
                                        name: "E-learning",
                                        dataPoints: [{
                                                label: "Janeiro",
                                                y: janElerning
                                            },
                                            {
                                                label: "Fevereiro",
                                                y: fevElerning
                                            },
                                            {
                                                label: "Março",
                                                y: marElerning
                                            },
                                            {
                                                label: "Abril",
                                                y: abrElerning
                                            },
                                            {
                                                label: "Maio",
                                                y: maioElerning
                                            },
                                            {
                                                label: "Junho",
                                                y: junElerning
                                            },
                                            {
                                                label: "Julho",
                                                y: julElerning
                                            },
                                            {
                                                label: "Ago",
                                                y:agoElerning
                                            },
                                            {
                                                label: "Setembro",
                                                y:  setElerning
                                            },
                                            {
                                                label: "Outubro",
                                                y: outElerning
                                            },
                                            {
                                                label: "Novembro",
                                                y:novElerning
                                            },  {
                                                label: "Dezembro",
                                                y: dezElerning
                                            }

                                        ]
                                    },
                                        {
                                        type: "spline",
                                        showInLegend: true,
                                        visible: true,
                                        yValueFormatString: "##.00KZ",
                                        name: "Salas de Reuniões",
                                        dataPoints: [{
                                                label: "Janeiro",
                                                y: janMeeting
                                            },
                                            {
                                                label: "Fevereiro",
                                                y: fevMeeting
                                            },
                                            {
                                                label: "Março",
                                                y: marMeeting
                                            },
                                            {
                                                label: "Abril",
                                                y: abrMeeting
                                            },
                                            {
                                                label: "Maio",
                                                y: maioMeeting
                                            },
                                            {
                                                label: "Junho",
                                                y: junMeeting
                                            },
                                            {
                                                label: "Julho",
                                                y: julMeeting
                                            },
                                            {
                                                label: "Ago",
                                                y: agoMeeting
                                            },
                                            {
                                                label: "Setembro",
                                                y: setMeeting
                                            },
                                            {
                                                label: "Outubro",
                                                y: outMeeting
                                            },
                                            {
                                                label: "Novembro",
                                                y: novMeeting
                                            },
                                            {
                                                label: "Dezembro",
                                                y: dezMeeting
                                            }
                                        ]
                                    },
                                    {
                                        type: "spline",
                                        showInLegend: true,
                                        visible: true,
                                        yValueFormatString: "##.00KZ",
                                        name: "Salas de Reuniões",
                                        dataPoints: [{
                                                label: "Janeiro",
                                                y: janMeeting
                                            },
                                            {
                                                label: "Fevereiro",
                                                y: fevMeeting
                                            },
                                            {
                                                label: "Março",
                                                y: marMeeting
                                            },
                                            {
                                                label: "Abril",
                                                y: abrMeeting
                                            },
                                            {
                                                label: "Maio",
                                                y: maioMeeting
                                            },
                                            {
                                                label: "Junho",
                                                y: junMeeting
                                            },
                                            {
                                                label: "Julho",
                                                y: julMeeting
                                            },
                                            {
                                                label: "Ago",
                                                y: agoMeeting
                                            },
                                            {
                                                label: "Setembro",
                                                y: setMeeting
                                            },
                                            {
                                                label: "Outubro",
                                                y: outMeeting
                                            },
                                            {
                                                label: "Novembro",
                                                y: novMeeting
                                            },
                                            {
                                                label: "Dezembro",
                                                y: dezMeeting
                                            }
                                        ]
                                    },
                                    {
                                        type: "spline",
                                        showInLegend: true,
                                        visible: true,
                                        yValueFormatString: "##.00KZ",
                                        name: "Pagamento Total do Mês",
                                        dataPoints: [{
                                                label: "Janeiro",
                                                y: janTotal
                                            },
                                            {
                                                label: "Fevereiro",
                                                y: fevTotal
                                            },
                                            {
                                                label: "Março",
                                                y: marTotal
                                            },
                                            {
                                                label: "Abril",
                                                y: abrTotal
                                            },
                                            {
                                                label: "Maio",
                                                y: maioTotal
                                            },
                                            {
                                                label: "Junho",
                                                y: junTotal
                                            },
                                            {
                                                label: "Julho",
                                                y: julTotal
                                            },
                                            {
                                                label: "Ago",
                                                y: agoTotal
                                            },
                                            {
                                                label: "Setembro",
                                                y: setTotal
                                            },
                                            {
                                                label: "Outubro",
                                                y: outTotal
                                            },
                                            {
                                                label: "Novembro",
                                                y: novTotal
                                            },
                                            {
                                                label: "Dezembro",
                                                y: dezTotal
                                            }
                                        ]
                                    }




                                ]
                            });
                            chart.render();

                            function toggleDataSeries(e) {
                                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                    e.dataSeries.visible = false;
                                } else {
                                    e.dataSeries.visible = true;
                                }
                                chart.render();
                            }

                        }
                    </script>

                @endsection
