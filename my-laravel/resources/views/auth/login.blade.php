@extends('layouts.template')

@section('content')
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="wrap">
                        <div class="img" style="background-image: url({{ asset('/img/bg-1.jpg') }});"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <h3 class="mb-4">Sign In</h3>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                               <ul>
                                   @foreach ($errors->all() as $error)
                                       <li>{{$error}}</li>
                                   @endforeach
                               </ul>
                            </div>
                            
                        @endif
                            <form action="{{ route('login') }}" method="POST" class="signin-form"> @csrf


                                <div class="form-group mt-3">
                                    <input type="email" name="email" class="form-control" required>
                                    <label class="form-control-placeholder">Email Address</label>
                                </div>
                               
                                <div class="form-group">
                                    <input id="password-field" type="password" name="password" class="form-control"
                                        required>
                                    <label class="form-control-placeholder">Password</label>
                                </div>
                              

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me <input
                                                type="checkbox" name="remember" checked><span
                                                class="checkmark"></span></label>
                                    </div>
                                    <div class="w-50 text-md-right"><a href="#">Forgot Password</a></div>
                                </div>

                                <div class="form-group justify-content-between d-flex">
                                    <a href="{{route('auth.github')}}" class="auth_social btn github"><i class="fa fa-github"></i></a>
                                    <a href="{{route('auth.google')}}" class="auth_social btn google"><i class="fa fa-google"></i></a>
                                    <a href="{{route('auth.linkedin')}}" class="auth_social btn linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>






                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="/register">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
