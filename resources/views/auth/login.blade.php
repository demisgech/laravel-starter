<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <div class="container d-flex flex-column align-items-center justify-content-center h-100">
        <form class="border border-1 rounded-2 p-4 w-50" action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <x-form-label for="email">Email</x-form-label>
                <x-form-input type="email" id="email" name="email" :value="old('email')" placeholder="demisgech@domain.com"/>
                <x-form-error name="email"/>
            </div>
            <div class="mb-3">
                <x-form-label for="password">Password</x-form-label>
                <x-form-input type="password" id="password" name="password" placeholder="*******"/>
                <x-form-error name="password"/>
            </div>
            <div>
                <button type="submit" class="btn btn-block btn-primary">Login</button>
            </div>
        </form>
    </div>
</x-layout>


