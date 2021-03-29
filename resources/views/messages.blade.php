<x-app-layout>
    <x-slot name="header">

        @include('messages.create')
        @foreach ($message as $msg)
            <div class="container mx-auto sm:w-1/2 md:w-1/3 border-b-2 mb-5 mt-5">
                <h1 class="font-sans font-thin mb-4 text-sm border-b-2"> {{ $msg->data }} Autorius: <span
                        class="font-bold">{{ $msg->users->name }} ({{ $msg->id }})</span></h1>

                <p class="text-grey mb-3 text-sm">Temos pavadinimas: <span class="font-bold">{{ $msg->title }}</span>
                </p>

                <h2 class="font-sans font-thin leading-normal mb-4 text-sm">{{ $msg->content }}</h2>

            </div>
        @endforeach
    </x-slot>
</x-app-layout>
