<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class ConferenceController extends Controller
{
    /**
     * Handle conference deletion attempt.
     */
    public function delete(Conference $conference): RedirectResponse {
        $conference->delete();
        return back();
    }
}
