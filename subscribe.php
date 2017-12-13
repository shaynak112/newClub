<?php $pjGroup = "1";
 include '/home/dh_ev2582/findersoftheuniverse.com/portal/test/scripts/app/views/pjLayouts/pjActionProtect.php'; ?>

 <?php

include 'dbConnect.php';
include 'nav.php';
include 'header.php';

?>

<body>

<div id='container'>
<h1>Subscribe</h1>

<p>Subcribe for the latest on information about Portal as well as contests and prizes.</p>


<div>

<form name="subscribeForm" class="form-horizontal" method="post" action="">

<div>
<label class="control-label" for="firstName">First name:  </label>
  <input id="firstName" class="form-control" type="text" placeholder="Enter your first name" name="firstName"/>
</div>

<div>
<label class="control-label" for="lastName">Last name:  </label>
  <input id="lastName" class="form-control" type="text" placeholder="Enter your last name" name="lastName"/>
</div>

<div>
<label class="control-label" for="email">Your email:  </label>
  <input id="email" type="text" class="form-control" placeholder="Enter your email" name="email"/>
</div>


<br/>

  <input type="submit" class="btn btn-primary" value="Subscribe to Portal's Newsletter" name="subscribePortal" id="subscribePortal"/>

  </form>



<?php

if(isset($_POST['subscribePortal']))
{

  /*if email is already in there*/

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];

  //first query - is already in database? if so, add again

  $conn = new Dbconnect;
  $db = $conn->getDb();
 
  
    $query = "INSERT INTO subscribe (subscribeFirstName, subscribeLastName, subscribeEmail, subscribed) VALUES (:firstName, :lastName, :email,'yes')";

    $statement = $db->prepare($query);

      $statement->bindValue(':firstName', $firstName, PDO::PARAM_STR);
      $statement->bindValue(':lastName', $lastName, PDO::PARAM_STR);
      $statement->bindValue(':email', $email, PDO::PARAM_STR);

      $statement->execute();

      echo "<div>";

      echo "Thank you, {$firstName}, for joining our newsletter.";
      echo "</div>";
}

?>


</div><!-- end form div-->

<br/><br/><br/><br/><br/>

<div>To unsubscribe, enter your email below</div>

<div><!--unsubscribe div-->

<form name="unsubscribeForm" class="form-horizontal" method="post" action="">

  <div>
<label class="control-label" for="UNemail">Your email:  </label>
  <input id="UNemail" type="text" class="form-control" placeholder="Enter your email" name="UNemail"/>
</div>


<br/>

  <input type="submit" class="btn btn-primary" value="Unsubscribe to Portal's Newsletter" name="unsubscribePortal" id="unsubscribePortal"/>

  </form>


<?php

  if(isset($_POST['unsubscribePortal']))
  {

    $UNemail = $_POST['UNemail'];

    $conn2 = new Dbconnect;
    $db2 = $conn2->getDb();
   
    
      $query2 = "UPDATE subscribe SET subscribed='no' WHERE subscribeEmail=$UNemail";

        $statement2 = $db2->prepare($query2);

        $statement2->bindValue(':UNemail', $UNemail, PDO::PARAM_STR);

        $statement2->execute();

        echo "<div>";
        echo "You have been unsubscribed from the newsletter, sorry to see you go.";
        echo "</div>";
  }

?>

</div><!--end container div-->

</body>


<?php

	//include 'footer.php';

?>