<?php

namespace App\Http\Controllers;

use App\Services\KelulusanService;
use Illuminate\Http\Request;

class KelulusanController extends Controller
{
    public function __construct(
        private KelulusanService $kelulusanService
    ) {}
    
    public function index(Request $request)
    {
        $openingTime = \Carbon\Carbon::create(2026, 5, 4, 15, 0, 0, 'Asia/Jakarta');
        
        // Developer/Testing Bypass via ?test=true
        $isOpened = now()->greaterThanOrEqualTo($openingTime) || $request->has('test');
        
        // Optionally list some NISNs for testing if requested
        $testData = [];
        if ($request->has('dev')) {
            $testData = array_slice($this->kelulusanService->getAllData(), 0, 10);
        }
        
        return view('kelulusan.index', compact('openingTime', 'isOpened', 'testData'));
    }
    
    public function search(Request $request)
    {
        $openingTime = \Carbon\Carbon::create(2026, 5, 4, 15, 0, 0, 'Asia/Jakarta');
        
        // Allow bypass if 'test' parameter is present in the request (even from the form)
        $isBypassed = $request->has('test') || $request->has('dev');
        
        if (now()->lessThan($openingTime) && !$isBypassed) {
            return back()->with('error', 'Fitur cek kelulusan belum dibuka.');
        }

        $nisn = $request->input('nisn');
        
        if (empty($nisn)) {
            return back()->with('error', 'Mohon masukkan NISN Anda');
        }
        
        $siswa = $this->kelulusanService->search($nisn);
        
        if (!$siswa) {
            return back()->with('error', 'Data tidak ditemukan. Pastikan NISN yang Anda masukkan benar.')->withInput();
        }
        
        return view('kelulusan.hasil', compact('siswa'));
    }
}