<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
   public function redirect($service) {
       return Socialite::driver($service)->stateless()->redirect();

   }

   public function callback() {

   }
}
