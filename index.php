<?php

include 'connection.php';
include 'navbar-index.php';

?>

<html>

<body>
<div class="flex-container">
	<!-- Title -->
	<div class="title">
		<h2>YOUR GATEWAY TO INFINITE WORLDS OF KNOWLEDGE</h2>
	</div>

	<!-- New Flexbox for Image and Button beside each other -->
	<div class="image-button-container">
		<!-- Image -->
		<div class="gallery">
			<img src="icon/profile.png" class="image">
		</div>

		<!-- Button -->
		<div>
			<a href="student-login.php">
				<button class="startButton">START YOUR JOURNEY</button>
			</a>
		</div>		
	</div>

	<div class="text">
		<p>OPENING HOURS: MONDAY - SUNDAY 8AM - 8PM<br></p>


		<p>Please Help Us Keep the Library a Wonderful Place for Everyone</p>
		1) Quiet, Please: Keep noise levels low and phones on silent.<br>
		2) Respect Borrowing Rules: Return books on time to avoid fines.<br>
		3) Handle Books with Care: Keep books clean and undamaged.<br>
		4) Return books on time: Or you will be fined RM1 per day.<br>
		5) No Food or Open Drinks: Only spill-proof drinks allowed.<br>
		6) Be Considerate: Avoid disruptive behavior; respect others.<br>
		7) Library Computers Are for Learning: Use responsibly and respect time limits.<br>
		8) Clean Up After Yourself: Leave spaces tidy for others.<br>
		9) Follow Staff Instructions: They're here to help!<br>
		10) Emergency Procedures: Follow safety instructions and exit calmly.<br>
	</div>
</div>

  <!-- Footer -->
<div class="footer">
      <h3>Contact Us</h3>
      <p>Ask Us Helpdesk: 604 9414461<br>
      Access Service Desk: 604 9414462<br>
      Whatsapp: +6019 389 5402<br>
      Email us at: library@example.com<br><br>
	Website developed by Nurul Alya, Nur Batrisyia, Siti Hawa</p>
    
</div>

</body>

<style>
  
/* Footer */
.footer {
  padding: 2px;
  text-align: center;
  line-height: 1.3;
  background: #ddd;
  margin-top: 70px;
  background-color:#2f2d79;
  color:white;
  font-size: 14px;
}

body {
	background-color: #090830;
}
/* Centered text */
h2 {
	font-size: 36px;
      font-family: "Unica One", sans-serif;
      font-weight: 400;
      font-style: normal;
      color: white;
      text-align: center;
	letter-spacing: 5px;
}

/* Flex container for centering items */
.flex-container {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.flex-container > div {
	display: flex;
}

.title {
	margin-top: 200px;
}

.text {
	margin-top: 250px;
	flex-direction: column;
}
/* Container for image and button */
.image-button-container {
	display: flex;
	flex-direction: row; /* Row layout to place items beside each other */
	align-items: center;
	justify-content: center;
	margin-top: 20px;
}

/* Gallery image */
.gallery {
	border-radius: 40px;
	background: #A83AC4;
	display: flex;
	justify-content: center;
	align-items: center;
	z-index: 600;
}

.gallery img {
  width: 70px;
  height: 72px;
  border-radius: 50%; /* Make image round */
}

/* Button */
.startButton {
	width: 300px;
	height: 70px;
	border-radius: 35px;
	background-color: #A83AC4;
	border: none;
	margin-left: -15px;
	font-size: 20px;
      font-family: "Unica One", sans-serif;
      font-weight: 400;
      font-style: normal;
      color: white;
      text-align: center;
	text-decoration: uppercase;
	letter-spacing: 0px;
}

.startButton:hover {
	background-color: #78298c;
	letter-spacing: 2px;

}

</style>
</html>
