@extends('layouts.app')
@section('content')
    <div class="postsContainer">
        @if (isset($allPosts) && count($allPosts))
            @foreach ($allPosts as $post)
                <div class="post">
                    <div class="posttop">
                        <img src="/images/catsleep.png">
                        <b>
                            <p>{{ $post->user->username }}</p>
                        </b>
                    </div>
                    <div class="postimage">
                        <img src="{{ Storage::url($post->image_path) }}" alt="{{ $post->caption }}">
                    </div>
                    {{-- <div class="postimage">
                        <img src="/images/catsleep.png">
                    </div> --}}
                    <p>{{ $post->caption }}</hp>
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                </div>
            @endforeach
        @else
            <p>There are no posts yet.</p>
        @endif
    </div>
@endsection
