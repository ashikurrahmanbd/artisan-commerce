@extends('admin.layout')

@section('page-content')
    
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">
                Products
            </h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">
                    Products
                </a>
            </li>
            <li class="breadcrumb-item active">
                Products Categories
            </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-6">


                    <div class="block">
                        <div class="title">
                            <strong>
                                Striped table with hover effect
                            </strong>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Mark
                                        </td>
                                        <td>
                                            Otto
                                        </td>
                                        <td>
                                            @mdo
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Jacob
                                        </td>
                                        <td>
                                            Thornton
                                        </td>
                                        <td>
                                            @fat
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- Horizontal Form-->
                
                <!-- Inline Form-->
                <div class="col-lg-6">


                    <div class="block">
                        <div class="title">
                            <strong>
                                Striped table with hover effect
                            </strong>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Mark
                                        </td>
                                        <td>
                                            Otto
                                        </td>
                                        <td>
                                            @mdo
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            2
                                        </th>
                                        <td>
                                            Jacob
                                        </td>
                                        <td>
                                            Thornton
                                        </td>
                                        <td>
                                            @fat
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            3
                                        </th>
                                        <td>
                                            Larry
                                        </td>
                                        <td>
                                            the Bird
                                        </td>
                                        <td>
                                            @twitter
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection