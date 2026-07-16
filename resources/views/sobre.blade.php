@extends('layouts.app')

@section('title', 'Sobre')

@section('content')
    <section class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
        <p class="text-sm font-medium text-brand-600">Institucional</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            Sobre
        </h1>
        <p class="mt-4 max-w-2xl text-base leading-relaxed text-slate-600">
            Esta é a página sobre do meu site. O projeto demonstra o uso do
            Laravel com Eloquent para cadastro e listagem de clientes.
        </p>

        <ul class="mt-8 space-y-3 text-sm text-slate-600">
            <li class="flex items-start gap-2">
                <span class="mt-0.5 text-brand-600">✓</span>
                Models e migrations com Eloquent
            </li>
            <li class="flex items-start gap-2">
                <span class="mt-0.5 text-brand-600">✓</span>
                Controllers e rotas web
            </li>
            <li class="flex items-start gap-2">
                <span class="mt-0.5 text-brand-600">✓</span>
                Validação e formulários Blade
            </li>
        </ul>
    </section>
@endsection
