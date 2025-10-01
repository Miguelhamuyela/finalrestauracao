
<?php $__env->startSection('titulo', 'Lista de Utilizadores'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Utilizadores</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">Cadastrar</a>
                    </div>
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
                                <th>#</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>DATA DE CRIAÇÃO</th>
                                <th>NIVEL DE ACESSO</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center text-dark">
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->name); ?> </td>
                                    <td><?php echo e($item->email); ?> </td>
                                    <td><?php echo e($item->created_at); ?> </td>
                                    <td><?php echo e($item->level); ?> </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary text-white btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='<?php echo e(url("admin/user/show/{$item->id}")); ?>'
                                                    class="dropdown-item">Detalhes</a>
                                                <a href='<?php echo e(url("admin/user/edit/{$item->id}")); ?>'
                                                    class="dropdown-item">Editar</a>
                                                <a href='<?php echo e(url("admin/user/delete/{$item->id}")); ?>'
                                                    class="dropdown-item">Eliminar</a>
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

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/user/list/index.blade.php ENDPATH**/ ?>