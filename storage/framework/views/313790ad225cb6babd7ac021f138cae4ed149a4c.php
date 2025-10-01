<?php echo $__env->make('layouts._includes.dashboard.Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts._includes.dashboard.Menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <?php echo $__env->yieldContent('content'); ?>

    </div>
    <!-- content-wrapper ends -->

    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Todos os Direitos Reservados ao
                <a href="https://www.infosi.gov.ao" target="_blank">
                   INFOSI
                </a>
                ©
                <?php echo e(date('Y')); ?>

            </span>
        </div>
    </footer>
    <!-- partial -->

</div>


<?php echo $__env->make('layouts._includes.dashboard.Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/layouts/merge/dashboard.blade.php ENDPATH**/ ?>