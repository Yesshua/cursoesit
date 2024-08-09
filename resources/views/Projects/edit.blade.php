<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Proyecto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                <form method="POST" action="{{ route('projects.update', $project->id) }}" class="max-w-sm mx-auto">
                    @csrf
                    @method ('PUT')

                    <div class="mb-5">
                        <label for="nombredeproyecto"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombredeproyecto</label>
                        <input type="text" name="nombredeproyecto" id="nombredeproyecto"
                            value="{{ old('nombredeproyecto', $project->nombredeproyecto) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    <div class="mb-5">
                        <label for="fuentefondo"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fuentefondo</label>
                        <input type="text" name="fuentefondo" id="fuentefondo"
                            value="{{ old('fuentefondo', $project->fuentefondo) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    <div class="mb-5">
                        <label for="montoplanificado"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Montoplanificado</label>
                        <input type="number" name="montoplanificado" id="montoplanificado"
                            value="{{ old('montoplanificado', $project->montoplanificado) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    <div class="mb-5">
                        <label for="montopatrocinado"
                            class="block mb-2 text-sm font-medium  text-gray-900 dark:text-white">Montopatrocinado</label>
                        <input type="number" name="montopatrocinado" id="montopatrocinado"
                            value="{{ old('montopatrocinado', $project->montopatrocinado) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    <div class="mb-5">
                        <label for="montofondospropios"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Montofondospropios</label>
                        <input type="number" name="montofondospropios" id="montofondospropios"
                            value="{{ old('montofondospropios', $project->montofondospropios) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gardar</button>
                    <a href="{{ route('projects.index') }}"
                        class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancelar</a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
