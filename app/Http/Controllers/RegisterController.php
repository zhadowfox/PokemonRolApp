<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Usuarios;
class RegisterController extends Controller
{
    //
    public function register(RegisterRequest $request){
        $usuario = Usuarios::create($request->validated());
        return redirect()->intended('dashboard');
    }
}
