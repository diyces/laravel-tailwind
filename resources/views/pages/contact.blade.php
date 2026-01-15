@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<form class="space-y-5">
    <input type="text" placeholder="Your Name"
           class="w-full border p-4 rounded-lg text-sm">

    <input type="email" placeholder="Your Email"
           class="w-full border p-4 rounded-lg text-sm">

    <textarea rows="4" placeholder="Your Message"
              class="w-full border p-4 rounded-lg text-sm"></textarea>

    <button class="w-full bg-blue-600 text-white py-3 rounded-lg">
        Send Message
    </button>
</form>

@endsection
