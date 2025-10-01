<input type="hidden" name="origin" value="Cowork">
<div class="row">

    <div class="col-md-6">

        <div class="form-group">
            <label for="title">Actividade Principal da Empresa <small class="text-danger"></small></label>
            <textarea class="form-control rounded" name="title" required
                style="min-height:70px; min-width:100%"><?php echo e(isset($cowork->title) ? $cowork->title : old('title')); ?></textarea>
        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="activities">Outras Actividades<small class="text-danger">*</small></label>
            <textarea class="form-control rounded" id="editor2" name="activities" required
                style="min-height:70px; min-width:100%"><?php echo e(isset($cowork->activities) ? $cowork->activities : old('activities')); ?></textarea>
        </div>

    </div>

</div>

<!-- /.col -->
<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/forms/_formCoworks/index.blade.php ENDPATH**/ ?>