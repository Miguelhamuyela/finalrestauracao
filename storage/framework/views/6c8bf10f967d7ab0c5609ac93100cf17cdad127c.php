<div class="row mb-2">

    <div class="col-md-6">
        <div class="form-group">
            <label for="started">Início do Contrato</label>
            <input type="datetime-local" name="started" id="started"
                value="<?php echo e(isset($scheldule->started) ?date('Y-m-d\TH:i:s', strtotime($scheldule->started)) : old('started')); ?>"
                class="form-control border rounded" placeholder="Inicio do contracto">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="end">Fim do Contrato</label>
            <input type="datetime-local" name="end" id="end"
                value="<?php echo e(isset($scheldule->end) ? date('Y-m-d\TH:i:s', strtotime($scheldule->end)) : old('end')); ?>" class="form-control border rounded"
                placeholder="Inicio do contracto">
        </div>
    </div>

</div>
<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/forms/_formScheldulesAudi/index.blade.php ENDPATH**/ ?>