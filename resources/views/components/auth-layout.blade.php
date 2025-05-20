@props(['title', 'section_title' => 'Menu', 'section_description' => ''])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <script src="{{ asset('resources/js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css">
</head>
<body class="bg-zinc-100">
    <main class="flex items-center justify-center min-h-screen">
        <div class="space-y-6 px-6 max-w-[80rem] w-full">
            <div class="flex gap-2 justify-center items-center">
                <div class="ph ph-student inline-block text-xl text-zinc-900 text-white p-1 rounded-md"></div>
                <p class="font-semibold text-sm">Student Management</p>
            </div>

            <div class="flex-col w-full gap-4 border border-zinc-300 bg-white p-6 shadow">
                <div class="space-y-2 text-center">
                    <h1 class="font-semibold text-2xl">{{ $section_title }}</h1>
                    <p class="text-zinc-600 text-sm">{{ $section_description }}</p>
                </div>

                <div class="h-[1px] bg-zinc-300"></div>

                <div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>
</body>
</html>
