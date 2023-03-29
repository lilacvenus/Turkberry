{{--{{$errors}}--}}

{{--@error('flag_image_url')--}}
@extends('layouts.app')

{{--@error('name')--}}
{{--{{message}}--}}
{{--@enderror--}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Variety Create') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('varieties.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="variety_name" class="col-sm-2 col-form-label">Variety Name</label>
                            <div class="col-sm-10">
                                <input name="variety_name" class="form-control" id="variety_name" placeholder="variety Name">
                            </div>
                        </div>
                        @error('variety_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group row">
                            <label for="variety_description" class="col-sm-2 col-form-label">Variety Description</label>
                            <div class="col-sm-10">
                                <input name="variety_description" class="form-control" id="variety_description" placeholder="variety Description">
                            </div>
                        </div>
                        @error('variety_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group row">
                            <label for="image_url" class="col-sm-2 col-form-label">Image Url</label>
                            <div class="col-sm-10">
                                <input name="image_url" class="form-control" id="image_url" placeholder="Image Url">
                            </div>
                        </div>
                        @error('image_url')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-check">
                            <input name="variety_available" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Variety Available
                            </label>

                            <div class="form-check">
                                <input name="variety_stock" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Variety In Stock
                                </label>

                                <div class="form-group row">
                                    <label for="variety_type" class="col-sm-2 col-form-label">Variety Type</label>
                                    <select name="variety_type" id="variety_type"  class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach($group as $type)

                                                    <option value="{{$type->name}}">{{$type->name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                @error('variety_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Create variety</button>
                            </div>
                        </div>
                    </form>

                            <a class= "btn btn-primary" href="{{ route('products.index') }}">Return to index</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
