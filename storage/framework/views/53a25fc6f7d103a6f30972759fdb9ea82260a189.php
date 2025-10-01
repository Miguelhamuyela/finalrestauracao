<?php $__env->startSection('titulo', ' Detalhes de Integrate'); ?>

<?php $__env->startSection('content'); ?>


    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="<?php echo e(url('admin/funcionários/list')); ?>">Listar Integrates</a>
                    > Detalhes de Integrate - <?php echo e($Employee->name); ?>


                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12 mt-2">
                <h5 class=""><b>Informações do Funcionário </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome do Funcionário </b><br>
                            <small> <?php echo e($Employee->name); ?></small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Número de Identificação Fiscal</b><br>
                            <small> <?php echo e($Employee->nif); ?></small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Email</b><br>
                            <small> <?php echo e($Employee->email); ?></small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Telefone</b><br>
                            <small> <?php echo e($Employee->tel); ?></small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Ocupação </b><br>
                            <small> <?php echo e($Employee->occupation); ?></small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Departamento</b><br>
                            <small><?php echo e($Employee->departament); ?> </small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Foto </b><br>

                            <?php if(!isset($Employee->photoEmployee)): ?>
                                <small>
                                    <img src="/dashboard/User-595b40b85ba036ed117da56f.svg"
                                        class="mr-2 rounded-circle img-fluid" alt="Cinque Terre" width="90" height="90">

                                </small>
                            <?php else: ?>
                                <small>
                                    <img src="/storage/<?php echo e($Employee->photoEmployee); ?>"
                                        class="mr-2 rounded-circle img-fluid" alt="Cinque Terre" width="90" height="90">

                                </small>
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
                            <?php echo e($Employee->created_at); ?>

                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            <?php echo e($Employee->updated_at); ?>

                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='<?php echo e(url("admin/funcionários/edit/{$Employee->id}")); ?>'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>

                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="<?php echo e($Employee->id); ?>">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>

                    </div>
                </div>

            </div>

        </div>

    </div>


    <?php echo $__env->make('admin.extras.modal.delete.employees.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/employees/details/index.blade.php ENDPATH**/ ?>