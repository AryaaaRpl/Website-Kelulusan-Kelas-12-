@extends('layouts.main')

@section('content')
<div class="min-h-[100dvh] mesh-gradient flex flex-col items-center justify-center px-4 relative overflow-hidden py-12 md:py-20">
    <!-- Immersive Background -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-[-20%] left-[-10%] w-[60%] h-[60%] bg-blue-500/10 blur-[120px] rounded-full animate-float"></div>
        <div class="absolute bottom-[-20%] right-[-10%] w-[60%] h-[60%] bg-indigo-500/10 blur-[120px] rounded-full animate-float" style="animation-delay: -5s;"></div>
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
    </div>
    
    <!-- Back Button -->
    <div class="reveal-1 w-full max-w-2xl mb-8 relative z-20">
        <a href="{{ route('home') }}" class="group inline-flex items-center gap-3 text-blue-100/60 hover:text-white bg-white/5 backdrop-blur-xl px-6 py-3 rounded-2xl border border-white/10 transition-all hover:bg-white/10 shadow-2xl">
            <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span class="font-black text-xs uppercase tracking-[0.2em]">Kembali</span>
        </a>
    </div>

    <!-- Result Card -->
    <div class="reveal-2 w-full max-w-2xl relative z-20">
        @if($siswa['status'] === 'LULUS')
        <!-- LULUS State -->
        <div class="card-glass-bright rounded-[3rem] overflow-hidden border-white/10 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.5)]">
            <!-- Dynamic Header -->
            <div class="relative px-8 py-16 text-center overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 via-blue-500/10 to-transparent"></div>
                <div class="absolute -top-24 -right-24 w-48 h-48 bg-emerald-500/20 blur-[80px] rounded-full"></div>
                
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-white/10 backdrop-blur-2xl rounded-3xl mb-8 border border-white/20 shadow-2xl animate-bounce">
                        <svg class="w-14 h-14 text-emerald-400 filter drop-shadow-[0_0_15px_rgba(52,211,153,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-5xl sm:text-6xl font-black text-white mb-4 tracking-tighter leading-none">
                        SELAMAT! 🎉
                    </h2>
                    <div class="inline-block px-6 py-2 bg-emerald-500/20 backdrop-blur-md rounded-full border border-emerald-500/30">
                        <span class="text-emerald-400 text-xs sm:text-sm font-black uppercase tracking-[0.3em]">Dinyatakan Lulus</span>
                    </div>
                </div>
            </div>
            
            <!-- Student Details -->
            <div class="px-8 sm:px-12 pb-12">
                <div class="grid grid-cols-1 gap-6 mb-10">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-white/5 blur-xl rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="relative bg-white/5 backdrop-blur-md rounded-3xl p-6 border border-white/10">
                            <span class="text-[10px] font-black text-blue-100/30 uppercase tracking-[0.3em] block mb-3">Identitas Peserta</span>
                            <div class="space-y-4">
                                <div>
                                    <div class="text-[10px] text-blue-100/20 font-bold uppercase mb-1">Nama Lengkap</div>
                                    <div class="text-xl sm:text-2xl font-black text-white uppercase">{{ $siswa['nama'] }}</div>
                                </div>
                                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/5">
                                    <div>
                                        <div class="text-[10px] text-blue-100/20 font-bold uppercase mb-1">NISN</div>
                                        <div class="text-lg font-mono font-bold text-blue-300">{{ $siswa['nisn'] }}</div>
                                    </div>
                                    <div>
                                        <div class="text-[10px] text-blue-100/20 font-bold uppercase mb-1">Program Keahlian</div>
                                        <div class="text-lg font-bold text-white leading-tight">{{ $siswa['sekolah'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Inspiring Quote -->
                <div class="p-8 bg-gradient-to-br from-blue-600/20 to-indigo-600/20 rounded-[2.5rem] border border-blue-500/20 text-center relative overflow-hidden group">
                    <div class="absolute top-[-50%] left-[-50%] w-full h-full bg-blue-500/10 blur-[100px] animate-pulse"></div>
                    <div class="relative z-10">
                        <h4 class="text-white font-black text-lg mb-3 tracking-wide">Masa Depan Menanti!</h4>
                        <p class="text-blue-100/60 text-sm leading-relaxed italic">
                            "Keberhasilan adalah jumlah dari upaya kecil yang diulangi hari demi hari."
                        </p>
                    </div>
                </div>
                
                <div class="mt-10">
                    <a href="{{ route('home') }}" class="block w-full bg-white text-blue-900 font-black py-5 rounded-2xl hover:scale-[1.02] transition-transform text-center tracking-widest text-sm shadow-2xl">
                        KEMBALI KE BERANDA
                    </a>
                </div>
            </div>
        </div>
        
        @else
        <!-- TIDAK LULUS State -->
        <div class="card-glass-bright rounded-[3rem] overflow-hidden border-white/10 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.5)]">
            <div class="relative px-8 py-16 text-center overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/20 via-orange-500/10 to-transparent"></div>
                
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-white/10 backdrop-blur-2xl rounded-3xl mb-8 border border-white/20 shadow-2xl">
                        <svg class="w-14 h-14 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-4xl sm:text-5xl font-black text-white mb-4 tracking-tighter uppercase">MOHON MAAF</h2>
                    <div class="inline-block px-6 py-2 bg-orange-500/20 backdrop-blur-md rounded-full border border-orange-500/30">
                        <span class="text-orange-400 text-xs sm:text-sm font-black uppercase tracking-[0.3em]">Belum Berhasil</span>
                    </div>
                </div>
            </div>
            
            <div class="px-8 sm:px-12 pb-12 text-center">
                <div class="bg-white/5 backdrop-blur-md rounded-3xl p-8 border border-white/10 mb-8">
                    <div class="text-[10px] text-blue-100/20 font-bold uppercase mb-2 tracking-widest">Nama Lengkap</div>
                    <div class="text-2xl font-black text-white uppercase tracking-tight">{{ $siswa['nama'] }}</div>
                </div>

                <div class="p-8 bg-orange-500/10 rounded-[2.5rem] border border-orange-500/20">
                    <h4 class="text-orange-200 font-black text-lg mb-3 tracking-wide uppercase">Tetap Semangat!</h4>
                    <p class="text-orange-100/60 text-sm leading-relaxed">
                        Satu kegagalan bukan berarti akhir dari segalanya. Masih banyak jalan menuju kesuksesan. Teruslah berjuang dan jangan menyerah! 💪
                    </p>
                </div>
                
                <div class="mt-10">
                    <a href="{{ route('home') }}" class="block w-full bg-white text-orange-900 font-black py-5 rounded-2xl hover:scale-[1.02] transition-transform text-center tracking-widest text-sm shadow-2xl uppercase">
                        KEMBALI & COBA LAGI
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="mt-auto pt-20 pb-10 text-center relative z-10 opacity-30">
        <p class="text-[10px] font-bold text-blue-100 tracking-[0.5em] uppercase">
            © 2026 SMKS MUHAMMADIYAH 1 GENTENG
        </p>
    </footer>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if($siswa['status'] === 'LULUS')
            const duration = 5 * 1000;
            const end = Date.now() + duration;

            (function frame() {
                confetti({
                    particleCount: 5,
                    angle: 60,
                    spread: 55,
                    origin: { x: 0 },
                    colors: ['#34d399', '#3b82f6', '#facc15']
                });
                confetti({
                    particleCount: 5,
                    angle: 120,
                    spread: 55,
                    origin: { x: 1 },
                    colors: ['#34d399', '#3b82f6', '#facc15']
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            }());
        @endif
    });
</script>
@endpush