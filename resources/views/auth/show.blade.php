<x-layout>
    <x-slot:heading>
        User
    </x-slot:heading>
    <p>{{$user->first_name}} {{$user->last_name}}</p>
    <p>{{$user->email}}</p>

    <x-button href="/users/{{$user->id}}/edit">Edit</x-button>
</x-layout>

