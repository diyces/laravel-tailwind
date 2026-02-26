@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="py-12">
  <div class="max-w-xl mx-auto p-6">

    <h1 class="text-3xl font-bold mb-8 text-center">
      Contact Me
    </h1>

    @if (session('success'))
      <div class="mb-6 p-4 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
        <ul class="list-disc list-inside text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form 
      class="space-y-5"
      action="{{ route('contact.store') }}"
      method="POST"
    >
      @csrf

      {{-- Honeypot (anti-spam sederhana) --}}
      <input type="text" name="website" class="hidden">

      <div>
        <input 
          type="text"
          name="name"
          value="{{ old('name') }}"
          placeholder="Your Name"
          class="w-full border p-4 rounded-lg text-sm"
          required
          maxlength="100"
        >
      </div>

      <div>
        <input 
          type="email"
          name="email"
          value="{{ old('email') }}"
          placeholder="Your Email"
          class="w-full border p-4 rounded-lg text-sm"
          required
          maxlength="150"
        >
      </div>

      <div>
        <input 
          type="text"
          name="subject"
          value="{{ old('subject') }}"
          placeholder="Subject"
          class="w-full border p-4 rounded-lg text-sm"
          maxlength="150"
        >
      </div>

      <div>
        <textarea 
          name="message"
          rows="5"
          placeholder="Your Message"
          class="w-full border p-4 rounded-lg text-sm"
          required
          maxlength="2000"
        >{{ old('message') }}</textarea>
      </div>

      <div class="text-center">
        <button class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition text-sm">
          Send Message
        </button>
      </div>

    </form>
  </div>
</section>
@endsection