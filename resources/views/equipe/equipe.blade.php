@extends('layouts.app')

@section('title', 'Nossa Equipe')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
        <h2 class="text-3xl font-black text-slate-900">Nossa Equipe</h2>
        <section id="funcionalidades" class="mt-10">
    <div class="mb-5 flex items-end justify-between gap-4">
        <h3 class="text-2xl font-bold text-slate-900 md:text-3xl">Funcionalidades principais</h3>
        <p class="text-sm text-slate-500">Foco em clareza, desempenho e usabilidade</p>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        <article class="flex items-center gap-4 rounded-2xl bg-white p-5 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
    <img src="{{ asset('assets/img/bia.jpeg') }}" 
         alt="Foto" 
         class="h-28 w-24 rounded-xl object-cover shrink-0">
    <div>
        <p class="text-xs font-semibold uppercase tracking-[0.15em] text-cyan-600">Administração</p>
        <h4 class="mt-1 text-lg font-bold text-slate-900">Ana Beatriz</h4>
        <p class="mt-2 text-sm text-slate-600">Gerente administrativa</p>
    </div>
</article>

       <article class="flex items-center gap-4 rounded-2xl bg-white p-5 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
    <img src="{{ asset('assets/img/biazinha.jpg') }}" 
         alt="Foto" 
         class="h-28 w-24 rounded-xl object-cover shrink-0">
    <div>
        <p class="text-xs font-semibold uppercase tracking-[0.15em] text-cyan-600">A mais mais </p>
        <h4 class="mt-1 text-lg font-bold text-slate-900">Biazinha</h4>
        <p class="mt-2 text-sm text-slate-600">chefe</p>
    </div>
</article>

        <article class="flex items-center gap-4 rounded-2xl bg-white p-5 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
    <img src="{{ asset('assets/img/beatriz.jpeg') }}" 
         alt="Foto" 
         class="h-28 w-24 rounded-xl object-cover shrink-0">
    <div>
        <p class="text-xs font-semibold uppercase tracking-[0.15em] text-cyan-600">Supervisora</p>
        <h4 class="mt-1 text-lg font-bold text-slate-900">Beatriz</h4>
        <p class="mt-2 text-sm text-slate-600">Chefe 2.0</p>
    </div>
</article>
    </div>
</section>

    </section>
@endsection