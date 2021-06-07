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
        "Subserie",
    	"Consecutivo",
        "Folios",
        "n_carpeta",
        "n_caja",
        "n_estante",
        "n_entrepaño",
    ];

    protected $guarded = ["id"];
}
