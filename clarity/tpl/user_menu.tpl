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
    <li><a class="navbar-app nav-ank" href="network"> <i class="fa fa-fw fa-th"></i> Network</a></li>
    <li><a class="navbar-app nav-ank" href="channel"><i class="fa fa-fw fa-home"></i> Home</a></li>
    <li><a class="navbar-app nav-ank" href="mail/combned" ><i class="fa fa-fw fa-envelope"></i> Mail</a></li>
    <li><a class="navbar-app nav-ank" href="photos"> <i class="fa fa-fw fa-photo"></i> Photos</a></li>
    <li><a class="navbar-app nav-ank" href="cloud"> <i class="fa fa-fw fa-folder-open"></i> Files</a></li>
  </ul>
</div>
