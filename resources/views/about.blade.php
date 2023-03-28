

@extends('layouts.app')

@section('content')
<div class="container">
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Admin') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                        <div class="table-responsive-sm">--}}
    <div class="card" style="width: 75rem;">
        <img class="card-img-top"  src="{{asset('/public/turkberry-assets/pictures/23.png')}}" alt="Card Image">
        <div class="card-body">
            <h5 class="card-title">ABOUT US!</h5>
            <p class="card-text">
            <p>Turk Berry is a company that offers a wide range of delicious treats to satisfy your sweet tooth located in Canada.</p>
            <p>From delectable donuts to creamy ice-cream, Turk Berry has something for everyone.</p>
            <p>Our donuts are baked fresh every day, with a variety of flavors and toppings to choose from.</p>
            <p>Whether you're in the mood for classic glazed donuts or something more unique like blueberry,
                Turk Berry has got you covered.</p>
            <p>Our donuts are always soft and fluffy, with the perfect balance of sweetness and flavor.</p>
            <p>You can enjoy them on their own or pair them with a hot cup of coffee for a delicious breakfast or snack.</p>
        </div>
    </div>
    <br>

    <div class="card" style="width: 75rem;">
        <img src="src="{{asset('/public/turkberry-assets/pictures/23.png')}}"" class="card-img-top" alt="Card Image">
        <div class="card-body">
            <p class="card-text">
            <p> In addition to our mouth-watering donuts, Turk Berry also offers a variety of creamy and refreshing ice-cream flavors.</p>
            <p>Made with only the finest ingredients, our ice-cream is perfect for hot summer days or as a sweet treat after a long day.</p>
            <p>With flavors unique Turk Berry's ice-cream is sure to satisfy any cravings. You can enjoy our ice-cream in a cone or cup,
                or even take home a pint to enjoy at your leisure.</p>
               <p> So if you're looking for delicious treats that will
                   make your taste buds dance with joy, be sure to check out Turk Berry today.</p>
            </p>
        </div>
    </div>

@endsection
