@extends('admin.layout')

@section('page-content')
    
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">
                Posts Form
            </h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">
                    Admin
                </a>
            </li>
            <li class="breadcrumb-item active">
                Posts
            </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title">
                            <strong class="d-block">
                                Basic Form
                            </strong>
                            <span class="d-block">
                                Lorem ipsum dolor sit amet consectetur.
                            </span>
                        </div>
                        <div class="block-body">
                            <form>
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Email
                                    </label>
                                    <input type="email" placeholder="Email Address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Password
                                    </label>
                                    <input type="password" placeholder="Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Signin" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Horizontal Form-->
                
                <!-- Inline Form-->
            </div>
        </div>
    </div>

@endsection