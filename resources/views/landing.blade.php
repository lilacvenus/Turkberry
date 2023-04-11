@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container">

            {{--    <div class="row justify-content-center">--}}
            {{--        <div class="col-md-8">--}}
            {{--            <div class="card">--}}
            {{--                <div class="card-header">{{ __('Admin') }}</div>--}}

            {{--                <div class="card-body">--}}
            {{--                    @if (session('status'))--}}
            {{--                        <div class="alert alert-success" role="al url('turkberry-assets/pictures/27.jpg')ert">--}}
            {{--                            {{ session('status') }}--}}
            {{--                        </div>--}}
            {{--                    @endif--}}
            {{--                        <div class="table-responsive-sm">--}}

            <div id="carouselExampleDark" class="carousel carousel-dark slide border border-dark" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" ></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label=""></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ URL::asset('turkberry-assets/POS Screen/welcomeScaled.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ URL::asset('turkberry-assets/SpecialPresentations/tazo.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('turkberry-assets/SpecialPresentations/TurtleImage.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="card-group">
                <div class="card" style="width: 22rem;">
                    <img src="turkberry-assets/SpecialPresentations/easter.jpg" class="card-img-top" alt="easter">
                    <div class="card-body">
                        <h5 class="card-title">Easter Special</h5>
                        <p class="card-text">Get swept away in the Easter spirit with our irresistible mini egg hurricane!</p>
                    </div>

                </div>
                <div class="card"  >
                    <img src="turkberry-assets/SpecialPresentations/promotion-milkshakes9.jpg" class="card-img-top" alt="promotion">
                    <div class="card-body">
                        <h5 class="card-title">Starting 2023</h5>
                        <p class="card-text">Satisfy your cravings with our delicious vanilla, milk chocolate, dark chocolate, and cookies and cream flavors!</p>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
