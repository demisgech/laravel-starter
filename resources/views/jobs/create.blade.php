<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <div class="container d-flex flex-column align-items-center justify-content-center h-100">
        <form class="border border-1 rounded-2 p-4 w-50" action="/jobs" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control">
                @error('title')
                    <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" id="salary" name="salary" class="form-control"
                       placeholder="$1,000">
                @error('salary')
                    <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </div>
        </form>
        {{--        <div>--}}
        {{--            @if($errors->any())--}}
        {{--                <ul class="list-group mb-3">--}}
        {{--                    @foreach($errors->all() as $error)--}}
        {{--                        <li class="list-group-item text-danger">{{$error}}</li>--}}
        {{--                    @endforeach--}}
        {{--                </ul>--}}
        {{--            @endif--}}
        {{--        </div>--}}
    </div>
</x-layout>

