<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function getCsvData(Shop $shop)
    {
        $data = $this->select()
            ->where('shop_id', $shop->id)
            ->orderBy('created_at', 'DESC')
            ->get();

        return $data;
    }

    public function csvHeader()
    {
        return [
                'id',
                'shop_id',
                '商品名',
                '説明',
                '価格',
                '在庫',
                '作成日',
                '更新日',
        ];
    }

    public function csvRow($row)
    {
        return [
            $row->id,
            $row->shop_id,
            $row->name,
            $row->description,
            $row->price,
            $row->stock,
            $row->created_at,
            $row->updated_at,
        ];
    }
}
