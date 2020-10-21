<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body>

	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>


	<div id="page-container"
		class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar page-with-light-sidebar">

        @include("includes.header")


        @include("includes.menu")


		<div id="content" class="content">

			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>

			<h1 class="page-header">Dashboard <small>page d'accueil</small></h1>


			<div class="row">

				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-file-archive"></i></div>
						<div class="stats-info">
							<h4>TOUS LES ARTICLES</h4>
							<p>{{$articles}}</p>
						</div>
						<div class="stats-link">
							<a href="{{ route('articles.index') }}">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>


				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-th-list"></i></div>
						<div class="stats-info">
							<h4>TOUTES LES RUBRIQUES</h4>
							<p>{{$rubriques}}</p>
						</div>
						<div class="stats-link">
							<a href="{{ route('rubriques.index') }}">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-grey">
						<div class="stats-icon"><i class="fa fa-file-alt"></i></div>
						<div class="stats-info">
							<h4>POLITIQUES PUBLIQUES</h4>
							<p>{{$politique}}</p>
						</div>
						<div class="stats-link">
							<a href="{{ url('politique') }}">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
                </div>

                <div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-white">
						<div class="stats-icon"><i class="fa fa-file-alt"></i></div>
						<div class="stats-info" >
							<h4 style="color:grey;">BANQUES ET FINANCES</h4>
							<p style="color:grey;">{{$banque}}</p>
						</div>
						<div class="stats-link">
							<a href="{{ url('banque') }}">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
                </div>

                <div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-file-alt"></i></div>
						<div class="stats-info" >
							<h4 >BUSINESS ET ENTREPRISES</h4>
							<p >{{$business}}</p>
						</div>
						<div class="stats-link">
							<a href="{{ url('business') }}">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
                </div>

                <div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-yellow">
						<div class="stats-icon"><i class="fa fa-file-alt"></i></div>
						<div class="stats-info" >
							<h4 >CONJONCTURE</h4>
							<p >{{$conjoncture}}</p>
						</div>
						<div class="stats-link">
							<a href="{{ url('conjoncture') }}">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
                </div>

                <div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-green">
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

                <div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-indigo">
						<div class="stats-icon"><i class="fa fa-file-pdf"></i></div>
						<div class="stats-info" >
							<h4 >JOURNAL TABLOÏD</h4>
							<p>{{$jt}}</p>
						</div>
						<div class="stats-link">
							<a href="{{ url('journaltabloid') }}">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>

			</div>


		</div>



		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

	</div>


    @include("includes.footer")

	<script type="64c8d63bb6ac2bfcec068da5-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

    </script>

</body>

</html>
