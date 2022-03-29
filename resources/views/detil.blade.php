<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rekam Medis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <article class="mb-5 border-bottom pb-3">
                        <h3>
                            <a style="color: blue;" href="/rekam/{{ $rekam->id }}">
                            Rekam Medis (ID:{{ $rekam->id }}) {{ $rekam->pasien->nama }}
                            </a>                    
                        </h3>
                        <h6>Pasien: <a style="color: blue;" class="text-decoration-none" href="/pasien/{{ $rekam->pasien->id }}">{{ $rekam->pasien->nama }}</a></h6> 
                        <h6>Dokter: <a style="color: blue;" class="text-decoration-none" href="/dokter/{{ $rekam->dokter->id }}">{{ $rekam->dokter->nama }}</a></h6>
                        <h6>Kondisi Kesehatan: {{ $rekam->kondisi }}</h6>
                        <h6>Suhu Tubuh: {{ $rekam->suhu }}</h6>
                        <h6>Resep File Path: {{ $rekam->filepath }}</h6>
                    </article>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
