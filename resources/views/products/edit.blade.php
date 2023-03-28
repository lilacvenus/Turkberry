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
                    <div class="card-header">{{ __('Product Edit') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form action="{{  route('products.update', $product->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name='name' type="text" class="form-control" id="name" value="{{old('name')??$product->name}}" placeholder="Enter Name" >
                                    @error('name')
                                    <div class="alert alert-danger">{{$message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input name='description' type="text" class="form-control" id="description" value="{{old('description')??$product->description}}" placeholder="Enter Description" >
                                    @error('description')
                                    <div class="alert alert-danger">{{$message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input name='price' type="text" class="form-control" id="price" value="{{old('price')??$product->price}}" placeholder="Enter Price" >
                                    @error('price')
                                    <div class="alert alert-danger">{{$message }}</div>
                                    @enderror
                                </div>


                            <div class="form-group">
                                <label for="image">Image Url</label>
                                <input name='image' type="text" class="form-control" id="image" value="{{old('image')??$product->image}}" placeholder="Enter Image Url" >
                                @error('image')
                                <div class="alert alert-danger">{{$message }}</div>
                                @enderror
                            </div>




                            {{--NOTE MAKE CHECKBOXS STICKY--}}
                                <div class="form-check">

                                    <input  class="form-check-input" type="checkbox" value="1" id="stock" name="stock">
                                    <label class="form-check-label" for="stock">
                                       Availability
                                    </label>
                                </div>

                                <div class="form-check">

                                    <input  class="form-check-input" type="checkbox" value="1" id="stock" name="availability">
                                    <label class="form-check-label" for="availability">
                                        Stock
                                    </label>
                                </div>

                                    <div class="form-group row">
                                        <label for="header" class="col-sm-2 col-form-label">Product Type</label>
                                        <select name="header" id="header"  class="form-select" aria-label="Default select example">
                                            <option>Open this select menu</option>
                                            @foreach($group as $type)
                                                <option @if(old('header')??$product->header == $type->id) selected @endif value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('header')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Save Product</button>
                                        </div>
                                    </div>
                        </form>



                            <form method="POST" action="{{ route('products.destroy',$product->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" btn btn-danger">Delete</button>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

