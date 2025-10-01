<x-layout>
    <x-slot:heading>
        Edit User {{ $user->first_name." ". $user->last_name }}
    </x-slot:heading>
    <div class="container d-flex flex-column align-items-center justify-content-center h-100">
        <form class="border border-1 rounded-2 p-4 w-50" action="/users/{{ $user->id }}" method="POST">
            @csrf
            @method("PATCH")

            <div class="mb-3">
                <x-form-label for="firstName" class="form-label">First Name</x-form-label>
                <x-form-input
                    name="firstName"
                    id="firstName"
                    value="{{ $user->first_name }}"
                    placeholder="First Name..."
                />
                <x-form-error name="firstName"/>
            </div>
            <div class="mb-3">
                <x-form-label for="lastName" class="form-label">Last Name</x-form-label>
                <x-form-input
                    name="lastName"
                    id="lastName"
                    value="{{ $user->last_name }}"
                    placeholder="Last Name..."
                />
                <x-form-error name="lastName"/>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <button form="delete-form" class="btn btn-danger">Delete</button>
                <a href="/users/{{$user->id}}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        <form class="d-none" action="/users/{{ $user->id }}" id="delete-form" method="POST">
            @csrf
            @method("DELETE")
        </form>
    </div>
</x-layout>


