<div>
    <h1>{{ $post->title }}</h1>
    <p>by {{ $post->author->name }} ({{ $post->author->email }})</p>
    <div>{{ $post->content }}</div>

    <hr>
    <h3>Comments</h3>
    @foreach($post->comments as $comment)
        <div>
            <strong>{{ $comment->commenter_name }}:</strong>
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach

    <hr>
    <h3>Leave a Comment</h3>
    @if(session('success'))
      <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('comments.store', $post) }}" method="POST">
      @csrf
      <div>
        <label>Name:</label>
        <input type="text" name="commenter_name" value="{{ old('commenter_name') }}">
        @error('commenter_name') <div>{{ $message }}</div> @enderror
      </div>
      <div>
        <label>Comment:</label>
        <textarea name="comment">{{ old('comment') }}</textarea>
        @error('comment') <div>{{ $message }}</div> @enderror
      </div>
      <button type="submit">Post Comment</button>
    </form>
</div>
