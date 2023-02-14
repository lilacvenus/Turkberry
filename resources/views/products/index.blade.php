

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif





                        <div class="container px-4 py-5" id="hanging-icons">
                            <h2 class="pb-2 border-bottom">Turkberry Products</h2>
                            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                                    </div>
                                    <div>
                                        <div class="fs-2">Frozen Treats</div>
                                        <div class="fs-2">Frozen Yogurt</div>
                                        <div>Description: small is 2$</div>
                                        <div>Description: med is 2.5$</div>
                                        <div>Description: large is 3$</div>
{{--                                        <a href="#" class="btn btn-primary">--}}
{{--                                            Primary button--}}
{{--                                        </a>--}}
                                        <img src="../resources/turkberry-assets/Drinks/jpg/No_Tax_Menu-2.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                                    </div>
                                    <div>
                                        <div class="fs-2">Frozen Treats</div>
                                        <div class="fs-2">Frozen Yogurt</div>
                                        <div>Description: small is 2$</div>
                                        <div>Description: med is 2.5$</div>
                                        <div>Description: large is 3$</div>
                                        {{--                                        <a href="#" class="btn btn-primary">--}}
                                        {{--                                            Primary button--}}
                                        {{--                                        </a>--}}
                                        <img src="../resources/turkberry-assets/Drinks/jpg/No_Tax_Menu-2.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                                    </div>
                                    <div>
                                        <div class="fs-2">Frozen Treats</div>
                                        <div class="fs-2">Frozen Yogurt</div>
                                        <div>Description: small is 2$</div>
                                        <div>Description: med is 2.5$</div>
                                        <div>Description: large is 3$</div>
                                        {{--                                        <a href="#" class="btn btn-primary">--}}
                                        {{--                                            Primary button--}}
                                        {{--                                        </a>--}}
                                        <img src="../resources/turkberry-assets/Drinks/jpg/No_Tax_Menu-2.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container px-4 py-5" id="hanging-icons">
                            <h2 class="pb-2 border-bottom">Turkberry Products</h2>
                            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                                    </div>
                                    <div>
                                        <div class="fs-2">Frozen Treats</div>
                                        <div class="fs-2">Frozen Yogurt</div>
                                        <div>Description: small is 2$</div>
                                        <div>Description: med is 2.5$</div>
                                        <div>Description: large is 3$</div>
                                        {{--                                        <a href="#" class="btn btn-primary">--}}
                                        {{--                                            Primary button--}}
                                        {{--                                        </a>--}}
                                        <img src="../resources/turkberry-assets/Drinks/jpg/No_Tax_Menu-2.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                                    </div>
                                    <div>
                                        <div class="fs-2">Frozen Treats</div>
                                        <div class="fs-2">Frozen Yogurt</div>
                                        <div>Description: small is 2$</div>
                                        <div>Description: med is 2.5$</div>
                                        <div>Description: large is 3$</div>
                                        {{--                                        <a href="#" class="btn btn-primary">--}}
                                        {{--                                            Primary button--}}
                                        {{--                                        </a>--}}
                                        <img src="../resources/turkberry-assets/Drinks/jpg/No_Tax_Menu-2.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                                    </div>
                                    <div>
                                        <div class="fs-2">Frozen Treats</div>
                                        <div class="fs-2">Frozen Yogurt</div>
                                        <div>Description: small is 2$</div>
                                        <div>Description: med is 2.5$</div>
                                        <div>Description: large is 3$</div>
                                        {{--                                        <a href="#" class="btn btn-primary">--}}
                                        {{--                                            Primary button--}}
                                        {{--                                        </a>--}}
                                        <img src="../resources/turkberry-assets/Drinks/jpg/No_Tax_Menu-2.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container px-4 py-5" id="hanging-icons">
                            <h2 class="pb-2 border-bottom">Turkberry Products</h2>
                            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                                    </div>
                                    <div>
                                        <div class="fs-2">Frozen Treats</div>
                                        <div class="fs-2">Frozen Yogurt</div>
                                        <div>Description: small is 2$</div>
                                        <div>Description: med is 2.5$</div>
                                        <div>Description: large is 3$</div>
                                        {{--                                        <a href="#" class="btn btn-primary">--}}
                                        {{--                                            Primary button--}}
                                        {{--                                        </a>--}}
                                        <img src="../resources/turkberry-assets/Drinks/jpg/No_Tax_Menu-2.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                                    </div>
                                    <div>
                                        <div class="fs-2">Frozen Treats</div>
                                        <div class="fs-2">Frozen Yogurt</div>
                                        <div>Description: small is 2$</div>
                                        <div>Description: med is 2.5$</div>
                                        <div>Description: large is 3$</div>
                                        {{--                                        <a href="#" class="btn btn-primary">--}}
                                        {{--                                            Primary button--}}
                                        {{--                                        </a>--}}
                                        <img src="../resources/turkberry-assets/Drinks/jpg/No_Tax_Menu-2.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                                <div class="col d-flex align-items-start">
                                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                        <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                                    </div>
                                    <div>
                                        <div class="fs-2">Frozen Treats</div>
                                        <div class="fs-2">Frozen Yogurt</div>
                                        <div>Description: small is 2$</div>
                                        <div>Description: med is 2.5$</div>
                                        <div>Description: large is 3$</div>
                                        {{--                                        <a href="#" class="btn btn-primary">--}}
                                        {{--                                            Primary button--}}
                                        {{--                                        </a>--}}
                                        <img src="../resources/turkberry-assets/Drinks/jpg/No_Tax_Menu-2.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
