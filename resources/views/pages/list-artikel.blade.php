<x-layouts.frontend>

<article class="mb-5">
    @foreach ($data as $item)
    <h2><a href="/artikel/detail/{{$item->id}}">{{$item->title}}</a></h2>
    <p>{!! $item->content !!}</p>
    @endforeach
</article>

</x-layouts.frontend>