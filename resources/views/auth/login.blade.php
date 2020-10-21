
<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

    <body class="pace-top">

        <div id="page-loader" class="fade show">
            <span class="spinner"></span>
        </div>

            <!-- begin alert -->
            @include('includes.alerte')
            <!-- end alert -->

        <div id="page-container" class="fade">

            <div class="login login-v1">

                <div class="login-container">
                    <div style="text-align:center;margin-bottom:25px;">
                        <img src="{{ asset('assets/img/logo/LOGO_ECOMATIN.png')}}" width="400px" height="100px" alt=""/>
                    </div>
                    <div class="login-header">
                        <div class="brand">
                            <span class="logo">
                            </span> <b>Connexion</b>
                        </div>
                        <div class="icon">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>


                    <div class="login-body">

                        <div class="login-content">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group m-b-20">
                                    <input id="email" type="text" class="form-control form-control-lg inverse-mode @error('email') is-invalid @enderror" name="email" placeholder="Login" autocomplete="email" autofocus/>
                                </div>

                                <div class="form-group m-b-20">
                                    <input id="password" type="password" class="form-control form-control-lg inverse-mode @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="current-password" />
                                </div>

                                <div class="login-buttons">
                                    <button type="submit" class="btn btn-info btn-block btn-lg">Se connecter</button>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        @include("includes.footer-script")

        <script type="51afaff80741d556678c68c6-text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-53034621-1', 'auto');
            ga('send', 'pageview');

        </script>


    </body>

</html>
