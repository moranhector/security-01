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


 