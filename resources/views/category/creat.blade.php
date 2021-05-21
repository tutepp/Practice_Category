@extends('layout.index')

@section('category')
    <div>
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Creat a New TUTEP</h1>
            </div>
            <form class="user">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                               placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                               placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                           placeholder="Email Address">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user"
                               id="exampleInputPassword" placeholder="Something">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user"
                               id="exampleRepeatPassword" placeholder="Something">
                    </div>
                </div>
                <a href="http://127.0.0.1:8000/content/" class="btn btn-primary btn-user btn-block">
                    Creat
                </a>
            </form>
        </div>
    </div>
@endsection
