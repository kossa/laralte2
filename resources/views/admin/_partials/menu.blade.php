<?php $route = (\Route::current()->getAction()['as'] != null) ? \Route::current()->getAction()['as'] : ''; ?>


<ul class="sidebar-menu">
    <li class="header">CONTENU</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="<?php echo ( starts_with($route, ADMIN.'.dash') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.dash') }}">
            <i class="fa fa-dashboard"></i> 
            <span>Dashboard</span>
        </a>
    </li>
    <li class="<?php echo ( starts_with($route, ADMIN.'.recettes') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.recettes.index') }}">
            <i class="fa fa-edit"></i> 
            <span>Recettes</span>
        </a>
    </li>
    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <i class="fa fa-list"></i> 
            <span>Categories</span>
        </a>
    </li>
    <li class="<?php echo ( starts_with($route, ADMIN.'.users') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.users.index') }}">
            <i class="fa fa-users"></i> 
            <span>Users</span>
        </a>
    </li>
    
</ul><!-- /.sidebar-menu -->