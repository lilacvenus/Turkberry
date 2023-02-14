

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
{{--                @foreach(group in groups)--}}
                <div class="card-header"><h3 class="text-center">{{ __('Frozen Treats') }}</h3></div>
                        <div class="card-body">
                            <div class="container px-4" id="hanging-icons">
{{--                                @foreach(header in headers)--}}
                                <h4 class="pb-2 border-bottom text-center">Frozen Yogurt</h4>
                                <div class="d-flex flex-row justify-content-around">
                                    <div class="row row-cols-1 row-cols-lg-3 w-100">
{{--                                        @foreach(headerdescription in headerdescriptions)--}}
                                        <div class="text-center">Small: $2.00</div>
{{--                                        @endforeach--}}
                                    </div>
                                    <div class="row row-cols-1 row-cols-lg-3 w-100">
{{--                                        @foreach(variety in varieties)--}}
                                        <div class="text-center">Small: $2.00</div>
{{--                                        @endforeach--}}
                                    </div>
                                    <div class="row row-cols-1 row-cols-lg-3 w-100">
{{--                                        @foreach(product in products)--}}
                                        <div class="text-center">Small: $2.00</div>
{{--                                        @endforeach--}}
                                    </div>
                                </div>
{{--                                @endforeach--}}
                            </div>
                        </div>
            </div>
{{--                @endforeach--}}
        </div>
    </div>
</div>
@endsection
