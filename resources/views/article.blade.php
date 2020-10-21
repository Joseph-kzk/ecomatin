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
                        <!-- begin alert -->
                        @include('includes.alerte')
                        <!-- end alert -->

						<div class="vertical-box-row bg-white">

							<div class="vertical-box-cell">

								<div class="vertical-box-inner-cell">

									<div data-scrollbar="true" data-height="100%" class="p-15">

                                        <form action="{{ route('articles.store') }}" enctype="multipart/form-data" method="POST" name="email_to_form">
                                            @csrf

											<div data-id="extra-cc"></div>

											<div class="email-subject">
												<input type="text" name="auteur" class="form-control"
													value="{{ Auth::user()->lastname }} {{ Auth::user()->name }}" readonly/>
                                            </div>

                                            <div class="email-subject">
												<input type="text" name="titre" class="form-control"
													placeholder="Titre" />
                                            </div>

                                            <div class="email-subject">
												<input type="text" name="surtitre" class="form-control"
													placeholder="Surtitre" />
                                            </div>

                                            <div class="email-subject">
												<input type="text" name="chapeau" class="form-control"
													placeholder="Chapeau" />
											</div>

                                            <div class="email-subject">
                                                <select name="type" class="form-control">
                                                    <option>Journal en ligne</option>
                                                    <option>Journal tabloïd</option>
                                                    <option>Magasine</option>
                                                </select>
                                            </div>

                                            <div class="email-subject">

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

                                            <div class="email-subject">
												<input type="file" name="image" class="form-control" />
                                            </div>

                                            <div class="email-subject">
												<input type="text"name="legende" class="form-control"
													placeholder="Légende" />
                                            </div>
											<div class="email-to">
												<span class="float-right-link">
													<a href="#" data-click="add-cc" data-name="Cc" class="m-r-5">Cc</a>
													<a href="#" data-click="add-cc" data-name="Bcc">Bcc</a>
												</span>
												<label class="control-label">To:</label>
												<ul id="email-to" class="primary line-mode">
													<li><a href="https://seantheme.com/cdn-cgi/l/email-protection"
															class="__cf_email__"
															data-cfemail="35575a5a414641475445755258545c591b565a58">[email&#160;protected]</a>
													</li>
													<li><a href="https://seantheme.com/cdn-cgi/l/email-protection"
															class="__cf_email__"
															data-cfemail="8cebe3e3ebe0e9ccebe1ede5e0a2efe3e1">[email&#160;protected]</a>
													</li>
												</ul>
											</div>

											<div class="p-t-15">

												<textarea class="summernote" name="texte" placeholder="Rédiger le texte ..." > </textarea>

                                            </div>

                                            <div class="wrapper text-right">
                                                <button type="submit" class="btn btn-info p-l-40 p-r-40">Enregistrer</button>
                                            </div>

										</form>

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

</body>

</html>

