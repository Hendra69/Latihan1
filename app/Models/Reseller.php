<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Reseller extends Model
{
    use HasFactory, SingleTableInheritanceTrait;
    
    protected static $singleTableTypeField = 'type';
    protected static $singleTableSubclasses = [Multi::class];

    protected $table = "resellers";
    protected $fillable = [
        'nama', 'toko', 'tlp','alt','type'];
}
