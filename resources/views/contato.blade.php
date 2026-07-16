@extends('layouts.app')

@section('title', 'Contato')

@section('content')
    <section class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
        <p class="text-sm font-medium text-brand-600">Fale conosco</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            Contato
        </h1>
        <p class="mt-4 max-w-2xl text-base leading-relaxed text-slate-600">
            Esta é a página de contato do meu site. Em um projeto real, aqui
            ficaria um formulário ou os canais de atendimento.
        </p>

        <dl class="mt-8 grid gap-4 sm:grid-cols-2">
            <div class="rounded-xl border border-slate-100 bg-slate-50 p-4">
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">E-mail</dt>
                <dd class="mt-1 text-sm font-medium text-slate-800">contato@exemplo.com</dd>
            </div>
            <div class="rounded-xl border border-slate-100 bg-slate-50 p-4">
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Telefone</dt>
                <dd class="mt-1 text-sm font-medium text-slate-800">(11) 0000-0000</dd>
            </div>
        </dl>
    </section>
@endsection
