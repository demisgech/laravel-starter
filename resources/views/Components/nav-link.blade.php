@props(['active' =>false,'type' =>'a'])
<a {{$attributes}} class="{{ $active ? 'active':'' }} nav-link">
    {{$slot}}
</a>

{{--@if(strtolower($type) === 'a')--}}
{{--    <a {{$attributes}} class="{{ $active ? 'active':'' }} nav-link">--}}
{{--        {{$slot}}--}}
{{--    </a>--}}
{{--@else--}}
{{--    <button {{ $attributes }} class="{{ $active ? 'active':'' }} btn btn-secondary">--}}
{{--        {{$slot}}--}}
{{--    </button>--}}
{{--@endif--}}


