<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Book extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'author_id',
        'judul',
        'published_date',
        'penerbit'
    ];

    public function author(): BelongsTo
    {
        return $this->BelongsTo(Author::class);
    }
}
