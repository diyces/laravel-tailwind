@extends('layouts.app')

@section('content')

<h1>Pesan Masuk</h1>

@foreach($contacts as $contact)
    <p>
        {{ $contact->name }} - 
        {{ $contact->is_read ? 'Read' : 'Unread' }}
        <a href="/admin/contacts/{{ $contact->id }}">Detail</a>
    </p>
@endforeach
@endsection