@extends ('layouts.main')

@section('title', 'Trains')

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="row row-cols-4 g-4">
                <!-- @foreach ($comics as $comic) -->
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('trains.show', $train->id) }}">
                                    {{ $comic-> }}
                                </a>
                            </h5>
                            <p class="card-text">
                                {{ $comic-> }} 
                                {{ $comic-> }} 
                                - 
                                {{ $comic-> }} 
                                {{ $comic-> }}
                            </p>
                            <p class="card-text">{{ $comic-> }}</p>
                            <p class="card-text">{{ $comic-> }}</p>
                        </div>
                    </div>
                </div>
                <!-- @endforeach -->
            </div>
            <div class="col-12 py-5 d-flex justify-content-center">
                {{ $trains->links() }}
            </div>
        </div>
    </div>
@endsection