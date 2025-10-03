<?php $__env->startSection('titulo', ' Detalhes da Vistoria de Empresa'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="col-lg-12">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5><b>
                                <a href="<?php echo e(url('admin/startup/list')); ?>">Listar Vistoria de Empresa</a>
                                > Detalhes da Vistoria de Empresa - <?php echo e($startup->name); ?>



                            </b></h5>
                    </div>

                    <div class="col">
                        <div class="float-right mb-">

                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mais ...
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a target="_blank" class="dropdown-item "
                                        href="<?php echo e(url("admin/startup/print/{$startup->id}")); ?>"> <i
                                            class="fa fa-print fa-16 mr-2"></i> Imprimir</a>
                                    <a class="dropdown-item" href="<?php echo e(url("admin/documentos/create/{$startup->id}")); ?>"> <i
                                            class="fa fa-file-pdf-o fa-16 mr-2"></i> Adicionar documento</a>
                                    <a class="dropdown-item" href="#"> <i class="fa fa-money mr-2"></i> Adicionar pagamento</a>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-12">




                    <div class="row  align-items-center">


                        <div class="col-12 mt-2">
                            <h5 class=""><b>Informações sobre Vistoria da Empresas </b> </h5>
                            <hr>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Nome da Empresa</b><br>
                                        <small> <?php echo e($startup->name); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Número de Identificação Fiscal</b><br>
                                        <small> <?php echo e($startup->nif); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Telefone</b><br>
                                        <small> <?php echo e($startup->tel); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Email</b><br>
                                        <small> <?php echo e($startup->email); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Sala</b><br>
                                        <small> <?php echo e($startup->roomName); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Site</b><br>
                                        <small> <?php echo e($startup->site); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Modelo de Incubadora</b><br>
                                        <small> <?php echo e($startup->incubatorModel); ?></small>
                                    </p>
                                </div>




                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Detalhes Sobre a Empresa</b><br>
                                        <small> <?php echo e($startup->StartupDetails); ?></small>
                                    </p>
                                </div>



                        <?php if(isset($startup->startupDocuments)): ?>
                        <div class="col-md-6">
                            <p class="text-dark">
                                <b>Documentação</b><br>




                                <?php $__currentLoopData = $startup->startupDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <small class="mr-3">
                                        <a target="_blank"
                                            href="/storage/<?php echo e($item->documentStartup); ?>">Documento-<?php echo e($item->id); ?></a></small>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </p>
                        </div>
                        <?php endif; ?>

                            </div>
                        </div>


                        <div class="col-12 mt-2">
                            <h5 class=""><b>Período Do Contrato </b> </h5>
                            <hr>
                        </div>

                        <div class="col-12 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Inicio do Contracto</b><br>
                                        <small> <?php echo e($startup->scheldules->started); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Fim do Contracto</b><br>
                                        <small> <?php echo e($startup->scheldules->end); ?></small>
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
                                        <small> <?php echo e($startup->payments->type); ?></small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Valores a Pagar</b><br>
                                        <small> <?php echo e($startup->payments->value); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Referência</b><br>
                                        <small> <?php echo e($startup->payments->reference); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Moeda</b><br>
                                        <small> <?php echo e($startup->payments->currency); ?></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">

                                        <b>Estado do Pagamento</b> <br>
                                        <?php if($startup->payments->status == 'Pago'): ?>
                                            <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                <?php echo e($startup->payments->status); ?></div>
                                        <?php elseif($startup->payments->status == 'Não Pago'): ?>
                                            <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                <?php echo e($startup->payments->status); ?></div>
                                        <?php elseif($startup->payments->status == 'Em Validação'): ?>
                                            <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                <?php echo e($startup->payments->status); ?></div>
                                        <?php else: ?>
                                            <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                <?php echo e($startup->payments->status); ?></div>
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
                                        <?php echo e($startup->created_at); ?>

                                    </small><br>
                                    <small class="mb-1 text-dark">
                                        <b>Última Actualização:</b>
                                        <?php echo e($startup->updated_at); ?>

                                    </small>
                                </div>


                                <div class="col-md-4 text-dark text-right">
                                    <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                                        href='<?php echo e(url("admin/startup/edit/{$startup->id}")); ?>'>
                                        <i class="fa fa-edit"></i>
                                        Editar
                                    </a>
                                    <br>


                                    <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                                        value="<?php echo e($startup->id); ?>">
                                        <i class="fa fa-trash"></i>
                                        Eliminar
                                    </button>

                                </div>





                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div> <!-- .row -->


    </div> <!-- .container-fluid -->

    <div class="card mb-2">
        <div class="card-body">
            <div class="row align-items-center my-4">
                <div class="col">
                    <h2 class="page-title h4">Membros</h2>
                </div>
                <div class="col-auto">
                    <a type="button" class="btn btn-lg btn-primary text-white"
                        href="<?php echo e(url("admin/member/create/{$startup->id}")); ?>">
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
                            <?php $__currentLoopData = $startup->members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                <a href='<?php echo e(url("admin/member/qrcode/$item->id")); ?>'
                                                    class="dropdown-item mb-2">Credenciamento</a>

                                                <a href='<?php echo e(url("admin/member/delete/$item->id")); ?>'
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



    <?php echo $__env->make('admin.extras.modal.delete.startup.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/startup/details/index.blade.php ENDPATH**/ ?>