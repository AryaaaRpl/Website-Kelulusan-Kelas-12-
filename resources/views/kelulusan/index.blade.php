@extends('layouts.main')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center px-4 relative overflow-hidden py-12 md:py-20">
    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
    
    <!-- Header -->
    <div class="text-center mb-12 relative z-10">
        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10.5v-17m-3.5 6.5l3-3 3 3"></path>
            </svg>
            <span class="text-blue-200 text-sm font-medium">Pengumuman Kelulusan</span>
        </div>
        
        <div class="w-24 h-24 mx-auto mb-6 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center shadow-lg">
           <img src="{{ asset('/Logo-removebg-preview.png') }}" alt="Logo SMKS Muhammadiyah 1 Genteng" class="w-16 h-16 object-contain">
        </div>
        
        <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold text-white mb-4 tracking-tight leading-tight">
            Masa Depan Cerah
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
                Menantimu, Kelas XII!
            </span>
        </h1>
        
        <p class="text-blue-200/80 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
            Selamat kepada seluruh siswa kelas 12 yang akan segera melangkah ke jenjang perkuliahan. Teruslah bermimpi besar dan berjuang untuk masa depan gemilang!
        </p>
    </div>

    <!-- Search Card -->
    <div class="w-full max-w-lg relative z-10">
        <div class="card-glass rounded-3xl p-8 glow-effect">
            @if(session('error'))
            <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl flex items-center gap-3">
                <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="text-red-700 text-sm">{{ session('error') }}</span>
            </div>
            @endif

            <form action="{{ route('kelulusan.search') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="nisn" class="block text-sm font-semibold text-gray-700 mb-2">
                        Nomor NISN
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            name="nisn" 
                            id="nisn"
                            value="{{ old('nisn') }}"
                            placeholder="Masukkan 10 digit NISN"
                            class="w-full pl-11 pr-4 py-3 text-base border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-500/20 transition-all outline-none"
                            maxlength="10"
                            required
                        >
                    </div>
                    <p class="mt-2 text-xs text-gray-500">Contoh: 1234567890</p>
                </div>

                <button 
                    type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/30 flex items-center justify-center gap-2 text-base"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Cek Kelulusan
                </button>
            </form>
        </div>

        <!-- Info Card -->
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-3">
            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-3 text-center border border-white/10">
                <div class="text-xl font-bold text-white">🎓</div>
                <div class="text-blue-200/70 text-xs">Informasi Kelulusan Kelas 12</div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-3 text-center border border-white/10">
                <div class="text-xl font-bold text-white">🏫</div>
                <div class="text-blue-200/70 text-xs">Siap Menuju Kampus Impian</div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-3 text-center border border-white/10">
                <div class="text-xl font-bold text-white">🚀</div>
                <div class="text-blue-200/70 text-xs">Semangat & Sukses Selalu!</div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-16 text-center relative z-10">
        <p class="text-blue-200/60 text-sm">
            © 2026 SMKS Muhammadiyah 1 Genteng. All rights reserved.
        </p>
    </footer>
</div>
@endsection