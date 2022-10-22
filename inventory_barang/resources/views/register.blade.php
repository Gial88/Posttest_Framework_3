@extends('global')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            @if(session('success'))
                            <div class="alert alert-success">
                                <b>Yeah!</b> {{session('success')}}
                            </div>
                            @endif
                            @if(session('error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{session('error')}}
                            </div>
                            @endif
                            <h3 class="mb-5">Register Akun</h3>
                                <form action="{{url('/action-register')}}" method="POST">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <input type="text" id="typeEmailX-2" class="form-control form-control-lg"
                                            name="nama" placeholder="Masukkan Nama Anda" required>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="email" id="typeEmailX-2" class="form-control form-control-lg"
                                            name="email" placeholder="Masukkan Email Anda" required>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" id="typePasswordX-2" class="form-control form-control-lg"
                                            name="password" placeholder="Masukkan Password Anda" required>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" id="typePasswordX-2" class="form-control form-control-lg"
                                            name="password2" placeholder="Masukkan Password Anda" required>
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit"
                                        name="login">Register</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
