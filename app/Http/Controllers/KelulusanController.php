<?php

namespace App\Http\Controllers;

use App\Services\KelulusanService;
use Illuminate\Http\Request;

class KelulusanController extends Controller
{
    public function __construct(
        private KelulusanService $kelulusanService
    ) {}
    
    public function index()
    {
        return view('kelulusan.index');
    }
    
    public function search(Request $request)
    {
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