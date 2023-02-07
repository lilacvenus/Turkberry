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


                        <form>
                            <div class="form-group row">
                                <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="product_name" class="form-control" id="product_name" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="product_description" class="col-sm-2 col-form-label">Product Description</label>
                                <div class="col-sm-10">
                                    <input type="product_description" class="form-control" id="product_description" placeholder="Product Description">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="product_price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="product_price" class="form-control" id="product_price" placeholder="Price">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="image_url" class="col-sm-2 col-form-label">Image Url</label>
                                <div class="col-sm-10">
                                    <input type="image_url" class="form-control" id="image_url" placeholder="Image Url">
                                </div>
                            </div>



                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Product Available:
                                </label>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Product In Stock:
                                    </label>

                                    <div class="form-group row">
                                        <label for="product_type" class="col-sm-2 col-form-label">Product Type</label>
                                        <div class="col-sm-10">
                                            <input type="product_type" class="form-control" id="product_type" placeholder="Product Type">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Save Product</button>
                                        </div>
                                    </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

