

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

    <div class="card text-center" style="width: auto;">
        <h5 class="card-header" style="padding: 25px; font-size: 50px; font-family: Arial; color: #0c63e4">ABOUT US</h5>
        <img src="{{asset('turkberry-assets/pictures/13.jpg')}}" class="card-img-top" alt="Card Image" style="width: auto;height:450px; padding: 30px; font-weight: bold;object-fit: cover;">
        <div class="card-body">
            <p class="card-text" >
            <p style="color: #1750AC; font-size: 20px;">
                Turk Berry is a company that offers a wide range of delicious treats to satisfy your
                sweet tooth located in Turks and Caicos.
                From delectable donuts to creamy frozen yogurt, Turk Berry has something for everyone.
            </p>
        </div>
    </div>
    <br>
    <div class="card-group">
        <div class="card text-center" style="min-width: 250px; margin-bottom: 25px">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: Arial; color: #0c63e4">Donuts!</h5>
                <img src="{{asset('turkberry-assets/pictures/20.png')}}" class="card-img-top" alt="..." style="height: fit-content; padding: 15px;object-fit: cover;">
                <p class="card-text" style="color: #1750AC; padding-top: 40px">
                Our donuts are baked fresh every day, with a variety of flavors and toppings to choose from.
                Whether you're in the mood for classic glazed donuts or something more unique like blueberry,
                Turk Berry has got you covered.
                </p>
            </div>
        </div>
        <div class="card text-center" style="min-width: 250px; margin-bottom: 25px">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: Arial; color: #0c63e4">Breakfast!</h5>
                <img src="{{asset('turkberry-assets/pictures/11.jpg')}}" class="card-img-top" alt="..." style="height: fit-content; padding: 15px;object-fit: cover;">
                <p class="card-text" style="color: #1750AC;">
                Our donuts are always soft and fluffy, with the perfect balance of sweetness and flavor.
                You can enjoy them on their own or pair them with a hot cup of coffee for a delicious breakfast or snack.
                </p>
            </div>
        </div>
        <div class="card text-center" style="min-width: 250px; margin-bottom: 25px">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: Arial; color: #0c63e4">Frozen Yogurt!</h5>
                <img src="{{asset('turkberry-assets/pictures/7.jpg')}}" class="card-img-top" alt="..." style="height: fit-content; padding: 15px;object-fit: cover;">
                <p class="card-text" style="color: #1750AC;padding-top: 1px" >
                    In addition to our mouth-watering donuts, Turk Berry also offers a variety of creamy and refreshing frozen yogurt flavors.
                    Made with only the finest ingredients, our frozen yogurt is perfect for hot summer days or as a sweet treat after a long day.
                </p>
            </div>
        </div>
        <div class="card text-center" style="min-width: 250px; margin-bottom: 25px">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 20px; font-family: Arial; color: #0c63e4">Visit Us!</h5>
                <img src="{{asset('turkberry-assets/pictures/14.jpg')}}" class="card-img-top" alt="..." style="height: fit-content; padding: 15px;object-fit: cover;">
                <p class="card-text" style="color: #1750AC;padding-top: 1px">
                    With flavors unique Turk Berry's frozen yogurt is sure to satisfy any cravings. You can enjoy our frozen yogurt in a cone or cup,
                    or even take home a pint to enjoy at your leisure.
                    So if you're looking for delicious treats that will
                    make your taste buds dance with joy, be sure to check out Turk Berry today.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
