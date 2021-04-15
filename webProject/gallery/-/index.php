<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>10 most popular books</title>
<script type="text/javascript" src = "gallery.js">
  
</script>
<link rel="stylesheet" href="../common/global_style.css"/>
<link rel="stylesheet" href="test.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>


<body onload="displayFirstImage()">

<div class = "wrapper">
<div id = "header">
<?php
include  '..//common//header.php';
/*include './includes/taken.php';*/
?>
</div>

<div class="wrapper_body">
<p> In this article we'll show the most 5 popular books of all time! based on number of copies soled, neglecting the reiligous booksm
  enjot this slide show!
</P>


<div class = "row">
<div class = "column">
   <img id = "none" src="pics/15-small.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" alt = "not found!"/>
</div>

<div class = "column">
   <img src="pics/2-small.png" onclick="openModal();currentSlide(2)" class="hover-shadow" alt = "not found!" />
</div>


<div class = "column">
   <img src="pics/3-small.png" onclick="openModal();currentSlide(3)" class="hover-shadow" alt = "not found!" />
</div>

</div>

<div id = "myModal" class = "modal">
<span class = "close cursor" onclick ="closeModal()">X</span>
<div class = "modal-content">
   <div class ="mySlides">
      <div class = "numbertext">1 / 3 </div>
      <img id = "first" src="pics/1.jpg" style="width: 100%" alt = "not found!" />
</div>
<div class="mySlides">
      <div class="numbertext">2 / 3</div>
      <img src="pics/2.png" style="width:100%" alt = "not found!"/>
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 3</div>
      <img src="pics/20.jpg" alt = "not found!"/>
    </div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="column">
      <img class="demo" src="pics/15-small.jpg" onclick="currentSlide(1)" alt = "not found!"/>
    </div>

    <div class="column">
      <img class="demo" src="pics/2-small.png" onclick="currentSlide(2)" alt = "not found!" />
    </div>
    <div class="column">
      <img class="demo" src="pics/3-small.png" onclick="currentSlide(3)" alt = "not found!" />
    </div>
</div>
</div>
<div class="footer">
  <?php
  include '..//common//footer.php'
  ?>
</div>

</div>

<script type = "text/javascript">
displayFirstImage() {
  var x =  document.getElementById("first");
   x.style.display = "block";
 }
</script>

</body>

</html>