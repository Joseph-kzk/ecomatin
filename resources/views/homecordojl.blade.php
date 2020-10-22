
<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body>

    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>


    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

        @include("includes.header")


        @include("includes.menu")


        <div id="content" class="content">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>


            <h1 class="page-header">Dashboard <small>Page d'accueil</small></h1>


			<div class="row">

                <div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-gradient-green">
						<div class="stats-icon"><i class="fa fa-globe"></i></div>
						<div class="stats-info" >
							<h4>JOURNAL EN LIGNE</h4>
							<p >{{$jl}}</p>
						</div>
						<div class="stats-link">
							<a href="{{ url('journalenligne') }}">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
                </div>

			</div>


        </div>


        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

    </div>


    <script src="{{ asset('assets/js/app.min.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/js/theme/facebook.min.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>


    <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.time.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.pie.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>
    <script src="{{ asset('assets/js/demo/dashboard.js') }}" type="eb08a70c953471f3aec5f2f2-text/javascript"></script>

    <script type="eb08a70c953471f3aec5f2f2-text/javascript">
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="{{ asset('assets/cdn-cgi2/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="eb08a70c953471f3aec5f2f2-|49" defer=""></script>

</body>

</html>
