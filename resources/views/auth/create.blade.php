<x-layout>
    <x-slot:heading>
        Create User
    </x-slot:heading>
    <div class="container d-flex flex-column align-items-center justify-content-center h-100">
        <form class="border border-1 rounded-2 p-4 w-50" action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <x-form-label for="first_name">First Name</x-form-label>
                <x-form-input id="first_name" name="first_name" placeholder="First Name..."/>
                <x-form-error name="first_name"/>
            </div>
            <div class="mb-3">
                <x-form-label for="last_name">Last Name</x-form-label>
                <x-form-input id="last_name" name="last_name" placeholder="Last Name..."/>
                <x-form-error name="last_name"/>
            </div>
            <div class="mb-3">
                <x-form-label for="email">Email</x-form-label>
                <x-form-input type="email" id="email" name="email" placeholder="Email..."/>
                <x-form-error name="email"/>
            </div>
            <div class="mb-3">
                <x-form-label for="password">Password</x-form-label>
                <x-form-input type="password" id="password" name="password" placeholder="*******"/>
                <x-form-error name="password"/>
            </div>
            <div class="mb-3">
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <x-form-input type="password" id="password_confirmation" name="password_confirmation" placeholder="*********"/>
                <x-form-error name="password_confirmation"/>
            </div>
            <div>
                <button type="submit" class="btn btn-block btn-primary">Save</button>
            </div>
        </form>
    </div>
</x-layout>

