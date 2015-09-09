<figure class="logo">
    <img src="{{ asset('images/logo-dashboard.png') }}">
</figure>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <h5 class="organization-name">{{Auth::user() -> organization -> short_name}}</h5>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">У вас 4 сообщения</li>
                    <li>
                        <!-- inner menu: contains the actual data -->

                    <li class="footer"><a href="#">Посмотреть все ссобщения</a></li>
                </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">У вас 10 оповещений</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 документов добавлено
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user text-red"></i> Скоро окончание учетного периода
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="#">Смотреть все</a></li>
                </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">У вас 9 задач</li>
                    <li>
                        <!-- inner menu: contains the actual data -->

                    </li>
                    <li class="footer">
                        <a href="#">Посмотреть всеы</a>
                    </li>
                </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="/profile" class="btn btn-default btn-flat">Профиль</a>
                        </div>
                        <div class="pull-right">
                            <a href="/logout" class="btn btn-default btn-flat">Выйти из системы</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>