<?php

include 'config/database.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO messages(
fullname,
email,
subject,
message
)
VALUES(
'$name',
'$email',
'$subject',
'$message'
)";

mysqli_query($conn,$sql);

echo "Message Sent Successfully";
}
?>

<form method="POST">

<input type="text"
name="name"
placeholder="Full Name"
required>

<input type="email"
name="email"
placeholder="Email"
required>

<input type="text"
name="subject"
placeholder="Subject">

<textarea
name="message"
required>
</textarea>

<button
type="submit"
name="submit">
Send
</button>

</form>