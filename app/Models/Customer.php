<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;


class Customer extends Model
{
    use HasFactory, SingleTableInheritanceTrait;
    protected static $singleTableTypeField = 'type';

    protected static $singleTableSubclasses = [Barang::class];

    protected $table = "customers";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'alt', 'type',
    ];
   
    
}
