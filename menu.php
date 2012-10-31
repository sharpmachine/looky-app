    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="home.php">Looky</a>
          <a href="#" class="brand notifications" rel="popover" title="Notifications" data-placement="bottom" data-content="<?php include('notifications.php'); ?>"><i class="icon-globe icon-white"></i><span class="badge badge-important">3</span></a>
          <form class="navbar-search pull-right">
            <input type="search" class="search-query" placeholder="Search">
          </form>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="user-profile.php"><img src="img/me.jpeg" alt="jessekade">Jesse Kade<br><span class="visible-phone view-profile">View Your Profile</span></a></li>
              <li><a href="home.php"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="user-list.php"><i class="icon-th-list icon-white"></i> Your List</a></li>
              <li><a href="user-subscriptions.php"><i class="icon-plus icon-white"></i> Your Subscriptions</a></li>
              <li><a href="user-reservations.php"><i class="icon-glass icon-white"></i> Your Reservations</a></li>
              <li><a href="user-gifts.php"><i class="icon-gift icon-white"></i> Your Gifts</a></li>
              <li><a href="gifts.php"><i class="icon-gift icon-white"></i> Send a Gift</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle nav-header" data-toggle="dropdown">Categories <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="food.php">Food</a></li>
                    <li><a href="nightlife.php">Nightlife</a></li>
                    <li><a href="lodging.php">Lodging</a></li>
                    <li><a href="activities.php">Activites</a></li>
                    <li><a href="shopping.php">Shopping</a></li>
                  </ul>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle nav-header" data-toggle="dropdown">Account <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="settings.php"><i class="icon-cog icon-white"></i>Settings</a></li>
                  <li><a href="#"><i class="icon-off icon-white"></i>Logout</a></li>
                </ul>
              </li>
              
            </ul>    
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
        
          <div class="row-fluid">