<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Поиск...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Навигация</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is( 'home') ? 'active' : '' }}"><a href="/home"><i class="fa fa-dashboard"></i> <span>Главная</span></a></li>
            <li class="{{ Request::is( 'documents') ? 'active' : '' }}"><a href="/documents"><i class="fa fa-file-text-o"></i> <span>Документы</span></a></li>
            <li class="{{ Request::is( 'oss') ? 'active' : '' }}"><a href="/oss"><i class="fa fa-database"></i> <span>Основные средства</span></a></li>
            <li class="{{ Request::is( 'organization') ? 'active' : '' }}"><a href="/organization"><i class="fa fa-building"></i> <span>Организация</span></a></li>
            <li class="{{ Request::is( 'profile') ? 'active' : '' }}"><a href="/profile"><i class="fa fa-user"></i> <span>Профиль</span></a></li>
            <li><a href="/logout"><i class="fa fa-sign-out"></i> <span>Выход</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>