<style>
*
{
   padding: 0;
   margin: 0;
}
.topmenu{
   box-sizing: border-box;
   font-family: sans-serif;
}
.menu-bar{
   background-color: #b2ff00;
   text-align: center;
}
.menu-bar ul{
   display: inline-flex;
   list-style: none;
   color: black;
}

.menu-bar ul li{
   width: 70px;
   margin: 10px;
   text-align: center;
}

.menu-bar ul li a{
   text-decoration: none;
   color: black;
}
.sub-menu-1{
   display: none;
}
.menu-bar ul li:hover .sub-menu-1{
   display: block;
   position: absolute;
   background-color: #b2ff00;
   margin-top: 15px;
   margin-left: -15px;
}


.menu-bar ul li:hover .sub-menu-1 ul{
   display: block;
   margin: 10px;
}



.menu-bar ul li:hover .sub-menu-1 ul li{
   width: 150px;
   padding: 10px;
   border-bottom: 1px dotted green;
   background-color: wheat;
   border-radius: 0;
   text-align: left;
}


.menu-bar ul li:hover .sub-menu-1 ul li:last-child{
   color: #b2ff00;
}


</style>





         
    <body class="topmenu">   
         <div class="menu-bar">
               
                  <ul>
                     <li>
                        <a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
                     </li>
                     <li>
                        <a href="buildpc.php" data-hover="dropdown" class="dropdown-toggle">Build Your PC</a>
                     </li>
                     <?php $sql=mysqli_query($con,"select id,categoryName  from category");
                        while($row=mysqli_fetch_array($sql))
                        {
                            ?>
                     <li>
                        <a href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
                     </li>
                    
                    
                     <?php } ?>
                     <li>
                        <a href="#" data-hover="dropdown" class="dropdown-toggle">Accesseries</a>
                     <div class="sub-menu-1">
                     <ul>
                     <li><a href="#">Sub Category 1</li>
                     <li><a href="#">Sub Category 2</li>
                     <li><a href="#">Sub Category 3</li>
                     <li><a href="#">Sub Category 4</li>

                     </ul>
                     
                     </div>
                     
                     </li>
                     
                  </ul>
                  <!-- /.navbar-nav -->
                 
         </div>
  </body>   

<script>


</script>