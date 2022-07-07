<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    // SoftDeletes
    use SoftDeletes;

    // Seleciona a tabela desejada
    protected $table = 'fornecedores';

    protected $fillable = [
        'nome', 'site', 'telefone', 'uf', 'email'
    ];

    public function produtos() {
        return $this->HasMany('App\Item', 'fornecedor_id', 'id');    
    }
}
