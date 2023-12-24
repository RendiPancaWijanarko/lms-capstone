@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                {{-- header list kelas --}}
                <div class="card-header">
                    <div class="card-title mb-0 me-1">
                        <h5 class="mb-1">My Class</h5>
                    </div>
                </div>

                {{-- list kelas --}}
                <div class="card-body">
                    <div class="row gy-4 bm-4">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card shadow-none border p-2 h-100">
                                <div class="rounded-2 text-center mb-3">
                                    <a href=""><img class="img-fluid" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/pages/app-academy-tutor-1.png" alt="tutor image 1">
                                    </a>
                                </div>

                                <div class="card-body p-3 pt-2">
                                    <a href="" class="h5">Basics of Angular</a>
                                    <p class="d-flex align-items-center mt-2"> 30 minutes </p>

                                    <div class="progress rounded-pill mb-4" style="height: 8px">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 mt-2">Detail</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card shadow-none border p-2 h-100">
                                <div class="rounded-2 text-center mb-3">
                                    <a href=""><img class="img-fluid" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/pages/app-academy-tutor-1.png" alt="tutor image 1">
                                    </a>
                                </div>

                                <div class="card-body p-3 pt-2">
                                    <a href="" class="h5">Basics of Angular</a>
                                    <p class="d-flex align-items-center mt-2"> 30 minutes </p>

                                    <div class="progress rounded-pill mb-4" style="height: 8px">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 mt-2">Detail</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card shadow-none border p-2 h-100">
                                <div class="rounded-2 text-center mb-3">
                                    <a href=""><img class="img-fluid" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/pages/app-academy-tutor-1.png" alt="tutor image 1">
                                    </a>
                                </div>

                                <div class="card-body p-3 pt-2">
                                    <a href="" class="h5">Basics of Angular</a>
                                    <p class="d-flex align-items-center mt-2"> 30 minutes </p>

                                    <div class="progress rounded-pill mb-4" style="height: 8px">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 mt-2">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
