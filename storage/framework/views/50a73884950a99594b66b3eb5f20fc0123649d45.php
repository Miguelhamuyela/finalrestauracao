<?php $__env->startSection('titulo', 'Lista de Integrates '); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Integrates </b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="<?php echo e(route('admin.employees.create')); ?>" class="btn btn-primary">Cadastrar</a>
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
                                <tr class="text-center ">
                                    <th>#</th>
                                    <th>NOME</th>
                                    <th>MINISTERIO</th>
                                    <th>DEPARTAMENTO OU SECÇAO</th>
                                    <th>CHEFE DA EQUIPA</th>
                                    <th>TELEFONE DO INTEGRATE</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center text-dark">
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name); ?> </td>
                                        <td><?php echo e($item->ministry); ?> </td>
                                        <td><?php echo e($item->departament); ?> </td>
                                        <td><?php echo e($item->teamLeader); ?> </td>
                                        <td><?php echo e($item->tel); ?> </td>
                                        <td>


                                            <a href='<?php echo e(url("admin/funcionários/show/{$item->id}")); ?>' type="button"
                                                class="btn btn-icons btn-rounded btn-primary">
                                                <i class="mdi mdi-eye"></i>
                                            </a>

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

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/employees/list/index.blade.php ENDPATH**/ ?>