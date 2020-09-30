@section('navbar')
<nav class=" navbar navbar-expand-lg navbar-light bg-light rounded">
     	<div class="container">
	     	<a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">My project</font></font></a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Переключить навигацию">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarsExample09">
		      <ul class="navbar-nav mr-auto">
		      	<li class="nav-item">
		          <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">customer</font></font></a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">doer</font></font></a>
		        </li>
		      </ul>
		      <ul class="navbar-nav mr-auto">
		      	<li class="nav-item">
		      		<a class="nav-link" href="{{ route('formOrder') }}">place an order<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a>
		      	</li>
		      	<li class="nav-item">
		      		<a class="nav-link" href="{{route('skill_submit')}}">post skills<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a>
		      	</li>
		      </ul>
		    </div>
     	</div>
</nav>
