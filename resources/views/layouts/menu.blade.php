

@can('usuarios-ver') 
<a href="{{ url('usuarios') }}" class="nav-link {{ Request::is('usuarios*') ? 'active' : '' }}">    
    <i class="fa fa-users  nav-icon"></i><span>&nbsp;&nbsp; Usuarios</span>
</a>
@endcan


@can('roles-ver')
<a href="{{ url('roles') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">     
    <i class="fa fa-user-lock  nav-icon"></i><span>&nbsp;&nbsp;&nbsp;Roles</span>
</a>
@endcan
