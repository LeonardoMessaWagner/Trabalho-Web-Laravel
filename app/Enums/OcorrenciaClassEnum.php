<?php
  
namespace App\Enums;
 
enum ProductStatusEnum:string {
    case Aguardando = 'aguardando';
    case Leve = 'leve';
    case Media = 'media';
    case Grave = 'grave';
}