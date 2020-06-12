@extends("home.layout")
@section('title', 'Baimless.live')

@section("main")
    @foreach($list as $name => $item)
        <x-PrintsGroupComponent :list="$item" :desc="$name" />
    @endforeach
@endsection
