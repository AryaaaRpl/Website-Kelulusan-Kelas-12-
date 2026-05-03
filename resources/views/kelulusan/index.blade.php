@extends('layouts.main')

@section('content')
<div class="min-h-[100dvh] flex flex-col items-center justify-center px-4 relative overflow-hidden py-8 sm:py-12 md:py-20">
    <!-- Decorative Elements - Optimized for performance -->
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
        <div class="absolute top-10 -left-10 w-48 h-48 sm:w-72 sm:h-72 bg-blue-500/10 rounded-full blur-[80px] sm:blur-3xl animate-float"></div>
        <div class="absolute bottom-10 -right-10 w-64 h-64 sm:w-96 sm:h-96 bg-indigo-500/10 rounded-full blur-[80px] sm:blur-3xl animate-float" style="animation-delay: -3s;"></div>
    </div>
    
    <!-- Header -->
    <div class="text-center mb-8 sm:mb-12 relative z-10 w-full max-w-4xl">
        <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-sm px-3 py-1.5 rounded-full mb-4 sm:mb-6 border border-white/10">
            <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10.5v-17m-3.5 6.5l3-3 3 3"></path>
            </svg>
            <span class="text-blue-100/90 text-xs sm:text-sm font-medium uppercase tracking-wider">Pengumuman Kelulusan</span>
        </div>
        
        <div class="w-20 h-20 sm:w-24 sm:h-24 mx-auto mb-6 bg-white/5 backdrop-blur-md rounded-2xl flex items-center justify-center shadow-2xl border border-white/10 animate-float">
           <img src="{{ asset('/Logo-removebg-preview.png') }}" alt="Logo SMKS Muhammadiyah 1 Genteng" class="w-14 h-14 sm:w-16 sm:h-16 object-contain">
        </div>
        
        <h1 class="text-2xl sm:text-4xl md:text-6xl font-extrabold text-white mb-4 tracking-tight leading-tight px-2">
            Selamat Menempuh <br class="hidden sm:block"> Perjalanan Baru, <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">
                 Terima Kasih Sudah Berjuang!
            </span>
        </h1>
        
        <p class="text-blue-100/70 text-sm sm:text-lg max-w-2xl mx-auto leading-relaxed px-4">
            Selamat seluruh murid kelas XII, satu perjalanan usai, perjalanan lain sudah menunggu. Teruslah bermimpi besar dan berjuang untuk masa depan gemilang!
        </p>
    </div>

    <!-- Search Card -->
    <div class="w-full max-w-md relative z-10">
        <div class="card-glass rounded-[2rem] p-6 sm:p-8 glow-effect">
            @if(session('error'))
            <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-2xl flex items-center gap-3 animate-pulse">
                <svg class="w-5 h-5 text-red-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="text-red-200 text-sm font-medium">{{ session('error') }}</span>
            </div>
            @endif

            <form action="{{ route('kelulusan.search') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="nisn" class="block text-xs sm:text-sm font-bold text-gray-500 uppercase tracking-widest mb-2 ml-1">
                        Nomor NISN Siswa
                    </label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                            </svg>
                        </div>
                        <input 
                            type="tel" 
                            name="nisn" 
                            id="nisn"
                            value="{{ old('nisn') }}"
                            placeholder="Contoh: 1234567890"
                            class="w-full pl-12 pr-4 py-4 text-gray-900 text-base sm:text-lg border-2 border-gray-100 rounded-2xl focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none bg-gray-50/50"
                            maxlength="10"
                            inputmode="numeric"
                            pattern="[0-9]*"
                            required
                        >
                    </div>
                </div>

                <button 
                    type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 px-6 rounded-2xl transition-all duration-300 shadow-lg shadow-blue-500/25 active:scale-[0.98] flex items-center justify-center gap-3 text-base sm:text-lg"
                >
                    <span>Cek Kelulusan</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </form>
        </div>

        <!-- Info Grid -->
        <div class="mt-8 grid grid-cols-3 gap-3">
            <div class="bg-white/5 backdrop-blur-md rounded-2xl p-3 text-center border border-white/10 group hover:bg-white/10 transition-colors">
                <div class="text-xl mb-1 transform group-hover:scale-110 transition-transform">🎓</div>
                <div class="text-blue-100/50 text-[10px] sm:text-xs font-medium leading-tight">Info Lulus</div>
            </div>
            <div class="bg-white/5 backdrop-blur-md rounded-2xl p-3 text-center border border-white/10 group hover:bg-white/10 transition-colors">
                <div class="text-xl mb-1 transform group-hover:scale-110 transition-transform">🏫</div>
                <div class="text-blue-100/50 text-[10px] sm:text-xs font-medium leading-tight">Kampus</div>
            </div>
            <div class="bg-white/5 backdrop-blur-md rounded-2xl p-3 text-center border border-white/10 group hover:bg-white/10 transition-colors">
                <div class="text-xl mb-1 transform group-hover:scale-110 transition-transform">🚀</div>
                <div class="text-blue-100/50 text-[10px] sm:text-xs font-medium leading-tight">Sukses</div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-auto pt-12 text-center relative z-10">
        <p class="text-blue-100/40 text-xs sm:text-sm">
            © 2026 SMKS Muhammadiyah 1 Genteng.
        </p>
    </footer>
</div>
@endsection