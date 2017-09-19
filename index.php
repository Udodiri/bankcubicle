<?php
$current2 = $current3 = $current4 = '';
$current1 = 'current'; //currentPage
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includeHTML_HeadTag.php';?>
</head>
<body>

<?php include 'includeHeader.php'; ?>

<div class="extra_container">
  <section >
    <div class="fullwidthbanner-container" style="dheight:450px">
      <div class="fullwidthbanner">
        <ul>
          
          <!-- SLIDEUP -->
          <li data-transition="fade"> <img src="images/img4.jpg" alt="" />
            <div class="caption lft" data-x="520" data-y="20" data-speed="900" data-start="500" data-easing="easeOutBack"><img src="images/banner1.png" alt="" /></div>
            <div class="caption lfb big_red_bg" data-x="0" data-y="50" data-speed="900" data-start="800" data-easing="easeOutSine">Changing daily micro savings.</div>
            
            <div class="caption lfb big_red_bg" data-x="0" data-y="150" data-speed="1100" data-start="1000" data-easing="easeOutSine">Thru' digital financial services.</div>
            
            <div class="caption lfb big_red_bg" data-x="0" data-y="250" data-speed="1100" data-start="1200" data-easing="easeOutSine">Using world-class technologies.</div>
          </li>
          
          
          <!-- SLIDEUP -->
          <li data-transition="fade"> <img src="images/img5.jpg" alt="" />
            <div class="caption lft" data-x="520" data-y="20" data-speed="900" data-start="500" data-easing="easeOutBack"><img src="images/banner2.png" alt="" /></div>
            <div class="caption lfb big_red_bg" data-x="0" data-y="50" data-speed="900" data-start="800" data-easing="easeOutSine">Banking the unbanked.</div>
            
            <div class="caption lfb big_red_bg" data-x="0" data-y="150" data-speed="1100" data-start="1000" data-easing="easeOutSine">Improving savings culture.</div>
            
            <div class="caption lfb big_red_bg" data-x="0" data-y="250" data-speed="1100" data-start="1200" data-easing="easeOutSine">Empowering the poor.</div>
          </li>
          
          <!-- SLIDEUP -->
          <li data-transition="fade"> <img src="images/img2.png" alt="" />
            <div class="caption lft" data-x="520" data-y="20" data-speed="900" data-start="500" data-easing="easeOutBack"><img src="images/banner3.png" alt="" /></div>
            <div class="caption lfb big_red_bg" data-x="0" data-y="50" data-speed="900" data-start="800" data-easing="easeOutSine">Business Consulting & Advisory.</div>
            
            <div class="caption lfb big_red_bg" data-x="0" data-y="150" data-speed="1100" data-start="1000" data-easing="easeOutSine">Financial Management.</div>
            
            <div class="caption lfb big_red_bg" data-x="0" data-y="250" data-speed="1100" data-start="1200" data-easing="easeOutSine">Only from the best.</div>
          </li>
          
        </ul>
       
      </div>
    </div>	
  </section>
</div>


<!--============================== Card-1 =================================-->
<div class="block2">
  <div class="container_12"> 
    <!--==============================content================================-->
    <section class="content">
      <div class="wrapper">
        <article class="grid_12 last-col">
          <div class="hello_box"> BANK CUBICLE is a Financial Services Provider duly registered with the Corporate Affairs Commission to provide digital financial services in Nigeria.<br/><br/>
Our dream is to revolutionize and grow the Daily Micro Savings Business in the country by providing Digital Financial Services to the ‘Unbanked’ using appropriate Technologies. </div>
        </article>
      </div>
      <div class="wrapper offers_box">
        <article class="grid_3">
          <h2 class="clearfix"> <span class="f_left">Core Services</span></h2>
          <p> We deliver outstanding client experiences in daily micro savings, business consulting, and digital financial services. <a href="services" class="arrowlink">Read More</a> </p>
        </article>
        <div class="grid_9" style="">
          <div id="home-services" style="">
            <div class="grid_3" style="">
              <div class="offer" style=""> <img src="images/contributionIcon.png" alt="Plan">
                <div class="title"><a href="services" style="color:#303030">Daily Micro Savings</a></div>
                <?php
				$text = "We're working daily to improve the savings culture in Nigeria to achieve financial empowerment of...";
				//echo strlen($text);
				echo $text;
                ?>
                <br>
              </div>
            </div>
            <div class="grid_3">
              <div class="offer"> <img src="images/consultingIcon.png" alt="Design">
                <div class="title"><a href="services" style="color:#303030">Business Consulting</a></div>
                We're experts at providing excellent business consulting and advisory services to guide and help...<br>
              </div>
            </div>
            <div class="grid_3 last-col">
              <div class="offer"> <img src="images/prototype.png" alt="Prototype">
                <div class="title"><a href="services" style="color:#303030">Digital Financing</a></div>
                Employing the best and latest technologies; we provide digital financial services that guarantee your business.<br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div><!-- class="block2" -->


<!--============================== Card-2 =================================-->
<div class="featured_block" style="">
  <div class="container_12">
    <section class="content" style=" padding-top:30px; padding-bottom:30px;">
      <div class="wrapper featured_work">
        <article class="grid_3">
          <h2>The Company</h2>
          <p>BANK CUBICLE is a Financial Services Provider duly registered with the Corporate Affairs Commission to provide digital financial services in Nigeria.</p>
          <a href="the-company" class="arrowlink">Read More</a> </article>
        <article class="grid_8 last" style="border:6px inset #9b3407;">
          <div class="flexslider" id="home-page-slider-secondary" style="padding-top:50px;">
            <ul class="slides">
              <li >
                <div class="imgwrap lifted"><img src="images/featured-work-1.jpg" alt="Featured"/></div>
              </li>
              <li>
                <div class="imgwrap lifted"><img src="images/featured-work-2.jpg" alt="Featured"></div>
              </li>
              <li>
                <div class="imgwrap lifted"><img src="images/featured-work.jpg" alt="Featured"/></div>
              </li>
            </ul>
          </div>
        </article>
      </div>
    </section>
  </div>
</div><!-- class="featured_block" -->


<!--============================== Card-3 =================================-->
<div class="hireus_block">
  <div class="container_12">
    <section class="">
      <div class="wrapper">
        <article class="grid_3">
          <h2>Get in touch.</h2>
          <p class="MB0"> Got any questions? Fill this form and you'll get a response from one of our experts. </p>
        </article>
        <article class="grid_9">
          <form action="#" method="post" id="cform" name="cform" class="clearfix">
            <ul id="homehireus" class="hireform">
              <li>
                <label>Name:<span class="required">*</span></label>
                <input name="name" id="name" type="text" value="" tabindex="1">
              </li>
              <li>
                <label>Email:<span class="required">*</span></label>
                <input name="email" id="email" type="text" value="" tabindex="2">
              </li>
              <div style="clear:both;"></div>
              <li style="min-width:94%; dborder:1px solid #000;">
                <!--<label style="dborder:1px solid #000;">Message:<span class="required">*</span></label>-->
                <textarea name="message" id="message" tabindex="2" placeholder=" Message:*" style="width:100%; border:none; dborder:1px solid #c00;height:100px; padding-top:5px;"></textarea>
              </li>
              <div style="clear:both;"></div>
           	</ul>
            
            
            <ul id="homehireus" class="hireform">
              <li>
                <input type="button" id="send-message" value="Send Message" onClick="sendMsg()" tabindex="4">
              </li>
            </ul>
          </form>
          <div id="fback"></div>
        </article>
      </div>
    </section>
  </div>
</div><!-- hireus_block -->


<script type="text/javascript">
	function sendMsg() {
		//alert("I was clicked.");
		//sendContactUsMessage.php
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var subject = "CONTACT FORM";
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