<?php

//include 'dbConnect.php';
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



<!--<?php
/*
if(isset($_POST['subscribePortal']))
{

  /*if email is already in there*/
/*
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];

  //first query - is already in database? if so, add again

  $conn = new Dbconnect;
  $db = $conn->getDb();

  $query = "INSERT INTO subscribe (firstName, lastName, email, subscribe) VALUES (:firstName, :lastName, :email,'subscribed')";

    $statement = $db->prepare($query);

      $statement->bindValue(':firstName', $firstName, PDO::PARAM_STR);
      $statement->bindValue(':lastName', $lastName, PDO::PARAM_STR);
      $statement->bindValue(':email', $email, PDO::PARAM_STR);

      $statement->execute();

      echo "<div>";

      echo "Thank you, {$firstName}, for joining our newsletter.";
      echo "</div>";

}
*/

?>-->


</div>



</div>



</body>


<?php

	//include 'footer.php';

?>