<x-layouts.frontend>

<article>
    <a href="/artikel/list" class="btn btn-danger mb-4">&lt;{{__('back')}}</a>
    <img src="{{asset($photo)}}" alt="foto-artikel" width="600" height="400" class="mb-4 d-block">
    <h2>{{$title}}</h2>
    <p>{!! $content !!}</p>
</article>

</x-layouts.frontend>