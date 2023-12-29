<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_detail extends Model
{
    use  HasFactory;

    protected $fillable = ['bill_id', 'customer_id', 'product_id', 'amount'];


    public function bill() {
        return $this->belongsTo(Bill::class);
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }



}
