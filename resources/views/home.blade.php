@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
        <p class="text-sm font-medium text-brand-600">Bem-vindo</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            Home
        </h1>
        <p class="mt-4 max-w-2xl text-base leading-relaxed text-slate-600">
            Esta é a home page do meu site. Aqui você encontra o ponto de partida
            do projeto Laravel com Eloquent desenvolvido no curso da Treinaweb.
        </p>

        <div class="mt-8 flex flex-wrap gap-3">
            <a href="/clientes"
               class="inline-flex rounded-xl bg-brand-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-brand-700">
                Ver clientes
            </a>
            <a href="/sobre"
               class="inline-flex rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50">
                Sobre o projeto
            </a>
        </div>
    </section>
@endsection
