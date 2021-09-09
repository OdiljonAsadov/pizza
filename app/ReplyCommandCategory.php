<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReplyCommandCategory extends Model
{
    protected $table = "reply_command_categories";

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function command(): BelongsTo
    {
        return $this->belongsTo(CommandCategory::class, 'command_id', 'id');
    }

    public function blog(): BelongsTo
    {
        return $this->belongsTo(BlogPage::class, 'blog_id', 'id');
    }
}
