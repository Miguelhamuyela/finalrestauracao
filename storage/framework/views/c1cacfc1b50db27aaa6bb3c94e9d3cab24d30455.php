<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Relatório de Pagamentos - <?php echo e(date('d-m-Y')); ?></title>

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

        <?php if($checkbox['origin'] != 'all'): ?>
            <b> Origem:</b> <?php echo e($checkbox['origin']); ?><br>
        <?php endif; ?>

        <b>Data:</b> <?php echo e(date('d-m-Y')); ?>

        <br>
        <b>Quantidade de Status Pago: </b><?php echo e($paidStatus); ?><br>
        <b>Quantidade de Status Não Pago: </b><?php echo e($unpaidStatus); ?><br>
        <b> Valor Total de Pagamentos: </b><?php echo number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ'; ?>


        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <?php if(isset($checkbox['type'])): ?>
                        <th>TIPO DE PAGAMENTO</th>
                    <?php endif; ?>
                    <?php if($checkbox['origin'] == 'all'): ?>
                        <th>ORIGEM</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['value'])): ?>
                        <th>VALORES A PAGAR</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['currency'])): ?>
                        <th>MOEDA</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['reference'])): ?>
                        <th>REFERÊNCIA</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['status'])): ?>
                        <th>STATUS</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['created_at'])): ?>
                        <th>DATA</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center text-dark">
                        <?php if(isset($checkbox['type'])): ?>
                            <td><?php echo e($item->type); ?> </td>
                        <?php endif; ?>
                        <?php if($checkbox['origin'] == 'all'): ?>
                            <td><?php echo e($item->origin); ?> </td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['value'])): ?>
                            <td><?php echo number_format($item->value, 2, ',', '.'); ?></td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['currency'])): ?>
                            <td><?php echo e($item->currency); ?> </td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['reference'])): ?>
                            <td><?php echo e($item->reference); ?> </td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['status'])): ?>
                            <td><?php echo e($item->status); ?> </td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['created_at'])): ?>
                            <td><?php echo e($item->created_at); ?></td>
                        <?php endif; ?>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/pdf/payments/index.blade.php ENDPATH**/ ?>