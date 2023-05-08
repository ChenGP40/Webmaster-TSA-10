<!DOCTYPE php>
<php>
<head>
<?php
	include_once 'header.php';
?>

<br/><br/><br/>
<div class="boxinfo">
	<div>
		<span style="border-bottom:#FF530D 5px solid;">Welcome to Horizon!</span>
	</div>
	<div>
		Planning the perfect "out of this world" adventure? 
		With Horizon, you're guaranteed to have an awesome time in our interstellar cruises. 
		Everything is made simple and easy for you, all you need to do is choose! 
		Check out everything below to find the best deals on the planet!
	</div>
	<div>
		<span style="color: #ffd000">IMPORTANT</span><br/>
		Please read our onboard <a href="Rules.php" class="links" style="color: #BDD4DE">regulations</a> and <a href="Training.php" class="links" style="color: #BDD4DE">training information </a>before making any purchases!
	</div>
	<div class="grid">
		<div><span style="border-bottom:#FF530D 5px solid;">Quick Links:</span></div>
		<div><a href="Info.php#packages" class="links" title="Available Packages">Available Packages</a></div>
		<div><a href="Info.php#ships" class="links" title="Gallery of our Ships">Our Ships</a></div>
		<div><a href="Info.php#dining" class="links" title="Dining">Dining</a></div>
		<div><a href="Info.php#entertainment" class="links" title="Entertainment">Entertainment</a></div>
	</div>
</div>

<div id="packages" class="box">
	<div class="reveal">
        Available Packages
	</div>
	<div class="nestedimage reveal fromLeft"><a href="PackageATW.php" id="imageLink">
		<br/>Around the World<br/><br/>
        <img src="images/earth-11009.jpg" alt="The Earth"></a>
	</div>
	<div class="nestedimage reveal"><a href="PackageATP.php" id="imageLink">
		<br/>Amongst the Planets<br/><br/>
        <img src="images/Planets.png" alt="The Planets"></a>
	</div>
	<div class="nestedimage reveal fromRight"><a href="PackageASJ.php" id="imageLink">
        <br/>A Stellar Journey<br/><br/>
		<img src="images/Nebula.png" alt="Nebula"></a>
	</div>
	<div class="reveal" style="padding: 1em;">
        Choose from one of our three extravagant packages to find your next dream vacation!<br/> Sail into mankind's next frontier unlike ever before.
	</div>
</div>

<div id="ships" class="box">
	<div class="reveal">
        Our Ships
	</div>
	<div class="nestedimage reveal fromLeft"><a href="Voyager.php" id="imageLink">
		<br/>The Voyager<br/><br/>
        <img src="images/Voyager.png" alt="The Voyager Spaceship"></a>
	</div>
	<div class="nestedimage reveal"><a href="Stargazer.php" id="imageLink">
		<br/>The Stargazer<br/><br/>
        <img src="images/Stargazer.png" alt="The Stargazer Spaceship"></a>
	</div>
	<div class="nestedimage reveal fromRight"><a href="Argo.php" id="imageLink">
        <br/>The Argo<br/><br/>
		<img src="images/Argo.png" alt="The Argo Spaceship"></a>
	</div>
</div>

<div id="dining" class="box">
	<div class="reveal">
        Dining
	</div>
	<div class="nestedimage reveal fromLeft">
        <img src="images/Steak.png" alt="Steak">
	</div>
	<div class="nestedimage reveal">
        <img src="images/Sushi.png" alt="Sushi">
	</div>
	<div class="nestedimage reveal fromRight">
		<img src="images/Dessert.png" alt="Dessert">
	</div>
	<div class="reveal" style="padding: 1em;">
        Experience the finest dining in the galaxy as you travel in our luxury cruisers. 
		Our onboard chefs will delight you with exquisitely prepared meals made with love and care as they take you through a culinary journey.
		Make a selection from a gallery of vintage wine to elevate your dining experience from exceptional to perfect.
	</div>
</div>

<div id="entertainment" class="box">
	<div class="reveal">
        Entertainment
	</div>
	<div class="nestedimage reveal fromLeft">
        <img src="images/Drums.png" alt="Drums">
	</div>
	<div class="nestedimage reveal">
        <img src="images/Performance.png" alt="Live stage performance">
	</div>
	<div class="nestedimage reveal fromRight">
		<img src="images/Arcade.png" alt="Arcade">
	</div>
	<div class="reveal" style="padding: 1em;">
        If you're looking for a bit of fun on the side, check out the live shows and performances onboard. 
		Scheduled shows every day will ensure that you will never be bored on the trip!
		If you're looking for some family fun, the arcades are a great choice as well.  
	</div>
</div>
</body>

<?php
	include_once 'footer.php';
?>