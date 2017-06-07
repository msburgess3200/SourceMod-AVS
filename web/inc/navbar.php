<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?action=home">A.V.S.</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="?action=home">Dashboard</a></li>
        <li><a href="?action=servers">Servers</a></li>
        <li><a href="?action=adz">Adverts</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_COOKIE['loggedin'])) { ?>
          <li><a href="?action=logout">Logout</a></li>
          <?php $latest_ver = file_get_contents("https://raw.githubusercontent.com/msburgess3200/SourceMod-AVS/master/WEB-VERSION");
            if ($data['cfg']['version'] < $latest_ver) { ?>
              <li><a href="https://github.com/msburgess3200/SourceMod-AVS">Update Available! (New: <?php echo $latest_ver; ?>, Current: <?php echo $data['cfg']['version']; ?>)</a></li>
          <?php } ?>
      <?php } else { ?>
          <li><a href="?action=login">Login</a></li>
      <?php } ?>
        </ul>
    </div>
  </div>
</nav>