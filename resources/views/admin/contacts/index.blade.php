@extends('layouts.admin')

@section('content')
<section>
    <h1 class="text-2xl md:text-3xl font-bold mb-8">
        Pesan Masuk
    </h1>

    <ul class="space-y-6">
        @forelse($contacts as $contact)
            <li class="p-4 bg-white rounded shadow border 
                {{ !$contact->is_read ? 'border-l-4 border-red-500' : '' }}">

                <div class="flex justify-between items-start">

                    <div>
                        <p class="font-semibold">
                            {{ $contact->name }}
                        </p>

                        <p class="text-sm text-gray-600">
                            {{ $contact->email }}
                        </p>

                        @if($contact->subject)
                            <p class="text-xs text-gray-500 mt-1">
                                Subject: {{ $contact->subject }}
                            </p>
                        @endif
                    </div>

                    <span class="text-xs 
                        {{ $contact->is_read ? 'text-gray-400' : 'text-red-600 font-semibold' }}">
                        {{ $contact->is_read ? 'Read' : 'Unread' }}
                    </span>
                </div>

                <div class="mt-4 flex justify-end gap-4 text-sm">
                    <a 
                        href="{{ route('admin.contacts.show', $contact) }}"
                        class="text-blue-600 hover:underline"
                    >
                        Detail
                    </a>

                    <form 
                        method="POST"
                        action="{{ route('admin.contacts.destroy', $contact) }}"
                        onsubmit="return confirm('Yakin mau hapus pesan ini?')"
                    >
                        @csrf
                        @method('DELETE')

                        <button class="text-red-600 hover:underline">
                            Hapus
                        </button>
                    </form>
                </div>

            </li>
        @empty
            <div class="text-gray-500 text-center py-20">
                Belum ada pesan masuk.
            </div>
        @endforelse
    </ul>

    {{-- Pagination --}}
    <div class="mt-8">
        {{ $contacts->links() }}
    </div>
</section>
@endsection