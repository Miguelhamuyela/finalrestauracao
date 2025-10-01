
<?php $__env->startSection('titulo', ' Registo de Actividades'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5><b>Registo de Actividades</b></h5>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                    <thead class="bg-primary thead-dark">
                        <tr class="text-center">
                            <th>ID</th>
                            <th class="text-left">CAMINHO</th>
                            <th>IP</th>
                            <th class="text-left">MENSAGEM</th>
                            <th class="text-center">DATA</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">

                        <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center text-dark">
                                <td><?php echo e($item->id); ?></td>
                                <td class="text-left"><?php echo e($item->PATH_INFO); ?> </td>
                                <td><?php echo e($item->REMOTE_ADDR); ?> </td>
                                <td class="text-left"><?php echo e($item->message); ?> </td>
                                <td><?php echo e($item->created_at); ?> </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/user/activity/index.blade.php ENDPATH**/ ?>