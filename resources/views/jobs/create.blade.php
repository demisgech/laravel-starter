<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <div class="container d-flex flex-column align-items-center justify-content-center h-100">
        <form class="border border-1 rounded-2 p-4 w-50" action="/jobs" method="POST">
            @csrf
            <div class="mb-3">
                <x-form-label for="title">Title</x-form-label>
                <x-form-input id="title" name="title" placeholder="Title..."/>
                <x-form-error name="title"/>
            </div>
            <div class="mb-3">
                <x-form-label for="salary">Salary</x-form-label>
                <x-form-input type="number" id="salary" name="salary"
                       placeholder="$1,000"/>
                <x-form-error name="salary"/>
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

