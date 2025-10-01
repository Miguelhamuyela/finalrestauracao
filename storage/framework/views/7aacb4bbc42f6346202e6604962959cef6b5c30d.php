<?php $__env->startSection('titulo', 'Lista de Empresas'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form  method="POST" action="<?php echo e(route('admin.client.store')); ?>" >
                    <?php echo csrf_field(); ?>
                <div class="card-body bg-light">
                    <h4 class="card-title"><b>Lista de Empresas</b></h4>
                    <hr>
                    <?php echo $__env->make('forms._formClients.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/clients/create/index.blade.php ENDPATH**/ ?>