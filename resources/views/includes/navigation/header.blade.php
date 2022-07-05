<div class="app-header header top-header comb-header">
    <div class="container-fluid">
        <div class="d-flex">
            <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a><!-- sidebar-toggle-->
            <img src="{{ asset('mdh/images/brand/logo.png') }}" class="header-brand-img desktop-lgo" alt="MDH logo">
            <img src="{{ asset('mdh/images/brand/logo.png') }}" class="header-brand-img dark-logo" alt="MDH logo">
            <img src="{{ asset('mdh/images/brand/logo.png') }}" class="header-brand-img mobile-logo" alt="MDH logo">
            <img src="{{ asset('mdh/images/brand/logo.png') }}" class="header-brand-img darkmobile-logo" alt="MDH logo">
            </a>
            {{--<div class="dropdown   side-nav" >
                <a aria-label="Hide Sidebar" class="app-sidebar__toggle nav-link icon mt-1" data-toggle="sidebar" href="#">
                    <i class="fe fe-align-left"></i>
                </a><!-- sidebar-toggle-->
            </div>--}}


            <div class="d-flex order-lg-2 ml-auto">
                {{--<div class="dropdown   header-fullscreen" >
                    <a  class="nav-link icon full-screen-link"  id="fullscreen-button">
                        <i class="fe fe-minimize"></i>
                    </a>
                </div>--}}

                <div class="dropdown ">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span>
											<img src="{{ asset('mdh/images/users/16.jpg') }}" alt="img" class="avatar avatar-md brround">
										</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                        <div class="text-center">

                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                @if(!is_null($applicant))
                                    <a href="#" class="dropdown-item text-center user pb-0">{{ $applicant->first_name  .' '.$applicant->last_name  }}</a>
                                @endif
                                <span class="text-center user-semi-title text-dark">{{ \Illuminate\Support\Facades\Auth::user()->email }}</span>
                                <div class="dropdown-divider"></div>


                            @endguest


                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>


</div>


