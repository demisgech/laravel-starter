<x-layout>
    <x-slot:heading>
        Edit Job {{ $job->title}}
    </x-slot:heading>
    <div class="container d-flex flex-column align-items-center justify-content-center h-100">
        <form class="border border-1 rounded-2 p-4 w-50" action="/jobs/{{ $job->id }}" method="POST">
            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="form-control"
                    value="{{ $job->title }}"
                    placeholder="Title..."
                >
                @error('title')
                <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input
                    type="number"
                    id="salary"
                    name="salary"
                    class="form-control"
                    value="{{$job->salary}}"
                    placeholder="$1,000"
                >
                @error('salary')
                <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 d-flex justify-content-between">
                @can('edit',$job)
                    <button form="delete-form" class="btn btn-danger">Delete</button>
                @endcan
                <a href="/jobs/{{$job->id}}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        @can("edit",$job)
            <form class="d-none" action="/jobs/{{ $job->id }}" id="delete-form" method="POST">
                @csrf
                @method("DELETE")
            </form>
        @endcan
    </div>
</x-layout>

