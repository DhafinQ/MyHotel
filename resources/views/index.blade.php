@include('layouts.app')
@section('content')
  <div id="container">
    <div id="header"> <img src="images/logo.jpg" width="171" height="30" alt="" id="logo"/> <img src="images/slogan.jpg" width="457" height="38" alt="" id="slogan"/>
      <ul class="menu">
        <li class="btn_1"><a href="#">home</a></li>
        <li class="line"></li>
        <li class="btn_2"><a href="#">about</a></li>
        <li class="line"></li>
        <li class="btn_3"><a href="#">services</a></li>
        <li class="line"></li>
        <li class="btn_4"><a href="#">booking</a></li>
        <li class="line"></li>
        <li class="btn_5"><a href="#">contacts</a></li>
      </ul>
    </div>
    <div id="content">
      <div id="leftPan">
        <div id="welcome">
          <h2></h2>
          <img src="images/img_welcome.jpg" width="66" height="66" alt="" />
          <p id="side"><span class="headline">Nam justo augue, dictum a, hendrerit!</span> Fusce interdum. Maecenas eu elit sed nulla dignissim interdum. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Cras ullamcorper nibh.</p>
          <div class="clear" id="welClear"></div>
          <p><a href="#">Fusce interdum. Maecenas eu elit sed nulla dignissim interdum. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam.</a></p>
        </div>
        <div id="services">
          <h2></h2>
          <ul>
            <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam </a></li>
            <li><a href="#">eu nulla. Donec lobortis purus vel urna. Nunc laoreet lacinia </a></li>
            <li><a href="#">nunc. In volutpat sodales ipsum. Sed vestibulum. Integer in </a></li>
            <li><a href="#">ante. Sed posuere ligula rhoncus erat. Fusce urna dui, </a></li>
            <li><a href="#">nunc. In volutpat sodales ipsum. Sed vestibulum. Integer in </a></li>
          </ul>
        </div>
      </div>
      <div id="rightPan">
        <div id="rooms">
          <h2></h2>
          <img src="images/img_rooms.jpg" width="66" height="66" alt="" />
          <p id="roomsSide"><span class="headline">Fusce urna dui, sollicitudin ac, pulvinar quis, tincidunt </span> <a href="#" class="a2">Fusce interdum. Maecenas eu elit sed nulla dignissim interdum. Sed laoreet. </a></p>
          <div class="clear"></div>
          <p>Fusce interdum. Maecenas eu elit sed nulla dignissim interdum. Sed laoreet. Aenean pede. Phasellus porta. </p>
        </div>
        <div id="food">
          <h2></h2>
          <img src="images/img_food.jpg" width="66" height="66" alt="" />
          <p id="foodSide"><span class="headline">Fusce urna dui, sollicitudin ac, pulvinar quis, tincidunt </span> <a href="#" class="a2">Fusce interdum. Maecenas eu elit sed nulla dignissim interdum. Sed laoreet. </a></p>
          <div class="clear"></div>
          <p>Fusce urna dui, sollicitudin ac, pulvinar quis, tincidunt et, risus. Quisque a nunc eget nibh interdum fringilla. Fusce dapibus odio in est. Nunc egestas mauris ac leo. Nullam orci. Fusce urna dui, sollicitudin ac, pulvinar quis</p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div id="footer">
      <p><a href="#">HOME PAGE</a> | <a href="#">ABOUT US</a> | <a href="#">SERVICES</a> | <a href="#">BOOKING</a> | <a href="#">SUPPORT</a> | <a href="#">NEWS</a> | <a href="#">CONTACTS</a><br/>
        Copyright &copy; Your Company Name | Design by <a href="http://freshtemplates.com/">Website Templates</a></p>
    </div>
  </div>