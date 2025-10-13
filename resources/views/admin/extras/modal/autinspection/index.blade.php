 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        var janAutinspections = JSON.parse('<?php echo $janAutinspections; ?>');
        var fevAutinspections = JSON.parse('<?php echo $fevAutinspections; ?>');
        var marAutinspections = JSON.parse('<?php echo $marAutinspections; ?>');
        var abrAutinspections = JSON.parse('<?php echo $abrAutinspections; ?>');
        var maioAutinspections = JSON.parse('<?php echo $maioAutinspections; ?>');
        var junAutinspections = JSON.parse('<?php echo $junAutinspections; ?>');
        var julAutinspections = JSON.parse('<?php echo $julAutinspections; ?>');
        var agoAutinspections = JSON.parse('<?php echo $agoAutinspections; ?>');
        var setAutinspections = JSON.parse('<?php echo $setAutinspections; ?>');
        var outAutinspections = JSON.parse('<?php echo $outAutinspections; ?>');
        var novAutinspections = JSON.parse('<?php echo $novAutinspections; ?>');
        var dezAutinspections = JSON.parse('<?php echo $dezAutinspections; ?>');
        const autinspections = document.getElementById('autinspections').getContext('2d');
        const myChart = new Chart(autinspections, {
            type: 'bar',
            data: {
                labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
                    'Outubro', 'Novembro', 'Dezembro'
                ],
                datasets: [{
                    label: 'Total Parcial',
                    data: [janAutinspections, fevAutinspections, marAutinspections, abrAutinspections, maioAutinspections, junAutinspections, julAutinspections, agoAutinspections, setAutinspections, outAutinspections, novAutinspections, dezAutinspections],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(254, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(254, 159, 64, 0.2)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
