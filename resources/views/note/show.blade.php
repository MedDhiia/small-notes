<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show Note
        </h2>
    </x-slot>

    <div class="py-12 px-20">

        Content : {{ $note->body }}
        <br>
        Created at : {{ $note->created_at }}

    </div>
</x-app-layout>