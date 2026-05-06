@extends("layouts.layout")

@section("sidebar")
    <aside class="container sidebar-nav-container px-0 pb-3" id="sidebar">
        <div class="d-flex flex-column h-100 justify-content-between">
            <div class="sidebar-brand mb-4 d-flex align-items-center justify-content-start">
                <div class="bg-sidebar-icon">
                    <x-lucide-zap class="brand-icon" />
                </div>
                <div>
                    <p class="mb-0 brand-name">DEATRA</p>
                    <p class="mb-0 brand-subtitle">DEAL TRACKER</p>
                </div>
            </div>
            <ul class="list-unstyled main-menu mb-auto px-2">
                <li class="nav-item">
                    <a class="nav-link active"><x-lucide-layout-dashboard class="sidebar-icon" /><span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><x-lucide-git-branch class="sidebar-icon" /><span>Tracks</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><x-lucide-file-text class="sidebar-icon" /><span>Contracts</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><x-lucide-users class="sidebar-icon" /><span>Clients</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><x-lucide-folder-open class="sidebar-icon" /><span>Document</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><x-lucide-handshake class="sidebar-icon" /><span>Partenaires</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><x-lucide-settings class="sidebar-icon" /><span>Paramètres</span></a>
                </li>

            </ul>

            <hr class="hr-cs">
            <div class="sidebar-footer px-2">
                <div class="d-flex align-items-center">
                    <div class="avatar-bg">
                        <div class="initial">
                            BH
                        </div>
                    </div>
                    <div class="sidebar-user-info">
                        <p class="mb-1 user-name">Bakulu Holdings</p>
                        <p class="mb-0 user-role">Directeur Stratégie</p>
                    </div>
                    
                    
                </div>
            </div>



        </div>
    </aside>

    <section id="main-wrapper">
        @yield('body')
    </section>
@endsection