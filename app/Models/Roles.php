<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    public $timestamps = false;

    const ADMIN_ID = 1;
    const MANAGER_ID = 1;
    const USER_ID = 1;
}
