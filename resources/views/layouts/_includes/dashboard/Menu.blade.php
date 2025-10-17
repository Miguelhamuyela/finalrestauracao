@if (null !== Auth::user())
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="{{ route('admin.user.show', Auth::User()->id) }}" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="{{ Auth::User()->photo }}"
                            alt="{{ Auth::User()->name }}">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Auth::User()->name }}</p>
                        <p class="designation">{{ Auth::User()->level }}</p>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-category">Dashboard</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            @if ('Finanças' == Auth::user()->level || 'Gestor' == Auth::user()->level || 'Fábrica de Software' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                <li class="nav-item nav-category mt-2"></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.employees.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Equipa da Vistoria</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.client.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Cadastro de Empresa</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.schedule.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Agenda de Vistoria</span>
                    </a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.autinspection.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Empresa Verificadas</span>
                    </a>
                </li>

                   {{-- auditoriums
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.auditoriums.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Agenda de Vistoria</span>
                    </a>
                </li>
                   --}}
                 {{-- auditoriums
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.autinspection.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Empresa Verificadas</span>
                    </a>
                </li>
              --}}
  {{-- auditoriums
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.manufactures.list') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Fábrica de Software</span>
                    </a>
                </li>
 --}}
            @endif
            @if ('Finanças' == Auth::user()->level || 'Gestor' == Auth::user()->level || 'Reparação de Equipamentos' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                {{-- equipmentRepair
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.equipmentRepair.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Reparação de Equipamentos</span>
                    </a>
                </li>
                --}}
                  {{-- Clients
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.client.create.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Cadastro de Empresa</span>
                    </a>
                </li>
                 --}}
                   {{-- auditoriums
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.inspection.create.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Vistoria</span>
                    </a>
                </li>
               --}}
            @endif
            @if ('Finanças' == Auth::user()->level || 'Gestor' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                {{-- elernings
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.elernings.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">E-learning</span>
                    </a>
                </li>
                 --}}
               {{--
                <li class="nav-item nav-category mt-2">Agendamento de Vistoria</li>
                 --}}
                {{-- startups
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.startup.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Auto de Vistoria</span>
                    </a>
                </li>
                --}}
                {{--
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.meetingRoom.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Salas de Reuniões</span>
                    </a>
                </li>
                   --}}
                    {{--
                <li class="nav-item nav-category mt-2">Estatísticas</li>
                  --}}
                {{-- PayChart
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.generalStatistics.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Gráfico de Pagamentos</span>
                    </a>
                </li>

                --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.payments.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Pagamentos</span>
                    </a>
                </li>
               {{-- PayChart
               <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.coworks.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Licença Industrial Hoteleira</span>
                    </a>
                </li>
                --}}
            @endif

            @if ('Administrador' == Auth::user()->level)

                {{-- employees

                <li class="nav-item nav-category mt-2">Equipa de Vistoria</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.employees.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Equipa de Vistoria </span>
                    </a>
                </li>

                --}}

                <li class="nav-item mb-5">
                    <a class="nav-link" href="{{ route('admin.contacts.list') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Contactos</span>
                    </a>
                </li>
                 <li class="nav-item mb-5">
                    <a class="nav-link" href="{{ route('admin.user.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Utilizadores</span>
                    </a>
                </li>
            @endif


        </ul>
    </nav>
@endif
