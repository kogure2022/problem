<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('save')}}" method="post">
                        @csrf
                        <textarea name="content" cols="30" rows="10"></textarea>
                        </br>
                        <input type="submit" value="{{ __('Post')}}" style="display:inline-block;border-radius:5%;font-size:10pt;text-align:center;cursor:pointer;padding:10px 10px;background:#000066;color:#ffffff;line-height:1em;">
                    </form>
                    @if ($errors->any())
                    <div style='color:red'>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
