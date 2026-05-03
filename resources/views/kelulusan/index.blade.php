@extends('layouts.main')

@section('content')
<div class="min-h-[100dvh] mesh-gradient flex flex-col items-center justify-center px-4 relative overflow-hidden py-12 md:py-20">
    <!-- Immersive Animated Background Layers -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-[-20%] left-[-10%] w-[60%] h-[60%] bg-blue-500/10 blur-[120px] rounded-full animate-float"></div>
        <div class="absolute bottom-[-20%] right-[-10%] w-[60%] h-[60%] bg-indigo-500/10 blur-[120px] rounded-full animate-float" style="animation-delay: -5s;"></div>
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
    </div>
    
    <!-- Hero Section -->
    <div class="text-center relative z-10 w-full max-w-5xl mb-12">
        <div class="reveal-1 inline-flex items-center gap-3 bg-white/5 backdrop-blur-xl px-4 py-2 rounded-full mb-8 border border-white/10">
            <span class="flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-2 w-2 rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
            </span>
            <span class="text-blue-100/70 text-[10px] sm:text-xs font-bold uppercase tracking-[0.3em]">Pengumuman Kelulusan</span>
        </div>
        
        <!-- Fixed Logo Position with Premium Upgrade -->
        <div class="reveal-2 mb-12 mx-auto flex justify-center">
            <div class="logo-container group">
                <!-- Decorative Halo -->
                <div class="logo-halo group-hover:opacity-60 transition-opacity duration-700"></div>
                
                <!-- Main Glass Container -->
                <div class="logo-glass w-32 h-32 sm:w-40 sm:h-40 flex items-center justify-center animate-float group-hover:scale-110 duration-700">
                    <img src="{{ asset('/Logo-removebg-preview.png') }}" alt="Logo" class="w-24 h-24 sm:w-28 sm:h-28 object-contain animate-pulse-glow">
                    
                    <!-- Inner Shine Effect -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-white/5 to-transparent pointer-events-none"></div>
                </div>
            </div>
        </div>
        
        <h1 class="reveal-3 text-3xl sm:text-5xl md:text-7xl font-black mb-6 tracking-tighter leading-tight px-2">
            @if($isOpened)
                <span class="inline-block mb-2">🎉</span><br>
                <span class="text-white">Selamat & Sukses!</span> <br>
                <span class="text-gradient-gold">
                     Pengumuman Telah Dibuka
                </span>
            @else
                <span class="text-white">Selamat Menempuh</span> <br class="hidden sm:block"> 
                <span class="text-white">Perjalanan Baru,</span> <br>
                <span class="text-gradient-gold">
                     Terima Kasih Sudah Berjuang!
                </span>
            @endif
        </h1>
        
        <p class="reveal-4 text-blue-100/70 text-sm sm:text-lg max-w-2xl mx-auto leading-relaxed px-4">
            @if($isOpened)
                Hari yang dinantikan telah tiba. Silakan masukkan NISN Anda untuk melihat hasil perjuangan selama tiga tahun di SMKS Muhammadiyah 1 Genteng.
            @else
                Selamat seluruh murid kelas XII, satu perjalanan usai, perjalanan lain sudah menunggu. Teruslah bermimpi besar dan berjuang untuk masa depan gemilang!
            @endif
        </p>
    </div>

    <!-- Interactive Container -->
    <div class="w-full max-w-2xl relative z-10">
        <!-- Digital Countdown -->
        @if(!$isOpened)
        <div class="reveal-5 grid grid-cols-4 gap-2 sm:gap-4 mb-16">
            @foreach(['Hari' => 'days', 'Jam' => 'hours', 'Menit' => 'minutes', 'Detik' => 'seconds'] as $label => $id)
            <div class="relative group">
                <div class="card-glass-bright p-4 sm:p-6 text-center border-white/5 transition-all duration-500 group-hover:border-blue-500/30 group-hover:bg-white/[0.05]">
                    <span id="{{ $id }}" class="block text-3xl sm:text-5xl font-black text-white tabular-nums tracking-tighter mb-1">00</span>
                    <span class="text-blue-100/30 text-[9px] sm:text-xs uppercase font-black tracking-widest">{{ $label }}</span>
                </div>
                <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-blue-500 transition-all duration-500 group-hover:w-full opacity-50"></div>
            </div>
            @endforeach
        </div>
        @endif

        <!-- Main Card -->
        <div class="reveal-5 relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[3rem] blur-2xl opacity-20 group-hover:opacity-40 transition duration-1000"></div>
            <div class="card-glass-bright rounded-[2.5rem] p-8 sm:p-12 relative overflow-hidden {{ !$isOpened ? 'opacity-30 grayscale pointer-events-none' : '' }}">
                @if(session('error'))
                <div class="mb-10 p-5 bg-red-500/10 border border-red-500/20 rounded-2xl flex items-center gap-4 animate-pulse">
                    <div class="w-12 h-12 bg-red-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <span class="text-red-200 text-sm font-semibold">{{ session('error') }}</span>
                </div>
                @endif

                <form action="{{ route('kelulusan.search') }}" method="POST" class="space-y-10">
                    @csrf
                    @if(request()->has('test')) <input type="hidden" name="test" value="true"> @endif
                    @if(request()->has('dev')) <input type="hidden" name="dev" value="true"> @endif

                    <div class="space-y-4">                        <div class="flex justify-between items-center px-2">
                            <label for="nisn" class="text-[10px] font-black text-blue-100/40 uppercase tracking-[0.4em]">Nomor NISN Siswa</label>
                            <span class="text-[10px] font-bold text-blue-400/60 uppercase tracking-widest">Wajib</span>
                        </div>
                        <div class="relative group/input">
                            <input 
                                type="tel" 
                                name="nisn" 
                                id="nisn"
                                value="{{ old('nisn') }}"
                                placeholder="MASUKKAN 10 DIGIT NISN"
                                class="w-full px-8 py-6 glass-input text-2xl font-black tracking-[0.5em] text-center placeholder:tracking-normal placeholder:font-medium"
                                maxlength="10"
                                inputmode="numeric"
                                pattern="[0-9]*"
                                required
                                {{ !$isOpened ? 'disabled' : '' }}
                            >
                        </div>
                    </div>

                    <button 
                        type="submit"
                        class="w-full group/btn relative py-6 px-10 rounded-2xl overflow-hidden transition-all duration-500 active:scale-95 disabled:opacity-50"
                        {{ !$isOpened ? 'disabled' : '' }}
                    >
                        <div class="absolute inset-0 bg-white group-hover/btn:bg-blue-50 transition-colors duration-500"></div>
                        <div class="relative flex items-center justify-center gap-4 text-blue-900 font-black tracking-[0.2em] text-lg">
                            <span>{{ $isOpened ? 'CEK KELULUSAN SEKARANG' : 'SISTEM TERKUNCI' }}</span>
                            @if($isOpened)
                                <svg class="w-6 h-6 group-hover/btn:translate-x-2 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            @else
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            @endif
                        </div>
                    </button>
                </form>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="reveal-5 mt-16 flex flex-wrap justify-center gap-8 opacity-40 hover:opacity-100 transition-opacity duration-700">
            @foreach(['DATA AMAN', 'HASIL RESMI', 'SMK MUH 1'] as $tag)
                <div class="flex items-center gap-2">
                    <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                    <span class="text-[10px] font-black text-white tracking-[0.3em] uppercase">{{ $tag }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Developer Test Data -->
    @if(!empty($testData))
    <div class="mt-12 w-full max-w-4xl relative z-20 animate-fade-in">
        <div class="card-glass-bright rounded-3xl p-6 overflow-hidden">
            <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                <span class="p-2 bg-blue-500 rounded-lg">🛠️</span>
                Developer Mode: Data Sample
            </h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="border-b border-white/10">
                            <th class="py-2 px-4">NISN</th>
                            <th class="py-2 px-4">Nama</th>
                            <th class="py-2 px-4">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testData as $siswa)
                        <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                            <td class="py-2 px-4 font-mono text-blue-300">{{ $siswa['nisn'] }}</td>
                            <td class="py-2 px-4">{{ $siswa['nama'] }}</td>
                            <td class="py-2 px-4">
                                <span class="px-2 py-1 rounded text-[10px] font-bold {{ $siswa['status'] === 'LULUS' ? 'bg-green-500/20 text-green-400' : 'bg-red-500/20 text-red-400' }}">
                                    {{ $siswa['status'] }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <p class="mt-4 text-[10px] text-blue-100/30 uppercase tracking-widest">Gunakan salah satu NISN di atas untuk mencoba fitur pencarian.</p>
        </div>
    </div>
    @endif

    <!-- Footer -->
    <footer class="mt-auto pt-24 pb-8 text-center relative z-10 w-full opacity-30">
        <p class="text-[10px] font-bold text-blue-100 tracking-[0.5em] uppercase mb-4">
            &copy; 2026 SMKS MUHAMMADIYAH 1 GENTENG
        </p>
        <div class="flex justify-center gap-4 text-[9px] font-bold text-blue-100/50 tracking-widest uppercase">
            <span>Security</span>
            <span>&bull;</span>
            <span>Integrity</span>
            <span>&bull;</span>
            <span>Excellence</span>
        </div>
    </footer>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openingTime = new Date("{{ $openingTime->toIso8601String() }}").getTime();
        
        @if($isOpened)
            // Fire confetti on load if already opened
            const duration = 3 * 1000;
            const end = Date.now() + duration;

            (function frame() {
                confetti({
                    particleCount: 3,
                    angle: 60,
                    spread: 55,
                    origin: { x: 0 },
                    colors: ['#3b82f6', '#6366f1', '#a855f7']
                });
                confetti({
                    particleCount: 3,
                    angle: 120,
                    spread: 55,
                    origin: { x: 1 },
                    colors: ['#3b82f6', '#6366f1', '#a855f7']
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            }());
        @endif

        @if(!$isOpened)
        const timer = setInterval(function() {
            const now = new Date().getTime();
            const distance = openingTime - now;
            
            if (distance < 0) {
                clearInterval(timer);
                window.location.reload();
                return;
            }
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById("days").innerText = String(days).padStart(2, '0');
            document.getElementById("hours").innerText = String(hours).padStart(2, '0');
            document.getElementById("minutes").innerText = String(minutes).padStart(2, '0');
            document.getElementById("seconds").innerText = String(seconds).padStart(2, '0');
        }, 1000);
        @endif
    });
</script>
@endpush