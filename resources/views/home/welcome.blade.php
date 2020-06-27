@extends("home.layout")
@section('title', 'Baimless.live')

@php
$printsCount = 0;
$injCount = count($contentList['injection']);
$sitesCount = count($contentList['list']['sites']);
$cheatsCount = count($contentList['list']['cheats']);
$exposedCount = count($contentList['list']['exposed']);
foreach($contentList['prints'] as $k) {
    $printsCount += count($k);
}

$quote = $quotes[array_rand($quotes)];

@endphp

@section("main")
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Total stuff we gathered</h4>
        </div>
        <div class="card-body">
            <div class="alert alert-primary">
                <span>Prints: {{ $printsCount ?? '0'}}</span>
            </div>
            <div class="alert alert-primary">
                <span>Injections: {{ $injCount ?? '0' }}</span>
            </div>
            <div class="alert alert-primary">
                <span>Cheats: {{ $cheatsCount ?? '0' }}</span>
            </div>
            <div class="alert alert-primary">
                <span>Sites: {{ $sitesCount ?? '0' }}</span>
            </div>
            <div class="alert alert-primary">
                <span>Exposeds: {{ $exposedCount ?? '0' }}</span>
            </div>
        </div>
    </div>
    <p class="blockquote blockquote-primary">
        "{{ $quote['quote'] }}"
        <br>
        <br>
        <small>
            - {{ $quote['author'] }}
        </small>
    </p>
@endsection
