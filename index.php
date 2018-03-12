<!DOCTYPE html>
<?php
      session_start();
      if (!isset($_SESSION["username"])) {
        header("Location: http://www.captainlongxu.com/marketplace/login.php?index.php");
      }
?>
<html>
<head>
  <script src="js/jquery-2.1.1.js"></script> 
  <script>
    $(document).ready(function(){ 
        $("head").load("header.html"); 
    }); 
    $(document).ready(function(){ 
        $("#banner").load("banner.php"); 
    }); 
    $(document).ready(function(){ 
        $("#footer").load("footer.html"); 
    });
  </script>

</head>
<body>

  <div id="banner"></div>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <img src="img/bg-11.jpg" alt=""> </div>
    <div class="item"> <img src="img/bookBanner.jpg" alt=""> </div>
    <div class="item"> <img src="img/bg-33.jpg" alt=""> </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<!--br/-->
<hr/>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
        <a href="/marketplace/realestate.html"><div class="panel-body" onmouseover="this.style.cursor='pointer'"> <img src="img/35.png" alt="" style="height:48px;">&nbsp;<span>RealEstate</span></div></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <a href="/marketplace/bike.html"><div class="panel-body" onmouseover="this.style.cursor='pointer'"> <img src="img/45.png" alt="" style="height:48px;">&nbsp;<span>Bike</span> </div></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <a href="/marketplace/book.html"><div class="panel-body" onmouseover="this.style.cursor='pointer'"> <img src="img/10.png" alt="" style="height:48px;">&nbsp;<span>Book</span> </div></a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
        <a href="/marketplace/photo.html"><div class="panel-body" onmouseover="this.style.cursor='pointer'"> <img src="img/26.png" alt="" style="height:48px;">&nbsp;<span>Photo</span> </div></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <a href="/marketplace/pastry.html"><div class="panel-body" onmouseover="this.style.cursor='pointer'"> <img src="img/48.png" alt="" style="height:48px;">&nbsp;<span>Pastry</span> </div></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <a href="/marketplace/vacrooms.html"><div class="panel-body" onmouseover="this.style.cursor='pointer'"> <img src="img/49.png" alt="" style="height:48px;">&nbsp;<span>Vacrooms</span> </div></a>
      </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading" style="font-size:24px;"><strong>Save, share and collaborate</strong></div>
            <div class="panel-body">
               <p>
                 <strong>LiveOnMars</strong> Easier sharing. <br />
                 <strong>LiveOnMars</strong> One-click sign-in. <br />
                 <strong>LiveOnMars</strong> View local activity. <br />
                 <strong>LiveOnMars</strong> Give you a best house. <br />
                 <strong>LiveOnMars</strong> Find a new place to live. <br />
                 <strong>LiveOnMars</strong> One and the only best choice. <br />
               </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading" style="font-size:24px;"><strong>Let us guide you</strong></div>
            <div class="panel-body">
              <p><strong>Real estate</strong> is "property consisting of land and the buildings on it, along with its natural resources such as crops, minerals, or water; an interest vested in this (also) an item of real property; buildings or housing in general. Also: the business of real estate; the profession of buying, selling, buildings or housing." </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-body" style="background-image:url('img/bg-tools.jpg');background-repeat:no-repeat;overflow:hidden;" onclick=""> &nbsp; </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body" style="background-image:url('img/bg-tools.jpg');background-position:0px -60px;background-repeat:no-repeat;overflow:hidden;"> &nbsp; </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body" style="background-image:url('img/bg-tools.jpg');background-position:0px -120px;background-repeat:no-repeat;overflow:hidden;" onclick=""> &nbsp; </div>
      </div>
    </div>
  </div>
</div>
<div id="footer"></div>

<script>
            var bits = 80; // how many bits
            var speed = 66; // how fast - smaller is faster
            var colours = new Array("#03f", "#f03", "#0e0", "#93f", "#0cf", "#f93", "#f0c"); 
            //                     blue    red     green   purple  cyan    orange  pink
            var stars = new Array();
            var intensity = new Array();
            var Xpos = new Array();
            var Ypos = new Array();
            var dY = new Array();
            var dX = new Array();
            var decay = new Array();
            

            boddie = document.createElement("div");
            boddie.style.position = "absolute";
            boddie.style.top = "0px";
            boddie.style.left = "0px";
            boddie.style.overflow = "visible";
            boddie.style.width = "1px";
            boddie.style.height = "1px";
            boddie.style.backgroundColor = "transparent";
            document.body.appendChild(boddie);

            function write_fire(xpos, ypos) {
              for (var i = 0; i < bits; i++) {
                stars[i] = createDiv('*', 13);
                stars[i].style.color = colours[i % colours.length];
                stars[i].style.visibility="visible";
                boddie.appendChild(stars[i]);

                intensity[i] = 5 + Math.random() * 4;
                Xpos[i] = xpos; 
                Ypos[i] = ypos;
                dY[i] = (Math.random() - 0.5) * intensity[i];
                dX[i] = (Math.random() - 0.5) * (intensity[i] - Math.abs(dY[i])) * 1.25;
                decay[i] = 16 + Math.floor(Math.random() * 16);

              }
              bang();
            }

            function bang(){
                var i, Z, A=0;
                for (i = 0; i < bits; ++i){
                    Z = stars[i].style;
                    Z.left = Xpos[i] + "px";
                    Z.top = Ypos[i] + "px";
                    if (decay[i]) decay[i]--;
                    else A++;
                    if (decay[i] == 15) Z.fontSize="70px";
                    else if (decay[i] == 7) Z.fontSize="1px";
                    else if (decay[i] == 1) Z.visibility="hidden";
                    if (decay[i] > 1 && Math.random()<.1) {
                       Z.visibility="hidden";
                       setTimeout('stars['+i+'].style.visibility="visible"', speed-1);
                    }
                    Xpos[i] += dX[i];
                    Ypos[i] +=(dY[i] +=1.25/intensity[i]); 
                }
                if (A!=bits) setTimeout("bang()", speed);
            }

            function createDiv(char, size) {
              var div=document.createElement("div");
              div.style.font=size+"px monospace";
              div.style.position="absolute";
              div.style.backgroundColor="transparent";
              div.appendChild(document.createTextNode(char));
              return (div);
            }

        </script>
 <script>
        //var easteregg = document.getElementById('easteregg');
            document.body.addEventListener("click", function(e){
       write_fire(e.pageX, e.pageY);
});


        </script>

</body>
</html>

