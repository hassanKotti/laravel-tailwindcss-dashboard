<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * Get the organiation that owns the comment.
     */
    public function organiation()
    {
        return $this->belongsTo(Organization::class);
    }
}
