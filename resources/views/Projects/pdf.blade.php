<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Gobierno de El Salvador</h1>
    <br>
    <h2 class="text-center">Ministerio de Gobernacion y Desarrollo Terrirotial</h2>
    <br>
    <p>Fecha: {{ date('d/m/Y') }}</p>
    <br>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombredeproyecto</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Fuentefondo</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Montoplanificado</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Montopatrocinado</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Montofondospropios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                        {{ $project->id }}</td>
                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                        {{ $project->nombredeproyecto }}</td>
                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                        {{ $project->fuentefondo }}</td>
                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                        {{ $project->montoplanificado }}</td>
                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                        {{ $project->montopatrocinado }}</td>
                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                        {{ $project->montofondospropios }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
