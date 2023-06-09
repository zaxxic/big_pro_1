<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;


class Company extends Model
{
    use HasFactory;

    protected $table = 'company';
    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}

class Role extends SpatieRole
{
    // ...
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
    // ...
}