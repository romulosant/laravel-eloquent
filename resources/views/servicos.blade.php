@extends('layouts.app')

@section('title', 'Serviços')

@section('content')
    <section class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
        <p class="text-sm font-medium text-brand-600">Catálogo</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            Detalhes do serviço
        </h1>
        <p class="mt-6 max-w-2xl rounded-xl border border-brand-100 bg-brand-50 px-4 py-3 text-base leading-relaxed text-brand-800">
            {{ $descricao }}
        </p>
    </section>
@endsection
