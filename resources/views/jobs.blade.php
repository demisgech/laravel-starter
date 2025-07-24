<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h2>Job Listings</h2>
    <ul class="list-group">
        @foreach($jobs as $job)
            <li class="list-group-item">
                <a href="/jobs/{{$job['id']}}" class="nav-link link-primary">
                    {{ $job['title'] }} pays ${{$job['salary']}} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
