<div class="widget">
  <h3>{{$banner}}</h3>
  <div class="menu_photo">
    {{if ! $zcard}}
    	<div class="photo-wrapper">
        <img class="photo" src="{{$photo}}?rev={{$profile.picdate}}" alt="{{$profile.fullname}}">
      </div>
      {{/if}}
  </div>
  <ul>
    <li class="navbar-app nav-link" href="network"> <i class="fa fa-fw fa-th"></i> Network</li>
    <li class="navbar-app nav-link" href="channel"><i class="fa fa-fw fa-home"></i> Home</li>
    <li class="navbar-app nav-link" href="mail/combned" ><i class="fa fa-fw fa-envelope"></i> Mail</li>
    <li class="navbar-app nav-link" href="photos"> <i class="fa fa-fw fa-photo"></i> Photos</li>
    <li class="navbar-app nav-link" href="cloud"> <i class="fa fa-fw fa-folder-open"></i> Files</li>
  </ul>
</div>
