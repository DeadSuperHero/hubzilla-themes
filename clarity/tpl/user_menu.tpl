<div class="widget">
  <h3>{{$banner}}</h3>
  <a class="navbar-app nav-link{{if $app.active}} active{{/if}}" href="{{$app.url}}" title="{{$app.name}}" >{{if $icon}}<i class="fa fa-fw fa-{{$icon}}"></i>{{else}}<img src="{{$app.photo}}" width="16" height="16" />{{/if}}<span class="d-lg-none">{{$app.name}}</span></a>
</div>
