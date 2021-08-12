@extends('app')

@section('content')
    <div class="flex justify-center p-6">
        <div class="w-4/12 bg-white p-6 rounded-lg">

            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{session('status')}}
                </div>
            @endif

            <form action="{{ route('admin') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') @enderror" border-red-500 value="">
                   
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') @enderror" border-red-500 value="">
                    
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
    
                <div>
                    <button type="submit" class="bg-purple-300 text-white px-4 py-3 rounded font-medium w-full">Log In</button>
                </div>
            </form>    
        </div>
    </div>
@endsection