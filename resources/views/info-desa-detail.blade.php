@extends('layouts.app')

@section('title', 'Detail Info Desa')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-6">
                                <h4 class="card-title">Detail Info Desa</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 d-flex">
                                <span>
                                    ID
                                </span>
                                <span class="ml-auto">
                                    :
                                </span>
                            </div>
                            <div class="col-sm-10">
                                <span>
                                    12345
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 d-flex">
                                <span>
                                    Judul
                                </span>
                                <span class="ml-auto">
                                    :
                                </span>
                            </div>
                            <div class="col-sm-10">
                                <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic fugit modi cupiditate veritatis est odit, adipisci expedita, id voluptas praesentium ipsam laborum ipsum sed a quos tempora atque quibusdam nam!
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 d-flex">
                                <span>
                                    Thumbnail
                                </span>
                                <span class="ml-auto">
                                    :
                                </span>
                            </div>
                            <div class="col-sm-10">
                                <img src="https://i.pinimg.com/564x/71/95/60/7195601aabb8f2fbf2a28ee28d3b3cc0.jpg" alt="" width="200px">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 d-flex">
                                <span>
                                    ID Admin
                                </span>
                                <span class="ml-auto">
                                    :
                                </span>
                            </div>
                            <div class="col-sm-10">
                                <span>
                                0001
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 d-flex">
                                <span>
                                    Status
                                </span>
                                <span class="ml-auto">
                                    :
                                </span>
                            </div>
                            <div class="col-sm-10">
                                <span>
                                Publish
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 d-flex">
                                <span>
                                    Isi
                                </span>
                                <span class="ml-auto">
                                    :
                                </span>
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nesciunt consequuntur omnis? Ab, consequatur ut harum ipsum sapiente architecto saepe voluptate deleniti beatae asperiores magni fuga blanditiis? Alias, laborum neque.
                                </p>
                            </div>
                        </div>
                        <div class="form-group text-right mr-5">
                            <a type="submit" class="btn btn-success btn-sm mb-6 text-white">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>


@endsection
