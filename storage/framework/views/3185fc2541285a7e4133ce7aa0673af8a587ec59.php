<?php $__env->startSection('titulo', 'Cadastrar Vistoria de Empresa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.startup.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="card-body bg-light">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <h4 class="card-title"><b>
                                <a href="<?php echo e(url('admin/startup/list')); ?>">Listar Vistoria de Empresas</a>
                                > Empresa
                            </b></h4>
                        <hr>
                        <?php echo $__env->make('forms._formStartups.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>



                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Período do Contrato</b></h4>
                        <hr>
                        <?php echo $__env->make('forms._formScheldules.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>


                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Pagamentos</b></h4>
                        <hr>
                        <?php echo $__env->make('forms._formPayments.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>


                    <div class="card-body bg-light">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn px-5 col-md-4 btn-primary">
                                    Salvar
                                </button>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/startup/create/index.blade.php ENDPATH**/ ?>