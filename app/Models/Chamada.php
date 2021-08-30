<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    use HasFactory;

    protected $fillable = [
        'sisu_id',
        'nome',
        'descricao',
        'regular',
        'caminho_resultado',
        'caminho_import_sisu_gestao',
        'data_inicio',
        'data_fim',
    ];

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class, 'chamada_id');
    }

    public function sisu()
    {
        return $this->belongsTo(Sisu::class, 'sisu_id');
    }
}
