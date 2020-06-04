<?php

namespace App\Exports;

use App\customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return customer::all();
    }

    public function headings(): array
    {
        return [
            'CustomerID',
            'CustomerName',
            'CustomerEmail',
            'CustomerAddress',
            'CustomerPhoneNo',
            'CustomerCNIC',
            'CreatedAt',
            'UpdatedAt',
        ];
    }
}
