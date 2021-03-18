<a href="{{ route('vacantes.index') }}"
    class="text-white text-sm uppercase font-bold p-3 hover:text-gray-500 {{ Request::is('vacantes') ? 'bg-teal-500' : '' }}">Ver
    Vacantes</a>
<a href="{{ route('vacantes.create') }}"
    class="text-white text-sm uppercase font-bold p-3 hover:text-gray-500 {{ Request::is('vacantes/create') ? 'bg-teal-500' : '' }}">nueva
    vacante</a>
