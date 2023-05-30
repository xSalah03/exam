@extends('pages.layout.app')

@section('title')
    Update Event
@endsection

@section('content')
    <div class='container mt-5'>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card rounded-0 shadow">
                    <div class="card-header">
                        <h5>Update Event</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updateEvent', $event->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') ?? $event->title }}">
                                @error('title')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    value="{{ old('description') ?? $event->description }}">
                                @error('description')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                                <label for="start_date">Start date</label>
                                <input type="date" name="start_date" id="start_date"
                                    class="form-control @error('start_date') is-invalid @enderror"
                                    value="{{ old('start_date') ?? $event->start_date }}">
                                @error('start_date')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                                <label for="end_date">End date</label>
                                <input type="date" name="end_date" id="end_date"
                                    class="form-control @error('end_date') is-invalid @enderror"
                                    value="{{ old('end_date') ?? $event->end_date }}">
                                @error('end_date')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price"
                                    class="form-control @error('price') is-invalid @enderror"
                                    value="{{ old('price') ?? $event->price }}">
                                @error('price')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </div>
                            <button class='btn btn-dark mt-2'>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
