@extends('app')

@section('content')
    <div class="flex justify-center p-6">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('blog')}}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="title" class="sr-only">Title</label>
                    <textarea name="title" id="title" cols="30" rows="1" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror" placeholder="EN TITLE"></textarea>

                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="title_bm" class="sr-only">BM Title</label>
                    <textarea name="title_bm" id="title_bm" cols="30" rows="1" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title_bm') border-red-500 @enderror" placeholder="BM TITLE"></textarea>

                    @error('title_bm')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="EN BODY"></textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="body_bm" class="sr-only">BM Body</label>
                    <textarea name="body_bm" id="body_bm" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body_bm') border-red-500 @enderror" placeholder="BM BODY"></textarea>

                    @error('body_bm')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="image" class="sr-only">Image</label>
                    <input type="file" name="image" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('image') border-red-500 @enderror">

                    @error('image')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-purple-300 text-white px-4 py-3 rounded font-medium w-full">Post</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection