<?php

namespace App\Exports;

use App\Models\bukutamu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class bukutamuExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return bukutamu::all();
    }
    
    public function map($bukutamu): array
    {
        return [
            
            $bukutamu->nama,
            $bukutamu->nik,
            $bukutamu->alamat,
            $bukutamu->notelepon,
            $bukutamu->menemui,
            $bukutamu->keperluan,
            $bukutamu->waktu,

        ];
    }

    public function headings(): array
    {
        return [
            'Nama Pengunjung',
            'NIK',
            'Alamat Pengunung',
            'No Telepon',
            'Menemui',
            'Keperluan',
            'Waktu',
            
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

        ];
    }


}
