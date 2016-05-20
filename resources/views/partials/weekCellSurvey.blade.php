&nbsp;
<div>
<div class="cal-event dark-grey">
		<h4 class="panel-title">
			<a href="{{ URL::route('survey.show', $Survey->id) }}">
				<i class="fa fa-bar-chart-o white-text"></i>&nbsp;
				<span class="name">{{ $Survey->title }}</span>
			</a>
		</h4>


		{{ utf8_encode(strftime("%a, %d. %b", strtotime($Survey->in_calendar))) }}
</div>
	<div class="panel panel-body no-padding">


@if(Session::has('userGroup')
               AND (Session::get('userGroup') == 'marketing'
               OR Session::get('userGroup') == 'clubleitung'))
	<hr class="col-md-12 col-xs-12 top-padding no-margin no-padding">
	<div class="padding-right-16 bottom-padding pull-right hidden-print">
		<small><a href="#" class="hide-event">Ausblenden</a></small>
	</div>
	</div>
@endif
</div>