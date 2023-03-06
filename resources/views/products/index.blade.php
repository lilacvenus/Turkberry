

@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                <div class="card-header">{{ __('Status Message') }}</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
                @endif

                @foreach($groups as $group)
                        <div class="card">

                <div class="card-header">
                    <h3>{{$group->name}}</h3>
                </div>
                        <div class="card-body">
                            <div class="container px-4" id="hanging-icons">
                                @foreach($headers as $header )
                                    @if( $group->id == $header->group)
                                        <h4 class="pb-2 border-bottom text-center mt-3">{{$header->name}}</h4>
                                            @foreach($groupdescriptions as $groupdescription )
                                                @if($groupdescription->group == $group->id)
                                                    <div class="text-center">{{$groupdescription->description}}</div>
                                                @endif
                                            @endforeach
                                            <div class="row row-cols-1 row-cols-lg-3 w-100 mt-3">
                                                @foreach($headerdescriptions as $headerdescription)
                                                    @if( $headerdescription->header == $header->id )
                                                        <div class="text-center">{{$headerdescription->details}}</div>
                                                    @endif
                                                @endforeach
{{--                                            </div>--}}

                                                <div class="row row-cols-1 row-cols-lg-3 w-100 mt-3 ">
                                                    @foreach($products as $product)
                                                        @if( $product->header == $header->id )
                                                            <div class="text-center">{{$product->name}}</div>
                                                        @endif
                                                    @endforeach
                                                </div>
{{--                                                <div class="row row-cols-1 row-cols-lg-3 w-100">--}}
                                                    @foreach($varieties as $variety)
                                                        @if( $variety->header == $header->id )
                                                            <div class="text-center">{{$variety->name}}</div>
                                                            @if($variety->image !=null)
                                                                <img src="{{ URL::asset($variety->image) }}" alt={{$variety->name}}>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                    @endif


                                @endforeach
                            </div>
                        </div>
                        </div>
                        </div>
                @endforeach
        </div>
    </div>
{{--    the outer card--}}
</div>
@endsection
