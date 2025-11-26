<h1>Articles</h1>

<form method="GET" action="{{ route('public.index') }}">
    <input type="text" name="search" placeholder="Search..." value="{{ $search ?? '' }}">
    <button>Search</button>
</form>

<ul>
@foreach($articles as $article)
    <li>
        <a href="{{ route('public.show', $article) }}">{{ $article->title }}</a>
    </li>
@endforeach
</ul>
