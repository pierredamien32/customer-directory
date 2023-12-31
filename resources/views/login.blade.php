<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Directory</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
</head>
<style>
    .text-gradient {
        display: inline-block;
        background: -webkit-linear-gradient(left, #da8cff, #9a55ff);
        background: linear-gradient(to right, #da8cff, #9a55ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* width: 50%; */
        /* padding: 0 100px; */
    }

    .titre {
        /* padding: 0 200px;
        background: red; */
    }

    .body {
        /* width: 100%;
        height: 100vh;
        margin: 10px;      */

        width: 100%;
        /* Par exemple, commencez avec une largeur de 50% */
        height: 100vh;
        /* Hauteur fixe, vous pouvez ajuster selon vos besoins */
        background-color: #e0e0e0;
        transition: width 0.3s;
    }

    @media screen and (max-width:400px) {
        .body {
            width: 95%;
            margin: 0 -5px;
        }
        button{
            padding: 10px 50px;
        }
    }
</style>

<body>
    <div class="container-scroller ">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5 body">
                            <form class="pt-3" action="{{ route('loginUsers') }}" method="POST">
                                @csrf
                                <div class="brand-logo container">
                                    <img style="width: 100%;" src="{{ asset('assets/images/logo.svg')}}">
                                </div>
                                <h4>Salut! Commençons</h4>
                                <h6 class="font-weight-light">Connectez-vous pour continuer.</h6>
                                <div class="form-group">
                                    <input type="email" name="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        id="exampleInputEmail1" placeholder="Email" @if(isset($_COOKIE["email"])) value="{{ $_COOKIE["email"] }}" @endif>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        id="exampleInputPassword1" placeholder="Password" @if(isset($_COOKIE["password"])) value="{{ $_COOKIE["password"] }}" @endif>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-3 container">
                                    <button
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium "
                                        type="submit">Se connecter</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" name="remember"> Gardez-moi connecté
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Mot de passe oublié?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- endinject -->
</body>

</html>
