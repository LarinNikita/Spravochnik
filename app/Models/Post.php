<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Post extends Model
{
    use HasFactory, SoftDeletes, Sortable;
    protected $guarded = false;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
