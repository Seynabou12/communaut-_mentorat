<div class="dlabnav" style="margin-left: -20px;">
    <div class="dlabnav-scroll" >
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset(Auth::user()->photo) }}" width="20" alt="">
                    <div class="header-info ms-3">
                        <span class="font-w600 ">{{ Auth::user()->nom }},<b>{{ Auth::user()->prenom }}</b></span>
                        <small class="text-end font-w400">{{ Auth::user()->email }}</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="app-profile.html" class="dropdown-item ai-icon">
                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                            height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ms-2">Profile </span>
                    </a>
                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18"
                            height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span class="ms-2">Inbox </span>
                    </a>
                    <a href="page-error-404.html" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                            height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="ms-2">Logout </span>
                    </a>
                </div>
            </li>
            @auth
                @if (Auth::user()->profil == 'admin')
                    <li><a href="/admin/dashbord" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashbord</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->profil == 'mentor')
                    <li><a href="#" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashbord</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->profil == 'mentore')
                    <li><a href="#" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashbord</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->profil == 'admin')
                    <li><a href="/mentores/liste" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Liste Mentorés</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->profil == 'mentor')
                    <li><a href="/mentors/{{ Auth::user()->mentor->id }}/mentores" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Mentorés</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->profil == 'mentore')
                    <li><a href="/mentores/{{ Auth::user()->mentore->id }}/mentors" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Mentors</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->profil == 'admin')
                    <li><a href="/mentors/liste" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Liste Mentors</span>
                        </a>
                    </li>
                    <li><a href="/niveaux/create" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-072-printer"></i>
                            <span class="nav-text">Niveaux Etudes</span>
                        </a>
                    </li>
                    <li><a href="/domaines/create" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-072-printer"></i>
                        <span class="nav-text">Domaines</span>
                    </a>
                </li>
                    </li>
                @endif
                @if (Auth::user()->profil == 'mentor')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-041-graph"></i>
                            <span class="nav-text">Sessions</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/sessions/create">Ajout</a></li>
                            <li><a href="/sessions">Liste</a></li>
                        </ul>
                    </li>
                @endif

                @if (Auth::user()->profil == 'mentore')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-041-graph"></i>
                            <span class="nav-text">Sessions</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/mes-sessions">Mes Sessions</a></li>
                        </ul>
                    </li>
                @endif

                @if (Auth::user()->profil == 'admin' || Auth::user()->profil == 'mentore' || Auth::user()->profil == 'mentor')
                    <li><a class="ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-013-checkmark"></i>
                            <span class="nav-text">Mon Profil</span>
                        </a>

                    </li>
                @endif
            @endauth
            <li>
                <a href="page-error-404.html" class="dropdown-item ai-icon">
                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                        height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span class="ms-2">Deconnexion </span>
                </a>
            </li>

        </ul>

    </div>
</div>
