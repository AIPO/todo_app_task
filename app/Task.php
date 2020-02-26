<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static findOrFail($id)
 * @method static create(array $array)
 */
class Task extends Model
{
    use SoftDeletes;
    protected $guarded =[];
}
