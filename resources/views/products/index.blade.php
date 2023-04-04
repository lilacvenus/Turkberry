@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
            <div class="card-header">{{ __('Status Message') }}</div>
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            </div>
            @endif
            @if(Auth::check())
            <a class= "btn btn-primary" href="{{ route('products.create') }}">Create New Product</a>
            <a class= "btn btn-primary" href="{{ route('products.create') }}">Create New Variety</a>
            <!--<a class= "btn btn-primary" href="{{ route('products.create') }}">Create New Group Description</a>
            <a class= "btn btn-primary" href="{{ route('products.create') }}">Create New Header Description</a>-->
            @endif
            @foreach($groups as $group)
                <div class="card m-3">
                    <div class="card-header">
                        <h3>{{$group->name}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="container px-4 " id="hanging-icons">
                            <div class="row row-cols-1 row-cols-lg-3 w-100 mt-3" style="margin-left: auto; margin-right: auto">
                            @foreach($groupdescriptions as $groupdescription )
                            @if($groupdescription->group == $group->id)
                                <div class="text-center">{!! $groupdescription->description !!}</div>
                            @endif
                            @endforeach
                            </div>
                            @foreach($headers as $header )
                            @if( $group->id == $header->group)
                            <h4 class="pb-2 border-bottom text-center mt-3 font-weight-bold">{{$header->name}}</h4>
                            <div class="row row-cols-1 row-cols-lg-3 w-100 mt-3" style="margin-left: auto; margin-right: auto">
                                @foreach($headerdescriptions as $headerdescription)
                                @if( $headerdescription->header == $header->id )
                                <div class="text-center">{!! $headerdescription->details !!}</div>
                                @endif
                                @endforeach
                            </div>
                            <div class="row row-cols-1 row-cols-lg-3 w-100 mt-3 " style="margin-left: auto; margin-right: auto">
                                @foreach($products as $product)
                                @if( $product->header == $header->id )
                                {{--Link pass the product / the id--}}
                                    @if(Auth::check())
                                    <a href="{{ route('products.edit',[ $product->id]) }}">
                                        <div class="text-center">
                                        {{$product->name}}
                                        @if($product->price != null) - ${{$product->price}}@endif
                                        @if($product->image != null)<img src="{{$product->image}}" alt={{$product->name}}>@endif
                                        </div>
                                    </a>
                                    @else
                                    <div class="text-center">
                                        {{$product->name}}
                                        @if($product->price != null) - ${{$product->price}}@endif
                                        @if($product->image != null)<img src="{{$product->image}}" alt={{$product->name}}>@endif
                                    </div>
                                    @endif
                                @endif
                                @endforeach
                            </div>
                            <div class="row row-cols-2 row-cols-md-3 row-cols-xl-4 w-100 m-sm-0 m-lg-3" style="margin-left: auto; margin-right: auto">
                                @foreach($varieties as $variety)
                                    @if(Auth::check())
                                        <div class="justify-content-center"><a href="{{ route('varieties.edit',[ $variety->id]) }}">
                                            @endif
                                    @if( $variety->header == $header->id )
                                        @if($variety->image ==null)
                                        <div class="text-center">{{$variety->name}}</div>
                                        @else
                                        <img class="img-fluid" src="{{$variety->image}}" alt={{$variety->name}}>
                                        @endif
                                    @endif
                                    @if(Auth::check())</a></div>@endif
                                @endforeach
                            </div>
                        @endif
                        @endforeach
                        </div>
                    </div>
                </div>
                <br/>
            @endforeach
        </div>
    </div>
</div>
@endsection
