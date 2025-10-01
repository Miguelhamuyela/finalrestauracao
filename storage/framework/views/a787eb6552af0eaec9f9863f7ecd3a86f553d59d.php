
<?php $__env->startSection('titulo', 'Lista de Pagamentos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-9">
                        <h5><b>Lista de Pagamentos</b></h5>

                    </div>

                    <div class="col-md-3 text-center">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-file-pdf-o text-white"></i>Imprimir Relatório
                        </a>

                    </div>

                </div>
                <hr>
                <div class="card-body row">
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <i class="mdi mdi-poll-box icon-lg text-primary d-flex align-items-center"></i>
                                <div class="d-flex flex-column ms-4">
                                    <span class="d-flex flex-column">
                                        <p class="mb-0">Quantidade de Status Pago</p>
                                        <h4 class="font-weight-bold"><?php echo e($paidStatus); ?></h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <i class="mdi mdi-poll-box icon-lg text-primary d-flex align-items-center"></i>
                                <div class="d-flex flex-column ms-4">
                                    <span class="d-flex flex-column">
                                        <p class="mb-0">Quantidade de Status Não Pago</p>
                                        <h4 class="font-weight-bold"><?php echo e($unpaidStatus); ?></h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <i class="mdi mdi-poll-box icon-lg text-primary d-flex align-items-center"></i>
                                <div class="d-flex flex-column ms-4">
                                    <span class="d-flex flex-column">
                                        <p class="mb-0">Valor Total Pagamentos</p>
                                        <h4 class="font-weight-bold"><?php echo number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ'; ?></h4>
                                    </span>
                                    <small class="text-muted">Valor Total de Pagamentos de Todos os Serviços</small>
                                </div>
                            </div>
                        </div>
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
                                    <th>TIPO DE PAGAMENTO</th>
                                    <th>VALORES A PAGAR</th>
                                    <th>REFERÊNCIA</th>
                                    <th>MOEDA</th>
                                    <th>ORIGEM</th>
                                    <th>STATUS</th>
                                    <th class="text-center">ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center text-dark">
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->type); ?> </td>
                                        <td><?php echo e($item->value); ?> </td>
                                        <td><?php echo e($item->reference); ?> </td>
                                        <td><?php echo e($item->currency); ?> </td>
                                        <td><?php echo e($item->origin); ?> </td>
                                        <?php if($item->status == 'Pago'): ?>
                                            <td>
                                                <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                    <?php echo e($item->status); ?></div>
                                            </td>
                                        <?php elseif($item->status == 'Não Pago'): ?>
                                            <td>
                                                <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                    <?php echo e($item->status); ?></div>
                                            </td>
                                        <?php elseif($item->status == 'Em Validação'): ?>
                                            <td>
                                                <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                    <?php echo e($item->status); ?></div>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <div class="btn btn-dark btn-fw btn-rounded text-white ">
                                                    <?php echo e($item->status); ?></div>
                                            </td>
                                        <?php endif; ?>
                                        <td>
                                            <a href='<?php echo e(url("admin/pagamentos/show/{$item->id}")); ?>' type="button"
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

    <?php echo $__env->make('admin.extras.modal.payments.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/payments/list/index.blade.php ENDPATH**/ ?>