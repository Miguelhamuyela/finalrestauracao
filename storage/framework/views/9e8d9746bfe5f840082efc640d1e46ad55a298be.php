<input type="hidden" name="origin" value="Auditório">
<div class="row">

    <div class="col-md-12">
        <div class="form-group">
            <label for="titleConfrence">Titulo ou Nome da Vistoria <small class="text-danger"></small></label>
            <input type="text" name="titleConference" id="titleConference"
                value="<?php echo e(isset($auditorium->titleConference) ? $auditorium->titleConference : old('titleConference')); ?>"
                class="form-control border rounded" placeholder="Titulo ou Nome da Vistoria" required>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/forms/_formAuditoriums/index.blade.php ENDPATH**/ ?>