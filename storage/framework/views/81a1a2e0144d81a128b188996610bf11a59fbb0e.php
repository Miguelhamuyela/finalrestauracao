<div class="row mb-2">

    <div class="col-md-6">
        <div class="form-group">
            <label for="started">Período de Entrada <small class="text-danger">*</small></label>
            <input type="datetime-local" name="startedSchelduling" id="started"
                value="<?php echo e(isset($scheduling->startedSchelduling) ?date('Y-m-d\TH:i:s', strtotime($scheduling->startedSchelduling)) : old('startedSchelduling')); ?>"
                class="form-control border rounded" placeholder="Período de Entrada" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="end">Data de Saída <small class="text-danger">*</small></label>
            <input type="datetime-local" name="endSchelduling" id="end"
                value="<?php echo e(isset($scheduling->endSchelduling) ? date('Y-m-d\TH:i:s', strtotime($scheduling->endSchelduling)) : old('endSchelduling')); ?>" class="form-control border rounded"
                placeholder="Período de Saída" required>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/forms/_formScheduling/index.blade.php ENDPATH**/ ?>