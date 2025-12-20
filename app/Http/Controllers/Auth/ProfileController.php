<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ProfileUpdateRequest;
use App\Repositories\AppointmentRepository;
use App\Repositories\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   public UsersRepository $usersRepository;

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function viewProfile()
    {
        $user = Auth::user();

        return view('sora.examples.user')->with('user', $user);
    }

    public function updateProfile(ProfileUpdateRequest $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validated();

        $result = $this->usersRepository->update(Auth::id(), $validatedData);

        if (false == $result) {
            return redirect()->back()->with('error', 'can`t update profile 500');
        }

        return redirect()->back()->with('success', 'profile updated! 200');
    }
}
