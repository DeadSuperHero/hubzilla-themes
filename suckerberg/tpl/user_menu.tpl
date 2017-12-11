<script>
function toggle_nav_item() {
      $('a.nav-link[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});

function hide_profile() {
  if$('a.profile-link').attr('href') == mainhref){
    $('a.profile-link').hide();
  }
});

</script>

<div class="widget" id="user_menu">
  <ul class="nav nav-pills flex-column">

      <li class="user_details">
        <a class="nav-link profile-link" href="channel/{{$user}}"><img src="{{$avatar}}" class="avatar_thumb">
          <b>{{$banner}}</b></a>
      </li>

    <li class="nav-item">
      <a class="nav-link" href="network"> <i class="fa fa-fw fa-th"></i> Network</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="mail/combined" ><i class="fa fa-fw fa-envelope"></i> Mail</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="photos/{{$user}}"> <i class="fa fa-fw fa-photo"></i> Photos</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="cloud/{{$user}}"> <i class="fa fa-fw fa-folder-open"></i> Files</a>
    </li>

  </ul>
</div>
