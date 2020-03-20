
<?php
	
	if (isset($_REQUEST['submit'])) {
		# code...
		//echo "working";
		$name = $_REQUEST['field1'];
		$email = $_REQUEST['field2'];
		$headline = $_REQUEST['field3'];
		$content = $_REQUEST['content'];
		$date = date('Y')."-".date('M')."-".date('d');
		$day = date('D');
		$id_1 = rand(0,999);
		$id_2 = uniqid();
		$id_3 = rand(0,999);
		$id = $id_1.$id_2.$id_3;
		$json = json_decode(file_get_contents("thoughts.json"),true);

		$new_json  = array('id' => $id , 'name' => $name, 'headline' => $headline, 'content' => $content, 'date' => $date, 'day' => $day);

		$json[] = $new_json;

		$final_json = json_encode($json);

		file_put_contents("thoughts.json", $final_json);

		header("Refresh:0,url=https://codeugly.tech/climatestrikeonline"); 


	}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form Style 8</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">

<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "45px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
<style>
body{
	background: #348A96;
}
.form-style-8{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 50%;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
	background: #4D4D4D;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #797979;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.form-style-8 textarea{
	resize:none;
	overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	background-color: #2CBBBB;
	border: 1px solid #27A0A0;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
	text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
	background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
	background-color:#34CACA;
}
</style>
<style type="text/css">
	@media only screen and (max-device-width: 500px){
		body{
	background: #348A96;
}
.form-style-8{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 90%;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
	background: #4D4D4D;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #797979;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.form-style-8 textarea{
	resize:none;
	overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	background-color: #2CBBBB;
	border: 1px solid #27A0A0;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
	text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
	background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
	background-color:#34CACA;
}
	}
</style>
</head>

<body>

<div class="form-style-8">
  <h2>Write Your Thoughts</h2>
  <form action="write.php" method="get">
    <input type="text" name="field1" placeholder="Full Name" name="name" value="Anonymous" required="true" />
    <input type="email" name="field2" placeholder="Email" name="email" required="true"/>
    <input type="text" name="field3" placeholder="Headline" name="headline" required="true"/>
    <textarea placeholder="Message" onkeyup="adjust_textarea(this)" name="content" maxlength="2000"required="true"></textarea>
    <input type="submit" value="Send Thoughts" name="submit" />
  </form>
  <p>
  	<center>
  		WE DON'T STORE YOUR EMAIL. IT IS JUST USED TO SEND YOU A THANK YOU NOTE.
  	</center>
  </p>
  <hr>
  <p>
  	<center>
  		&copy; <?php echo date('Y');?> <a href="https://codeugly.tech" style="text-decoration: none; color: black;">Codeugly.tech</a>
  	</center>
  </p>
</div>


</body>
</html>
