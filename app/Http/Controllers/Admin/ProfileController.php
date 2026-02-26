<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::first();

        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = Profile::first();

        $validated = $request->validate([
            'full_name'    => ['required', 'string', 'max:255'],
            'headline'     => ['nullable', 'string', 'max:255'],
            'bio'          => ['nullable', 'string'],
            'github_url'   => ['nullable', 'url'],
            'linkedin_url' => ['nullable', 'url'],
            'avatar'       => ['nullable', 'image', 'max:2048'],
            'cv'           => ['nullable', 'mimes:pdf', 'max:4096'],
        ]);

        if ($request->hasFile('avatar')) {
            if ($profile->avatar_path) {
                Storage::disk('public')->delete($profile->avatar_path);
            }

            $validated['avatar_path'] =
                $request->file('avatar')->store('profile', 'public');
        }

        if ($request->hasFile('cv')) {
            if ($profile->cv_path) {
                Storage::disk('public')->delete($profile->cv_path);
            }

            $validated['cv_path'] =
                $request->file('cv')->store('profile', 'public');
        }

        $profile->update($validated);

        return back()->with('success', 'Profile berhasil diperbarui.');
    }
}