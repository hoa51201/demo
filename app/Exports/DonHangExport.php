<?php

namespace App\Exports;

use App\Models\DonHang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DonHangExport implements FromCollection, WithHeadings
{
    private $donhang;
    public function __construct($donhang)
    {
        $this->donhang=$donhang;
    }
    public function collection()
    {
        $donhang= $this->donhang;
        $formatdonhang=[];
        foreach($donhang as $key=>$item){
            $formatdonhang[]=[
                'id'=>$item->id,
                'tongtien'=>number_format($item->tongtien,0,',',',')
            ];
        }
        return collect($formatdonhang);
    }
    public function headings():array
    {
        return [
            "STT",
            "A",
        ];
    }
    
}