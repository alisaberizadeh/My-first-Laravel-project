@extends('layouts.template')

@section('content')
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="wrap">
                        <div class="img" style="background-image: url({{ asset('/img/pixabay.jpg') }});"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <h3 class="mb-4">Reset Password</h3>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                             
                            <form action="{{ route('password.update') }}" method="POST" class="signin-form"> @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group mt-3">
                                    <input type="email" name="email" class="form-control"  value="{{ $email ?? old('email') }}" required>
                                    <label class="form-control-placeholder">Email Address</label>
                                </div>

                                <div class="form-group mt-3">
                                    <input type="password" name="password" class="form-control" required>
                                    <label class="form-control-placeholder">New Password</label>
                                </div>


                                <div class="form-group mt-3">
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                    <label class="form-control-placeholder">Confirm Password</label>
                                </div>




                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Reset Password</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
