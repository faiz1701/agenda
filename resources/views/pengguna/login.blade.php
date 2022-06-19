@extends('layouts.main')

@section('title', 'Login Page')

@section('content')
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
        <div class="row g-0 align-items-center justify-content-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
                    <div class="card-body p-5 shadow-5 text-center">
                        <h2 class="fw-bold mb-5">Login now</h2>
                        <form method="POST" action="{{route('postlogin')}}">
                            {{ csrf_field() }}
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="myInput" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>
                            
                            <div class="form-outline mb-4">
                                <input type="checkbox" onclick="myFunction()">Show Password
                            </div>


                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <label class="form-check-label" for="form2Example33">
                                    Need An Account? <a href="{{route('registrasi')}}">Sign UP</a>
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Sign Up
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="{{asset('/assets/img/taylor-wilcox-NTur2_QKpg0-unsplash.jpg')}}" class=" rounded-4 shadow-4"
                    alt="" width="550px" height="550px" />
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
@endsection