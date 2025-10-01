
<?php $__env->startSection('titulo', 'Auditorio'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Equipa de Vistoria</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="<?php echo e(route('admin.auditoriums.create.index')); ?>" class="btn btn-primary">Cadastrar</a>
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
                                    <th>TIPO DE VISTORIA</th>
                                    <th>AGENDAMENTO</th>
                                    <th>NOME DA EMPRESA</th>
                                    <th>NIF</th>
                                    <th>TELEFONE</th>
                                    <th>STATUS</th>
                                    <th class="text-left">ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $auditoriums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center text-dark">
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->titleConference); ?></td>
                                        <?php if(isset($item->scheduling)): ?>
                                            <td><?php echo e($item->scheduling->startedSchelduling); ?> -
                                                <?php echo e($item->scheduling->endSchelduling); ?></td>
                                        <?php endif; ?>
                                        <td><?php echo e($item->clients->name); ?> </td>
                                        <td><?php echo e($item->clients->nif); ?> </td>
                                        <td><?php echo e($item->clients->tel); ?> </td>

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
                                                    <a href='<?php echo e(url("admin/auditoriums/show/{$item->id}")); ?>'
                                                        class="dropdown-item">Detalhes</a>
                                                    <?php if($item->payments->status == 'Pago'): ?>
                                                        <a href="<?php echo e(url('admin/pagamentos/fatura/' . $item->payments->code . '/' . $item->payments->origin . '/' . $item->payments->value . '/' . $item->clients->name . '/' . $item->payments->status . '/' . $item->clients->nif . '/' . $item->updated_at)); ?>"
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

<?php echo $__env->make('layouts.merge.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/auditoriums/list/index.blade.php ENDPATH**/ ?>