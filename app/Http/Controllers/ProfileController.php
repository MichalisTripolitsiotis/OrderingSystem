<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Shows the initial page, depending on whether the user is
     * admin or client.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect(route('login'));
        } elseif ($user->isAdmin()) {
            return redirect(route('admin.index'));
        } elseif ($user->isClient()) {
            return redirect(route('client.index'));
        }
    }
}
