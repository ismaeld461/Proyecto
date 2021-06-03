<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class folder extends Model
{
    use HasFactory;

    protected $table = "folders";

    protected $fillable = [
    	"Area",
    	"Serie",
    	"Folios",
    	"Subserie",
    	"Consecutivos",
    ];

    protected $guarded = ["id"];
}
