<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Site_Contato -> todas são mudadas para minusculo -> depois é colocado um s no final

class SiteContato extends Model
{
    protected $fillable =['nome','telefone', 'email', 'motivo_contato','mensagem'];
}
