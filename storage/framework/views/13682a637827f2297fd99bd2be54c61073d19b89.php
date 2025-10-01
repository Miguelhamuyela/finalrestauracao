
<form action="<?php echo e(url('admin/cowork/delete/'.$cowork->id)); ?>">
    <?php echo csrf_field(); ?>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="category_id">
                    Tem certeza de que deseja excluir este item ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </div>
            </div>
        </div>
    </div>
</form><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/admin/extras/modal/delete/coworks/index.blade.php ENDPATH**/ ?>