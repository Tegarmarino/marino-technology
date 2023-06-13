<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $existing_user = User::where('google_id', $google_user->getId())->first();

            if ($existing_user) {
                Auth::login($existing_user);

                return redirect()->intended('/');
            } else {
                $user = User::where('email', $google_user->getEmail())->first();

                if ($user) {
                    // Delete existing user with the same email
                    $user->delete();
                }

                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);

                Auth::login($new_user);

                return redirect()->intended('/');
            }
        } catch (\Throwable $th) {
            dd('Sepertinya ada yang salah!', $th->getMessage());
        }
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Laravel\Socialite\Facades\Socialite;
// use PhpParser\Node\Stmt\TryCatch;
// use App\Models\User;
// use Illuminate\Support\Facades\Auth;

// class GoogleAuthController extends Controller
// {
//     public function redirect()
//     {
//         return Socialite::driver('google')->redirect();
//     }

//     public function callbackGoogle()
//     {
//         try {
//             $google_user = Socialite::driver('google')->user(); 

//             $user = User::where('google_id', $google_user->getId())->first();

//             if (!$user)
//             {
//                 $new_user = User::create(
//                     [
//                     'name' => $google_user->getName(),
//                     'email' => $google_user->getEmail(),
//                     'google_id' => $google_user->getId()
//                     ]
//                 );

//                 Auth::login($new_user);

//                 return redirect()->intended('/');
//             } 
//             else 
//             {
//                 Auth::login($user);

//                 return redirect()->intended('/');
//             }
//         } catch (\Throwable $th) {
//             dd('Sepertinya ada yang salah !', $th->getMessage());
//         }
//     }
// }
