<?php

namespace App\Exports;

use App\transaction;
use Maatwebsite\Excel\Concerns\FromArray;

class UsersExport implements FromArray
{
    protected $invoices;

    public function __construct(array $invoices)
    {
        $this->invoices = $invoices;
    }

    public function array(): array
    {
        $transaction = transaction::whereIn('id',$this->invoices)->get();

        $row = [];
        foreach ($transaction as $key => $value) {
            $row[]= [
                '#'=>$value->id,
                'Tổng tiền'=>$value->total_money,
                'Tên'=>$value->name,
                'email'=>$value->email,
                'SĐT'=>$value->phone,
                'Địa chỉ'=>$value->address,
                'Ghi chú'=>$value->note,
                'Trạng thái'=>$value->getstatus('name'),
                'Thanh toán'=>$value->type==1? 'Thanh toán khi nhận hàng' : 'Thanh toán online',
                'Ngày đặt'=>$value->created_at,

            ];
        }
        // dd($row);
        return [
            ['#','Tổng tiền','Tên','email','SĐT','Địa chỉ','Ghi chú','Trạng thái','Thanh toán','Ngày đặt'],
            $row
        ];
    }
}
