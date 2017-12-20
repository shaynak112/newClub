<?php $pjGroup = "1";
 include '/home/dh_ev2582/findersoftheuniverse.com/portal/test/scripts/app/views/pjLayouts/pjActionProtect.php'; ?>

 <?php

include 'dbConnect.php';
include 'nav.php';
include 'header.php';

?>

<body>

<h1>Gallery</h1>

<p>Going to put images in an array and then a slideshow. Perhaps some links or something at the bottom with thumbnails but the main part will be the slideshow.</p>

		<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM images ORDER BY imageID DESC ";
            $statement = $db->prepare($query);
            $statement->execute();
            $allImgs = $statement->fetchAll(PDO::FETCH_OBJ);
		?>

	<?php
		foreach($allImgs as $p)
		{
			echo "<div style='width:20%;margin-right:1%;display:inline-block;vertical-align:top;'>";
			echo "<img class='galleryImage' src='gallery/" . $p->imageLocation . "' style='width:80%;margin-left:10%;'>";
			echo "<p>" . $p->imageEventName . "</p>";
			echo "<p>" . $p->imageDescription . "</p>";
			echo "</div>";

		}
	?>
<script>
/*
  var myIndex = 0;
  var index2 = 1;

  function gallerySlideshow()
  {
      var y;
      var x = document.getElementsByClassName("slides");
      for (y = 0; y < x.length; y++)
      {
         x[y].style.display = "none";  
      }

      myIndex++;
      
      if (myIndex > x.length)
        {
          myIndex = 1;
        }    

      x[myIndex-1].style.display = "block";  
      setTimeout(gallerySlideshow, 4000);
  }

  

  gallerySlideshow();

*/

</script>

</body>
</html>