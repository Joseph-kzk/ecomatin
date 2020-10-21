<!DOCTYPE html>
<html lang="en">

    @include("includes.head")

<body>

	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>


	<div id="page-container"
		class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar page-with-light-sidebar">

        @include("includes.header")

        @include("includes.menu")


		<div id="content" class="content content-full-width">

			<div class="profile">
				<div class="profile-header">

					<div class="profile-header-cover"></div>


					<div class="profile-header-content">

						<div class="profile-header-img">
							<img src="{{ asset('assets/img/logo/logo-ecomatin.jfif') }}" alt="">
						</div>


						<div class="profile-header-info">
                            <h3 class="mt-0 mb-1"><b>{{$users->lastname}}</b>  {{$users->name}}</h3>

							<H4 class="mb-2">{{$users->role}}</H4>
							<a href="#" class="btn btn-xs btn-whit"></a>
						</div>

					</div>


					<ul class="profile-header-tab nav nav-tabs">
						</li>
						<li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">TOUT AFFICHER  <i class="fa fa-angle-double-down"></i> </a></li>
					</ul>

				</div>
			</div>


			<div class="profile-content">

				<div class="tab-content p-0">


					<div class="tab-pane fade" id="profile-about">

						<div class="table-responsive form-inline">
							<table class="table table-profile">

								<tbody>

									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr>
										<td class="field">Tel</td>
										<td><i class="fa fa-mobile fa-lg m-r-5"></i> +237 {{$users->number}} </td>
                                    </tr>
                                    <tr>
										<td class="field">Email</td>
										<td><i class="fa fa-envelope fa-lg m-r-5"></i> {{$users->email}} </td>
									</tr>

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

    @include("includes.profile")

	<script type="bfb813afa25c7a627b45cbe1-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>

</body>


</html>
