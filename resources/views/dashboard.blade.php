@extends('layouts.app')
@section('section-title')
	<h3> {{ trans('layout.section.dashboard.title.dashboard') }}</h3>
@stop

@section('section-description')
	<span> {{  trans('layout.section.dashboard.description.dashboard')}}</span>
@stop

@section('content')
<div class="container-fluid container-fullw bg-white">
	<div class="row">
		<div class="col-sm-3">
			<div class="panel panel-white no-radius text-center">
				<div class="panel-body">
					<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
					<h3 class="StepTitle" style="padding-top:10px"> {{ trans('layout.section.dashboard.manage customers')}}</h3>
					<p class="text-small">
						{{ trans('layout.section.dashboard.manage customers details')}}
					</p>
					<p class="links cl-effect-1">
						<a href="">
							{{ trans('layout.section.dashboard.view more')}}
						</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="panel panel-white no-radius text-center">
				<div class="panel-body">
					<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
					<h2 class="StepTitle">Manage Orders</h2>
					<p class="text-small">
						The Manage Orders tool provides a view of all your orders.
					</p>
					<p class="cl-effect-1">
						<a href="">
							view more
						</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="panel panel-white no-radius text-center">
				<div class="panel-body">
					<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
					<h2 class="StepTitle">Manage Database</h2>
					<p class="text-small">
						Store, modify, and extract information from your database.
					</p>
					<p class="links cl-effect-1">
						<a href="">
							view more
						</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="panel panel-white no-radius text-center">
				<div class="panel-body">
					<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
					<h2 class="StepTitle">Manage Database</h2>
					<p class="text-small">
						Store, modify, and extract information from your database.
					</p>
					<p class="links cl-effect-1">
						<a href="">
							view more
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- upcomming payments  --}}
<div class="container-fluid container-fullw bg-white">
	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<div class="panel panel-white no-radius">
				<div class="panel-body">
					<div class="partition-light-grey padding-15 text-center margin-bottom-20">
						<h4 class="no-margin text-primary" >{{ trans('layout.section.dashboard.Ending Subscriptions')}}</h4>
					</div>
					<div id="accordion" class="panel-group accordion accordion-white no-margin">
						<div class="panel no-radius">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle padding-15">
									<i class="icon-arrow"></i>
									{{ trans('layout.section.dashboard.One Week from today')}}<span class="label label-danger pull-left">3</span>
								</a></h4>
							</div>
							<div class="panel-collapse collapse in" id="collapseOne">
								<div class="panel-body no-padding partition-light-grey">
									<table class="table">
										<tbody>
											<tr>
												<td class="center">1</td>
												<td>Google Chrome</td>
												<td class="center">4909</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td>Mozilla Firefox</td>
												<td class="center">3857</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td>Safari</td>
												<td class="center">1789</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td>Internet Explorer</td>
												<td class="center">612</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="panel no-radius">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle padding-15 collapsed">
									<i class="icon-arrow"></i>
									{{ trans('layout.section.dashboard.Two Weeks from today')}}
								</a></h4>
							</div>
							<div class="panel-collapse collapse" id="collapseTwo">
								<div class="panel-body no-padding partition-light-grey">
									<table class="table">
										<tbody>
											<tr>
												<td class="center">1</td>
												<td>Google Chrome</td>
												<td class="center">5228</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td>Mozilla Firefox</td>
												<td class="center">2853</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td>Safari</td>
												<td class="center">1948</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td>Internet Explorer</td>
												<td class="center">456</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="panel panel-white no-radius">
				<div class="panel-body">
					<div class="partition-light-grey padding-15 text-center margin-bottom-20">
						<h4 class="no-margin text-primary">{{ trans('layout.section.dashboard.Upcomming Checks')}}</h4>
					</div>
					<div id="accordion-b" class="panel-group accordion accordion-white no-margin">
						<div class="panel no-radius">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a href="#collapseOne-b" data-parent="#accordion-b" data-toggle="collapse" class="accordion-toggle padding-15">
									<i class="icon-arrow"></i>
									{{ trans('layout.section.dashboard.One Week from today')}}<span class="label label-danger pull-left">3</span>
								</a></h4>
							</div>
							<div class="panel-collapse collapse in" id="collapseOne-b">
								<div class="panel-body no-padding partition-light-grey">
									<table class="table">
										<tbody>
											<tr>
												<td class="center">1</td>
												<td>Google Chrome</td>
												<td class="center">4909</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td>Mozilla Firefox</td>
												<td class="center">3857</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td>Safari</td>
												<td class="center">1789</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td>Internet Explorer</td>
												<td class="center">612</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="panel no-radius">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a href="#collapseTwo-b" data-parent="#accordion-b" data-toggle="collapse" class="accordion-toggle padding-15 collapsed">
									<i class="icon-arrow"></i>
									{{ trans('layout.section.dashboard.Two Weeks from today')}}
								</a></h4>
							</div>
							<div class="panel-collapse collapse" id="collapseTwo-b">
								<div class="panel-body no-padding partition-light-grey">
									<table class="table">
										<tbody>
											<tr>
												<td class="center">1</td>
												<td>Google Chrome</td>
												<td class="center">5228</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td>Mozilla Firefox</td>
												<td class="center">2853</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td>Safari</td>
												<td class="center">1948</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td>Internet Explorer</td>
												<td class="center">456</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop