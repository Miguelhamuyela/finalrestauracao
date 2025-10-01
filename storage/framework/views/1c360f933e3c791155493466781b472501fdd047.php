
<?php $__env->startSection('titulo', 'Editar Conta'); ?>
<?php $__env->startSection('content'); ?>

    <div class="card shadow">
        <div class="card-body">
            <h2 class="my-5 text-center">Editar conta de <?php echo e($user->name); ?> </h2>

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
                    action="<?php echo e(route('admin.user.update', $user->id)); ?>">
                    <?php echo method_field('PUT'); ?>
                    <?php echo $__env->make('forms._formUser.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <button class="btn btn-lg  btn-primary btn-block" type="submit">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/user/edit/index.blade.php ENDPATH**/ ?>