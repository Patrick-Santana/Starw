<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    public function treinadors(){
        return $this->belongsTo(Treinador::class);
    }

    protected $fillable = [
        'descricao',
        'nome',
        'type',
        'user_id',
    ];
}
