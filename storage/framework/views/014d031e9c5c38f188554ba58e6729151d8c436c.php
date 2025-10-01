<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Relatório De Clientes - <?php echo e(date('d-m-Y')); ?></title>
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

    <header class="col-12 mt-2 mb-5">

        <img src="dashboard/images/logo_blue.png" alt="" width="200">

        <p>
        <h2 class="text-center">Relatório de Clientes</h2>

        <?php if($checkbox['origin'] != 'all'): ?>
            <b> Origem:</b> <?php echo e($checkbox['origin']); ?><br>
        <?php endif; ?>


        <b>Data:</b> <?php echo e(date('d-m-Y')); ?>

        <br>
        <b>Total de Clientes:</b> <?php echo count($clients); ?>

        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <?php if(isset($checkbox['name'])): ?>
                        <th>CLIENTE</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['nif'])): ?>
                        <th>NIF</th>
                    <?php endif; ?>
                    <?php if($checkbox['origin'] == 'all'): ?>
                        <th>ORIGEM</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['tel'])): ?>
                        <th>TELEFONE</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['email'])): ?>
                        <th>EMAIL</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['clienttype'])): ?>
                        <th>TIPO</th>
                    <?php endif; ?>
                    <?php if(isset($checkbox['created_at'])): ?>
                        <th>DATA</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center text-dark">
                        <?php if(isset($checkbox['name'])): ?>
                            <td><?php echo e($item->name); ?> </td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['nif'])): ?>
                            <td><?php echo e($item->nif); ?> </td>
                        <?php endif; ?>
                        <?php if($checkbox['origin'] == 'all'): ?>
                            <td><?php echo e($item->origin); ?> </td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['tel'])): ?>
                            <td><?php echo e($item->tel); ?></td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['email'])): ?>
                            <td><?php echo e($item->email); ?></td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['clienttype'])): ?>
                            <td><?php echo e($item->clienttype); ?></td>
                        <?php endif; ?>
                        <?php if(isset($checkbox['created_at'])): ?>
                            <td><?php echo e($item->created_at); ?></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </section>
5

    <footer class="col-12 mt-2" id="footer">
        <div class="text-right">
            <img src="dashboard/images/minttics.jpg" width="350">
        </div>
    </footer>
</body>

</html>
<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/pdf/client/index.blade.php ENDPATH**/ ?>