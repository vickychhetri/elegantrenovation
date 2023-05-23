<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public const Admin="Admin";
    public const Staff="Staff";

    public static function getStaffID(){
            return Role::where('role',self::Staff)->first()->id;
    }
}
