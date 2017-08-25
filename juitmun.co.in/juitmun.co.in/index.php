                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <html>
<head>
<title>JUIT MUN 2015</title>
<meta name="keywords" content="juitmun,mun,juit,jmun,mun himachal,himachal pradesh,waknaghat,jyc,jaypee,jaypee youth club">
<meta name="author" content="Pranav Jain,Himanshu Bansal,Atishay Singh,Jatin Dx">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="bootstrap.css">
<link href="css/full-slider.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<style>
body{
font-family: 'Varela Round', sans-serif;
}
</style>
<?php
	if(!empty($_POST['ip']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$college=$_POST['cln'];
		$article=$_POST['article'];
		$year=$_POST['year'];
                $acc=$_POST['acc'];
			$msg='Name:'.$name."\nEmail Id:".$email."\nContact Number:".$contact."\nCollege Name:".$college."\nYear".$year."\nAccomodation:".$acc."\nArticle:".$article;
			$subject='Registration for mun executive board';
			$to='ipjuitmun2015@gmail.com';
                        $from='admin@juitmun.co.in';
			$subject2='Confirmation Mail for Registration of JUIT MUN Executive Board';
			$msg1="Congratulation!!\nYou have been successfully registered for JUIT MUN 2015 International Press.\n\nJUIT MUN 2015\nOrganizing Committee";
			mail($to,$subject,$msg,"From: $from");
			mail($email,$subject2,$msg1,"From: $from");
		
	}
	if(!empty($_POST['delegate']))
	{
			$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		
	if($_POST['college']=='juit')
	{$college='juit';
	$acc='no';
	$op='no';}
	else
	{$college=$_POST['cln'];
	$acc=$_POST['acc'];
	$op=$_POST['OP'];}
	$pref1=$_POST['pref1'];
	$countryp1=$_POST['countryp1'];
	$countryp2=$_POST['countryp2'];
	$countryp3=$_POST['countryp3'];
	$pref2=$_POST['pref2'];
	$country1=$_POST['country1'];
	$country2=$_POST['country2'];
	
	$country3=$_POST['country3'];
	$experience=$_POST['experience'];
	$msg='Name:'.$name."\nEmail Id:".$email."\nContact:".$contact."\nCollege Name:".$college."\nAccomodation:".$acc."\nOnline Payment:".$op."\nPreference 1:".$pref1."\nCountry1:".$countryp1."\nCountry2:".$countryp2."\nCountry3:".$countryp3."\nPreference1:".$pref2."\nCountry1:".$country1."\nCountry2:".$country2."\nCountry3:".$country3."\nExperience:".$experience;
	
	$subject='Registration for mun delegates';
	$to='delegateaffairsjuitmun@gmail.com';
$from='admin@juitmun.co.in';
	mail($to,$subject,$msg,"FROM:$from");
	$subject2='Confirmation Mail for Registration of JUIT MUN Delegates';
	$msg1="Congratulation!!\nYou have been successfully registered for JUIT MUN 2015 Delegates.\n\nJUIT MUN 2015\nOrganizing Committee";
	mail($email,$subject2,$msg1,"FROM:$from");
        if($op=='yes')
        {?>
                   //header('location:http://in.explara.com/beta/juit-mun-2015-spring-summit/checkout');
                   <script>window.location = "http://in.explara.com/beta/juit-mun-2015-spring-summit/checkout";</script>
         <?php         exit();        
 }
	}
        if(!empty($_POST['contactus']))
        {
               $name=$_POST['name'];
               $email=$_POST['email'];
               $contact=$_POST['contact'];
               $message=$_POST['message'];
	       $msg='Name:'.$name."\nEmail Id:".$email."\nContact:".$contact."\nMessage:".$message;
               $subject='Query regarding MUN';
	       $to='pallavichansoria@yahoo.co.in';
               $from='admin@juitmun.co.in';
               mail($to,$subject,$msg,"FROM:$from");
        }	
?>
<script>
		function groupmember($val)
{
if($val=="other")
{document.getElementById("wrapper1").style.display="block";
document.getElementById("wrapper2").style.display="block";
}
else
{
document.getElementById("wrapper1").style.display="none";
document.getElementById("wrapper2").style.display="none";
}
}	;
 </script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
 	<div class="container navigation" style="padding:0;">
	<div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             
            </div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
			<ul class="nav navbar-nav">
			<li class="hidden">
                        <a href="#page-top"></a>
                    </li>
				<li  ><a class="page-scroll" href="#myCarousel">HOME</a></li>
				<li class="dropdown">
                       <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer;">ABOUT US <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						<li><a class="page-scroll" href="#juit">JUIT</a></li>
						<li><a class="page-scroll" href="#juitmun">JUIT MUN</a></li>
						<li><a class="page-scroll portfolio-link"  href="#secgen"  data-toggle="modal">SECRETARY GENERAL's ADDRESS</a></li>
						</ul>
                    </li>
				<li ><a class="page-scroll" href="#councils">COUNCILS</a>
					
				</li>
				<li class="dropdown">
                       <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer;">REGISTER <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						<li class=""><a class="page-scroll portfolio-link" href="#delegates" data-toggle="modal" >DELEGATES</a></li>
						<li class=""><a class="page-scroll portfolio-link" href="#eb" data-toggle="modal">EXECUTIVE BOARD</a></li>
						<li class=""><a class="page-scroll portfolio-link" href="#ip" data-toggle="modal">INTERNATIONAL PRESS</a></li>
</ul>
                    </li>
				<li><a class="page-scroll" href="#paynow" data-toggle="modal" >PAY NOW</a></li>
				 <li>  <a class="navbar-brand page-scroll" style="margin-top:-20px"><img src="image.png"></a></li>
				<li class="dropdown">
                       <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer;">RESOURCES <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						<li><a href="bgguide1.pdf" target="_blank">General Assembly Background Guide 1</a></li>
						<li><a href="bgguide2.pdf" target="_blank">General Assembly Background Guide 2</a></li>
						<li><a href="bgguidedisec.pdf" target="_blank">DISEC Background Guide</a></li>
						<li><a href="matrix.pdf" target="_blank">Country Matrix</a></li>
						<li><a href="decleration.pdf" target="_blank">Universal Declaration of Human Rights</a></li>
						<li><a href="uncharter.pdf" target="_blank">UN Charter</a></li>
						<li><a href="procedure.pdf" target="_blank">Model United Nations Procedure</a></li>
                                                 <li><a href="flowofdebate.pdf" target="_blank">Flow of Debate</a></li>
                                                 <li><a href="successfulmuner.pdf" target="_blank">Successful Muner</a></li>
						</ul>
                    </li>
				<li ><a class="page-scroll portfolio-link"  href="#team"  data-toggle="modal">OUR TEAM</a></li>				
				<!-- <li role="presentation"><a href="">GALLERY</a></li> -->
				<li ><a class="page-scroll" href="#sponsors" title="COMING SOON ">SPONSORS</a></li>
				<li ><a href="faq.pdf"  target="_blank">FAQS</a></li>
				<li ><a class="page-scroll" href="#contact">CONTACT</a></li>
			</ul><!--END OF UL-->
		</div>


	
</nav>
<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/5.jpg');"></div>
                <div class="carousel-caption">
                    <div class="intro-text">
						<div class="intro-lead-in" style="font-size:48px;text-shadow:4px 2px #000000">JUIT MUN 2015</div>
						<div class="intro-heading" style="font-size:40px;text-shadow:4px 2px #000000">28-29 March,2015</div>
                
					</div>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/1.jpg');"></div>
                <div class="carousel-caption">
                    <div class="intro-text">
						<div class="intro-lead-in" style="font-size:48px;text-shadow:4px 2px #000000">JUIT MUN 2015</div>
						<div class="intro-heading" style="font-size:40px;text-shadow:4px 2px #000000">28-29 March,2015</div>
                
					</div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/2.jpg');"></div>
                <div class="carousel-caption">
                   <div class="intro-text">
			<div class="intro-lead-in" style="font-size:48px;text-shadow:4px 2px #000000">JUIT MUN 2015</div>
						<div class="intro-heading" style="font-size:40px;text-shadow:4px 2px #000000">28-29 March,2015</div>
                
					</div>
                </div>
            </div>
			<div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/3.jpg');"></div>
                <div class="carousel-caption">
                    <div class="intro-text">
			<div class="intro-lead-in" style="font-size:48px;text-shadow:4px 2px #000000">JUIT MUN 2015</div>
						<div class="intro-heading" style="font-size:40px;text-shadow:4px 2px #000000">28-29 March,2015</div>
                
					</div>
                </div>
            </div>
			<div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/4.jpg');"></div>
                <div class="carousel-caption">
                    <div class="intro-text">
			<div class="intro-lead-in" style="font-size:48px;text-shadow:4px 2px #000000">JUIT MUN 2015</div>
						<div class="intro-heading" style="font-size:40px;text-shadow:4px 2px #000000">28-29 March,2015</div>
                
					</div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
	
	
	<section id="juit" style="background:#BE1F2E url(images/background.png);color:white;padding-bottom:60px;padding-top:65px;">
		<div class="container">
		<div class="row text-center">
		<div class="col-lg-12" style="margin-top:5%">
		<h1><b>JUIT</b></h1>
		</div> 
		<div class="col-lg-12" style="margin-top:5%">
		<div class="col-lg-4">
		<img src="images/logojuit.png" height="250px">
		</div>
		<div class="col-lg-8 text-justify" style="font-size:100%">Nested peacefully in the lap of the majestic Himalayas, <strong>Jaypee University of Information Technology</strong> is an ideal place for the holistic growth and development of an individual, and is a whetstone of excellence for the students who aspire to be successful engineers of emerging India. Be it the refreshing mountain air of Himachal Pradesh, the beautiful campus or the wonderful staff and students who inhabit it, JUIT has an aura that is unmatched. JUIT is not just an institution; it is an experience that one would seldom get in life. The institution is a perfect amalgam of nature's beauty with man's creation. It imparts quality education to all students and yet makes sure that a student learns a lot more than just his course degree; JUIT makes sure that a student learns how to endure and succeed. <br/>
The institution has always patronised and strived towards a perfect balance between academics and extra-curriculars and this precisely is the reason why JUIT-ians are a force to reckon with, wherever they go. The strength of JUIT lies in its students and faculty, who are its pillars of strength. These two pillars act in unison to make the institution what it is. JUIT is blessed to have a faculty that enthusiastically encourages organisation of various intra and inter college events, so that the students can inculcate in themselves the spirit of teamwork and co-ordination during organisation and participation in these events. The students themselves have the zeal to excel, whenever they are met with challenging situations.<br/>
A visit to JUIT will reveal, however, that all words used to describe this institution fall short in describing the serenity that one experiences when setting foot in this mesmerising place.
		</div>
		</div>
		</div>
		</div>
	</section>
	
	
	<section id="juitmun" style="background:#24A8E1 url(images/background.png);color:white;padding-bottom:60px;padding-top:65px;">
		<div class="container">
		<div class="row text-center">
		<div class="col-lg-12" style="margin-top:5%">
		<h1><b>JUIT MUN</b></h1>
		</div> 
		<div class="col-lg-12" style="margin-top:5%">
		</div>		
		<div class="col-lg-8 text-justify" style="font-size:100%">
		<div class="text-center"><strong><em>"Courage is what it takes to stand up and speak; courage is also what it takes to sit down and listen."<br/>
-Winston Churchill</em></strong><br/><br/></div><strong>Jaypee University of Information Technology</strong> brings before you the fifth edition of<strong> JUIT MUN</strong>. Every year comes with it's own glory and 2015, the UN International Year of Light, we welcome you to bring your ideas to light! To debate newer schemes, to discuss newer ideas, and most importantly, to get together as a community and intellectualize about the world, for the world. MUNs are the best form of debating, as it forces one to think not only for themselves, but, for their nation, for the inter-nation, and for the world. It forces one to think and rethink, bringing their ideas on the battlefield where they will be grilled and criticized but come out stronger, replenished, mature, ripened with the knowledge of one and all. It helps you to work as a team, interact, meet new people, and exposes you to ideas beyond your wisdom. Remember, none of us is smarter than all of us! Every person you meet knows something you don't. This year, focusing on two committees, and three exceptional agendas, we hope to wake every nerve of your cerebra, and make you think out of the box, in devising solutions for the benefit of all. Under the shade of the mighty Himalayas, enswathed with mist,<strong> JUIT MUN</strong> expects you to lose all your notions, and be born new thinkers, power holders, policy makers! <br/>
We open heartedly welcome you to this roller coaster of intellectual stimulation. You may puke once or twice, but trust us, you will come out a better mind. 

		</div>
<div class="col-lg-4">
		<img src="images/munlogo.png" height="250px">
		</div>
		</div>
		</div>
	</section>
	
	
<section id="councils" style="background:#FF6B00 url(images/background.png);color:white;padding-bottom:60px;padding-top:65px">
		<div class="container">
		<div class="row text-center" style="margin-top:3.5%">
		<div class="col-lg-12">
	<h1><b>Councils</b></h1>
</div><br> 
<div class="col-lg-12" style="margin-top:5%"></div>
		<div class="col-lg-1">
		</div><div class="col-lg-4" >
		<a class="page-scroll portfolio-link"  href="#disec"  data-toggle="modal"><img src="images/diseca.png" style="width:auto;height:300px;"></a>
		<h3><b>DISEC</b></h3>
		</div>
		<div class="col-lg-2">
		</div>
		<div class="col-lg-4">
		<a class="page-scroll portfolio-link"  href="#gau"  data-toggle="modal"><img src="images/diseca.png" style="width:auto;height:300px;"></a>
		<h3><b>GENERAL ASSEMBLY UN</b></h3></div>
		
		</div>
		</div>
		</div>

	</section>
	
	<!--<section id="sponsors" style="background:#252960 url(images/background.png);color:white;padding-bottom:60px;padding-top:65px">
		<div class="container">
		<div class="row text-center">
		<div class="col-lg-12" style="margin-top:20%">
	<h1><b>COMING SOON!</b></h1>
</div><br> 		</div>
		</div>
	</section>-->
	<section id="contact" style="background:#336600	
url(images/map-image.png);color:white;padding-bottom:60px;padding-top:65px">
<div class="container">
		<div class="row text-center" style="font-size:14pt">
		<div class="col-lg-12" style="margin-top:3.5%;padding-bottom:5%;">
	<h1><b>CONTACT</b></h1>
	<h3 class="section-subheading text-muted" style="color:rgba(255,255,255,0.7)">We'll be happy to get back to you.</h3></div></div> 
<div class="row text-center">
	<div class="col-lg-12">
	<form action="index.php" method="POST">
	<div class="row">
      <div class="col-md-6">
        <div class="form-group">
	<input type="text" class="form-control" placeholder="Your Name *" name="name" required data-validation-required-message="Please enter your name." width="500px" height="720px" style="font-size:20px;height:57">
                                    <p class="help-block text-danger"></p>
	</div>
                                <div class="form-group">
	<input type="text" class="form-control" placeholder="Your Email *" name="email" required data-validation-required-message="Please enter your email address." style="font-size:20px;height:57">
                                    <p class="help-block text-danger"></p>	
</div>
                                <div class="form-group">
	<input type="text" class="form-control" placeholder="Your Phone *" name="contact" required data-validation-required-message="Please enter your phone number." style="font-size:20px;height:57">
                                    <p class="help-block text-danger"></p>
	</div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" name="message" id="message" required data-validation-required-message="Please enter a message." cols="15" rows="7" style="font-size:20px"></textarea>
									   <p class="help-block text-danger"></p>
</div>	
</div>

  <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" name="contactus" style="width:100px;height:40px;font-size:24px;background-color:#000000;">
                            </div>
                        </div>
                    </form>

</div>

		</div>
		   </div>
	</section>
	</section><!--	<div class="portfolio-modal modal fade" id="faq" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>THE OLYMPICS OF MUN</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive" src="juit.jpg" alt="">
                            <p></p>
                            <p>
                                <strong>this is juit.</strong>Every year around 2,500 college students from over 80 countries attend WorldMUN in a different location around the world; past locations include Puebla (Mexico), Geneva (Switzerland), Beijing (China), Belo Horizonte (Brazil), Sharm el-Sheikh (Egypt), Taipei (Taiwan ROC), Singapore, Vancouver (Canada), and Brussels (Belgium).
Every year around 2,500 college students from over 80 countries attend WorldMUN in a different location around the world; past locations include Puebla (Mexico), Geneva (Switzerland), Beijing (China), Belo Horizonte (Brazil), Sharm el-Sheikh (Egypt), Taipei (Taiwan ROC), Singapore, Vancouver (Canada), and Brussels (Belgium).
Every year around 2,500 college students from over 80 countries attend WorldMUN in a different location around the world; past locations include Puebla (Mexico), Geneva (Switzerland), Beijing (China), Belo Horizonte (Brazil), Sharm el-Sheikh (Egypt), Taipei (Taiwan ROC), Singapore, Vancouver (Canada), and Brussels (Belgium).
Every year around 2,500 college students from over 80 countries attend WorldMUN in a different location around the world; past locations include Puebla (Mexico), Geneva (Switzerland), Beijing (China), Belo Horizonte (Brazil), Sharm el-Sheikh (Egypt), Taipei (Taiwan ROC), Singapore, Vancouver (Canada), and Brussels (Belgium).
</p>
                            <ul class="list-inline">
                                <li>Date:</li>
                                <li>Client: </li>
                                <li>Category: </li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

	<!--<div class="portfolio-modal modal fade" id="resources" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>THE OLYMPICS OF MUN</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive" src="juit.jpg" alt="">
                            <p></p>
                            <p>
                                <strong>this is juit.</strong>Every year around 2,500 college students from over 80 countries attend WorldMUN in a different location around the world; past locations include Puebla (Mexico), Geneva (Switzerland), Beijing (China), Belo Horizonte (Brazil), Sharm el-Sheikh (Egypt), Taipei (Taiwan ROC), Singapore, Vancouver (Canada), and Brussels (Belgium).
Every year around 2,500 college students from over 80 countries attend WorldMUN in a different location around the world; past locations include Puebla (Mexico), Geneva (Switzerland), Beijing (China), Belo Horizonte (Brazil), Sharm el-Sheikh (Egypt), Taipei (Taiwan ROC), Singapore, Vancouver (Canada), and Brussels (Belgium).
Every year around 2,500 college students from over 80 countries attend WorldMUN in a different location around the world; past locations include Puebla (Mexico), Geneva (Switzerland), Beijing (China), Belo Horizonte (Brazil), Sharm el-Sheikh (Egypt), Taipei (Taiwan ROC), Singapore, Vancouver (Canada), and Brussels (Belgium).
Every year around 2,500 college students from over 80 countries attend WorldMUN in a different location around the world; past locations include Puebla (Mexico), Geneva (Switzerland), Beijing (China), Belo Horizonte (Brazil), Sharm el-Sheikh (Egypt), Taipei (Taiwan ROC), Singapore, Vancouver (Canada), and Brussels (Belgium).
</p>
                            <ul class="list-inline">
                                <li>Date:</li>
                                <li>Client: </li>
                                <li>Category: </li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<div class="portfolio-modal modal fade" id="disec" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal" style="z-index:1051;">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                        <div class="modal-body">
                            <h2>Disarmament and International Security</h2>
                            <img class="img-responsive center-block" src="images/diseca.png" alt="">
                           
                           
                                <strong><div style="font-size:16pt"> Agenda<br>ISIS influence spilling into South Asian region and the resulting threat to International Security</div></strong><br><div style="font-size:16pt;text-align:justify">The First Committee deals with disarmament, global challenges and threats to peace that affect the international community and seeks out solutions to the challenges in the international security regime.

It considers all disarmament and international security matters within the scope of the Charter or relating to the powers and functions of any other organ of the United Nations; the general principles of cooperation in the maintenance of international peace and security, as well as principles governing disarmament and the regulation of armaments; promotion of cooperative arrangements and measures aimed at strengthening stability through lower levels of armaments.            </div>        </div>
                    </div>
                </div>
            </div>
        </div>
		
 <div class="portfolio-modal modal fade" id="secgen" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal" style="z-index:1051;">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row ">
                        <div class="modal-body">
                            <h2 class="text-center">SECRETARY GENERAL's ADDRESS</h2>
                           <img class="img-circle img-responsive center-block" src="images/team/1.jpg"><br/>
                           
                           
                                <!-- <strong><div style="font-size:16pt"> Agenda<br>ISIS influence spilling into South Asian region and the resulting threat to International Security</div></strong> --><br><div class="container" style="width:80%;font-size:16pt;text-align:justify"><strong>Dear Delegates,</strong><br/><br/>
It gives me immense pleasure to announce the commencement of JUIT Model United Nations 2015- 

The Spring Summit<br><br>

We welcome you into the lap of the majestic Himalayas to open your minds and participate in a 

stimulating debate where you get to be the world leaders for 2 days and decide how the future of all 

the nations takes shape. If I remember correctly, a very intelligent woman is known to have said, <br>

<div class="row text-center"><b><i>"Wit beyond measure, is man's greatest treasure."</div></b></i>  We ask you to come forth and spend your 

riches and then earn some.
You can set your calendar at 2025 AD and find out what the future has in store for you in the 

Futuristic Disarmament and International Security Council or you can be a part of the General 

Assembly and contribute to fighting the problems that cripple our world and economy today.

We hand over the reins of the United Nations into your hands and expect nothing but a riveting 

discussion in return. So gather ammunition against your enemies and prep up your best defences 

because JUIT MUN is going to be testing. Come and Come Prepared.<br/><br/>

 We look forward to seeing you all.<br/><br/>

<strong>Yours truly,</strong><br/>

<strong>Pallavi Chansoria</strong><br/>

                    </div>
                </div>
				
            </div>
        </div>
 
 </div>
 </div>
 <div class="portfolio-modal modal fade" id="paynow" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal" style="z-index:1051;">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                        <div class="modal-body">
                        <h1>Pay Now</h1>>
                          <iframe frameborder="0" src="https://in.explara.com/widget/juit-mun-2015-spring-summit" width="500" height="613"></iframe>  
                    </div>
                </div>
            </div>
        </div>
        </div>
<div class="portfolio-modal modal fade" id="gau" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal" style="z-index:1051;">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
           <div class="container">
                <div class="row text-center">
                        <div class="modal-body">
                            <h2>General Assembly </h2>
                            <img class="img-responsive center-block" src="images/diseca.png" alt="">
                           
                            
                                <strong><div style="font-size:16pt"> Agenda<br>Eliminating Racial Discrimination,Xenophobia and Related Intolerance<br>Adapting to Globalization-The new International Economic Order and the Green Economy</div></strong><br><div style="font-size:16pt;text-align:justify">The United Nations General Assembly is one of the six principal organs of the United Nations and the only one in which all member nations have equal representation. Its powers are to oversee the budget of the United Nations, appoint the non-permanent members to the Security Council, receive reports from other parts of the United Nations and make recommendations in the form of General Assembly Resolutions.It has also established a wide number of subsidiary organs.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="portfolio-modal modal fade" id="registration" role="dialog" role="dialog" aria-hidden="true">
	<div class="modal-content">
        <div class="close-modal" data-dismiss="modal" style="z-index:1051;">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
        <div class="container" style="margin-bottom: 65px;">
			<div class="row">
                <div class="col-lg-12 text-center center-block">
                    <h2 class="section-heading">JUIT MUN 2015</h2>
                    <h3 class="section-subheading text-muted">Registration</h3>
                </div>
            </div>
			<div class="row">
				<div class="container center-block" style="background:rgba(0,0,0,0.12);padding:10px;text-align:center;border-radius:25px;">
				<!--LOGIN FORM-->
				<form name="login-form"  method="post" style="padding:10px;">
				<!--TITLE--><!-- <h2>Registration Form</h2> --><!--END TITLE-->   
				<!--FIRSTNAME-->First Name: <input name="firstname" type="text"   required="required" placeholder="First Name" id="fname" style="margin-top:10px;"/><!--END FIRSTNAME--><br />
				<!--LASTNAME-->Last Name: <input name="lastname" type="text"  required="required" placeholder="Last Name" id="lname" style="margin-top:10px;"/><!--END LASTNAME--><br />
				<!--USERNAME--> Username: <input name="username" type="text"  required="required" placeholder="UserName" id="uname" style="margin-top:10px;" /><!--END USERNAME--> <br />
				<!--PASSWORD-->Password: <input name="password" type="password"   required="required" placeholder="Password"  id="passswd" style="margin-top:10px;"/><!--END PASSWORD--><br />
				<!--EMAIL-->Email-Id: <input name="email" type="text"  required="required" placeholder="Email Id" id="emailid" style="margin-top:10px;"/><!--END EMAIL--><br />
      
				<!--REGISTER BUTTON--><input class="btn btn-success" type="button" name="register" value="Register" class="button" id="reg" style="margin-top:10px;"/><!--END REGISTER BUTTON-->
				<br /><!--SIGN IN<a href="index.php" class="btn btn-primary" style="margin-top:10px;">Sign In</a>END SIGN IN BUTTON-->
				</form>
				<!--END LOGIN FORM-->
				</div>
			</div>
        </div>
    </div>
</div>

	<div class="portfolio-modal modal fade" id="ip" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
        <div class="container" style="margin-bottom: 65px;">
			<div class="row">
                <div class="col-lg-12 text-center center-block">
                    <h2 class="section-heading">International Press</h2>
                    <h3 class="section-subheading text-muted">Registration</h3>(Confirmation Mail will be sent)</div>
            </div>
			<div class="row">
				<div class="container center-block" style="background:rgba(0,0,0,0.12);padding:10px;border-radius:25px;font-size:12pt">
				<!--LOGIN FORM-->
				<form name="login-form" method="post" style="padding:10px;margin-left:425px" action="http://juitmun.co.in/index.php">
					
							NAME:<input type="text" placeholder="Name" name="name"><span class="error" required=""> </span><br><br>
							EMAIL ID:<input type="text" placeholder="Email ID" name="email" required=""><span class="error"> </span><br><br>
							CONTACT NUMBER:<input type="text" placeholder="Contact Number" name="contact" required=""><span class="error"> </span><br><br>
							COLLEGE:<input type="text" placeholder="College Name" name="cln" required=""><span class="error"> </span><br><br>
							YEAR:<input type="text" placeholder="College Name" name="cln" required=""><br><br>
							ARTICLE:<br><textarea name="article" placeholder="The Global Ramification of the Iranian Revolution 1979" cols="36" rows="5"></textarea><br><br>
							ACCOMODATION REQUIRED:<input type="radio" name="acc" value="yes">YES
							<input type="radio" name="acc" value="no">NO<br><br>
							
                           <input type="submit" name="ip">
                      
                        </form></div>
                    </div>
                </div>
            </div>
        </div>

<div class="portfolio-modal modal fade" id="delegates" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
        <div class="container" style="margin-bottom: 65px;">
			<div class="row">
                <div class="col-lg-12 text-center center-block">
                    <h2 class="section-heading">DELEGATES</h2>
                    <h3 class="section-subheading text-muted">Registration</h3>(Confirmation Mail will be sent)
                </div>
            </div>
			<div class="row">
				<div class="container center-block" style="background:rgba(0,0,0,0.12);padding:10px;border-radius:25px;font-size:12pt;text-align:left">
				<!--LOGIN FORM-->
				<form name="login-form" method="post" style="padding:10px;margin-left:425px" action="index.php">
								NAME:<input type="text" placeholder="Name" name="name" required><span class="error"> <?php echo $nameerr;?></span><br><br>
							EMAIL-ID:<input type="text" placeholder="Email ID" name="email" required><span class="error"> <?php echo $emailerr;?></span><br><br> 
							CONTACT NUMBER:<input type="text" placeholder="Contact Number" name="contact" required><span class="error"> <?php echo $contacterr;?></span><br><br>
							COLLEGE/INSTITUTION:<select name="college" onchange="groupmember(this.value)"><option>College/Institution</option><option value="juit">JUIT</option>
							<option value="other">OTHER</option></select><br><br>
							<span id="wrapper1" style="display:none;">
							COLLEGE NAME:<input type="text" name="cln" placeholder="College Name" value="juit" required><span class="error"> <?php echo $collegeerr;?></span>
	</span>
	<p>Note:Please register after referring to the Country Matrix</p>
	<p><a href="matrix.pdf" target="_blank">Click Here to view Country Matrix</a></p> 
							COUNCIL:<br>Preference 1:<select name="pref1"><option value="disec" required>DISEC</option>
							<option value="gau">GENERAL ASSEMBLY UN</option></select><span class="error"> <?php echo $pref1err;?></span><br><br>
							COUNTRY 1:<input type="text" name="countryp1" placeholder="Country 1" required><span class="error"> <?php echo $countryp1err;?></span> <br><br>
							COUNTRY 2:<input type="text" name="countryp2" placeholder="Country 2" required><span class="error"> <?php echo $countryp2err;?></span> <br><br>
							COUNTRY 3:<input type="text" name="countryp3" placeholder="Country 3" required><span class="error"> <?php echo $countryp3err;?></span> <br><br>
							Preference 2:<select name="pref2"><option value="disec">DISEC</option><option value="gau">GENERAL ASSEMBLY UN</option></select><span class="error"> <?php echo $pref2err;?></span><br><br>
							COUNTRY 1:<input type="text" name="country1" placeholder="Country 1" required><span class="error"> <?php echo $country1err;?></span><br><br>
							COUNTRY 2:<input type="text" name="country2" placeholder="Country 2" required><span class="error"> <?php echo $country2err;?></span><br><br>
							COUNTRY 3:<input type="text" name="country3" placeholder="Country 3" required><span class="error"> <?php echo $country3err;?></span><br><br>
							
							EXPERIENCE:<br><textarea name="experience" placeholder="Experience" cols="36" rows="5"></textarea><br><br>
							<div id="wrapper2" style="display:none;"> 
			ACCOMODATION REQUIRED : <input type="radio" name="acc" value="yes">YES
							<input type="radio" name="acc" value="no">NO<br>
			ONLINE PAYMENT : <input type="radio" name="OP" value="yes" <?php echo ($_SESSION['OP'] != "yes") ? 'checked="checked"' : ''; ?> />YES 
							<br><br>	
							</div>
														<br><br>
							
                            <input type="submit" name="delegate">
                        </form></div>
                   
                    </div>
                </div>
            </div>
        </div>
    
	<div class="portfolio-modal modal fade" id="eb" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
        <div class="container" style="margin-bottom: 65px;">
			<div class="row">
                <div class="col-lg-12 text-center center-block">
                    <h2 class="section-heading">EXECUTIVE BOARD</h2>
                    <h3 class="section-subheading text-muted">Registration</h3>(Registration Are Closed)</div>
            </div>
			<div class="row">
				<div class="container center-block" style="background:rgba(0,0,0,0.12);padding:10px;border-radius:25px;font-size:12pt">
				<!--LOGIN FORM-->
				<form name="login-form" method="post" style="padding:10px;margin-left:425px" action="index.php">
					
							NAME:<input type="text" placeholder="Name" name="name"><span class="error" required> <?php echo $nameerr;?></span><br><br>
							EMAIL ID:<input type="text" placeholder="Email ID" name="email" required><span class="error"> <?php echo $emailerr;?></span><br><br>
							CONTACT NUMBER:<input type="text" placeholder="Contact Number" name="contact" required><span class="error"> <?php echo $contacterr;?></span><br><br>
							COLLEGE:<input type="text" placeholder="College Name" name="cln" required><span class="error"> <?php echo $collegeerr;?></span><br><br>
							COUNCIL:<br>Preference 1:<select name="pref1"><option value="disec">DISEC</option>
							<option value="gau">GENERAL ASSEMBLY UN</option></select><span class="error"> <?php echo $pref1err;?></span><br><br>Preference 2:<select name="pref2"><option value="disec">DISEC</option>
							<option value="gau">GENERAL ASSEMBLY UN</option></select><span class="error"> <?php echo $pref2err;?></span><br><br>
					
							EXPERIENCE:<br><textarea name="experience" placeholder="Experience" cols="36" rows="5"></textarea> <br><br>
							POST(Applying For):<input type="text" name="post" placeholder="Post" required><span class="error"> <?php echo $posterr;?></span><br><br>
							
							
                           <input type="submit" name="eb">
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


	
	<div class="portfolio-modal modal fade" id="team" role="dialog" aria-hidden="true">
	<div class="modal-content">
        <div class="close-modal" data-dismiss="modal" style="z-index:1051;">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>	
	<div class="container" style="margin-top:3.5%;">
		<div class="row text-center" style="padding-bottom:3%;"><h2>ORGANIZING COMMITTEE</h2></div>
		<div class="row text-center">
		<div class="col-lg-12 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/1.jpg"><br>
		<p>Pallavi Chansoria</p>
		<p>9805398418</p>
		<p>pallavichansoria@yahoo.co.in<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Secretary General</p>
		</div>
		<div class="col-lg-12 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/2.jpg"><br>
		<p>Vasu Walia</p><p>8629047799</p><p> vasuwalia24@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Deputy Secretary General</p>
		</div><br>
		<div class="col-lg-4 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/3.jpg"><br>
		<p>Sonali Zutshi<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Delegate Affairs</p>
		</div>
		
		<div class="col-lg-4 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/4.jpg"><br>
		<p>Anisha Gupta</p><p>9736140663</p><p> anishaguptajuit@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Delegate Affairs</p>
		</div>
		<div class="col-lg-4 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/5.jpg"><br>
		<p>Anirudh Kaushik</p><p>8894946287</p><p>ani.kaushik92@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Delegate Affairs</p>
		</div>
		</div>
<br>
<div class="row text-center">
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/6.jpg"><br>
		<p>Shrestha Bansal</p><p>9805767357</p><p>shbn123@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Research</p>
		</div>
	
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/7.jpg"><br>
		<p>Harshita Solanki</p><p>9736584275</p><p>solankiharshita@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Research</p>
		</div>
		</div>
		<br>
		<div class="row text-center">
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/8.jpg"><br>
		<p>Samyak Handa</p><p>9736582245</p><p>handasamyak@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Conference Affairs</p>
		</div>
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/9.jpg"><br>
		<p>Vani Deeppak</p><p>9816958540</p><p>vanideeppak@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Conference Affairs</p>
		</div>
		</div>
<br>
<div class="row text-center">
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/10.jpg"><br>
		<p>Mohd Abbas</p><p>9805448853</p><p>md.abbas33@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Cultural Affairs</p>
		</div>
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/11.jpg"><br>
		<p>Aditya Raj Sahni</p><p>8629044669</p><p>adityasahni1118@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Cultural Affairs</p>
		</div>
		</div>
		<br>
		<div class="row text-center">
		<div class="col-lg-4 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/12.jpg"><br>
		<p>Nikita Thakur</p><p>8626859505</p><p>nitika1656@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Communication &amp; Public Information</p>
		</div>
		<div class="col-lg-4 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/13.jpg"><br>
		<p>Avtansh Garg</p><p>9817321021</p><p>avtansh7@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Communication &amp; Public Information</p>
		</div>
		<div class="col-lg-4 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/14.jpg"><br>
		<p>Naman Arora</p><p> 9805153430</p><p>aroranaman12@outlook.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Under Secretary General, Communication &amp; Public Information</p>
		</div>
		</div>
		<br>
		<div class="row text-center">
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/15.jpg"><br>
		<p>Shivai Gupta</p><p>8894569550</p><p>shivai.gup@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Editor in Chief , International Press</p>
		</div>
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/16.jpg"><br>
		<p>Sonalee Mehta</p><p>9736792354</p><p>sonalee.mehta5@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Editor in Chief , International Press</p>
		</div>
		</div>
		<br>
		<div class="row text-center">
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/17.jpg"><br>
		<p>Pragya Sharma</p><p>9816959241</p><p>pragyasharma5910@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Editor</p>
		</div>
		<div class="col-lg-6 text-center">
		<img class="img-circle img-responsive center-block" src="images/team/18.jpg"><br>
		<p>Tarunam Mahajan</p><p>9816958827</p><p>tarunam2394@gmail.com<br></p>
		<span class="center-block" style="display: block;width: 22px;height: 2px;background-color: #cccccc;border-radius: 1px;"></span>
		<p><br>Editor</p>
		</div>
		</div>
		</div>
		
	
		</div>
	
			</div>
        
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/agency.js"></script>
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
		
</body>
</html>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            