<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
</head>
<body>
<nav class="navbar bg-dark navbar-dark d-flex flex-row justify-content-between">
    <ul class="navbar-nav d-flex flex-row px-3">
        <x-list-item>
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        </x-list-item>
        <x-list-item>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </x-list-item>
        <x-list-item>
            {{--            <x-nav-link :active="request()->is('jobs')" type="button">Jobs</x-nav-link>--}}
            <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
        </x-list-item>
    </ul>
    <ul class="navbar-nav d-flex flex-row gap-1">
        @guest
            <x-list-item>
                <x-nav-link href="/login" :active='request()->is("login")'>Login</x-nav-link>
            </x-list-item>
            <x-list-item>
                <x-nav-link href="/register" :active='request()->is("register")'>Register</x-nav-link>
            </x-list-item>
        @endguest
            @auth
                <x-list-item>
                    <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
                </x-list-item>
                <x-list-item>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </x-list-item>
            @endauth
    </ul>
</nav>
<div class="container">
    <header class="d-flex justify-content-between align-items-center">
        <h1>{{$heading}}</h1>
        @if(request()->is("jobs"))
            <x-button href="jobs/create">Create Job</x-button>
        @elseif(request()->is("auth"))
            <x-button href="/users/create">Register</x-button>
        @endif
    </header>
    {{$slot}}
</div>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>

