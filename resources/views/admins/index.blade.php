

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="table-responsive-sm">
                            <table class="table">


                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">  <img src="..." alt="..." class="img-thumbnail"></div>
{{--                                        <img src="..." class="img-fluid" alt="Responsive image">--}}
                                        <div class="col-2"><h3>Admins Name</h3></div>
                                        <div class="col-2"><a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Admin</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Delete</a></div>

                                    </div>
                                </div>











                            </table>
                        </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
