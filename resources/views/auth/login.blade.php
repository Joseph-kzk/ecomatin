
<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body class="pace-top">

    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>


    <div id="page-container" class="fade">

        <div class="login login-with-news-feed">

            <div class="news-feed">
                <img src="{{ asset('assets/img/logo/logo1.png') }}" height="120" style="margin-top: 290px; margin-left:50px;" alt="">
            </div>


            <div class="right-content">

                    <!-- begin alert -->
                    @include('includes.alerte')
                    <!-- end alert -->

                <div class="login-header">
                    <div class="brand">
                         <b>LOGIN</b>
                        <small>Page de connexion</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in-alt"></i>
                    </div>
                </div>


                <div class="login-content">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group m-b-15">
                            <input type="text" name="email" class="form-control form-control-lg" placeholder="Address mail" required />
                        </div>

                        <div class="form-group m-b-15">
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Mot de passe" required />
                        </div>

                        <div class="checkbox checkbox-css m-b-30">
                            <input type="checkbox" id="remember_me_checkbox" value="" />
                            <label for="remember_me_checkbox">
                                Remember Me
                            </label>
                        </div>

                        <div class="login-buttons">
                            <button type="submit" class="btn btn-info btn-block btn-lg">Se connecter</button>
                        </div>

                        <hr />
                        <p class="text-center text-grey-darker mb-0">
                            &copy; EcoMatin 2020
                        </p>

                    </form>

                </div>

            </div>

        </div>

        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

    </div>


    <script src="{{ asset('assets/js/app.min.js') }}" type="18c5555b2283b54d9dda0b0b-text/javascript"></script>
    <script src="{{ asset('assets/js/theme/facebook.min.js') }}" type="18c5555b2283b54d9dda0b0b-text/javascript"></script>

    <script src="{{ asset('assets/cdn-cgi2/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="18c5555b2283b54d9dda0b0b-|49" defer=""></script>
</body>


</html>
