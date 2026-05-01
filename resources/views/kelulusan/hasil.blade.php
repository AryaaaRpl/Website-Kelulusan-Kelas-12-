@extends('layouts.main')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center px-4 relative overflow-hidden py-10 md:py-20">
    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
    
    <!-- Back Button -->
    <div class="absolute top-6 left-6 z-10">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white px-4 py-2 rounded-xl transition-all duration-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span class="font-medium">Kembali</span>
        </a>
    </div>

    <!-- Result Card -->
    <div class="w-full max-w-2xl relative z-10">
        @if($siswa['status'] === 'LULUS')
        <!-- LULUS State - SNBT Style -->
        <div class="card-glass rounded-3xl overflow-hidden glow-effect">
            <!-- Success Header -->
            <div class="status-lulus px-6 py-8 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-3">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h2 class="text-xl md:text-3xl font-bold text-white mb-2">
                    Selamat! 🎉
                </h2>
                <p class="text-white/90 text-sm">
                    Anda Berhasil Diterima
                </p>
            </div>
            
            <!-- Student Info -->
            <div class="px-6 py-8">
                <div class="space-y-4">
                    <div class="bg-gray-50 rounded-xl p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-500 text-xs font-medium">NISN</span>
                        </div>
                        <div class="text-lg font-bold text-gray-800">{{ $siswa['nisn'] }}</div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-500 text-xs font-medium">Nama Peserta</span>
                        </div>
                        <div class="text-base font-bold text-gray-800">{{ $siswa['nama'] }}</div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-500 text-xs font-medium">Asal Sekolah</span>
                        </div>
                        <div class="text-base font-semibold text-gray-800">SMKS Muhammadiyah 1 Genteng</div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-8 h-8 bg-amber-100 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10.5v-17m-3.5 6.5l3-3 3 3"></path>
                                </svg>
                            </div>
                            <span class="text-gray-500 text-xs font-medium">Jurusan Semasa SMK</span>
                        </div>
                        <div class="text-base font-semibold text-gray-800">{{ $siswa['sekolah'] }}</div>
                    </div>
                </div>
                
                <!-- Success Message -->
                <div class="mt-6 p-5 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-2xl border border-emerald-100">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-emerald-800 mb-1">Selamat!</h4>
                            <p class="text-gray-600 text-sm">
                                Selamat! Anda telah lulus dari SMKS Muhammadiyah 1 Genteng dan akan melanjutkan pendidikan kejenjang yang lebih tinggi. 
                                Terus raih mimpi dan masa depan yang cerah! 🌟
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Action Button -->
                <div class="mt-8">
                    <a href="{{ route('home') }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-4 px-6 rounded-xl transition-all duration-300 text-center">
                        Cari Peserta Lain
                    </a>
                </div>
            </div>
        </div>
        
        @else
        <!-- TIDAK LULUS State -->
        <div class="card-glass rounded-3xl overflow-hidden glow-effect">
            <!-- Failed Header -->
            <div class="status-tidak-lulus px-8 py-10 text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 rounded-full mb-4">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">
                    Mohon Maaf 😔
                </h2>
                <p class="text-white/90 text-base">
                    Anda Belum Berhasil
                </p>
            </div>
            
            <!-- Student Info -->
            <div class="p-8">
                <div class="space-y-4">
                    <div class="bg-gray-50 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-500 text-sm font-medium">NISN</span>
                        </div>
                        <div class="text-xl font-bold text-gray-800">{{ $siswa['nisn'] }}</div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-500 text-sm font-medium">Nama Peserta</span>
                        </div>
                        <div class="text-lg font-bold text-gray-800">{{ $siswa['nama'] }}</div>
                    </div>
                </div>
                
                <!-- Encouragement Message -->
                <div class="mt-6 p-5 bg-gradient-to-r from-amber-50 to-orange-50 rounded-2xl border border-amber-100">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-amber-800 mb-1">Tetap Semangat!</h4>
                            <p class="text-gray-600 text-sm">
                                Jangan berkecil hati. Tetap berusaha dan coba lagi tahun depan. 
                                Kami percaya Anda bisa mencapai mimpi Anda! 💪
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Action Button -->
                <div class="mt-8">
                    <a href="{{ route('home') }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-4 px-6 rounded-xl transition-all duration-300 text-center">
                        Cari Peserta Lain
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="mt-12 text-center relative z-10">
        <p class="text-blue-200/60 text-sm">
            © 2026 SMKS Muhammadiyah 1 Genteng. All rights reserved.
        </p>
    </footer>
</div>
@endsection