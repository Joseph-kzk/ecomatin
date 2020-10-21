
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

                                        <form action="{{ route('articles.update', $articles->idarticle) }}" method="POST">
                                            @method('put')
                                            @csrf

											<div data-id="extra-cc"></div>

											<div class="email-subject">
												<input type="text" name="auteur" class="form-control form-control-lg"
													value="{{ $articles->auteur }}" readonly/>
                                            </div>

                                            <div class="email-subject">
												<input type="text" name="titre" class="form-control form-control-lg"
													value="{{ $articles->titre }}" />
                                            </div>

                                            <div class="email-subject">
												<input type="text" name="chapeau" class="form-control form-control-lg"
													value="{{ $articles->chapeau }}" />
											</div>

                                            <div class="email-subject">
                                                <select name="type" class="form-control">
                                                    <option>{{ $articles->type }}</option>
                                                    <option>Journal en ligne</option>
                                                    <option>Journal tabloïd</option>
                                                    <option>Magasine</option>
                                                </select>
                                            </div>

                                            <div class="email-subject">

                                                <select name="rubrique" class="form-control">

                                                    <option>{{ $articles->rubrique }}</option>
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
												<input type="text" name="legende" class="form-control form-control-lg"
													value="{{ $articles->legende }}" />
                                            </div>

											<div class="email-content p-t-15">
                                                <textarea  class="summernote" name="texte" rows="20">{{ $articles->texte }}</textarea>
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
    <script src="{{ asset('assets/js/jquery.js') }}"></script>


</body>

</html>

