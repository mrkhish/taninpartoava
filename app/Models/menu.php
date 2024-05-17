<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
class menu extends Model
{
    use HasFactory;
 
   
    protected $table = 'menu';
    
    public function children()
    {
        return $this->hasMany(self::class, 'id');
    }
    
}


