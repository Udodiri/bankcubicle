<?php
$current1 = $current2 = $current3 = '';
$current4 = 'current'; //currentPage
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includeHTML_HeadTag.php';?>
</head>
<body>

<?php include 'includeHeader.php'; ?>

<div id="smallerBanner">
	<img src="images/contactus2.jpg" />
</div><!-- smallerBanner -->

<div class="block2">
  <div class="container_12"> 
    <!--==============================content================================-->
    <section class="content">
      <div class="wrapper projects">
        <div class="row clearfix">
          <article class="grid_12">
            <h2><b>Get In Touch</b></h2>
            <p>Do you have a question or comment? Send a message using the form below and we’ll be in touch with you shortly.</p>
            <form action="#" method="post" id="cform" name="cform">
              <div class="wrapper">
              	  <article class="grid_8">
                     <div id="homehireus" class="hireform contactform">
                        <div>
                          <!--<label>Name:<span class="required">*</span></label>-->
                          <input name="name" id="name" class="inPut2" placeholder="    Full Name :*" type="text" value="" tabindex="1" style="">
                        </div>
                        <div>
                          <!--<label>Email:<span class="required">*</span></label>-->
                          <input name="email" id="email" class="inPut2" placeholder="    Email :*" type="text" value="" tabindex="2" style="">
                        </div>
                        <div>
                          <!--<label>Subject:<span class="required"></span></label>-->
                          <input name="subject" id="subject" class="inPut2" type="text" placeholder="    Subject :*" value="" tabindex="4" style="">
                        </div>
                        <div>
                          <!--<label>Message:<span class="required"></span></label>-->
                          <textarea name="message" id="message" class="inPut3" tabindex="5" placeholder="    Message :*" style=""></textarea>
                        </div>
                        <div style="margin-top:10px;">
                          <input type="button" id="send-message" class="inPutSubmit" value="Send Message" tabindex="6" onclick="sendMsg();">
                          <!--<div id="output" class="contactpage-msg"></div>-->
                          <div id="fback" style="dbackground:#c00; dcolor:#fff; dpadding:5px 0 5px 20px; dmargin-bottom:20px;">
                            
                          </div>
                        </div>
                      </div>
                    </article>
                    
                    <article class="grid_3">
                  	 <h2>Our Contact Information</h2>
          			 <p class="MB0">
                     	<b style="font-size:18px;">Office Address:</b> <br />
                        10 Gimbiya Street, Area 11, Garki, Abuja.
                        <br /><br />
                        <b style="font-size:18px;">Phone Number:</b>  <br />
                        0705 837 6650
                        <br /><br />
                        <b style="font-size:18px;">Email:</b>  <br />
                        info@bankcubicle.com
                     </p>
                  	</article>
                  
                    <div style="clear:both;"></div>
                </div><!-- wrapper -->
            </form>
          </article>
        </div><!-- class="row clearfix" -->
        
        <br /><br />
        <div class="row clearfix">
          <article class="grid_12">
            <div class="gmap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.2553991672257!2d7.502143314336377!3d9.040451591299803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0beca2d26c7b%3A0x31a1ab92b5e184e4!2s10+Gimbiya+St%2C+Garki%2C+Abuja!5e0!3m2!1sen!2sng!4v1499535546425" width="940" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </article>
        </div><!-- class="row clearfix" -->
        
      </div>
    </section>
  </div>
</div>

<script type="text/javascript">
	function sendMsg() {
		//alert("I was clicked.");
		//sendContactUsMessage.php
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var subject = document.getElementById('subject').value;
		var message = document.getElementById('message').value;
		//alert(message);
		$.post('sendContactUsMessage.php', {name: name, email: email, subject: subject, message: message},
		function(result) {
			$('#fback').html(result).show();
		});
	}
</script>

<?php include 'includeFooter.php';?>
</body>
</html>