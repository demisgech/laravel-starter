<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <p>{{$job->title}} pays ${{ $job->salary}} per month.</p>

    @can("edit",$job)
        <x-button href="/jobs/{{$job->id}}/edit">Edit</x-button>
    @endcan
</x-layout>
