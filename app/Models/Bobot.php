<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Bobot extends Multi
{
    use HasFactory;
    protected static $singleTableType = 'Parabot';
}
