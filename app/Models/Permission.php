<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    const DBBackup = "DBBackup";
    const Faqs = "Faqs";

    const Contents = "Contents";
    const Contact = "Contact";


    protected $guarded = ['id'];
}
