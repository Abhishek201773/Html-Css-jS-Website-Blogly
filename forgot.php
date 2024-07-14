<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="contactus.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Forgot Password</title>
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Blogly Head Office</div>
          <div class="text-two">135 W 50th St, New York, NY, Publishers Periodical - MapQuest.</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">dixitabhishek201@gmail.com</div>
          <div class="text-two">abhishekmanglani12@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>
        <div class="small">If you have any work from me or any types of quries related to my Website, you can send me
          message from here. It's my pleasure to help you.</p>
        </div>
        <form action="#">
          <div class="input-box">
            <input type="text" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your email">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your phone number">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your adress">
          </div>
          <div class="input-box message-box">
          </div>
        </form>
      </div>
    </div>
  </div>
<title>Send Mail</title>
<script src=
	"https://smtpjs.com/v3/smtp.js">
</script>
<script type="text/javascript">
	function sendEmail() {
	Email.send({
		Host: "dixitabhishek201@gmail.com",
		Username: "dixitabhishek201@gmail.com",
		Password: "Abhishek@17",
		To: 'abhishekmanglani01@gmail.com',
		From: "dixitabhishek201@gmail.com",
		Subject: "Sending Email using javascript",
		Body: "Well that was easy!!",
	})
		.then(function (message) {
		alert("mail sent successfully")
		});
	}
</script>
</head>
<body>
<form method="post">
	<input type="button" value="Send Email"
		onclick="sendEmail()" />
</form>
</body>
</html>
</body>

</html>