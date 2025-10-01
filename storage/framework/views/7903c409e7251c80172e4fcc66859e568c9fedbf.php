
<?php $__env->startSection('titulo', ' Detalhes do Utilizador'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h4 mb-4 page-title"><?php echo e($user->name); ?></h2>
                        <div class="row mt-5 align-items-center">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="<?php echo e($user->photo); ?>" alt="profile image" width="200">
                                <div class="wrapper ps-2 mx-5">
                                    <p class="mb-0 text-gray">Email: <?php echo e($user->email); ?></p>
                                    <p class="mb-0 text-gray">Data de Criação: <?php echo e($user->created_at); ?></p>
                                    <small class="mb-0 text-muted"><?php echo e($user->level); ?></small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center mb-5">
                                <div class=" ml-5" style="height: 150px; width:150px;">
                                    <img src="" alt="">
                                </div>
                            </div>

                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


    <div class="section-body mt-4">

        <div class="card shadow mb-4">
            <div class="card-body">

                <h4 class="mt-3 mb-5 text-left"><b>Registo de Actividades</b></h4>

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

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/user/details/index.blade.php ENDPATH**/ ?>