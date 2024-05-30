@extends('master')
@section('title','Registration Page')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">Student Registration Form</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <form action="{{route('store.info')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Student Name:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Student Id:</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="studentId">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Student's Description:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Student Image:</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Create Info">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

