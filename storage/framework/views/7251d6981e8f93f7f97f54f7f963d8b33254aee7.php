<?php $__env->startSection('titulo', 'Lista de Empresas'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-9">
                        <h5><b>Lista de Empresas</b></h5>
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-file-pdf-o text-white"></i>Imprimir Relatório
                        </a>

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
                                    <th>NOME DA EMPRESA</th>
                                    <th>NIF</th>
                                    <th>TIPO DE EMPRESA</th>
                                    <th>TELEFONE</th>
                                    <th class="text-left">ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center text-dark">
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name); ?> </td>
                                        <td><?php echo e($item->nif); ?> </td>
                                        <td><?php echo e($item->clienttype); ?> </td>
                                        <td><?php echo e($item->tel); ?> </td>
                                        <td>

                                            <a href='<?php echo e(url("admin/client/show/{$item->id}")); ?>' type="button"
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
    <?php echo $__env->make('admin.extras.modal.clients.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/clients/list/index.blade.php ENDPATH**/ ?>