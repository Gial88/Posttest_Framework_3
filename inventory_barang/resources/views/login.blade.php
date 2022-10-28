@extends('global')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Login</h3>
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    <b>Yeah!</b> {{ session('error') }}
                                </div>
                            @endif
                            @if (session('username'))
                                <div class="alert alert-danger">
                                    <b>Opps!</b> {{ session('username') }}
                                </div>
                            @endif
                            <form action="{{ url('/action-login') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg"
                                        name="email" placeholder="Masukkan Email Anda" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg"
                                        name="password" placeholder="Masukkan Password Anda" required>
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </form>
                            <div class="new-account mt-3">
                                <p>Don't have an account? <a class="text-primary" href="/register">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
