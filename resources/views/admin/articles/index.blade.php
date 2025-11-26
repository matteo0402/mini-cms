<h1>Articles</h1>

<a href="{{ route('admin.articles.create') }}">Create</a>

<ul>
@foreach($articles as $article)
    <li>
        <a href="{{ route('admin.articles.edit', $article) }}">{{ $article->title }}</a>
        ({{ $article->category->name }})
        <form method="POST" action="{{ route('admin.articles.destroy', $article) }}">
            @csrf @method('DELETE')
            <button>Delete</button>
        </form>
    </li>
@endforeach
</ul>
