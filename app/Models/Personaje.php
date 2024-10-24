<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Personaje extends Model
{
    use HasFactory;
    protected $table = "personajes";
    protected $primaryKey = 'userid';
    public $timestamps = true;
    protected $fillable = [
    'charachterid',
    'sprite',
    'fuerza',
    'destreza',
    'resistencia',
    'percepcion',
    'inteligencia',
    'apariencia',
    'conocimiento_pkn',
    'mecanica',
    'pelea',
    'tecnologia',
    'cultura',
    'cocina',
    'supervivencia',
    'cartografia',
    'conducir',
    'informatica',
    'investigacion',
    'pericias',
    'subterfugio',
    'sigilo',
    'medicina',
    'interpretacion',
    'ciencias',
    'atletismo',
    'alerta',
    'intimidacion',
    'experiencia',
                ];
}
