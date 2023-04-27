<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['fullname', 'email', 'code', 'secondaryemail', 'displayname', 'phone', 'company', 'currency', 'businessnumber', 'group', 'type', 'owner', 'address', 'city', 'state', 'zip', 'country', 'image'];

    public function todos(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'todos');
    }
}
