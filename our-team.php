<?php
$current1 = $current3 = $current4 = '';
$current2 = 'current'; //currentPage
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includeHTML_HeadTag.php';?>
</head>
<body>

<?php include 'includeHeader.php'; ?>

<div id="smallerBanner">
	<img src="images/ourTeam.jpg" />
</div><!-- smallerBanner -->

<div class="block2" style="dborder:1px solid #c00; background:#eeeeed;">
  <div class="container_12 container_12B" style=""> 
    <!--==============================content================================-->
    <section class="content" style=" padding:40px 0;">
      <div class="wrapper projects">
        <div class="row clearfix">
          <article class="grid_13">
              <div class="wrapper" style="dborder:1px solid #c00;">
                 <?php
              		$count=0;
					$lastOne = 8;
					$lastOneOnRow = 2;
					
					$team_Name = 'NKAMANSE E.';
					$team_Image = 'team1.png';
					$team_Info = "FINANCIAL EXPERT";
					
					$num = 1;
					while($count<$lastOne) 
					{
						/**
						?>
						<article class="grid_4" id="ourTeamWrap" style=" <?php if($count==$lastOneOnRow){echo 'border:1px solid #c00;margin-right:0px;';}?>">
                      		<div id="teamPhoto"><img src="images/team1.png"></div>
                   		</article> 
                        <?php
						**/
						?>
                        <div class="ourTeamWrap">
                            <img src="images/<?php echo $team_Image; ?>" />
                            <h3><?php echo $team_Name; ?></h3>
                            <p>
                                <?php 
                                    $Info = $team_Info;
                                    if(strlen($Info) > 77) {
                                        $Info = substr($Info, 0, 77) . '...';
                                    }
                                    echo $Info;
                                ?>
                            </p>
                        </div><!-- service1 -->
                    	
                        <?php
						if($count==$lastOneOnRow) {
							$lastOneOnRow = ($lastOneOnRow+3);
						}
						$count++;
						
						if($num==1) {
							//Second Person
							$team_Name = 'MACAULAY A.';
							$team_Image = 'team2.png';
							$team_Info = "ACCOUNTANT";
						}
						elseif($num==2) {
							//Third Person
							$team_Name = 'CHINEDU N.';
							$team_Image = 'team3.png';
							$team_Info = "ICT CONSULTANT";
						}
						elseif($num==3) {
							//Forth Person
							$team_Name = 'TOM E.';
							$team_Image = 'team4.png';
							$team_Info = "DATABASE ADMINISTRATOR";	
						}
						elseif($num==4) {
							//Fifth Person
							$team_Name = 'OBINNA P.';
							$team_Image = 'team5.png';
							$team_Info = "APPLICATION DEVELOPER";	
						}
						elseif($num==5) {
							//Sixth Person
							$team_Name = 'MUHAMMED Z.';
							$team_Image = 'team6.png';
							$team_Info = "HR PROFESSIONAL";
						}
						elseif($num==6) {
							//Seventh Person
							$team_Name = 'LYDIA A.';
							$team_Image = 'team7.png';
							$team_Info = "MOBILE MONEY EXPERT";	
						}
						elseif($num==7) {
							//Eighth Person
							$team_Name = 'RILWAN A.';
							$team_Image = 'team8.png';
							$team_Info = "BUSINESS CONSULTANT";	
						}
						elseif($num==8) {
							//Ninth person
							$team_Name = 'NKAMANSE ETTEUMOH9';
							$team_Image = 'team9.png';
							$team_Info = "Let us help create breathe taking animations montages and motion designs.";	
						}
						elseif($num==9) {
							//Tenth Person
							$NameTeam = 'NKAMANSE ETTEUMOH10';
							$team_Image = 'team10.png';
							$team_Info = "Let us help create breathe taking animations montages and motion designs.";			
						}
						else {
							$NameTeam = 'NKAMANSE ETTEUMOH10';
							$team_Image = 'team10.png';
							$team_Info = "Let us help create breathe taking animations montages and motion designs.";			
						}
						
						$num++;
					}
                 ?>   
                 <div style="clear:both;"></div>
               </div><!-- wrapper -->
          </article>
        </div><!-- class="row clearfix" -->
        
      </div>
    </section>
  </div>
</div>

<?php include 'includeFooter.php';?>
</body>
</html>