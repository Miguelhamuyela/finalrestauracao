<?php $__env->startSection('titulo', ' Detalhes do Empresa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">


            </h2>
            <h5><b>
                <a href="<?php echo e(route('admin.client.list.index')); ?>">Listar Empresas</a>
                > Detalhes do Empresa - <?php echo e($client->name); ?>

            </b></h5>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="row  align-items-center">


                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações do Empresa </b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Nome da Empresa</b><br>
                                            <small> <?php echo e($client->name); ?></small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Número de Identificação Fiscal</b><br>
                                            <small> <?php echo e($client->nif); ?></small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email</b><br>
                                            <small> <?php echo e($client->email); ?></small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Telefone</b><br>
                                            <small> <?php echo e($client->tel); ?></small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Tipo de Empresa</b><br>
                                            <small> <?php echo e($client->clienttype); ?></small>
                                        </p>
                                    </div>


                                      <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Endereço da empresa</b><br>
                                            <small> <?php echo e($client->address); ?></small>
                                        </p>
                                    </div>


                                      <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Origem</b><br>
                                            <small> <?php echo e($client->email); ?></small>
                                        </p>
                                    </div>

                                   <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Origem</b><br>
                                            <small> <?php echo e($client->origin); ?></small>
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
                                            <?php echo e($client->created_at); ?>

                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            <?php echo e($client->updated_at); ?>

                                        </small>
                                    </div>
                                    <div class="col-md-4 text-dark text-right">


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div> <!-- /.col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/clients/details/index.blade.php ENDPATH**/ ?>