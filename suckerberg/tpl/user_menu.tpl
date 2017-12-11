<script>
function toggle_nav_item() {
      $('a.nav-link[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});
</script>

<div class="widget" id="user_menu">
  <div class="user_details">
    <img src="{{$avatar}}" class="avatar_thumb">
    <b>{{$banner}}</b>
  </div>
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="navbar-app nav-link" href="network"> <i class="fa fa-fw fa-th"></i> Network</a>
    </li>

    <li class="nav-item">
      <a class="navbar-app nav-link" href="channel/{{$user}}"><i class="fa fa-fw fa-home"></i> Home</a>
    </li>

    <li class="nav-item">
      <a class="navbar-app nav-link" href="mail/combined" ><i class="fa fa-fw fa-envelope"></i> Mail</a>
    </li>

    <li class="nav-item">
      <a class="navbar-app nav-link" href="photos/{{$user}}"> <i class="fa fa-fw fa-photo"></i> Photos</a>
    </li>

    <li class="nav-item">
      <a class="navbar-app nav-link" href="cloud/{{$user}}"> <i class="fa fa-fw fa-folder-open"></i> Files</a>
    </li>

  </ul>
</div>
