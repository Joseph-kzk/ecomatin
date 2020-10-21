<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body>

	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>


	<div id="page-container"
		class="fade page-sidebar-fixed page-header-fixed page-content-full-height page-with-wide-sidebar page-with-light-sidebar">

        @include("includes.header")

        @include("includes.menu")



		<div id="content" class="content content-full-width">

			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">articles</li>
			</ol>

            <h1 class="page-header">Liste des mes articles</h1>
                <!-- begin alert -->
                @include('includes.alerte')
                <!-- end alert -->

			<a href="{{ route('articles.create') }}" class="btn btn-info" style="margin-left:10px;margin-bottom:10px;">Rédiger <i class="fa fa-plus"></i> </a>

			<div class="vertical-box with-grid inbox ">

				<div class="vertical-box-column">

					<div class="vertical-box">


						<div class="vertical-box-row">

							<div class="vertical-box-cell">

								<div class="vertical-box-inner-cell bg-white">

									<div data-scrollbar="true" data-height="100%">

										<ul class="list-group list-group-lg no-radius list-email">

                                            @if(count($articles) > 0)

                                                @foreach($articles as $key=> $article)

                                                    <li class="list-group-item unread">

                                                        <a href="{{ route('articles.show', $article->idarticle) }}" class="email-user bg-grey">
                                                            <span class="text-white"><i class="fa fa-file-alt"></i></span>
                                                        </a>

                                                        <div class="email-info">
                                                            <a href="{{ route('articles.show', $article->idarticle) }}">
                                                                <span class="email-sender">{{ $article->auteur }}</span>

                                                                <span class="email-title">
                                                                    {{ $article->titre }}
                                                                </span>

                                                                <span class="email-title">{{ $article->created_at }}</span>

                                                            </a>

                                                        </div>

                                                        <div class="">

                                                            <a href="{{ route('articles.edit', $article->idarticle) }}" class="btn btn-primary btn-xs"> <i class="fa fa-pen" style="color: white;"></i></a>
                                                            <a href="#modal-alert{{$article->idarticle}}" class="btn btn-danger btn-xs" data-toggle="modal"> <i class="fa fa-trash" style="color: white;"></i></a>

                                                        </div>
                                                    </li>

                                                @endforeach

                                                @else
                                                <p>Aucun article pour le moment</p>

                                            @endif

										</ul>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>


		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
			data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

	</div>


    @foreach($articles as $article)

        <form action="{{ route('articles.destroy', $article->idarticle) }}" method="POST">

            @method('delete')
            @csrf

            <div class="modal fade" id="modal-alert{{$article->idarticle}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Alerte</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger m-b-0" style="text-align:center;">
                                <i class="fa fa-exclamation-triangle fa-3x"style="margin-bottom:15px;"></i>
                                <h4 class="modal-title">ATTENTION !!</h4>
                                <p>
                                    Etes-vous sûr de vouloir supprimer cet article ?
                                </p>
                            </div>
                        </div>

                            <div class="modal-footer">
                                <button class="btn btn-white" data-dismiss="modal">NON</button>
                                <button type="submit" class="btn btn-danger" type="submit" >OUI</button>
                            </div>

                    </div>
                </div>
            </div>

        </form>

    @endforeach

    @include("includes.footer-script")

	<script type="256afb838d4987d5fe2c5a2b-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>

</body>

</html>
