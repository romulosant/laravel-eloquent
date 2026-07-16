@extends('layouts.app')

@section('title', 'Cadastrar Cliente')

@section('content')
    <div class="mb-8">
        <a href="/clientes" class="text-sm font-medium text-brand-600 hover:text-brand-700">
            ← Voltar para a lista
        </a>
        <h1 class="mt-3 text-3xl font-bold tracking-tight text-slate-900">
            Cadastrar novo cliente
        </h1>
        <p class="mt-2 text-sm text-slate-500">
            Preencha os campos abaixo para adicionar um cliente.
        </p>
    </div>

    <div class="mx-auto max-w-2xl">
        @if ($errors->any())
            <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-red-800" role="alert">
                <p class="text-sm font-semibold">Erros de validação</p>
                <ul class="mt-2 list-inside list-disc space-y-1 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="/clientes" class="space-y-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
            @csrf

            <div>
                <label for="nome" class="mb-1.5 block text-sm font-medium text-slate-700">
                    Nome do cliente
                </label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    value="{{ old('nome') }}"
                    placeholder="Ex.: Maria Silva"
                    class="block w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm placeholder:text-slate-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/30 @error('nome') border-red-400 focus:border-red-500 focus:ring-red-500/30 @enderror"
                >
                @error('nome')
                    <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="endereco" class="mb-1.5 block text-sm font-medium text-slate-700">
                    Endereço do cliente
                </label>
                <input
                    type="text"
                    id="endereco"
                    name="endereco"
                    value="{{ old('endereco') }}"
                    placeholder="Ex.: Rua das Flores, 123"
                    class="block w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm placeholder:text-slate-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/30 @error('endereco') border-red-400 focus:border-red-500 focus:ring-red-500/30 @enderror"
                >
                @error('endereco')
                    <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="descricao" class="mb-1.5 block text-sm font-medium text-slate-700">
                    Descrição do cliente
                </label>
                <textarea
                    id="descricao"
                    name="descricao"
                    rows="4"
                    placeholder="Observações ou detalhes do cliente..."
                    class="block w-full rounded-xl border border-slate-300 bg-white px-3.5 py-2.5 text-sm text-slate-900 shadow-sm placeholder:text-slate-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/30 @error('descricao') border-red-400 focus:border-red-500 focus:ring-red-500/30 @enderror"
                >{{ old('descricao') }}</textarea>
                @error('descricao')
                    <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col-reverse gap-3 border-t border-slate-100 pt-6 sm:flex-row sm:justify-end">
                <a href="/clientes"
                   class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                    Cancelar
                </a>
                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-xl bg-brand-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2"
                >
                    Cadastrar cliente
                </button>
            </div>
        </form>
    </div>
@endsection
