<?php $pjGroup = "1";
 include '/home/dh_ev2582/findersoftheuniverse.com/portal/test/scripts/app/views/pjLayouts/pjActionProtect.php'; ?>

 <?php

include 'dbConnect.php';
include 'nav.php';
include 'header.php';

?>

<body>

<div id='container'>
<h1>DJs</h1>

<p>Toronto has many talented and unique DJs who spin a variety of styles.</p>
<p>this will be based on a database</p>

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
			echo "<img class='firstImg' src='djs/" . $p->djID . "/img1.jpg' style='width:80%;margin-left:10%;'>";
			//echo "<img class='secondImg' src='djs/" . $p->djID . "/img2.jpg'>";
			echo "</div>";

		}
	?>


</div> <!--end djsDiv-->

</div> <!--end container-->



</body>

</html>