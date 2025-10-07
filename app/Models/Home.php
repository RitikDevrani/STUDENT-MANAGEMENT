<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    // Normally, Home does not map to a database table
    // But you can still define helper methods here if you want

    protected $table = null; // No table needed

    public static function getWelcomeMessage()
    {
        return "Welcome to Student Management Dashboard!";
    }
}
