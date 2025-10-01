
<?php $__env->startSection('titulo', 'Criar Conta - Gestão do Digital'); ?>
<?php $__env->startSection('content'); ?>

    <div class="card shadow">
        <div class="card-body">
            <h2 class="my-5 text-center">Criar conta no Sistema de Gestão do <b>DIGITAL.AO</b></h2>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="row align-items-center">

                <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST" enctype="multipart/form-data"
                    action="<?php echo e(route('register')); ?>">
                    <?php echo $__env->make('forms._formUser.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <button class="btn btn-lg  btn-success btn-block" type="submit"><?php echo e(__('Register')); ?></button>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/auth/register.blade.php ENDPATH**/ ?>