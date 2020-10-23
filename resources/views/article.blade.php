<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body>

    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>


    <div id="page-container" class="fade page-header-fixed page-sidebar-fixed">

        @include("includes.header")

        @include("includes.menu")



        <div id="content" class="content">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Mes articles</a></li>
                <li class="breadcrumb-item active">Rédiger</li>
            </ol>


            <h3 class="page-header">Article <small>Page de rédaction</small></h3>

            <!-- begin alert -->
            @include('includes.alerte')
            <!-- end alert -->

            <form action="{{ route('articles.store') }}" enctype="multipart/form-data" method="POST" name="email_to_form">
                @csrf

				<div class="row">

                    <input type="text" name="auteur" class="form-control" value="{{ Auth::user()->lastname }} {{ Auth::user()->name }}" readonly/>
                    <input type="text" name="surtitre" class="form-control mt-1" placeholder="Surtitre">
                    <input type="text" name="titre" class="form-control mt-1" placeholder="Titre">
                    <textarea name="chapeau" class="form-control mt-1" rows="1" placeholder="Chapeau"></textarea>
                    <input type="text" name="reseau" class="form-control mt-1" placeholder="Chapeau des réseaux sociaux">
                    <input type="file" name="image" class="form-control mt-1">
                    <input type="text" name="legende" class="form-control mt-1" placeholder="Légende">
                    <input type="text" name="tag" class="form-control mt-1" placeholder="Tag1, tag2, tag3...">


                    <div class="col-md-6 mt-1">
                        <select name="type" class="form-control">
                            <option>Journal en Ligne</option>
                            <option>Journal Tabloïd</option>
                            <option>Magazine</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-1">
                        <select name="rubrique" class="form-control">
                            <option>Banques et Finances</option>
                            <option>Business et Entreprises</option>
                            <option>Conjoncture</option>
                            <option>Focus</option>
                            <option>Graphique</option>
                            <option>Image</option>
                            <option>Edito</option>
                            <option>Politiques Publiques</option>
                            <option>Visage</option>
                        </select>
                    </div>



				</div>

				<div class="row" style="margin-top: 15px;">

					<div class="col-xl-12">

						<div class="panel panel-inverse m-b-0">
							<div class="panel-heading">
								<h4 class="panel-title">Zone de texte</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>
							<div class="panel-body p-0">

								<textarea class="summernote" name="texte"></textarea>

							</div>
						</div>

					</div>

                </div>

                <button class="btn btn-primary btn-block" type="submit">Enregister l'article</button>

			</form>

        </div>


        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

    </div>


    <script src="{{ asset('assets/js/app.min.js') }}" type="10a409e9517e95603a730c3c-text/javascript"></script>
    <script src="{{ asset('assets/js/theme/facebook.min.js') }}" type="10a409e9517e95603a730c3c-text/javascript"></script>


    <script src="{{ asset('assets/plugins/summernote/dist/summernote.min.js') }}" type="10a409e9517e95603a730c3c-text/javascript"></script>
    <script src="{{ asset('assets/js/demo/form-summernote.demo.js') }}" type="10a409e9517e95603a730c3c-text/javascript"></script>

    <script type="10a409e9517e95603a730c3c-text/javascript">
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

    <script src="{{ asset('assets/cdn-cgi2/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="10a409e9517e95603a730c3c-|49" defer=""></script>

</body>

<!-- Mirrored from seantheme.com/color-admin/admin/facebook/form_summernote.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 10:22:01 GMT -->

</html>
