<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPage extends Model
{
    protected $table = "_blog_page";

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blogCategory_id', 'id');
    }
}
