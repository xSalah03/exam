@extends('pages.layout.app')

@section('title')
    Create event
@endsection

@section('content')
    <div class='container'>
        <div class='row mt-5'>
            <div class='col-md-6 offset-md-3'>
                <div class='card bg-light'>
                    <div class='card-shadow rounded-8'>
                        <div class='card-header'>
                            <h4>Create your own event</h4>
                        </div>
                        <div class='card-body'>
                            <form action='{{ route('createEvent') }}' method='POST'>
                                @csrf
                                <div class='form-group mb-3'>
                                    <label for='title' class='mb-3'>Title</label>
                                    <input type='text' name='title' id='' value='{{ old('title') }}'
                                        class='form-control @error('title') is-invalid @enderror'>
                                    @error('title')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                    <label for='description' class='mb-3'>Description</label>
                                    <input type='text' name='description' id='' value='{{ old('description') }}'
                                        class='form-control @error('description') is-invalid @enderror'>
                                    @error('description')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                    <label for='start_date' class='mb-3'>Start date</label>
                                    <input type='date' name='start_date' id='' value='{{ old('start_date') }}'
                                        class='form-control @error('start_date') is-invalid @enderror'>
                                    @error('start_date')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                    <label for='end_date' class='mb-3'>End date</label>
                                    <input type='date' name='end_date' id='' value='{{ old('end_date') }}'
                                        class='form-control @error('end_date') is-invalid @enderror'>
                                    @error('end_date')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                    <label for='price' class='mb-3'>Price</label>
                                    <input type='number' name='price' id='' value='{{ old('price') }}'
                                        class='form-control @error('price') is-invalid @enderror'>
                                    @error('price')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class='form-group'>
                                    <button type="submit" class='btn btn-dark w-100'>Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
