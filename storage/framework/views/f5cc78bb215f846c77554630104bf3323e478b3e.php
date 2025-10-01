<?php $__env->startSection('titulo', ' Detalhes de Empresa Legais'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <b>
                    <a href="<?php echo e(url('admin/cowork/list')); ?>">Listar Empresa Legal</a>
                    > Detalhes de Empresa Legal - <?php echo e($cowork->title); ?>


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
                                        <b>Nome da Empresa</b><br>
                                        <small> <?php echo e($cowork->clients->name); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Número de Identificação Fiscal</b><br>
                                        <small> <?php echo e($cowork->clients->nif); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Email</b><br>
                                        <small> <?php echo e($cowork->clients->email); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Telefone</b><br>
                                        <small> <?php echo e($cowork->clients->tel); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Tipo de Empresa</b><br>
                                        <small> <?php echo e($cowork->clients->clienttype); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Endereço</b><br>
                                        <small> <?php echo e($cowork->clients->address); ?></small>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <h5 class=""><b>Coworks </b> </h5>
                            <hr>
                        </div>

                        <div class="col-12 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b> Actividade Principal da Empresa</b><br>
                                        <small> <?php echo e($cowork->title); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Outras Actividades</b><br>
                                        <small> <?php echo e($cowork->activities); ?></small>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <h5 class=""><b>Período do Contrato</b> </h5>
                            <hr>
                        </div>

                        <div class="col-12 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Inicio do Contrato</b><br>
                                        <small> <?php echo e($cowork->scheldules->started); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Fim do Contrato</b><br>
                                        <small> <?php echo e($cowork->scheldules->end); ?></small>
                                    </p>
                                </div>



                            </div>
                        </div>


                        <div class="col-12 mt-2">
                            <h5 class=""><b>Informações de Pagamento </b> </h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Tipo de Pagamento</b><br>
                                        <small> <?php echo e($cowork->payments->type); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Valores a Pagar</b><br>
                                        <small> <?php echo e($cowork->payments->value); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Referência</b><br>
                                        <small> <?php echo e($cowork->payments->reference); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Moeda</b><br>
                                        <small> <?php echo e($cowork->payments->currency); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Estado do Pagamento</b> <br>

                                        <?php if($cowork->payments->status == 'Pago'): ?>
                                            <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                <?php echo e($cowork->payments->status); ?></div>
                                        <?php elseif($cowork->payments->status == 'Não Pago'): ?>
                                            <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                <?php echo e($cowork->payments->status); ?></div>
                                        <?php elseif($cowork->payments->status == 'Em Validação'): ?>
                                            <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                <?php echo e($cowork->payments->status); ?></div>
                                        <?php else: ?>
                                            <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                <?php echo e($cowork->payments->status); ?></div>
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
                                        <?php echo e($cowork->created_at); ?>

                                    </small><br>
                                    <small class="mb-1 text-dark">
                                        <b>Última Actualização:</b>
                                        <?php echo e($cowork->updated_at); ?>

                                    </small>
                                </div>



                                <div class="col-md-4 text-dark text-right">
                                    <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                                        href='<?php echo e(url("admin/cowork/edit/{$cowork->id}")); ?>'>
                                        <i class="fa fa-edit"></i>
                                        Editar
                                    </a>
                                    <br>


                                    <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                                        value="<?php echo e($cowork->id); ?>">
                                        <i class="fa fa-trash"></i>
                                        Eliminar
                                    </button>

                                </div>


                            </div>

                        </div>
                    </div>
                    <!-- .row -->
                </div>

            </div>

        </div>

    </div> <!-- .container-fluid -->

    <div class="card mb-2">
        <div class="card-body">
            <div class="row align-items-center my-4">
                <div class="col">
                    <h2 class="page-title h4">Membros</h2>
                </div>
                <div class="col-auto">
                    <a type="button" class="btn btn-lg btn-primary text-white"
                        href="<?php echo e(url("admin/memberCowork/create/{$cowork->id}")); ?>">
                        <span class="fa fa-plus fa-16 mr-3"></span>Novo Membro
                    </a>
                </div>
            </div>


            <div class="page-category pb-5">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable-1">
                        <thead class="bg-primary thead-dark">
                            <tr class="text-center">

                                <th>NOME DO MEMBRO</th>
                                <th>EMAIL</th>
                                <th>TELEFONE</th>
                                <th>NIF</th>
                                <th>FUNÇÃO</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <?php $__currentLoopData = $cowork->members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center text-dark">
                                    <td class="text-left"><?php echo e($item->name); ?></td>
                                    <td class="text-left"><?php echo e($item->email); ?></td>
                                    <td class="text-left"><?php echo e($item->tel); ?></td>
                                    <td class="text-left"><?php echo e($item->nif); ?></td>
                                    <td class="text-left"><?php echo e($item->occupation); ?></td>
                                    <td>

                                        <div class="dropdown">
                                            <button class="btn btn-primary text-white dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon fa-sm" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='<?php echo e(url("admin/memberCowork/qrcode/$item->id")); ?>'
                                                    class="dropdown-item mb-2">Credenciamento</a>

                                                <a href='<?php echo e(url("admin/memberCowork/delete/$item->id")); ?>'
                                                    class="dropdown-item text-danger">Eliminar</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

    <?php echo $__env->make('admin.extras.modal.delete.coworks.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/coworks/details/index.blade.php ENDPATH**/ ?>