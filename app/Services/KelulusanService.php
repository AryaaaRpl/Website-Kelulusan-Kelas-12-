<?php

namespace App\Services;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class KelulusanService
{
    private array $data = [];
    
    public function __construct()
    {
        $this->loadData();
    }
    
    private function loadData(): void
    {
        $filePath = public_path('data-kelulusan/SUMBER PENGUMUMAN LULUS.xlsx');
        
        if (!file_exists($filePath)) {
            return;
        }
        
        try {
            $spreadsheet = IOFactory::load($filePath);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray();
            
            // Skip header row, start from row 2
            array_shift($rows);
            
            foreach ($rows as $row) {
                if (!empty($row[2])) { // NISN column (index 2)
                    // Check if there's a status column - if not, assume all are LULUS
                    $status = isset($row[8]) && !empty($row[8]) ? trim($row[8]) : 'LULUS';
                    
                    $this->data[] = [
                        'nisn' => trim($row[2]),
                        'nama' => trim($row[3] ?? ''),
                        'ttl' => trim($row[4] ?? ''),
                        'sekolah' => trim($row[5] ?? ''), // KONSENTRASI as school/major
                        'kelas' => trim($row[6] ?? ''),
                        'no_peserta' => trim($row[7] ?? ''),
                        'status' => $status,
                    ];
                }
            }
        } catch (\Exception $e) {
            \Log::error('Error loading Excel: ' . $e->getMessage());
        }
    }
    
    public function search(string $nisn): ?array
    {
        $nisn = trim($nisn);
        
        foreach ($this->data as $siswa) {
            if ($siswa['nisn'] === $nisn) {
                return $siswa;
            }
        }
        
        return null;
    }
    
    public function getAllData(): array
    {
        return $this->data;
    }
}