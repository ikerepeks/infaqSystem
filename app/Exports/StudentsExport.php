<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Phone',
            'Code',
            'Validity',
            'Amount (RM)',
        ];
    }

    public function map($student): array {
        return [
            $student->name,
            $student->phone,
            $student->validity,
            $student->amount,
        ];
    }
}
