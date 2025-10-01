
<?php $__env->startSection('titulo', ' Detalhes de Pagamentos'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="col-lg-12">
            <div class="card-body">
                <h5><b>
                        <a href="<?php echo e(url('admin/pagamentos/list')); ?>">Listar Pagamentos</a>
                        > Detalhes de Pagamentos - <?php echo e($payment->id); ?>

                    </b></h5>
            </div>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="row  align-items-center">

                        <div class="col-12 mt-2">
                            <h5 class=""><b>Informações de Pagamento </b> </h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Tipo de Pagamento</b><br>
                                        <small> <?php echo e($payment->type); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Valores a Pagar</b><br>
                                        <small> <?php echo e($payment->value); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Referência</b><br>
                                        <small> <?php echo e($payment->reference); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Moeda</b><br>
                                        <small> <?php echo e($payment->currency); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Origem</b><br>
                                        <small> <?php echo e($payment->origin); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Estado do Pagamento</b> <br>
                                        <?php if($payment->status == 'Pago'): ?>
                                            <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                <?php echo e($payment->status); ?></div>

                                        <?php elseif($payment->status == 'Não Pago'): ?>

                                            <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                <?php echo e($payment->status); ?></div>

                                        <?php elseif($payment->status == 'Em Validação'): ?>

                                            <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                <?php echo e($payment->status); ?></div>

                                        <?php else: ?>

                                            <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                <?php echo e($payment->status); ?></div>
                                        <?php endif; ?>
                                    </p>
                                </div>


                            </div>
                        </div>



                        <div class="col-12 my-5">
                            <hr>
                            <div class="row">


                                <div class="col-md-8">
                                    <small class="mb-1 text-dark">
                                        <b>Data de Cadastro:</b>
                                        <?php echo e($payment->created_at); ?>

                                    </small><br>
                                    <small class="mb-1 text-dark">
                                        <b>Última Actualização:</b>
                                        <?php echo e($payment->updated_at); ?>

                                    </small>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div> <!-- .row -->


    </div> <!-- .container-fluid -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/payments/details/index.blade.php ENDPATH**/ ?>