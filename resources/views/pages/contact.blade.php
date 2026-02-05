@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="py-20">
  <div class="max-w-xl mx-auto p-4 flex flex-col items-center">

    <h1 class="text-2xl md:text-3xl font-bold mb-8">
      Contact Me
    </h1>

    <form class="w-full space-y-5" action="/contact" method="POST">
      @csrf

      <input type="text" name="name" placeholder="Your Name"
        class="w-full border p-4 rounded-lg text-sm">

      <input type="email" name="email" placeholder="Your Email"
        class="w-full border p-4 rounded-lg text-sm">

      <input type="text" name="subject" placeholder="Subject"
        class="w-full border p-4 rounded-lg text-sm">

      <textarea name="message" rows="4" placeholder="Your Message"
        class="w-full border p-4 rounded-lg text-sm"></textarea>

        <div class="flex justify-center">
      <button class="px-4 rounded-md bg-blue-600 py-2 text-sm font-medium text-white hover:bg-blue-700 transition">
        Send Message
      </button>
      </div>
    </form>

  </div>
</section>

@endsection
