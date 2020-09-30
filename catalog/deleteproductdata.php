<!DOCTYPE html>
<html>
<style type="text/css">
html {
  background:#E7FFF4;
  font-family: 'Open Sans Condensed', sans-serif;
  color: #5A626F;
}

a{
    color: #5A626F;
}
h1{
  font-size: 2em;
  margin: 20px 20px 10px 20px;
}

h3{
  margin: 0 20px 50px 20px;
  font-size: 1em;
}

#productGrid {
  display: grid;
  grid-template-columns: repeat(3,1fr); 
  width: 100%;
  overflow: hidden;
}

#productGrid > b:nth-child(2n){
  grid-column: 1;
}

#productGrid > b:nth-child(2n+1){
  grid-column: -2/-1;
}

.product {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-column-end: span 2;
  position: relative;
}

b, .product{
  height: calc(173.2vw/3);
}

.product>.photo {
  grid-column: 1;
  grid-row: 1;
  grid-column-end: span 2;
  z-index: 1;
  text-align: center;
  display: none;
}
.product>.photo>img {
  position:absolute;
  bottom: -10%;
  left: 19%;
  max-width: 62%;
  -webkit-filter: drop-shadow(0 50px 20px  rgba(0, 0, 0, 0.20));
  filter: drop-shadow(0 50px 20px rgba(0, 0, 0, 0.20));
  transition-property: bottom, filter, -webkit-filter;
  transition-duration: .3s;
}
.product>.photo>img:hover { 
  bottom: 0%;
  -webkit-filter: drop-shadow(0 80px 40px  rgba(0, 0, 0, 0.20));
  filter: drop-shadow(0 80px 30px rgba(0, 0, 0, 0.20));
}

.product>.details {
  grid-column: 1;
  grid-row: 1;
  padding: 5%;
}
.product>.logo {
  grid-column: 2;
  grid-row: 1;
}

.product>.details, #productGrid > b:nth-child(2n+1){
  background-color: #FFEFE5;
  background-image: linear-gradient(to bottom right, #FFF0E7, #E8DAD1);
  clip-path: polygon(0% 33.333%, 100% 0%, 100% 0%, 0% 33.33%, 0% 0%);
  -webkit-clip-path: polygon(0% 33.333%, 100% 0%, 100% 0%, 0% 33.33%, 0% 0%);
}

.product>.logo, #productGrid > b:nth-child(2n){
  background-color: #C9E0D6;
  background-image: linear-gradient(to bottom left, #CDE2D9, #B7CCC3);
  clip-path: polygon(0% 0%, 100% 33.333%, 100% 33.33%, 0% 0%, 0% 0%);
  -webkit-clip-path: polygon(0% 0%, 100% 33.333%, 100% 33.33%, 0% 0%, 0% 0%);
}

.product>.details>h2 {
  opacity: 0;
  margin-top: 35%;
  margin-bottom: 0;
  transform: skewY(-30deg);
  font-size: 3vw;
}
.product>.details>p {
  opacity: 0;
  margin-top: 0;
  transform: skewY(-30deg);
  font-size: 6vw;
}
.product>.logo>img {
  opacity: 0;
  position: absolute;
  max-width: 18%;
  top: 30%;
  right: 5%;
  transform: skewY(30deg);
}

@media (min-width:600px) {
  #productGrid{ 
    grid-template-columns: repeat(5,1fr); 
  }
  b, .product{
    height: calc(173.2vw/5);
  }
  .product>.details>h2 {
    font-size: 3vw;
  }
  .product>.details>p {
    font-size: 6vw;
  }
  h1{
    font-size: 2em;
  }

  h3{
    font-size: 1em;
  }
}
@media (min-width:900px) {
  #productGrid{ 
    grid-template-columns: repeat(7,1fr); 
  }
  b, .product{
    height: calc(173.2vw/7);
  } 
  .product>.details>h2 {
    font-size: 2vw;
  }
  .product>.details>p {
    font-size: 4vw;
  }
}
@media (min-width:1200px) { 
  #productGrid{ 
    grid-template-columns: repeat(9,1fr); 
  }
  b, .product{
    height: calc(173.2vw/9);
  } 
  .product>.details>h2 {
    font-size: 1.6vw;
  }
  .product>.details>p {
    font-size: 3.3vw;
  }
}
@media (min-width:1500px) { 
  #productGrid{ 
    grid-template-columns: repeat(11,1fr); 
  }
  b, .product{
    height: calc(173.2vw/11);
  } 
  .product>.details>h2 {
    font-size: 1.3vw;
  }
  .product>.details>p {
    font-size: 2.6vw;
  }
}
@media (min-width:1800px) { 
  #productGrid{ 
    grid-template-columns: repeat(13,1fr); 
  }
  b, .product{
    height: calc(173.2vw/13);
  } 
  .product>.details>h2 {
    font-size: 1.1vw;
  }
  .product>.details>p {
    font-size: 2.2vw;
  }
}
@media (min-width:2100px) { 
  #productGrid{ 
    grid-template-columns: repeat(15,1fr); 
  }
  b, .product{
    height: calc(173.2vw/15);
  } 
  .product>.details>h2 {
    font-size: 0.95vw;
  }
  .product>.details>p {
    font-size: 1.6vw;
  }
}
</style>


<body>

<div  >
 <br>
 These are products of your resturant<br>
 To delete goto bottom of page
 <br>
</div>
<span></span>
<ul id="productGrid">


<?php

require "../api/displayresturantdata.php";
?>


<span></span>
</ul>

<div>
  You need to type the exact name of the item . Item name is written on right of image below its Category(veg or nonveg)<br>
  It will delete the item and will redirect you to main page.<br>
  <form action="../api/delete.php" method="post" enctype="multipart/form-data">
  <label>Name of item you want to delete</label>
  <input type="text" name="name">
  <input type="submit" value="submit" name="submit">
</form>
</div>


<script type="text/javascript"> 
var grid = document.getElementById("productGrid"); 
var products = document.getElementById("productGrid").getElementsByClassName("veg");
var productsShown;
var spacers;
var nPerRow;
var rowHeight;
var closedRowHeight;

function addSpacers(){
  for(var i=1; i<=products.length; i++){
    var node = document.createElement("b");
    node.style.gridRow = i;
    grid.appendChild(node); 
  }
  resizeGrid();
  startAnim();
}

function resizeGrid(){
  var w = window.innerWidth;
  if(w<600) {
    nPerRow=1;
  }else if(w<900) {
    nPerRow=2;
  }else if(w<1200) {
    nPerRow=3;
  }else if(w<1500) {
    nPerRow=4;
  }else if(w<1800) {
    nPerRow=5;
  }else if(w<2100) {
    nPerRow=6;
  }else {
    nPerRow=7;
  }
  var nRows = Math.floor(products.length/nPerRow); 
  productsShown = nRows*nPerRow;
  rowHeight = (173.2/(2*nPerRow+1));
  closedRowHeight = (57.74/(2*nPerRow+1));
  grid.style.gridAutoRows = rowHeight+"vw";
  spacers = document.getElementById("productGrid").getElementsByTagName("b"); 
  
  for(var i=0; i<products.length; i++){
    if(i<nRows){
      spacers[i].style.display = "block";
    }else{
      spacers[i].style.display = "none";
    }
    if(i<productsShown){
       products[i].style.display = "grid";
    }else{
       products[i].style.display = "none";
    }
  }
}

function startAnim() {
  var details = document.getElementsByClassName('details');
  var logos = document.getElementsByClassName('logo');
  var photos = document.getElementsByClassName('photo');
  var count = 0;
  var wait = setInterval(delay, 500);
  var openSteps = 25;
  var revealSteps = 10;
  function delay() {
    var anim = setInterval(frame, 10);
    clearInterval(wait);
  }
  function frame() {
    count++; 
    if (count > (openSteps+revealSteps)) {
      clearInterval(anim);
    } else if (count > openSteps) {
      for(var i = 0; i < photos.length; i++){
        photos[i].style.display = "block";
        photos[i].style.opacity = (count-openSteps)/revealSteps;
        details[i].getElementsByTagName("h2")[0].style.opacity = (count-openSteps)/revealSteps;
        details[i].getElementsByTagName("p")[0].style.opacity = (count-openSteps)/revealSteps;
        logos[i].getElementsByTagName("img")[0].style.opacity = 0.6*(count-openSteps)/revealSteps;
      }
    } else {
      grid.style.gridAutoRows = (closedRowHeight+(rowHeight-closedRowHeight)*count/openSteps)+"vw";
      for(var i = 0; i < details.length; i++){
        details[i].style.clipPath = "polygon(0% 33.333%, 100% 0%, 100% "+count*66.667/openSteps+"%, 0% "+(33.33+count*66.667/openSteps)+"%, 0% 0%)";
        details[i].style.webkitClipPath = "polygon(0% 33.333%, 100% 0%, 100% "+count*66.667/openSteps+"%, 0% "+(33.33+count*66.667/openSteps)+"%, 0% 0%)";
        logos[i].style.clipPath = "polygon(0% 0%, 100% 33.333%, 100% "+(33.33+count*66.667/openSteps)+"%, 0% "+count*66.667/openSteps+"%, 0% 0%)";
        logos[i].style.webkitClipPath = "polygon(0% 0%, 100% 33.333%, 100% "+(33.33+count*66.667/openSteps)+"%, 0% "+count*66.667/openSteps+"%, 0% 0%)";
        photos[i].style.display = "none";
        details[i].getElementsByTagName("h2")[0].style.opacity = 0;
        details[i].getElementsByTagName("p")[0].style.opacity = 0;
        logos[i].getElementsByTagName("img")[0].style.opacity = 0;
      }
      for(var j = 0; j < spacers.length; j++){
        if(j % 2){
          spacers[j].style.clipPath = "polygon(0% 33.333%, 100% 0%, 100% "+count*66.667/openSteps+"%, 0% "+(33.33+count*66.667/openSteps)+"%, 0% 0%)";
          spacers[j].style.webkitClipPath = "polygon(0% 33.333%, 100% 0%, 100% "+count*66.667/openSteps+"%, 0% "+(33.33+count*66.667/openSteps)+"%, 0% 0%)";
        }else{
          spacers[j].style.clipPath = "polygon(0% 0%, 100% 33.333%, 100% "+(33.33+count*66.667/openSteps)+"%, 0% "+count*66.667/openSteps+"%, 0% 0%)";
          spacers[j].style.webkitClipPath = "polygon(0% 0%, 100% 33.333%, 100% "+(33.33+count*66.667/openSteps)+"%, 0% "+count*66.667/openSteps+"%, 0% 0%)";
        }
      }

    }
  }
};

window.onresize = function(){
  resizeGrid();
}

window.onload = addSpacers();


</script>
<br><br><br>
<font size = "+9"><a href="../main.php">FoodShala</a></font>
</body>
</html>