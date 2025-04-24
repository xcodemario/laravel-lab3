<div>
    <h1>All Posts</h1>
    @foreach($posts as $post)
        <div>
            <h2>
              <a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}
              </a>
            </h2>
            <p>by {{ $post->author->name }}</p>
        </div>
    @endforeach
</div>
