<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Subscription;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Assuming you want to assign the user to the first plan as default
        $defaultPlan = Plan::first();

        Subscription::create([
            'user_id' => $user->id,
            'plan_id' => $defaultPlan->id,
            'status' => 'not-subscribed',
        ]);

        // Dispatch the Registered event to send the verification email
        event(new Registered($user));

        // Send the verification email manually using the custom notification
        $user->notify(new \App\Notifications\CustomVerifyEmail);

        Auth::login($user);

        return redirect($this->redirectPath());
    }
}
