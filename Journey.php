<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Journey | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body id="info" style="background-image:url(images/Starry\ Night.svg);">
<div class="gradientOverlay"></div>
<br/><br/><br/><br/>
<div class="box">
	<div class="gradientText typewriter">THE JOURNEY</div>
	<div></div>
	<div></div>
	<div></div>
	<div>
	    Feeling overwhelmed? Don’t be. This page consists of a step-by-step guide to help you traverse through this once-in-a-lifetime experience!
    </div>
</div> 

<div class="boxJourney">
	<div>
	    <span class="titleText" style="margin: 0">STEP 1: Pick a Package</span><br/><br/>
		Horizon features three different cruises: “Around the World,” “Amongst the Planets,” and “A Stellar Journey.” 
		Each of these explores a different part of the cosmos and come with their own "can't miss" adventures.<br/><br/>
		If you're looking to not stray <i>too</i> far for home, the "Around the World" cruise is highly recommended. 
		This cruise will provide you with a stunning view of the Earth while you lounge around the ship to your heart's content.<br/><br/>
		If you're looking to see some of the wonders far off in distant space, "Amongst the Planets" and "A Stellar Journey" are for you.<br/>
		Note: Both of these cruises take a significant amount of time, so be sure to plan accordingly!
    </div>
	<div>
		<img src="earth-11009.jpg" style="max-height: 40vh;">
    </div>
</div>

<div class="boxJourney">
	<div>
		<span class="titleText" style="margin: 0">STEP 2: Undergo Training</span><br/><br/>
		Once you have successfully booked and paid for a cruise, you will messaged with additional information about the trip, as well as important regulations and training procedures.
		The training includes critical safety procedures for any emergencies that may occur on board. The training center is located at the Johnson Space Center in Texas.
    </div>
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13882.097145989348!2d-95.089998!3d29.5593451!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86409db01c646f73%3A0x212847ff510dada4!2sNASA%20Johnson%20Space%20Center!5e0!3m2!1sen!2sus!4v1681342748870!5m2!1sen!2sus" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="boxJourney">
	<div>
		<span class="titleText" style="margin: 0">STEP 3: Pre-Launch</span><br/><br/>
		Once it is time to leave for the cosmos, you will travel to the Horizon Launch Site located at the Guiana Space Centre in French Guiana, South America.
		Transportation to the space center is not provided, so it is imperative to leave early to make it to the launch in time.
		Tickets will NOT be refunded if you miss the launch. 
    </div>
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.603343339572!2d-52.68540388523579!3d5.167332796250277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8d0e034849f48609%3A0x72a5e4be3a8007a9!2sGuiana%20Space%20Centre!5e0!3m2!1sen!2sus!4v1681342541578!5m2!1sen!2sus" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="boxJourney">
	<div>
		<span class="titleText" style="margin: 0">STEP 4: Launch</span><br/><br/>
		Follow the directions given by Horizon employees to ensure a quick and safe launch.
		After you are seated, all you have to do is sit back, relax, and enjoy the rest of your journey!
    </div>
	<div>
		<img src="Rocket.jpg" style="max-height: 40vh;">
    </div>
</div>
</body>

<?php
	include_once 'footer.php';
?>