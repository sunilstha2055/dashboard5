@extends('admin.layouts.app')
@section('content')
    <div id="app">
        <div class="row border-bottom bg-white page-heading">
            <div class="col-lg-10">
                <h2>Home</h2>
            </div>
            <div class="col-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <strong>Home</strong>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="content-wrapper animate__animated pt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Welcome to Admin Dashboard!!</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
@endsection
