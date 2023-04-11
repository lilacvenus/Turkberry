@extends('layouts.app')

@section('content')
<div class="container">
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Admin') }}</div>--}}

{{--                <div class="col-sm">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                        <div class="table-responsive-sm">--}}

    <div class="row justify-content-center">
        <div class="col-auto border border-info" style="border-radius: 25px; margin: 10px">
            <img src="{{asset('turkberry-assets/pictures/13.jpg')}}" class="card-img-top" style="max-width: 800px; padding: 15px;object-fit: cover; margin-top: 10px">
            <p style="font-size: 20px; max-width: 800px; padding: 15px">
                Turkberry is your go-to destination for satisfying your sweet tooth in Turks and Caicos. With a wide range of delectable treats, from our fresh-baked donuts to our creamy frozen yogurt, there's something for everyone. Indulge in the sweetest delights and elevate your day with Turkberry's treats.
            </p>
        </div>
    </div>
    <div class="row" style="margin-top: 10px">
        <div class="col-sm border border-info" style="border-radius: 25px; margin: 10px">
            <h5 class="card-title text-center border-bottom border-info" style="font-size: 20px; margin:5px; font-weight: bold">Donuts</h5>
            <img src="{{asset('turkberry-assets/Donuts.png')}}" class="card-img-top" alt="..." style="height: fit-content; padding: 10px;object-fit: cover;">
            <p class="card-text" style="font-size: medium; padding: 10px;">
                Indulge in a sweet and satisfying treat at Turkberry with our freshly baked donuts. Crafted with care, our donuts come in a wide variety of flavors and toppings, from classic glazed to unique and scrumptious options like blueberry. Treat yourself to something special and baked fresh daily.
            </p>
        </div>
        <div class="col-sm border border-info" style="border-radius: 25px; margin: 10px">
            <h5 class="card-title text-center border-bottom border-info" style="font-size: 20px; margin:5px; font-weight: bold">Breakfast</h5>
            <img src="{{asset('turkberry-assets/Breakfast.png')}}" class="card-img-top" alt="..." style="height: fit-content; padding: 10px; object-fit: cover;">
            <p class="card-text" style="font-size: medium; padding: 10px;">
                At Turkberry, we believe that breakfast should be a delicious and delightful experience. That's why our donuts are always soft, fluffy, and perfectly balanced in sweetness and flavor. Whether you enjoy them on their own or paired with a hot cup of coffee, our donuts are sure to brighten your day.
            </p>
        </div>
        <div class="col-sm border border-info" style="border-radius: 25px; margin: 10px">
            <h5 class="card-title text-center border-bottom border-info" style="font-size: 20px; margin:5px; font-weight: bold">Frozen Yogurt</h5>
            <img src="{{asset('turkberry-assets/FrozenYogurt.png')}}" class="card-img-top" alt="..." style="height: fit-content; padding: 10px;object-fit: cover;">
            <p class="card-text" style="font-size: medium; padding: 10px;">
                Cool down and satisfy your sweet tooth with Turkberry's creamy and refreshing frozen yogurt. Made with only the finest ingredients, our frozen yogurt comes in a variety of mouth-watering flavors that are perfect for hot summer days or as a sweet treat anytime. Enjoy a cup, cone, or pint to take home.
            </p>
        </div>
        <div class="col-sm border border-info" style="border-radius: 25px; margin: 10px">
            <h5 class="card-title text-center border-bottom border-info" style="font-size: 20px; margin:5px; font-weight: bold">Visit Us</h5>
            <img src="{{asset('turkberry-assets/VisitUs.png')}}" class="card-img-top" alt="..." style="height: fit-content; padding: 10px;object-fit: cover;">
            <p class="card-text" style="font-size: medium; padding: 10px;">
                Turkberry's unique and delicious frozen yogurt flavors are not to be missed. Treat yourself to a cone, cup, or pint to take home and enjoy at your leisure. Made with care and the finest ingredients, our frozen yogurt is sure to satisfy any craving and make your taste buds dance with joy.
            </p>
        </div>
    </div>
</div>
@endsection
