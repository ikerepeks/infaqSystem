<?php

namespace App\Imports;


use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentsImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int{
        return 2;
    }

    public function model(array $column)
    {
        $salt = uniqid();
        $code = "UITMZAKAT".'0'.$column[1].$salt;
        $userid = auth()->user()->id;

        return new Student([
            'name' => $column[0],
            'phone' => $column[1],
            'validity' => $column[2],
            'amount' => $column[3],
            'code' => $code,
            'user_id' => $userid,
        ]);
    }
}
