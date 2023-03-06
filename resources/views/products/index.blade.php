

@extends('layouts.app')

@section('content')



{{--
groups
group description
headers
header description




--}}

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

{{--                    {{dd($groups)}}--}}
                @foreach($groups as $group)
                        <div class="card">

                <div class="card-header">
{{--                    <h3 class="text-center">{{ __($group->name) }}</h3>--}}
                    <h3>{{$group->name}}</h3>

                </div>

                        <div class="card-body">
                            <div class="container px-4" id="hanging-icons">
                                @foreach($headers as $header )
                                    @if( $group->id == $header->group)
                                        <h4 class="pb-2 border-bottom text-center">{{$header->name}}</h4>
                                        <div class="d-flex flex-row justify-content-around">

                                            @foreach($groupdescriptions as $groupdescription )
                                                @if($groupdescription->group == 3)
                                                    <div class="text-center">{{$groupdescription->description}}</div>
                                                @endif
                                            @endforeach


                                            <div class="row row-cols-1 row-cols-lg-3 w-100">
                                                @foreach($headerdescriptions as $headerdescription)
                                                    @if( $headerdescription->header == $header->id )
                                                        <div class="text-center">{{$headerdescription->details}}</div>
                                                    @endif
                                                @endforeach
                                            </div>

                                    @endif





                                            {{--                                    <div class="row row-cols-1 row-cols-lg-3 w-100">--}}
{{--                                        @foreach($varieties as $variety)--}}
{{--                                        <div class="text-center">{{$variety->name}}</div>--}}
{{--                                        @endforeach--}}
{{--                                            $varieties--}}
{{--                                    </div>--}}
{{--                                    <div class="row row-cols-1 row-cols-lg-3 w-100">--}}
{{--                                        @foreach($products as $product)--}}
{{--                                        <div class="text-center">{{$product->name}}</div>--}}
{{--                                        @endforeach--}}
{{--                                            $products--}}

{{--                                    </div>--}}
                                </div>
                                @endforeach
{{--                                headers--}}
                            </div>
                        </div>
            </div>
                        </div>
                @endforeach
{{--            groups--}}
        </div>
    </div>
</div>
@endsection
