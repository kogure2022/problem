<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post List')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($items as $item)
                        <hr>
                        <p style="font-size: 13px;">{{$item['name']}} {{$item['created_at']}}</p>
                        <p>{!! nl2br(e($item['content'])) !!}</p>
                    @endforeach
                </div>
            </div>
            {!! $items->links() !!}
        </div>
    </div>
</x-app-layout>
