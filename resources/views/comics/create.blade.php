@extends ('layouts.main')

@section('title', 'Add new Comic')

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="row text-center">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Insert title">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="descritpion" placeholder="Insert descsription" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="thumb">Thumb</label>
                        <input type="text" class="form-control" id="thumb" placeholder="Insert image url">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="Insert price">
                    </div>

                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" class="form-control" id="series" placeholder="Insert series" name="series">
                    </div>

                    <div class="form-group">
                        <label for="sale-date">Sale date</label>
                        <input type="date" class="form-control" id="sale-date" placeholder="Insert sale date" name="sale_date">
                    </div>

                    <div class="form-group">
                        <label for="type">Comic type</label>
                        <input type="text" class="form-control" id="type" placeholder="Insert type" name="type">
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection