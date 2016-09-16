<html>

<script type="text/javascript" src="jquery.js">
 </script>
<script src="java.js"> </script>

<head>
<title>fbchat</title>
<link rel="stylesheet" href="style.css" type="text/css" >
</head>
<body>
<div class="chat">
<div class="chat_head">
chat with us
</div>
<div class="wrap">
<div class="chat_body">
<div class="msg_a">
messag from a
</div>

<div class="msg_b">
messag from b
</div>
<div class="msg_insert">

</div>
</div>
<div class="userInput">
<label class="textareaContainer">
	<?php// echo $_POST['text'];?>
	<div class="btn"> 
	      <form action=" " method="POST">
	        	<textarea name="text" class="msg" ></textarea>
	        	<input type="button" value="send" class="button">
	        </form>
</div>
    </label>
</div>
</div>
</div>
</body>
</html>