<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Not a Website at all :x</title>
    <link rel="stylesheet" href="TRUCDEOUF.css"/>

  </head>
  <body>
    <header>

    </header>

    <video src="Media/VideoDeOuf.mp4" autoplay class="bg-vid" loop="true"></video>

    <div class="content">
      <a href="arnaud" style="float:left;">Page de ouf :o</a>
      <a href="guillaume" style="float:right;"> Page de swaggy :D</a>
      <p> akzrjbazojrazr</p>
      <span id="lol" style="position: absolute">YOLLLLLOOOOO!!!!!!</span>
    </div>

    <script>
      document.onmousemove = trackmouse;

      function trackmouse(e) {
        var test = document.getElementById('lol')
        width = test.offsetWidth;
        height = test.offsetHeight;
        test.style.top = (e.clientY-(height/2)).toString()+"px";
        test.style.left = (e.clientX-(width/2)).toString()+"px";
      }
    </script>
  </body>
</html>
