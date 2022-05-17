@extends ('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="row row-cols-4 g-4">
                <!-- @foreach ($comics as $comic) -->
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $comic->thumb }}" alt="">
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
                <!-- @endforeach -->
            </div>
        </div>
    </div>
@endsection