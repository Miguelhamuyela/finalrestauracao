<?php $__env->startSection('titulo', 'Login'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container-scroller bg-white">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper auth p-0 theme-one">
                <div class="row d-flex align-items-stretch">
                    <div class="col-md-7 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                        <div class="slide-content bg-1"> </div>
                    </div>
                    <div class="col-12 col-md-5 ">
                        <div class="auto-form-wrapper align-items-center justify-content-center flex-column">

                            <a class="align-items-center justify-content-center flex-column d-flex"
                                href="<?php echo e(route('admin.home')); ?>">
                                <img src="/dashboard/images/digital.canvas.png" alt="Logo" width="70">
                            </a>

                            <!-- Session Status -->
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-session-status','data' => ['class' => 'mb-4 alert alert-success','status' => session('status')]]); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4 alert alert-success','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                            <!-- Validation Errors -->
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4 alert alert-danger','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4 alert alert-danger','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <form method="POST" class="mt-5" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
                                <!-- Email Address -->
                                <div class="form-group">
                                    <label class="label" for="email">Email</label>
                                    <div class="input-group">
                                        <input class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>"
                                            required autofocus>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="label" for="password">Password</label>
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control" placeholder="*********"
                                            type="password" name="password" required autocomplete="current-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                <div class="form-group">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" id="remember_me" name="remember" class="form-check-input"
                                                checked> <?php echo e(__('Remember me')); ?></label>
                                    </div>

                                </div>
                                <div class="text-center mb-4">
                                    <?php if(Route::has('password.request')): ?>
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Forgot your password?')); ?>

                                        </a>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block"> <?php echo e(__('Login')); ?></button>
                                </div>

                                <div class="text-center mt-2 text-gray">
                                    <small class="text-muted">Todos os Direitos Reservados ao
                                        <a href="https://www.infosi.gov.ao" target="_blank">
                                            Maria Fernandes
                                        </a>
                                        ©
                                        <?php echo e(date('Y')); ?>

                                    </small>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.merge.dashboardWithoutMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/auth/login.blade.php ENDPATH**/ ?>