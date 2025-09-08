<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
class DashboardController extends Controller
{
    public function index():View|RedirectResponse
    {
        if (! auth::check()) {
            SESSION::put('url.intended', URL::full());
            return redirect()
            ->route('login')
            ->with('status','connectez vous pour acceder au dashboard');
        }
        return view('components.dashboard');
    }
}
