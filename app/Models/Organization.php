<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    /**
     * Get the conatacts for the post.
     */
    public function conatacts()
    {
        return $this->hasMany(Contact::class);
        // note: we can also include contact model like: 'App\Models\contact'
    }
}
