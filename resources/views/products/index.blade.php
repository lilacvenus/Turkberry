@extends('layouts.app')
@section('content')

    @if (session('status'))
        <div class="card-header text-center">{{ __('Status Message') }}</div>
        <div class="card-body text-center" style="margin-bottom: 30px">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    @endif

    @if(Auth::check())
        <div class="text-center" style="margin-bottom: 30px">
            <a class= "btn btn-primary" style="margin-left: 20px; margin-right: 20px" href="{{ route('products.create') }}">Create New Product</a>
            <a class= "btn btn-primary" href="{{ route('products.create') }}">Create New Variety</a>
        </div>
    @endif

    @foreach($groups as $group)
        <div class="text-center">
            <h2 class="col-auto mx-auto">{{$group->name}}</h2>
        </div>
        <div id="hanging-icons" class="container border border-info" style="margin-bottom: 30px; border-radius: 25px; max-width: 1000px">

            <div class="row">
                @foreach($groupdescriptions as $groupdescription )
                    @if($groupdescription->group == $group->id)
                        <h5 class="col-auto mx-auto text-center" style="margin: 25px; font-size: medium" >{!! $groupdescription->details !!}</h5>
                    @endif
                @endforeach
            </div>

            @foreach($headers as $header)
                @if($group->id == $header->group)
                    <div style="margin: 20px;">
                    <div class="row border-bottom border-info" style="margin-bottom: 25px">
                        <h4 class="col-auto mx-auto text-center border border-info" style="border-radius: 5px;">{{$header->name}}</h4>
                    </div>
                    <div class="row">
                        @foreach($headerdescriptions as $headerdescription)
                            @if( $headerdescription->header == $header->id )
                                <h7 class="col-auto mx-auto text-center" style="margin: 15px; font-size: medium">{!! $headerdescription->details !!}</h7>
                            @endif
                        @endforeach
                    </div>

                    <div class="row justify-content-center">
                        {{--SO MANY NULL ROWS CAUSING SPACING ISSUES, FROM OTHER GROUPS--}}
                        @foreach($products as $product)
                            @if($product->header == $header->id)
                                <div class="col-md-3 text-center p-0">
                                    @if(Auth::check())
                                        <a href="{{ route('products.edit',[ $product->id]) }}">
                                            <div style="margin: 15px; font-size:medium;">
                                                {{$product->name}}
                                                @if($product->price != null)
                                                    - ${{$product->price}}
                                                @endif
                                                @if($product->image != null)
                                                    <img class="img-fluid no-gutters" src="{{$product->image}}" alt={{$product->name}}>
                                                @endif
                                            </div>
                                        </a>
                                    @else
                                        <div style="margin: 15px; font-size:medium">
                                            {{$product->name}}
                                            @if($product->price != null)
                                                - ${{$product->price}}
                                            @endif
                                            @if($product->image != null)
                                                <img src="{{$product->image}}" alt={{$product->name}}>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                        @foreach($varieties as $variety)
                                @if($variety->header == $header->id)
                                <div class="col-md-3 text-center p-0">
                                        @if(Auth::check())
                                            <a href="{{ route('varieties.edit',[$variety->id]) }}">
                                                @endif
                                        @if($variety->image == null)
                                            <div style="margin: 10px; font-size:medium">{{$variety->name}}</div>
                                        @else
                                            <img class="img-fluid no-gutters" src="{{$variety->image}}" alt="{{$variety->name}}"/>
                                        @endif
                                                @if(Auth::check())
                                            </a>
                                        @endif
                                    </div>
                                @endif
                        @endforeach
                    </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach
@endsection
