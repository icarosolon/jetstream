<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    <thead>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>ações</th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>
                                @canTeamPermission('delete')
                                    <a href="">Deletar</a>
                                @else
                                    Você não tem permissão para apagar!
                                @endcanTeamPermission
                            </td>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
