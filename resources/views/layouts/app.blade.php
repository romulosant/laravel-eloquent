<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Treinaweb') — Clientes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    <nav class="border-b border-slate-200 bg-white/90 backdrop-blur sticky top-0 z-20 shadow-sm">
        <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3 sm:px-6">
            <a href="/home" class="flex items-center gap-2 text-lg font-bold tracking-tight text-brand-700 hover:text-brand-800">
                <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-600 text-sm font-bold text-white">T</span>
                Treinaweb
            </a>

            <ul class="flex flex-wrap items-center gap-1 text-sm font-medium text-slate-600 sm:gap-2">
                <li>
                    <a href="/home"
                       class="rounded-lg px-3 py-2 transition hover:bg-slate-100 hover:text-brand-700 {{ request()->is('home') ? 'bg-brand-50 text-brand-700' : '' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/sobre"
                       class="rounded-lg px-3 py-2 transition hover:bg-slate-100 hover:text-brand-700 {{ request()->is('sobre') ? 'bg-brand-50 text-brand-700' : '' }}">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="/contato"
                       class="rounded-lg px-3 py-2 transition hover:bg-slate-100 hover:text-brand-700 {{ request()->is('contato') ? 'bg-brand-50 text-brand-700' : '' }}">
                        Contato
                    </a>
                </li>
                <li>
                    <a href="/clientes"
                       class="rounded-lg px-3 py-2 transition hover:bg-slate-100 hover:text-brand-700 {{ request()->is('clientes*') ? 'bg-brand-50 text-brand-700' : '' }}">
                        Clientes
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="mx-auto max-w-6xl px-4 py-8 sm:px-6 sm:py-10">
        @if (session('success'))
            <div class="mb-6 flex items-start gap-3 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-800" role="alert">
                <span class="mt-0.5 text-lg leading-none">✓</span>
                <p class="text-sm font-medium">{{ session('success') }}</p>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="mt-auto border-t border-slate-200 bg-white">
        <div class="mx-auto max-w-6xl px-4 py-6 text-center text-sm text-slate-500 sm:px-6">
            Projeto Laravel Eloquent — Treinaweb
        </div>
    </footer>
</body>
</html>
