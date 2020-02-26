<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static findOrFail($id)
 */
class Task extends Model
{
    use SoftDeletes;
    protected $guarded =[];
}
