<x-layouts.app :title="__('Info Alumno')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Secciones</th>
                </tr>

                @foreach ($alumnos as $alumno)
                    <tr>
                        <td><a href="{{ route('alumno.show', $alumno) }}">{{ $alumno->nombre }}</a></td>
                        <td>{{ $alumno->correo }}</td>
                        <td>
                            @foreach ($alumno->secciones as $seccion)
                                {{ $seccion->nombre }} - {{ $seccion->seccion }}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</x-layouts.app>