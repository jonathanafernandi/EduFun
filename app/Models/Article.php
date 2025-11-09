<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Writer;
use App\Models\Category;

class Article extends Model
{
    protected $guarded = [];

    public function writer() {
        return $this->belongsTo(Writer::class);
    }

    protected $casts = [
        'posted_at'=>'date'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
