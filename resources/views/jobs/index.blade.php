<x-layout>

    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <ul class="list-group">
        @foreach($jobs as $job)
            <li class="list-group-item">
                <a href="/jobs/{{$job['id']}}" class="nav-link link-primary">
                    {{ $job['title'] }} pays ${{$job['salary']}} per year.
                </a>
                <p class="text-muted">{{$job->employer->name}}</p>
            </li>
        @endforeach
    </ul>
    <div class="m-3">{{ $jobs->links() }}</div>
</x-layout>
