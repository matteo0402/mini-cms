<h1>{{ isset($article) ? 'Edit' : 'Create' }} Article</h1>

<form method="POST" action="{{ isset($article) ? route('admin.articles.update', $article) : route('admin.articles.store') }}">
    @csrf
    @if(isset($article))
    @method('PUT')
    @endif

    <input name="title" value="{{ $article->title ?? '' }}" placeholder="Title" required>

    <textarea name="body" required>{{ $article->body ?? '' }}</textarea>

    <select name="category_id" required>
        @foreach($categories as $category)
        <option value="{{ $category->id }}" @selected(($article->category_id ?? null) == $category->id)>
            {{ $category->name }}
        </option>
        @endforeach
    </select>

    <label>
        <input type="checkbox" name="published" value="1" @checked(isset($article) ? $article->published : true)>
        Published
    </label>

    <button>Save</button>
</form>