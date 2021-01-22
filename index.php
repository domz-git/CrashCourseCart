<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="crash_style.css">
  <title>Crash</title>
</head>
<body>
<div class="container" id="btn_container">
<a href="#" id="cart_btn" class="btn btn-info btn-lg" onclick="show()">
  <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
</a>
</div>
<br>

<div class="container" id="cart_container">
<div class="active"><p id="my_cart">My Cart (5 Items)</p></div>
<div class="vertical-menu">
<div class="menu_div">
      <img id="myImg1" class="imgs" src="images/img1.jpg" alt="Hands-free Zeba Sneakers -  Obsidian Red">
      <p class="title">Hands-free Zeba Sneakers</p>
      <p class="atr">Brand: Ziba</p>
      <p class="atr">Color: Obsidian Red</p>
      <p class="price">1 x $139.00</p>
    <hr>
  </div>
  <div class="menu_div">
  <img id="myImg2" class="imgs" src="images/img2.jpg" alt="Hands-free Zeba Sneakers -  Cherry Red">
      <p class="title">Hands-free Zeba Sneakers</p>
      <p class="atr">Brand: Ziba</p>
      <p class="atr">Color: Cherry Red</p>
      <p class="price">1 x $129.00</p>
    <hr>
  </div>
  <div class="menu_div">
  <img id="myImg3" class="imgs" src="images/img3.jpg" alt="Hands-free Zeba Sneakers -  Ash White">
      <p class="title">Hands-free Zeba Sneakers</p>
      <p class="atr">Brand: Ziba</p>
      <p class="atr">Color: Ash White</p>
      <p class="price">1 x $159.00</p>
    <hr>
  </div>
  <div class="menu_div">
  <img id="myImg4" class="imgs" src="images/img4.jpg" alt="Hands-free Zeba Sneakers -  Beige (Extra Wide 4E)">
      <p class="title">Hands-free Zeba Sneakers</p>
      <p class="atr">Brand: Ziba</p>
      <p class="atr">Color: Beige</p>
      <p class="price">1 x $119.00</p>
    <hr>
  </div>
  <div class="menu_div">
  <img id="myImg5" class="imgs" src="images/img5.jpg" alt="Hands-free Zeba Sneakers -  Royal Navy">
      <p class="title">Hands-free Zeba Sneakers</p>
      <p class="atr">Brand: Ziba</p>
      <p class="atr">Color: Royal Navy</p>
      <p class="price">1 x $169.00</p>
  </div>
</div>
<div class="active">
<button class="btn" id="edit_btn">Edit Cart</button>
<button class="btn" id="check_btn">Checkout</button>
</div>
<p id="note">Napomena: kliknite na slike predmeta.</p>
</div>
  
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
  // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById("myImg1");
var img2 = document.getElementById("myImg2");
var img3 = document.getElementById("myImg3");
var img4 = document.getElementById("myImg4");
var img5 = document.getElementById("myImg5");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img1.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
img2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
img3.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
img4.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
img5.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
function show() {
  var x = document.getElementById("cart_container");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</body>
</html>