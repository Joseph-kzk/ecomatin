<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body>

	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>


	<div id="page-container"
		class="fade in page-sidebar-fixed page-header-fixed page-with-wide-sidebar page-with-light-sidebar">

        @include("includes.header")

        @include("includes.menu")



		<div id="content" class="content">
            <ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">menus</li>
				<li class="breadcrumb-item active">sujtets</li>
			</ol>


            <h2 class="page-header">Liste des sujets</h2>

            <!-- begin alert -->
            @include('includes.alerte')
            <!-- end alert -->

            <div >

                <a href="#modal-dialog" class="btn btn-sm btn-info" data-toggle="modal" style="margin-bottom:15px;">Ajouter <i class="fa fa-plus"></i> </a>

                <div class="panel panel-inverse">

                    <div class="panel-heading">
                        <h4 class="panel-title">Tableau des sujets</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                data-click="panel-expand"><i class="fa fa-expand"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                data-click="panel-collapse"><i class="fa fa-minus"></i>
                            </a>
                        </div>
                    </div>


                    <div class="panel-body">
                        <table id="data-table-buttons"
                            class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">N°</th>
                                    <th class="text-nowrap">Titre</th>
                                    <th class="text-nowrap">Rubrique</th>
                                    <th class="text-nowrap">Responsable</th>
                                    <th class="text-nowrap">Encombrement</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>

                            <tbody>

								@if(count($sujets) > 0)

                                    @foreach($sujets as $key=> $sujet)

                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><b>{{$key+1}}</b></td>
                                            <td>{{ $sujet->titre }}</td>
                                            <td>{{ $sujet->rubrique }}</td>
                                            <td>{{ $sujet->responsable }}</td>
                                            <td>{{ $sujet->encombrement }} signes</td>
                                            <td>
                                                <a href="#modal-dialog2{{$sujet->idsujet}}" class="btn btn-primary btn-xs" data-toggle="modal"> <i class="fa fa-pen"></i></a>
                                                <a href="#modal-alert{{$sujet->idsujet}}" class="btn btn-danger btn-xs" data-toggle="modal"> <i class="fa fa-trash"></i></a>
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



		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

	</div>

    <div class="modal fade" id="modal-dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nouveau sujet</h4>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
                </div>

                <div class="modal-body">

                    <form action="{{ route('sujets.store', $id) }}" method="POST">
                        @csrf

                        <input type="text" name="titre" class="form-control m-b-5" placeholder="Titre" />

                        <select name="rubrique" class="form-control m-b-5">
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

                        <select name="responsable" class="form-control m-b-5">

                            @if(count($users) > 0)

                                @foreach($users as $key=> $user)

                                    <option>{{ $user->name }}</option>

                                @endforeach

                                @else
                                <option>Aucun responsable</option>

                            @endif

                        </select>

                        <input type="text" name="encombrement" class="form-control m-b-5" placeholder="Nombre de signes" />

                        <div class="modal-footer">

                            <button class="btn btn-white" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-info">Créer</button>

                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

    @foreach($sujets as $sujet)

        <div class="modal fade" id="modal-dialog2{{$sujet->idsujet}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modification</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>

                    <form action="{{ route('sujets.update', ['id'=>$id, 'sujet'=>$sujet]) }} " method="POST">
                        @method('put')
                        @csrf

                        <div class="modal-body">

                            <input type="text" name="titre" class="form-control m-b-5" value="{{$sujet->titre}}" />

                            <select name="rubrique" class="form-control m-b-5">
                                <option>{{$sujet->rubrique}}</option>
                                <option>Politiques Publiques</option>
                                <option>Business et Entreprises</option>
                                <option>Conjoncture</option>
                            </select>

                            <select name="responsable" class="form-control m-b-5">
                                <option>{{$sujet->responsable}}</option>

                                @foreach($users as $key=> $user)

                                    <option>{{ $user->name }}</option>

                                @endforeach

                            </select>

                            <input type="text" name="encombrement" class="form-control m-b-5" value="{{$sujet->encombrement}}" />

                            <div class="modal-footer">

                                <button class="btn btn-white" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-info">Enregistrer</button>

                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>

    @endforeach


    @foreach($sujets as $sujet)

        <form action="{{ url('sujets.destroy', $id) }}" method="POST">

            @method('delete')
            @csrf

            <div class="modal fade" id="modal-alert{{$sujet->idsujet}}">
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
                                    Etes-vous sûr de vouloir supprimer ce sujet ?
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

    @include("includes.footer-table")

	<script type="0413b558f4502ab34eb7586b-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>

</body>

</html>
