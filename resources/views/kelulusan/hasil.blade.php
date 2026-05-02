@extends('layouts.main')

@section('content')
<div class="min-h-[100dvh] flex flex-col items-center justify-start sm:justify-center px-4 relative overflow-hidden py-6 sm:py-12">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
        <div class="absolute top-10 -left-10 w-48 h-48 sm:w-72 sm:h-72 bg-blue-500/10 rounded-full blur-[80px] sm:blur-3xl animate-float"></div>
        <div class="absolute bottom-10 -right-10 w-64 h-64 sm:w-96 sm:h-96 bg-indigo-500/10 rounded-full blur-[80px] sm:blur-3xl animate-float" style="animation-delay: -3s;"></div>
    </div>
    
    <!-- Back Button -->
    <div class="w-full max-w-2xl mb-6 relative z-10">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-white/80 hover:text-white bg-white/5 backdrop-blur-md px-4 py-2 rounded-2xl border border-white/10 transition-all hover:bg-white/10">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span class="font-semibold text-sm">Kembali</span>
        </a>
    </div>

    <!-- Result Card -->
    <div class="w-full max-w-2xl relative z-10">
        @if($siswa['status'] === 'LULUS')
        <!-- LULUS State - Premium SNBT Style -->
        <div class="card-glass rounded-[2.5rem] overflow-hidden glow-effect border-0">
            <!-- Success Header -->
            <div class="status-lulus px-6 py-10 sm:py-12 text-center relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-4 animate-bounce">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-2 tracking-tight">
                        Selamat! 🎉
                    </h2>
                    <p class="text-white/90 text-sm sm:text-base font-medium uppercase tracking-widest">
                        Anda Dinyatakan Lulus
                    </p>
                </div>
            </div>
            
            <!-- Student Info -->
            <div class="px-6 sm:px-10 py-8 sm:py-10 bg-white">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100">
                        <span class="text-gray-400 text-[10px] uppercase font-bold tracking-widest block mb-1">NISN</span>
                        <div class="text-lg font-bold text-gray-800">{{ $siswa['nisn'] }}</div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100">
                        <span class="text-gray-400 text-[10px] uppercase font-bold tracking-widest block mb-1">Nama Peserta</span>
                        <div class="text-lg font-bold text-gray-800">{{ $siswa['nama'] }}</div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100">
                        <span class="text-gray-400 text-[10px] uppercase font-bold tracking-widest block mb-1">Sekolah</span>
                        <div class="text-sm font-bold text-gray-800">SMKS Muhammadiyah 1 Genteng</div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100">
                        <span class="text-gray-400 text-[10px] uppercase font-bold tracking-widest block mb-1">Program Keahlian</span>
                        <div class="text-sm font-bold text-gray-800">{{ $siswa['sekolah'] }}</div>
                    </div>
                </div>
                
                <!-- Success Message -->
                <div class="p-6 bg-emerald-50 rounded-3xl border border-emerald-100 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <svg class="w-16 h-16 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0z"></path>
                        </svg>
                    </div>
                    <div class="relative z-10">
                        <h4 class="font-bold text-emerald-900 mb-2 flex items-center gap-2">
                             Masa Depan Menanti!
                        </h4>
                        <p class="text-emerald-800/80 text-sm leading-relaxed">
                            Selamat atas kelulusan Anda! Ini adalah awal dari perjalanan panjang menuju kesuksesan. Teruslah belajar dan berkarya untuk nusa dan bangsa.
                        </p>
                    </div>
                </div>
                
                <!-- Action Button -->
                <div class="mt-8">
                    <a href="{{ route('home') }}" class="block w-full bg-gray-900 hover:bg-black text-white font-bold py-4 px-6 rounded-2xl transition-all duration-300 text-center shadow-xl shadow-gray-200">
                        Cek Peserta Lain
                    </a>
                </div>
            </div>
        </div>
        
        @else
        <!-- TIDAK LULUS State - Soft & Encouraging -->
        <div class="card-glass rounded-[2.5rem] overflow-hidden glow-effect border-0">
            <div class="status-tidak-lulus px-6 py-10 text-center relative overflow-hidden">
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-white mb-2">Mohon Maaf</h2>
                    <p class="text-white/90 text-sm font-medium uppercase tracking-widest">
                        Anda Belum Berhasil
                    </p>
                </div>
            </div>
            
            <div class="px-6 sm:px-10 py-8 bg-white text-center">
                <div class="max-w-sm mx-auto mb-8">
                    <div class="bg-gray-50 rounded-2xl p-6 mb-4 border border-gray-100">
                        <span class="text-gray-400 text-[10px] uppercase font-bold tracking-widest block mb-1 text-center">Nama Peserta</span>
                        <div class="text-xl font-bold text-gray-800">{{ $siswa['nama'] }}</div>
                    </div>
                </div>

                <div class="p-6 bg-amber-50 rounded-3xl border border-amber-100">
                    <h4 class="font-bold text-amber-900 mb-2">Jangan Menyerah!</h4>
                    <p class="text-amber-800/80 text-sm leading-relaxed">
                        Kegagalan hanyalah kesuksesan yang tertunda. Tetap semangat, terus mencoba, dan jangan biarkan semangatmu padam. Kami percaya pada potensimu! 💪
                    </p>
                </div>
                
                <div class="mt-8">
                    <a href="{{ route('home') }}" class="block w-full bg-gray-900 hover:bg-black text-white font-bold py-4 px-6 rounded-2xl transition-all duration-300 text-center shadow-xl shadow-gray-200">
                        Kembali Ke Beranda
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="mt-auto pt-8 text-center relative z-10">
        <p class="text-blue-100/40 text-xs">
            © 2026 SMKS Muhammadiyah 1 Genteng.
        </p>
    </footer>
</div>
@endsection