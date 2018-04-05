
        <nav class="navbar navbar-expand-lg bg-faded" id="nav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTopCollapse">
                    &#9776;
                </button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('first') }}"><img src="http://www1.east-gate.eu/sites/default/files/logo_east_gate.png" id='logo'></a>
                </div>
                <div class="collapse navbar-collapse flex-md-column" id="navbarTopCollapse">
                    <ul class="navbar-nav navbar-light ml-auto " id="topnav">
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href='{{ LaravelLocalization::getLocalizedURL('en', null, []) }}'>en</a>
                        </li>
                        -->
                        <li class="nav-item">
                            <a class="nav-link" href='{{ LaravelLocalization::getLocalizedURL('cs', null, []) }}'>cz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('sk', null, []) }}">sk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">blog</a>
                        </li>
                        <!-- SEARCH -->
                        <div class="search-container">
                            <form action="/search" method="GET">
                                <div class="input-group">
                                    <input type="text" name="searchText" class="form-control" id="top-form">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary btn-search btn-sm" type="submit"><i class="fa fa-search fa-fw"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <script>
                            $('.btn-search').click(function() {
                                var search = $('#top-form');
                                console.log(search.val());
                            });
                        </script>

                            @guest
                              <li class="right-menu-navbar"><a href="{{ route('login') }}">{{ __('navbar.login') }}</a></li>
                              <li class="right-menu-navbar"><a href="{{ route('register') }}">{{ __('navbar.register') }}</a></li>
                            @else
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('navbar.logout') }}
                                    </a>

                                    @if (Auth::user()->isAdmin())
                                      <a class="dropdown-item" href="{{ URL::to('dashboard/users') }}">Dashboard-users</a>
                                      <a class="dropdown-item" href="{{ URL::to('dashboard/blogs') }}">Dashboard-blogs</a>
                                    @endif

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest  
                    </ul>
                    <ul class="navbar-nav ml-auto flex-row mb-2" id="navbarTop2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbarDropdownMenu" href="{{ route('about') }}" id="navbarDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EAST-GATE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('about') }}">{{ __('navbar.about_us') }}</a>
                                <a class="dropdown-item" href="{{ route('our-story') }}">{{ __('navbar.our_story') }}</a>
                                <a class="dropdown-item" href="{{ route('what-makes-us-different') }}">{{ __('navbar.what_makes_us_different') }}</a>
                                <a class="dropdown-item" href="{{ route('our-team') }}">{{ __('navbar.our_team') }}</a>
                                <a class="dropdown-item" href="{{ route('where-we-are') }}">{{ __('navbar.where_we_are') }}</a>
                                <a class="dropdown-item" href="{{ route('contact') }}">{{ __('navbar.contact') }}</a>
                                <!--<a class="dropdown-item" href="{{ route('news') }}">{{ __('navbar.news') }}</a>-->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbarDropdownMenu" href="{{ route('application') }}" id="navbarDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('navbar.software_up') }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('application') }}">{{ __('navbar.application') }}</a>
                                <a class="dropdown-item" href="{{ route('application/advantages') }}">{{ __('navbar.proce55_advantages') }}</a>
                                <a class="dropdown-item" href="{{ route('application/unique-features') }}">{{ __('navbar.unique_features') }}</a>
                                <a class="dropdown-item" href="{{ route('application/assets') }}">{{ __('navbar.assets') }}</a>
                                <a class="dropdown-item" href="{{ route('application/how-works') }}">{{ __('navbar.proce55_how_works') }}</a>
                                <a class="dropdown-item" href="{{ route('application/sap-integration') }}">{{ __('navbar.sap_integration') }}</a>
                                <a class="dropdown-item" href="{{ route('prod-sys-integration') }}">{{ __('navbar.prod_sys_integration') }}</a>
                                <a class="dropdown-item" href="{{ route('visualization') }}">{{ __('navbar.visualization') }}</a>
                                <a class="dropdown-item" href="{{ route('technical-aspects') }}">{{ __('navbar.technical_aspects') }}</a>
                                <a class="dropdown-item" href="{{ route('application/story') }}">{{ __('navbar.story') }}</a>
                                <a class="dropdown-item" href="{{ route('functionality') }}">{{ __('navbar.functionality') }}</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbarDropdownMenu" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('navbar.services_up') }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('services-overview') }}">{{ __('navbar.service_overview') }}</a>
                                <a class="dropdown-item" href="{{ route('implementation') }}">{{ __('navbar.implementation') }}</a>
                                <a class="dropdown-item" href="{{ route('support') }}">{{ __('navbar.support') }}</a>
                            </div>
                        </li>
                        <!--
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbarDropdownMenu" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('navbar.knowledge_base_up') }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">{{ __('navbar.news') }}</a>
                                <a class="dropdown-item" href="{{ route('blog') }}">{{ __('navbar.blog') }}</a>
                                <a class="dropdown-item" href="#">{{ __('navbar.information') }}</a>
                                <a class="dropdown-item" href="#">{{ __('navbar.answers') }}</a>
                                <a class="dropdown-item" href="{{ route('referrals') }}">{{ __('navbar.successful_projects') }}</a>
                            </div>
                        </li>
                    -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('referrals') }}">{{ __('navbar.customers_up') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">{{ __('navbar.contact_up') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>

        <script>
         $(document).ready(function(){
            $(window).resize(function(){
                if($(window).width() >= 920){
                    $('.navbarDropdownMenu').on('click', function(){
                        window.location.href=$(this).attr('href');
                    });
                }else{
                    $('.clickable-dropdown').on('click', function(){
                        return false;
                    })
                }
            }).resize();
        });
        </script>
           

