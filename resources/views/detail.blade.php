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

			<div class="vertical-box with-grid inbox ">


				<div class="vertical-box-column">

					<div class="vertical-box">


						<div class="vertical-box-row bg-white">

							<div class="vertical-box-cell">

								<div class="vertical-box-inner-cell">

									<div data-scrollbar="true" data-height="100%">

										<div class="wrapper">
											<h4 class="m-t-0 m-b-15 f-w-400"><u>Surtitre</u>  : {{ $articles->surtitre }}</h4>
											<h5 class="m-t-0 m-b-15 f-w-400"><u>Titre</u>  : {{ $articles->titre }}</h5>
											<h6 class="m-t-0 m-b-15 f-w-400"><u>Chapeau</u>  : {{ $articles->chapeau }}</h6>
											<ul class="media-list underline m-b-15 p-b-15">
												<li class="media media-sm clearfix">

													<div class="media-body">
														<div class="email-from text-inverse f-s-14 m-b-3 f-w-500">
															Par : <b>{{ $articles->auteur }}</b>
														</div>

														<div class="m-b-3"><i class="fa fa-clock fa-fw"></i>
                                                            {{ $articles->created_at }}
                                                        </div>

														<div class="email-to">
															Pour le : {{ $articles->type }}
                                                        </div>
                                                        <p class="mt-3 mb-2px">Encombrement : {{strlen($articles->texte)}} Signes</p>
                                                    </div>

												</li>
                                            </ul>


											<ul class="attached-document clearfix">

												<li class="fa-camera">
													<div class="document-file">
														<a href="javascript:;">
															<img src="data:image/jpg;base64,{{ $articles->image }}" alt="" />
														</a>
													</div>
													<div class="document-name">
                                                        <a href="javascript:;">Image </a>
                                                    </div>
												</li>
                                            </ul>

                                            <div >

                                                <textarea class="textarea form-control" name="texte" id="wysihtml5"
                                                    placeholder="{{ $articles->texte }}" rows="20" readonly>
                                                </textarea>

                                            </div>

										</div>

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

    @include("includes.footer-script")

	<script type="b19c0b027788ed544853ae59-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>

</body>

</html>
