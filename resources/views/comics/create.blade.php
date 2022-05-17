@extends ('layouts.main')

@section('title', 'Add new Comic')

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="row text-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="card">
                    <div class="card-body">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <h5 class="card-title">
                                {{ $comic->title }}
                                <a href="{{ route('comics.show', $comic->id) }}">
                                    {{ $comic->id }}
                                </a>
                            </h5>
                            <p class="card-text">
                                {{ $comic-> description}} 
                            </p>
                            <p class="card-text">
                                {{ $comic->price }} <span>- {{ $comic->series }}</span>
                            </p>
                            <p class="card-text">
                                {{ $comic->sale_date }} <span>- {{ $comic->type }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection