@if(Auth::check())    
    <aside class="left-sidebar">
        <div class="scroll-sidebar">
            <div class="user-profile" style="background: url({{asset('img/user-info.jpg')}}) no-repeat;">
                <!-- User profile image -->
                <div class="profile-img"> <img src="{{asset('img/zou-perfil-navbar.png')}}" alt="user" /> </div>
                <!-- User profile text-->
                <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="true">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu animated flipInY"> 
                        <a href="#" class="dropdown-item"><i class="ti-user"></i>
                            Mi perfil
                        </a> 
                        <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <div class="dropdown-divider"></div> 
                        <a href="#" class="dropdown-item"><i class="ti-settings"></i>configuración</a>
                        <div class="dropdown-divider"></div> 
                        <div  class="dropdown-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">COMPANIES</li>
                    <li> 
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i class="fas fa-university"></i>
                            <span class="hide-menu"> Companies </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ route('companies.index') }}">All</a></li>
                            <li><a href="{{ route('companies.create') }}">New Companies</a></li>
                        </ul>
                    </li>
                    <li> 
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span class="hide-menu">Employees</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ route('employees.index') }}">All</a></li>
                            <li><a href="{{ route('employees.create') }}">New employee</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="sidebar-footer">
            <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="fas fa-cogs"></i></a>
            <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <div class="link">
                <a href="{{ route('logout') }}" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
                    <i class="fa fa-power-off"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </aside>
@endif
