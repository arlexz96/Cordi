@extends('layouts.personal')

@section('content')
    <div class="container mx-auto py-8">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4 shadow">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6"></h1>

        <div class="flex justify-end mb-4">
            <a href="{{ route('events.create') }}"
            class="middle none center rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true">Create Event</a>
        </div>

        <div class="flex flex-wrap">
            @forelse ( $events as $event)
            <article class="w-[360px] m-3 overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                <img
                  alt="{{ $event->name }}"
                  src="{{ $event->image }}"
                  class="h-56 w-full object-cover"
                />

                <div class="bg-white p-4 sm:p-6">
                  <time datetime="{{ $event->image }}" class="block text-xs text-gray-500"> {{ $event->date_event }} </time>

                  <div>
                    <h2>Event #{{ $event->id }}</h2>
                    <h3 class="mt-0.5 text-lg text-gray-900">{{ $event->name }}</h3>
                  </div>

                  <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                    {{ $event->description }}
                  </p>

                  <div class="m-3">
                    <button class="middle none center rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true">Book Now!</button>
                  </div>
                </div>
              </article>
            @empty

            @endforelse
        </div>
    </div>
@endsection
