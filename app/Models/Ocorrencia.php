<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\OcorrenciaClassEnum;

class Ocorrencia extends Model
{
    use HasFactory;
    protected $fillable = ['gravidade'];

    protected $casts = ['status' => OcorrenciaClassEnum::class];
}
