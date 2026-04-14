<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">

<div class="min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">

            <!-- LOGO + TITLE -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('https://pegerarea.com/wp-content/uploads/2021/09/logo-1-e1632906395587.png') }}" class="h-9 w-9 object-contain">
                <h1 class="text-lg font-semibold text-gray-800">
                    Dashboard Admin
                </h1>
            </div>

            <!-- USER -->
            <div class="flex items-center space-x-6">

            <div class="text-sm font-medium text-gray-600 border-r pr-6 border-gray-200">
                <span class="text-gray-400 mr-1"></span> 
                {{ Auth::user()->name ?? 'Administrator' }}

            </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-sm text-red-500 hover:text-red-700">
                        Logout
                    </button>
                </form>
            </div>

        </div>
    </nav>

    <!-- CONTENT -->
    <main class="flex-1 py-8">
        <div class="max-w-7xl mx-auto px-6">
            {{ $slot }}
        </div>
    </main>

</div>

</body>
</html>