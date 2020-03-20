
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>| CLIMATE STRIKE ONLINE |</title>
        <link rel="shortcut icon" type="image/png" href="http://softtest.epizy.com/image/logo.png" />
        <style type="text/css">
            body {
                width: 100%;
                background: url(back.jfif) ;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>

<style>
        @media only screen and (max-device-width: 500px){
            section{
                width: 90%;
            }
}
section { 
  display: block;
  width: 70%;
  margin-left: auto;
  margin-right: auto;
}
body { line-height: 1; margin: auto; padding: auto; }
html, body { width: 100%; height: 100%; overflow-y: scroll; overflow-x: hidden; }
a:link { text-decoration: none; }
.intro { position: absolute; left: 0; top:20%; padding: 0 20px;  width: 100%;  text-align: center; }
  h1 {
    color: #fff;
    text-transform: uppercase;
    font-size: 100px;
    font-weight: 700;
    letter-spacing: 0.015em;
  }
  h1::after {
    content: '';
    width: 200px;
    display: block;
    background: #ffee58;
    height: 6px;
    margin: 20px auto;
    line-height: 1.1;
  }
  .btn {
    display: inline-block;
    padding: 15px 30px;
    border: 2px solid #fff;
    text-transform: uppercase;
    letter-spacing: 0.015em;
    font-size: 18px;
    font-weight: 600;
    line-height: 1;
    color: #fff;
    text-decoration: none;
    -webkit-transition: all 0.4s;
       -moz-transition: all 0.4s;
         -o-transition: all 0.4s;
            transition: all 0.4s;
  }
  .btn:hover {
    color: #000;
    border-color: #fff;
    background-color: #607d8b;
  }
  h2 {
    color: #ffd600;
    text-transform: uppercase;
    font-size: 35px;
    font-weight: 700;
    letter-spacing: 0.015em;
  }
  
  @media only screen and (max-width: 1000px) {
    h1 {
      font-size: 70px;
    }
  }
  
  @media only screen and (max-width: 800px) {
    h1 {
      font-size: 48px;
    }
    h1::after {
      height: 8px;
    }
  }
  @media only screen and (max-width: 550px) {
    .btn {
    display: inline-block;
    padding: 5px 15px;
    border: 2px solid #fff;
    text-transform: uppercase;
    letter-spacing: 0.009em;
    font-size: 13px;
    font-weight: 400;
    line-height: 1;
    color: #fff;
    text-decoration: none;
    -webkit-transition: all 0.4s;
       -moz-transition: all 0.4s;
         -o-transition: all 0.4s;
            transition: all 0.4s;
    }
  }
  
  @media only screen and (max-width: 430px) {
    .btn {
    display: inline-block;
    padding: 5px 10px;
    border: 1px solid #fff;
    text-transform: uppercase;
    letter-spacing: 0.005em;
    font-size: 10px;
    font-weight: 400;
    line-height: 1;
    color: #fff;
    text-decoration: none;
    -webkit-transition: all 0.4s;
       -moz-transition: all 0.4s;
         -o-transition: all 0.4s;
            transition: all 0.4s;
    }
  }
  
  @media only screen and (max-width: 568px) {
    .intro {
      padding: 0 10px;
    }
    h1 {
      font-size: 30px;
    }
    h1::after {
      height: 6px;
    }
    p {
      font-size: 18px;
    }
    .btn {
      font-size: 16px;
    }
  }
  
  @media only screen and (max-width: 320px) {
    h1 {
      font-size: 28px;
    }
    h1::after {
      height: 4px;
    }
  }
  html::-webkit-scrollbar
{
  width: 0.1px;
  background-color: #F5F5F5;

}

html::-webkit-scrollbar-thumb
{
  background-color: #000000;
  border: 2px solid #555555;
  opacity: 0;
}
</style>
    </head>
    <body>
        <center>
            <div class="intro">
                <h1> CLIMATE STRIKE ONLINE </h1>
<?php

if (isset($_REQUEST['id'])) {
    # code...
    $json = json_decode(file_get_contents("thoughts.json"),true);

    $json_size = sizeof($json);

    for ($i=$json_size; $i > 0 ; $i--) {
        $j = $i-1;

        if ($json[$j]['id'] == $_REQUEST['id']) {
            # code...
            $id = $json[$j]['id'];
        $name = $json[$j]['name'];
        $date = $json[$j]['date'];
        $day = $json[$j]['day'];
        $headline = $json[$j]['headline'];
        $content =$json[$j]['content'];
        $prev = $j-1;
        $new = $j+1;
 
        }

}

    ?>
    <a href="read.php?id=<?php echo $json[$prev]['id'];?>" class="btn"> < Previous </a> &emsp;
<a href="read.php" class="btn"> Home </a>&emsp;

<a href="read.php?id=<?php echo $json[$new]['id'];?>" class="btn"> New > </a> &emsp;

    <section style="background-color: white; padding: 10px; margin-top: 20px; margin-bottom: 20px;">
  <h1 style="color:blue; font-size: 23px; border: none;"><?php echo $headline;?></h1>
  <h5>
    <b>by <?php echo $name;?></b>&nbsp;<br>
    <label>Published on : <?php echo $day;?>, <?php echo $date;?></label>
  </h5> 
  <p style="text-decoration: none; color: black; font-size: 20px;"><?php echo $content;?></p>
</section>
<a href="read.php?id=<?php echo $json[$prev]['id'];?>" class="btn"> < Previous </a> &emsp;
<a href="read.php" class="btn"> Home </a>&emsp;

<a href="read.php?id=<?php echo $json[$new]['id'];?>" class="btn"> New > </a> &emsp;
    <?php
}else{

    $json = json_decode(file_get_contents("thoughts.json"),true);

    $json_size = sizeof($json);

    for ($i=$json_size; $i > 0 ; $i--) { 
        # code...
        $j = $i-1;
        $id = $json[$j]['id'];
        $name = $json[$j]['name'];
        $date = $json[$j]['date'];
        $day = $json[$j]['day'];
        $headline = $json[$j]['headline'];
        $content =$json[$j]['content'];
        $content = substr($content,0,200).'.......<br><br><i>Click Here to Read More</i>';

    
?>


                <a href="http://localhost/New%20folder/read.php?id=<?php echo $id ;?>" style="text-decoration: none;">
<section style="background-color: white; padding: 10px; margin-top: 2px; margin-bottom: 20px;">
  <h1 style="color:blue; font-size: 23px; border: none;"><?php echo $headline;?></h1>
  <h5>
    <b>by <?php echo $name;?></b>&nbsp;<br>
    <label>Published on : <?php echo $day;?>, <?php echo $date;?></label>
  </h5> 
  <p style="text-decoration: none; color: black; font-size: 20px;"><?php echo $content;?></p>
</section>
</a>
<?php
}}
?>
               
<a href="read.php" class="btn"> Read Thoughts </a> &emsp;
                <a href="write.php" class="btn"> My Thoughts </a>

                <h2 style="color:white;font-size: 30px;"> JOIN US ON INSTAGRAM USING </h2>

                <h2 style="color:white;font-size: 23px;"> #climatestrikeonline<br>#youthforcilmateindia</h2>
                
                <h2 style="color:white;">  </h2>
            </div>
        </center>
    </body>
</html>