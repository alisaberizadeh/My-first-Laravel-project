@extends('layouts.template')

@section('content')
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="wrap">
                        <div class="img" style="background-image: url({{ asset('/img/rastislav.jpg') }});"></div>
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
                            @if (session('status'))
                                <div class="alert alert-success">{{session('status')}}</div>
                            @endif
                            <form action="{{ route('password.email') }}" method="POST" class="signin-form"> @csrf

                                <div class="form-group mt-3">
                                    <input type="email" name="email" class="form-control" required>
                                    <label class="form-control-placeholder">Email Address</label>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Send
                                        Password Reset Link</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
