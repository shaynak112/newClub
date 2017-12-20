<?php $pjGroup = "1";
 include '/home/dh_ev2582/findersoftheuniverse.com/portal/test/scripts/app/views/pjLayouts/pjActionProtect.php'; ?>

 <?php

include 'dbConnect.php';
include 'nav.php';
include 'header.php';

?>

<script src="scripts/script.js"></script>    

<div id='container'>
<h1>DJs</h1>

<p>Toronto has many talented and unique DJs who spin a variety of styles.</p>
<p>action onhover: image changes</p>
<p>action onclick: links and bio are given</p>

		<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM DJs ORDER BY djID ASC ";
            $statement = $db->prepare($query);
            $statement->execute();
            $allDJs = $statement->fetchAll(PDO::FETCH_OBJ);
		?>

<div id='djsDiv' style='width:100%;'>



	<?php
		foreach($allDJs as $p)//displays newest models
		{
			echo "<div class='oneDJDiv' style='width:20%;margin-right:1%;display:inline-block;vertical-align:top;'>";
			echo "<h2>" . $p->djName . "</h2>";
			echo "<img class='firstDJImg' src='djs/" . $p->djID . "/img1.jpg' style='width:80%;margin-left:10%;'>";
			echo "<img class='secondDJImg' src='djs/" . $p->djID . "/img2.jpg' style='width:80%;margin-left:10%;display:none;'>";
			echo "<p style='display:none;' class='DJinfo'>Some information</p>";
			//echo "<img class='secondImg' src='djs/" . $p->djID . "/img2.jpg'>";
			echo "</div>";

		}
	?>


</div> <!--end djsDiv-->

</div> <!--end container-->




<script>
	$('.firstDJImg').hover(function()
  {
//possibly make visibility css and then change this visbility???? would that work???
    $('.firstDJImg').show();
    //$(this).next().css("width", "20%");
    
    //$(this).next('.firstDJImg').hide();
    //$(this).next('.firstDJImg').css("border-color", "#FF66CC");
    
    //$(this).next('.firstDJImg').css("width", "20%");
    //$(this).next('.firstDJImg').css("display", "none");
    //$(this).next('.firstDJImg').css("visibility", "hidden");
    //$('.firstDJImg').hide();
    //$('.firstDJImg').css("border-color", "#32CD32");
    $('.secondDJImg').hide();
    $(this).next('.secondDJImg').show();
    $('.secondDJImg').css("z-index", "-1");
    $('.secondDJImg').css("width", "80%");
    $('.secondDJImg').css("padding-top", "0px");

    //$(this).css("width", "20%;");
    //$(this).css("border-color", "#FF66CC");

  }

  );

	</script>

	<script>/*

$('.firstDJImg').click(function()
	{

	$('.DJinfo').hide();
    $(this).next('.DJinfo').show();

	}

);*/

</script>

<script>/*
$('.aboutImage').click(function()
	{

	$('.DJinfo').hide();
    $('.aboutImage').css("border-color", "#32CD32");
    $(this).next('.DJinfo').show();
    $(this).css("border-color", "#FF66CC");

	}

	);

  */
</script>

</body>

</html>