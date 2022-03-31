@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 p-6 bg-white rounded-lg">
            <form action="{{ route('posts') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100
                    border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                              placeholder="Post something!"></textarea>

                    @error('body')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="px-4 py-2 mb-4 font-medium text-white bg-blue-500 rounded">
                        Post
                    </button>
                </div>

            </form>

            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="mb-4">
                        <a href="" class="font-bold">Jeff</a> <span class="text-sm text-gray-600">date</span>
                        <p class="mb-2">{{ $post->body }}</p>
                    </div>
                @endforeach
            @else
                <p>There are no posts</p>
            @endif

        </div>
    </div>
@endsection()
