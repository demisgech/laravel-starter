<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <p>{{$job->title}} pays ${{$job->salary}} per month.</p>

    <x-button href="/jobs/{{$job->id}}/edit">Edit</x-button>
</x-layout>
