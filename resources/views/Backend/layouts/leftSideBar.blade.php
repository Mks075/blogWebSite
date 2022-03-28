@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    @endphp
{{-- @dd($prefix); --}}
<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">
    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{asset('Backend')}}/assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{asset('Backend')}}/assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>
    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{asset('Backend')}}/assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{asset('Backend')}}/assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>
    <div class="h-100" id="leftside-menu-container" data-simplebar="">
        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-item">
                <a href="{{route('home')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>
            <li class="side-nav-title side-nav-item">Apps</li>
            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Calendar </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="apps-chat.html" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Chat </span>
                </a>
            </li>
            <li class="side-nav-title side-nav-item text-white">Manage</li>
            @if (Auth::user()->userType == 'SAdmin')
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                    aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-user-square"></i>
                    <span> User </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li><a href="{{route('users.view')}}">View User</a></li>
                    </ul>
                </div>
            </li>
            @endif
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="profile"
                    class="side-nav-link">
                    <i class="uil-user-circle"></i>
                    <span> Profile </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="profile">
                    <ul class="side-nav-second-level">
                        <li><a href="{{route('profile.view')}}">Profile View</a></li>
                        <li><a href="{{route('profile.edit')}}">Profile Edit</a></li>
                        <li><a href="{{route('profile.passView')}}">Password</a></li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#logo" aria-expanded="false" aria-controls="logo"
                    class="side-nav-link">
                    <i class="uil-camera"></i>
                    <span> Logo </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="logo">
                    <ul class="side-nav-second-level">
                        <li><a href="{{route('logos.view')}}">View Logo</a></li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                    aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-dribbble"></i>
                    <span> Sliders </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li><a href="{{route('sliders.view')}}">View Slider 1</a></li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#mv" aria-expanded="false" aria-controls="mv" class="side-nav-link">
                    <i class="uil-arrow-growth"></i>
                    <span> Mission & Vission </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="mv">
                    <ul class="side-nav-second-level">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#m" aria-expanded="false" aria-controls="m">
                                <span> Mission </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="m">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="{{route('mission.view')}}">View Mission</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#v" aria-expanded="false" aria-controls="v">
                                <span> Vission </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="v">
                                <ul class="third">
                                    <li>
                                        <a href="{{route('vissions.view')}}">View Vission</a>
                                    </li>
                                    {{-- <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#four" aria-expanded="false"
                                            aria-controls="four">
                                            <span> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="four">
                                            <ul class="side-nav-forth-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Manage POST --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#postNews" aria-expanded="false"
                    aria-controls="postNews" class="side-nav-link">
                    <i class="uil-post-stamp"></i>
                    <span> POST News</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="postNews">
                    <ul class="side-nav-second-level">
                        <li><a href="{{route('postNews.view')}}">View POST</a></li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#contact" aria-expanded="false"
                    aria-controls="contact" class="side-nav-link">
                    <i class="uil-link-alt"></i>
                    <span> Contact Us</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="contact">
                    <ul class="side-nav-second-level">
                        <li><a href="{{route('contacts.view')}}">View Contact</a></li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-title side-nav-item text-white">Manage Navbar Pages</li>
            {{-- <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#skills" aria-expanded="false"
                    aria-controls="skills" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> skills</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="skills">
                    <ul class="side-nav-second-level">
                        <li><a href="{{route('contacts.view')}}">View skills</a></li>
                    </ul>
                </div>
            </li> --}}
            {{-- <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false"
                    aria-controls="sidebarMultiLevel" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> Multi Level </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMultiLevel">
                    <ul class="side-nav-second-level">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"
                                aria-controls="sidebarSecondLevel">
                                <span> Second Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSecondLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="javascript: void(0);">Item 1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false"
                                aria-controls="sidebarThirdLevel">
                                <span> Third Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThirdLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="javascript: void(0);">Item 1</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false"
                                            aria-controls="sidebarFourthLevel">
                                            <span> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarFourthLevel">
                                            <ul class="side-nav-forth-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <!-- Help Box -->
            <div class="help-box text-white text-center">
                <a href="javascript: void(0);" class="float-end close-btn text-white">
                    <i class="mdi mdi-close"></i>
                </a>
                <img src="{{asset('Backend')}}/assets/images/help-icon.svg" height="90" alt="Helper Icon Image">
                <h5 class="mt-3">Unlimited Access</h5>
                <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
            </div>
            <!-- end Help Box -->
            <!-- End Sidebar -->
            <div class="clearfix"></div>
        </ul>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
