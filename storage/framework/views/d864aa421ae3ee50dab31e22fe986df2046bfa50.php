
<?php $__env->startSection('titulo', 'Lista de Vistoria de Empresa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Vistoria de Empresa</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="<?php echo e(route('admin.startup.create.index')); ?>" class="btn btn-primary">Cadastrar</a>
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
                                    <th>TELEFONE</th>
                                    <th>FIM DE CONTRATO</th>
                                    <th>MODELO DE INCUBAÇÃO</th>
                                    <th>STATUS</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $startups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center text-dark">
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name); ?> </td>
                                        <td><?php echo e($item->tel); ?> </td>
                                        <td><?php echo e($item->scheldules->end); ?> </td>
                                        <td><?php echo e($item->incubatorModel); ?> </td>
                                        <?php if($item->payments->status == 'Pago'): ?>
                                            <td>
                                                <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                    <?php echo e($item->payments->status); ?></div>
                                            </td>
                                        <?php elseif($item->payments->status == 'Não Pago'): ?>
                                            <td>
                                                <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                    <?php echo e($item->payments->status); ?></div>
                                            </td>
                                        <?php elseif($item->payments->status == 'Em Validação'): ?>
                                            <td>
                                                <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                    <?php echo e($item->payments->status); ?></div>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <div class="btn btn-dark btn-fw btn-rounded text-white ">
                                                    <?php echo e($item->payments->status); ?></div>
                                            </td>
                                        <?php endif; ?>
                                        <td>

                                            <div class="dropdown">
                                                <button class="btn btn-primary text-white btn-sm dropdown-toggle"
                                                    type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a href='<?php echo e(url("admin/startup/show/{$item->id}")); ?>'
                                                        class="dropdown-item">Detalhes</a>
                                                    <?php if($item->payments->status == 'Pago'): ?>
                                                        <a href="<?php echo e(url('admin/pagamentos/fatura/'. $item->payments->code . '/' . $item->payments->origin . '/' . $item->payments->value . '/' . $item->name. '/' . $item->payments->status.'/'.$item->nif.'/'.$item->updated_at)); ?>"
                                                            class="dropdown-item mt-2" target="_blank">Emitir Fatura</a>
                                                    <?php endif; ?>
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

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/startup/list/index.blade.php ENDPATH**/ ?>