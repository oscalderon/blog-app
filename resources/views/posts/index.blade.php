<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Listado de Posts</title>
</head>
<body>

<h2 class="font-medium leading-tight text-4xl mt-0 mb-2 text-blue-500 text-center">Listado de Posts</h2>

<!-- component -->
<div class="md:px-32 py-8 w-full">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">T&iacute;tulo</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Slug</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Contenido</td>
            </tr>
            </thead>
            <tbody class="text-gray-700">
            @foreach($posts as $post)
            <tr>
                <td class="text-left py-3 px-4">{{ $post->id }}</td>
                <td class="text-left py-3 px-4">{{ $post->title }}</td>
                <td class="text-left py-3 px-4">{{ $post->slug }}</td>
                <td class="text-left py-3 px-4">{{ $post->content }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
</div>

</body>
</html>
