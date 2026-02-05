@extends('layouts.app')

@section('content')

<h2>{{ $contact->subject }}</h2>
<p>{{ $contact->name }} ({{ $contact->email }})</p>
<p>{{ $contact->message }}</p>

@endsection