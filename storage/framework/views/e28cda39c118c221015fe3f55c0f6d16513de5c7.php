<input type="hidden" name="origin" value="Startup">
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="name">Nome da Startup <small class="text-danger">*</small></label>
            <input type="text" name="name" id="name"
                value="<?php echo e(isset($startup->name) ? $startup->name : old('name')); ?>" class="form-control border rounded"
                placeholder="Nome da startup " required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">NIF <small class="text-danger">*</small></label>
            <input type="text" name="nif" id="nif" value="<?php echo e(isset($startup->nif) ? $startup->nif : old('nif')); ?>"
                class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-5">
        <div class="form-group">
            <label for="incubatorModel">Modelo de Incubação <small class="text-danger">*</small></label>

            <select type="text" name="incubatorModel" id="incubatorModel" class="form-control border rounded" required>

                <?php if(isset($startup->incubatorModel)): ?>
                    <option value="<?php echo e($startup->incubatorModel); ?>" class="text-primary h6 bg-primary text-white"
                        selected>
                        <?php echo e($startup->incubatorModel); ?>

                    </option>
                <?php else: ?>
                    <option disabled selected value="">selecione uma categoria</option>
                <?php endif; ?>

                <option>Residente</option>
                <option>Não Residente</option>

            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Telefone <small class="text-danger">*</small></label>
            <input type="text" name="tel" id="tel" value="<?php echo e(isset($startup->tel) ? $startup->tel : old('tel')); ?>"
                class="form-control border rounded" placeholder="Telefone" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="tel">Sala <small class="text-danger">*</small></label>
            <input type="text" name="roomName" id="roomName"
                value="<?php echo e(isset($startup->roomName) ? $startup->roomName : old('roomName')); ?>"
                class="form-control border rounded" placeholder="Sala " required>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email <small class="text-danger">*</small></label>
            <input type="email" name="email" id="email"
                value="<?php echo e(isset($startup->email) ? $startup->email : old('email')); ?>"
                class="form-control border rounded" placeholder="Email" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="site">Site </label>
            <input type="text" name="site" id="site"
                value="<?php echo e(isset($startup->site) ? $startup->site : old('site')); ?>" class="form-control border rounded"
                placeholder="Site ">
        </div>
    </div>
</div>




<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Detalhes Sobre a Startup">Detalhes Sobre a Startup <small
                    class="text-danger">*</small></label>
            <textarea class="form-control rounded" name="StartupDetails" required
                style="min-height:70px; min-width:100%"><?php echo e(isset($startup->StartupDetails) ? $startup->StartupDetails : old('StartupDetails')); ?></textarea>
        </div>
    </div>
</div>
<!-- /.col -->
<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/forms/_formStartups/index.blade.php ENDPATH**/ ?>