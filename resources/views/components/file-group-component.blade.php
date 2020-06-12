<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom text-black-50 border-gray pb-2 mb-0">{{ $desc }}</h6>
    @foreach($list as $item)
        <x-FileItemComponent :info="$item"></x-FileItemComponent>
    @endforeach
</div>
