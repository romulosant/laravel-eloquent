@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-sm font-medium text-brand-600">Cadastro</p>
            <h1 class="mt-1 text-3xl font-bold tracking-tight text-slate-900">
                Lista de Clientes
            </h1>
            <p class="mt-2 text-sm text-slate-500">
                Visualize e gerencie os clientes cadastrados no sistema.
            </p>
        </div>

        <a href="/clientes/create"
           class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2">
            <span class="text-lg leading-none">+</span>
            Criar cliente
        </a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[640px] text-left text-sm">
                <thead class="border-b border-slate-200 bg-slate-50 text-xs font-semibold uppercase tracking-wide text-slate-500">
                    <tr>
                        <th scope="col" class="px-6 py-3.5">Nome</th>
                        <th scope="col" class="px-6 py-3.5">Endereço</th>
                        <th scope="col" class="px-6 py-3.5">Descrição</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($clientes as $cliente)
                        <tr class="transition hover:bg-slate-50/80">
                            <td class="px-6 py-4 font-medium text-slate-900">
                                {{ $cliente->nome }}
                            </td>
                            <td class="px-6 py-4 text-slate-600">
                                {{ $cliente->endereco }}
                            </td>
                            <td class="px-6 py-4 text-slate-600">
                                {{ $cliente->descricao }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-16 text-center">
                                <div class="mx-auto max-w-sm">
                                    <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-xl text-slate-400">
                                        ∅
                                    </div>
                                    <p class="font-medium text-slate-800">Nenhum cliente cadastrado</p>
                                    <p class="mt-1 text-sm text-slate-500">
                                        Comece criando o primeiro cliente do sistema.
                                    </p>
                                    <a href="/clientes/create"
                                       class="mt-4 inline-flex rounded-lg bg-brand-600 px-4 py-2 text-sm font-semibold text-white hover:bg-brand-700">
                                        Cadastrar cliente
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($clientes->count())
            <div class="border-t border-slate-100 bg-slate-50 px-6 py-3 text-xs text-slate-500">
                {{ $clientes->count() }} {{ $clientes->count() === 1 ? 'cliente' : 'clientes' }} no total
            </div>
        @endif
    </div>
@endsection
