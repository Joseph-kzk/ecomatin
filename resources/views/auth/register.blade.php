<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body>

	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>


	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed page-with-wide-sidebar page-with-light-sidebar">

        @include("includes.header")

        @include("includes.menu")


        <div id="content" class="content">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Utilisateurs</a></li>
            </ol>


            <h1 class="page-header">Tous les journalistes <small>toute la rédaction</small></h1>

            <a href="#modal-dialog" class="btn btn-sm btn-info" data-toggle="modal" style="margin-bottom:15px;">Ajouter <i class="fa fa-plus"></i> </a>

            <div class="row">


                <div class="col-xl">

                    <div class="panel panel-inverse">

                        <div class="panel-heading">
                            <h4 class="panel-title">Tableau des utilisateurs</h4>
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
                                    <th class="text-nowrap">Prénom</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @if(count($users) > 0)

                                    @foreach($users as $key=> $user)

                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><b>{{$key+1}}</b></td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->lastname }}</td>
                                            <td>
                                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-grey btn-xs"> <i class="fa fa-eye"></i></a>
                                                <a href="#modal-dialog2{{ $user->id }}" class="btn btn-primary btn-xs" data-toggle="modal"> <i class="fa fa-pen"></i></a>
                                                <a href="#modal-alert{{ $user->id }}" class="btn btn-danger btn-xs" data-toggle="modal"> <i class="fa fa-trash"></i></a>
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

		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
			data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

	</div>



    <div class="modal fade" id="modal-dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nouvel utilisateur</h4>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
                </div>

                <div class="modal-body">

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <input type="text" name="name" class="form-control m-b-5" placeholder="Nom" />
                        <input type="text" name="lastname" class="form-control m-b-5" placeholder="Prénom" />

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group m-b-10">
                                    <input class="form-control" name="number" type="text" placeholder="Téléphone" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group m-b-10">
                                    <select name="role" class="form-control">
                                        <option>Journaliste</option>
                                        <option>Coordonnateur Journal en ligne</option>
                                        <option>Coordonnateur Journal tabloïd</option>
                                        <option>Coordonnateur des rédactions</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <input type="email" name="email" class="form-control m-b-5" placeholder="Email" />

                        <input type="password" name="password" class="form-control m-b-5" placeholder="Mot de passe" />

                        <div class="modal-footer">

                            <button class="btn btn-white" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-info">Créer</button>

                        </div>

                    </form>

                </div>


            </div>
        </div>
    </div>

    @foreach($users as $user)

        <div class="modal fade" id="modal-dialog2{{ $user->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modification</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">

                        <form action="{{ route('users.update', $user->id) }} " method="POST">
                            @method('put')
                            @csrf

                            <input type="text" name="name" class="form-control m-b-5" value="{{ $user->name }}" />
                            <input type="text" name="lastname" class="form-control m-b-5" value="{{ $user->lastname }}" />

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group m-b-10">
                                        <input class="form-control" name="number" type="text" value="{{ $user->number }}" />
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group m-b-10">
                                        <select name="role" class="form-control">
                                            <option>{{ $user->role }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <input type="email" name="email" class="form-control m-b-5" value="{{ $user->email }}" />

                            <input type="password" name="password" class="form-control m-b-5"  />

                            <div class="modal-footer">

                                <button class="btn btn-white" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-info">Enregistrer</button>

                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>

    @endforeach


    @foreach($users as $user)
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">

            @method('delete')
            @csrf

            <div class="modal fade" id="modal-alert{{ $user->id }}">
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
                                <p>
                                    Etes-vous sûr de vouloir supprimer cet utilisateur ?
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-white" data-dismiss="modal">NON</button>
                            <button type="submit" class="btn btn-danger">OUI</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    @endforeach



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


</html>

