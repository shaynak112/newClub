<?php

//include 'dbConnect.php';
include 'nav.php';
include 'header.php';

?>

<body>

<div id='container'>
<h1>Contact Us</h1>

<p style='margin-left:15%;'>Send us a message through this form or contact us on social media!</p>
<br/>

<div id='contactContactFormDiv'>

<form name="aform" method="post" action="">

<div style='width:20%;display:inline-block;vertical-align:top;' id='formLabels'>

<div class='formLabelClass'><label for="yourName">Your name: </label></div>
<br/>
<div class='formLabelClass'><label for="email">Your e-mail address: </label></div>
<br/>
<div class='formLabelClass'><label for="phone">Your phone number: </label></div>
<br/>
<div class='formLabelClass'><label for="message">Your message: </label></div>
<br/>

</div>

<div style='width:75%;display:inline-block;vertical-align:top;' id='formInput'>

<div><input id="yourName" type="text" class='formInputClass' placeholder="Name" name="yourName"/></div>
<br/>
<div><input id="email" type="text" class='formInputClass'  placeholder="Email" name="email"/></div>
<br/>
<div><input id="phone" type="text" class='formInputClass'  placeholder="Phone Number" name="phone"/></div>
<br/>
<div><textarea cols='50%' id="message" placeholder="Message" name="message" class='formInputClass' > </textarea></div>
<br/>
<input type="submit" value="Submit" name="Submit" id="Submit">

</div>


                  

                  </form>

            <!--<?php/*




            
                ini_set("SMTP","mail.shaynak112.com");
                ini_set("smtp_port","25");
                ini_set('sendmail_from', 'test@shaynak112.com');

                $from = "Sender <test@shaynak112.com>";
                $to = "Shayna <shayna@shaynak112.com>";
                $subject = "Message from Portfolio Website";

                $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);

                if(isset($_POST['Submit']))
                {
                  $contactName = $_POST['yourName'];
                  $contactEmail = $_POST['email'];
                  $contactPhone = $_POST['phone'];
                  $contactBody = $_POST['message'];
                  $message = "A message from " . $contactName . " at " . $contactEmail . " and " . $contactPhone . " The message is:     " . $contactBody;

                  mail($to,$subject,$message,$from);*/

            ?>-->


</div>



<div id='contactSocialMediaRow'>

	<div class='contactSocialMediaColumn'>
		<a href='https://www.facebook.com/portaltoronto/' target='_blank'><img src='images/fb.jpg' class='contactSocialMediaImgs' id='contactFacebookImg'></a>
	</div>

	<div class='contactSocialMediaColumn'>
		<a href='https://www.instagram.com/portaltoronto' target='_blank'><img src='images/instagram.png' class='contactSocialMediaImgs' id='contactInstagramImg'></a>
	</div>

	<div class='contactSocialMediaColumn'>
		<a href='https://twitter.com/portaltoronto' target='_blank'><img src='images/twitter.jpg' class='contactSocialMediaImgs' id='contactTwitterImg'></a>
	</div>

</div>


</div>



</body>


<?php

	//include 'footer.php';

?>