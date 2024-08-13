<?php
namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function loginUser(LoginRequest $request){    
        $credentials= $request->only("username","password");
        if (!Auth::validate($credentials)) {
            return redirect()->to("/")->withError('auth.failed');
        }
        $usuario= Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($usuario);
        return $this->authenticated($request,$usuario);
    }
    public function authenticated(Request $request,$usuario){
        return redirect()->to("/dashboard");
    }
}