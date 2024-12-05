<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ConferenceController extends Controller {

    /**
     * Handle conference addition attempt
     */
    public function add(Request $request): RedirectResponse {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'date' => ['required'],
            'address' => ['required']
        ], [
            'name.required' => 'add.conference.error.validation.name.required',
            'description.required' => 'add.conference.error.validation.description.required',
            'date.required' => 'add.conference.error.validation.date.required',
            'address.required' => 'add.conference.error.validation.address.required'
        ]);
        Conference::factory()->create($data);
        return redirect()->intended('conferences');
    }

    /**
     * Handle conference deletion attempt.
     */
    public function delete(Conference $conference): RedirectResponse {
        $conference->delete();
        return back();
    }
}
