<style>
/* Add a black background color to the top navigation */
.newmenu {
  background-color: #333;
  overflow: hidden;
  text-align: center;
}

/* Style the links inside the navigation bar */
.newmenu a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an newactive class to highlight the current page */
.newactive {
  background-color: #04AA6D;
  color: white;
}

/* Hide the link that should open and close the newmenu on small screens */
.newmenu .icon {
  display: none;
}

/* newdrop container - needed to position the newdrop content */
.newdrop {
  float: left;
  overflow: hidden;
}

/* Style the newdrop button to fit inside the newmenu */
.newdrop .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the newdrop content (hidden by default) */
.newdrop-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the newdrop */
.newdrop-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on newmenu links and the newdrop button on hover */
.newmenu a:hover, .newdrop:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to newdrop links on hover */
.newdrop-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the newdrop menu when the user moves the mouse over the newdrop button */
.newdrop:hover .newdrop-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the newmenu (.icon) */
@media screen and (max-width: 600px) {
  .newmenu {
  background-color: #333;
  overflow: hidden;
  text-align: center;
}
  .newmenu a:not(:first-child), .newdrop .dropbtn {
    display: none;
  }
  .newmenu a.icon {
    float: right;
    display: block;
    text-align: center;
  }
}

/* The "newres" class is added to the newmenu with JavaScript when the user clicks on the icon. This class makes the newmenu look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .newmenu.newres {position: relative;}
  .newmenu.newres a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .newmenu.newres a {
    float: none;
    display: block;
    text-align: left;
  }
  .newmenu.newres .newdrop {float: none;}
  .newmenu.newres .newdrop-content {position: relative;}
  .newmenu.newres .newdrop .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}


</style>
<div class="newmenu" id="mynewmenu">
  <a href="index.php">Home</a>
  <a href="buildpc.php">Build Your PC</a>



<?php $sql=mysqli_query($con,"select id,categoryName  from category");
                      while($row=mysqli_fetch_array($sql))
                      {
                          ?>
<a href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
<?php } ?>



  <div class="newdrop">
    <button class="dropbtn">Accessories</button>
    <div class="newdrop-content">
      <a href="#">MOUSE</a>
      <a href="#">KEYBOARD</a>
      <a href="#">MONITOR</a>
      <a href="#">HEADSET</a>
      <a href="#">SPEAKERS</a>
      <a href="#">CABLES</a>
      <a href="#">LIGHTNING</a>
      <a href="#">THERMAL PASTE</a>
      <a href="#">FAN</a>
      <a href="#">GAMING CONTROLLER</a>
      <a href="#">MOUSE PAD</a>
    </div>
  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="dropFunction()">&#9776;</a>
</div>

<script>
/* Toggle between adding and removing the "newres" class to newmenu when the user clicks on the icon */
function dropFunction() {
  var x = document.getElementById("mynewmenu");
  if (x.className === "newmenu") {
    x.className += " newres";
  } else {
    x.className = "newmenu";
  }
}

</script>