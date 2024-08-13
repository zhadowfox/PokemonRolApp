<?php
namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
class Usuarios extends Authenticatable
{
    use HasFactory;
    protected $table = 'usuarios'; // Nombre de la tabla
    protected $primaryKey = 'userid'; // Llave primaria
    public $timestamps = true; 
    protected $fillable = [
        'username',
        'password',
        'nombre',
        'userRol',
    ];
    protected $guarded = [
        'userid', 
    ];
    protected $hidden = [
        'password',
    ];  
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
