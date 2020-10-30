<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body>

    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>


    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-content-full-height">

        @include("includes.header")

        @include("includes.menu")


        <div id="content" class="content content-full-width">

            <div class="vertical-box with-grid inbox bg-light">


                <div class="vertical-box-column">

                    <div class="vertical-box">

                        <div class="wrapper clearfix">
                            <div class="pull-left">
                                <div class="btn-group mr-2">
                                </div>
                                <button class="btn btn-white"> <i class="fa fa-fw fa-envelope"></i> <span class="d-none d-lg-inline">Envoi par mail</span></button>
                            </div>
                        </div>


                        <div class="vertical-box-row bg-white">

                            <div class="vertical-box-cell">

                                <div class="vertical-box-inner-cell">

                                    <div data-scrollbar="true" data-height="100%">

                                        <div class="wrapper">
											<h4 class="m-t-0 m-b-15 f-w-400"><u>Surtitre</u>  : {{ $articles->surtitre }}</h4>
											<h5 class="m-t-0 m-b-15 f-w-400"><u> <b>Titre</b></u>  : {{ $articles->titre }}</h5>
											<h6 class="m-t-0 m-b-15 f-w-400"> <b> Chapeau :</b>{{ $articles->chapeau }}</h6>
											<h6 class="m-t-0 m-b-15 f-w-400"> <b> Chapeau des réseaux sociaux : </b>{{ $articles->reseau }}</h6>
											<h6 class="m-t-0 m-b-15 f-w-400"><u> <b>Légende</b> </u>  : {{ $articles->legende }}</h6>
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
                                                    <div class="document-name"><a href="javascript:;">Image de l'article</a></div>
                                                </li>
                                            </ul>
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

                                                    <textarea class="summernote" name="texte">{{ $articles->texte }}</textarea>

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

        </div>


        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

    </div>

    <script src="{{ asset('assets/js/app.min.js') }}" type="10a409e9517e95603a730c3c-text/javascript"></script>
    <script src="{{ asset('assets/js/theme/facebook.min.js') }}" type="10a409e9517e95603a730c3c-text/javascript"></script>
    <script src="{{ asset('assets/cdn-cgi2/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="10a409e9517e95603a730c3c-|49" defer=""></script>


    <script src="{{ asset('assets/plugins/summernote/dist/summernote.min.js') }}" type="10a409e9517e95603a730c3c-text/javascript"></script>
    <script src="{{ asset('assets/js/demo/form-summernote.demo.js') }}" type="10a409e9517e95603a730c3c-text/javascript"></script>

    <script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}" type="d388905ebbd69242f3a32bd7-text/javascript"></script>
    <script src="{{ asset('assets/js/theme/facebook.min.js') }}" type="d388905ebbd69242f3a32bd7-text/javascript"></script>

    <script type="d388905ebbd69242f3a32bd7-text/javascript">
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
    <script src="{{ asset('assets/cdn-cgi2/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="d388905ebbd69242f3a32bd7-|49" defer=""></script>

</body>

<!-- Mirrored from seantheme.com/color-admin/admin/facebook/email_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 10:20:17 GMT -->

</html>

