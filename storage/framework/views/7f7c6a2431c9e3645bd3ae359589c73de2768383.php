<?php if(null !== Auth::user()): ?>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="<?php echo e(route('admin.user.show', Auth::User()->id)); ?>" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="<?php echo e(Auth::User()->photo); ?>"
                            alt="<?php echo e(Auth::User()->name); ?>">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name"><?php echo e(Auth::User()->name); ?></p>
                        <p class="designation"><?php echo e(Auth::User()->level); ?></p>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-category">Dashboard</li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.home')); ?>">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <?php if('Finanças' == Auth::user()->level || 'Gestor' == Auth::user()->level || 'Fábrica de Software' == Auth::user()->level || 'Administrador' == Auth::user()->level): ?>
                <li class="nav-item nav-category mt-2">Serviços</li>
                
            <?php endif; ?>
            <?php if('Finanças' == Auth::user()->level || 'Gestor' == Auth::user()->level || 'Reparação de Equipamentos' == Auth::user()->level || 'Administrador' == Auth::user()->level): ?>
                
            <?php endif; ?>
            <?php if('Finanças' == Auth::user()->level || 'Gestor' == Auth::user()->level || 'Administrador' == Auth::user()->level): ?>
                
               
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.startup.list.index')); ?>">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Vistoria de Empresa</span>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.auditoriums.list.index')); ?>">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Agenda de Vistoria</span>
                    </a>
                </li>

                
                    
                
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.client.create.index')); ?>">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Cadastro de Empresa</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.payments.index')); ?>">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Pagamentos</span>
                    </a>
                </li>

               <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.coworks.list.index')); ?>">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Empresas Legais</span>
                    </a>
                </li>

            <?php endif; ?>

            <?php if('Administrador' == Auth::user()->level): ?>

                
                <li class="nav-item nav-category mt-2">Equipa de Vistoria</li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.employees.index')); ?>">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Equipa de Vistoria </span>
                    </a>
                </li>


                <li class="nav-item mb-5">
                    <a class="nav-link" href="<?php echo e(route('admin.user.index')); ?>">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Utilizadores</span>
                    </a>
                </li>
            <?php endif; ?>


        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/layouts/_includes/dashboard/Menu.blade.php ENDPATH**/ ?>