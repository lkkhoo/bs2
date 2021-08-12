@extends('app')

@section('content')
    <div class="flex justify-center p-6">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @auth
                <li class="px-2">
                    <form action="{{ route('create_post') }}" method="GET" class="inline">
                        @csrf
                        <button>Create Post</button>
                    </form>
                </li>
            @endauth
        </div>
    </div>
@endsection