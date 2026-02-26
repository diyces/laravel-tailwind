@extends('layouts.admin')

@section('content')
<section class="max-w-2xl py-16">
    <h1 class="text-2xl font-bold mb-6">Edit Profile</h1>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST"
          action="{{ route('admin.profile.update') }}"
          enctype="multipart/form-data"
          class="space-y-5">

        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1">Full Name</label>
            <input type="text"
                   name="full_name"
                   value="{{ old('full_name', $profile->full_name) }}"
                   class="border p-2 w-full rounded"
                   required>
        </div>

        <div>
            <label class="block mb-1">Headline</label>
            <input type="text"
                   name="headline"
                   value="{{ old('headline', $profile->headline) }}"
                   class="border p-2 w-full rounded">
        </div>

        <div>
            <label class="block mb-1">Bio</label>
            <textarea name="bio"
                      rows="5"
                      class="border p-2 w-full rounded">{{ old('bio', $profile->bio) }}</textarea>
        </div>

        <div>
            <label class="block mb-1">GitHub URL</label>
            <input type="url"
                   name="github_url"
                   value="{{ old('github_url', $profile->github_url) }}"
                   class="border p-2 w-full rounded">
        </div>

        <div>
            <label class="block mb-1">LinkedIn URL</label>
            <input type="url"
                   name="linkedin_url"
                   value="{{ old('linkedin_url', $profile->linkedin_url) }}"
                   class="border p-2 w-full rounded">
        </div>

        @if($profile->avatar_path)
            <div>
                <label class="block mb-1">Current Avatar</label>
                <img src="{{ asset('storage/' . $profile->avatar_path) }}"
                     class="w-32 rounded mb-2">
            </div>
        @endif

        <div>
            <label class="block mb-1">Upload Avatar</label>
            <input type="file"
                   name="avatar"
                   class="border p-2 w-full rounded">
        </div>

        <div>
            <label class="block mb-1">Upload CV (PDF)</label>
            <input type="file"
                   name="cv"
                   class="border p-2 w-full rounded">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Update Profile
        </button>
    </form>
</section>
@endsection