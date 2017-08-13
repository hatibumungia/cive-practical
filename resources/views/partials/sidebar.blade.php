<div class="list-group">
  <a class="list-group-item" href="/home"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
  <a class="list-group-item" href="/tasks"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Tasks</a>
  @if(Auth::user()->is_admin == true)
  <a class="list-group-item" href="/users"><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>&nbsp; Users</a>
  @endif
  <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Settings</a>
</div>