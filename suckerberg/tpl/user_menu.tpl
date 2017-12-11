<script>
function hideProfilelink() {
  if(window.location.href.indexOf("channel/*") > -1) {
    $('li.user_details').hide();
  }
});

</script>

<div class="widget" id="user_menu">
  <ul class="nav nav-pills flex-column">

      <li class="user_details profile-link">
        <a class="nav-link" href="channel/{{$user}}"><img src="{{$avatar}}" class="avatar_thumb">
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
