@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        @if($news)
            <h1>{{ $news['title'] }}</h1>
            @if($news['image'])
                <img src="{{ $news['image'] }}" class="img-fluid mb-4" alt="{{ $news['title'] }}">
            @endif
            <div class="content">
                {!! $news['content'] !!}
            </div>
            <a href="{{ route('news.index') }}" class="btn btn-primary mt-4">عودة للأخبار</a>
        @else
            <div class="alert alert-warning">
                الخبر غير موجود
            </div>
        @endif
    </div>
</div>
@endsection
