

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

                        <div class="wrapper">

                            <div class="btn-toolbar align-items-center">

                            <div class="dropdown mr-2">

                                <!-- begin alert -->
                                @include('includes.alerte')
                                <!-- end alert -->

                                <a href="{{ route('articles.create') }}" class="btn btn-white btn-sm" >
                                    Rédiger  <i class="fa fa-edit"></i>
                                </a>

                                </div>
                                <div class="btn-group ml-auto">
                                    <button class="btn btn-white btn-sm">
                                    <i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button class="btn btn-white btn-sm">
                                    <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>

                            </div>

                        </div>


                        <div class="vertical-box-row">

                            <div class="vertical-box-cell">

                                <div class="vertical-box-inner-cell bg-white">

                                    <div data-scrollbar="true" data-height="100%">

                                        <ul class="list-group list-group-lg no-radius list-email">

                                            @if(count($journaltabloid) > 0)

                                                @foreach($journaltabloid as $key=> $article)

                                                    <li class="list-group-item unread">

                                                        <a href="" class="email-user bg-blue">
                                                            <span class="text-white"><i class="fa fa-file-alt"></i></span>
                                                        </a>

                                                        <div class="email-info">
                                                            <a href="{{ route('articles.show', $article->idarticle) }}">

                                                                <span class="email-sender">{{ $article->auteur }}</span>
                                                                <span class="email-title">{{ $article->titre }}</span>
                                                                <span class="email-desc">{{ $article->chapeau }}</span>
                                                                <span class="email-desc" style="margin-left: 80px;">{{ $article->created_at }}</span>

                                                            </a>

                                                        </div>
                                                        <div>
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


                        <div class="wrapper clearfix d-flex align-items-center">
                            <div class="text-inverse f-w-600">Liste des articles du journal tabloïd</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

    </div>

    @foreach($journaltabloid as $article)

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



    <script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}" type="ef824e106a4851ec9a31c0a1-text/javascript"></script>
    <script src="{{ asset('assets/js/theme/facebook.min.js') }}" type="ef824e106a4851ec9a31c0a1-text/javascript"></script>


    <script src="{{ asset('assets/js/demo/email-inbox.demo.js') }}" type="ef824e106a4851ec9a31c0a1-text/javascript"></script>

    <script type="ef824e106a4851ec9a31c0a1-text/javascript">
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
    <script src="{{ asset('assets/cdn-cgi2/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="ef824e106a4851ec9a31c0a1-|49" defer=""></script>

</body>

</html>
