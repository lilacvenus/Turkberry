

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
{{--                        <div class="table-responsive-sm">--}}
{{--                            <table class="table">--}}


{{--                                <div class="container">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-4">  <img src="..." alt="..." class="img-thumbnail"></div>--}}
{{--                                        <img src="..." class="img-fluid" alt="Responsive image">--}}
{{--                                        <div class="col-2"><h3>Admins Name</h3></div>--}}
{{--                                        <div class="col-2"><a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Admin</a></div>--}}
{{--                                        <div class="col-2"><a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Delete</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </table>--}}
{{--                        </div>--}}



{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}






                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>


@endsection
