<div class="nav-header" style="margin-left: -20px;">
    <a href="index.html" class="brand-logo">
        <img src="/images/wim-sbg.png" alt="" srcset="" width="70" height="60" class="">
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<div class="header" style="background-color: white;">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Tableau de bord
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z"
                                    fill="#4f7086"></path>
                            </svg>
                            <span
                                class="badge light text-white bg-primary rounded-circle">{{ count($notifications) }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div id="dlab_W_Notification1" class="widget-media dlab-scroll p-3 ps"
                                style="height:380px;">
                                <ul class="timeline">
                                    @foreach ($notifications as $notification)
                                        <li>
                                            <a href="/notification/{{ $notification->id }}/etat">
                                                <div class="timeline-panel">
                                                    <div class="media-body">
                                                        <h6 class="mb-1">{{ $notification->titre }}</h6>
                                                        <small
                                                            class="d-block">{{ \Carbon\Carbon::parse($notification->date)->format('d/m/Y H:i') }}</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </div>
                            <a class="all-notification" href="javascript:void(0);">See all notifications <i
                                    class="ti-arrow-end"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="input-group search-area">
                            <input type="text" class="form-control" placeholder="Rechercher ici...">
                            <span class="input-group-text"><a href="javascript:void(0)"><i
                                        class="flaticon-381-search-2"></i></a></span>
                        </div>
                    </li>
                    @auth
                        @if (Auth::user()->profil == 'mentor')
                            <li class="nav-item">
                                <a href="/sessions/create" class="btn  d-sm-inline-block d-none"
                                    style="background-color: #C15DFB; color: white;">Plannifier une session</a>
                            </li>
                        @endif
                    @endauth

                </ul>
            </div>
        </nav>
    </div>
</div>
