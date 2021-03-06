<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body>

    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>


    <div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">

        @include("includes.header")

        @include("includes.menu")

        <div id="content" class="content">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Menus</a></li>
            </ol>

            <!-- begin alert -->
            @include('includes.alerte')
            <!-- end alert -->

            <h1 class="page-header">Liste des menus <small>tableau de tous les menus</small></h1>

            <div class="row">


                <div class="col-xl">

                    <div class="panel panel-inverse">

                        <div class="panel-heading">
                            <h4 class="panel-title">Tableau des menus</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <table id="data-table-buttons"
                            class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">N°</th>
                                    <th class="text-nowrap">Nom</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>

                            <tbody>

								@if(count($menus) > 0)

                                    @foreach($menus as $key=> $menu)

                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><b>{{$key+1}}</b></td>
                                            <td>{{ $menu->nom }}</td>
                                            <td>
                                                <a href="{{ route('menus.show', $menu->idmenu)}}" class="btn btn-primary btn-xs" > <i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach

                                @endif

                            </tbody>
                        </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

    </div>




    <script src="{{ asset('assets/js/app.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/js/theme/facebook.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>


    <script src="{{ asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.flash.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.html5.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.print.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/pdfmake/build/pdfmake.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/pdfmake/build/vfs_fonts.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/plugins/jszip/dist/jszip.min.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>
    <script src="{{ asset('assets/js/demo/table-manage-buttons.demo.js') }}" type="644b1261aea506e0a4d74821-text/javascript"></script>

    <script type="644b1261aea506e0a4d74821-text/javascript">
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
    <script src="{{ asset('assets/cdn-cgi2/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="644b1261aea506e0a4d74821-|49" defer=""></script>

    <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}" type="85fc20a8260852016fe6a764-text/javascript"></script>
    <script src="{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js') }}" type="85fc20a8260852016fe6a764-text/javascript"></script>
    <script src="{{ asset('assets/js/demo/ui-modal-notification.demo.js') }}" type="85fc20a8260852016fe6a764-text/javascript"></script>
    <script src="{{ asset('assets/cdn-cgi2/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="85fc20a8260852016fe6a764-|49" defer=""></script>

</body>

<!-- Mirrored from seantheme.com/color-admin/admin/facebook/table_manage_buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 10:22:20 GMT -->

</html>
