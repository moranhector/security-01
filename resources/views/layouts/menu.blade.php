@can('ARTESANOS-VER')
<li class="nav-item">
    <a href="{{ route('artesanos.index') }}" class="nav-link {{ Request::is('artesanos*') ? 'active' : '' }}">
    <i class="far fa-user nav-icon"></i>
        <p>Artesanos</p>
    </a>
</li>
@endcan

@can('RUBROS-VER')
<li class="nav-item">
    <a href="{{ route('rubros.index') }}" class="nav-link {{ Request::is('rubros*') ? 'active' : '' }}">
    <i class="fa fa-list-ul nav-icon"></i>        
        <p>Rubros</p>
    </a>
</li>
@endcan


 
<li class="nav-item">
    <a href="{{ route('clientes.index') }}" class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Clientes</p>
    </a>
</li>



 
<a href="{{ url('usuarios') }}" class="nav-link {{ Request::is('usuarios*') ? 'active' : '' }}">    
    <i class="fa fa-users  nav-icon"></i><span>&nbsp;&nbsp; Usuarios</span>
</a>
 



<a href="{{ url('roles') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">     
    <i class="fa fa-user-lock  nav-icon"></i><span>&nbsp;&nbsp;&nbsp;Roles</span>
</a>
