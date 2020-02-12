<html>
		<title>USA news</title>
				<head>
				<link rel="stylesheet" type="text/css" href="style.css">
				<link rel="stylesheet" type="text/css" href="style5.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
				</head>
<body>
<div id="navbar">
	<i><a href="index.php" id="logo">US News</a></i>
  <div id="navbar-right">
    <a class="active" href="index.php">Home</a>
    <a href="rss-cbn.php">CBN</a>
    <a href="rss-business.php">BBC</a>
    <a href="rss-yahoo.php">Reuters</a>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
 

<div class="container col-9">
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www1.cbn.com/app_feeds/rss/news/rss.php?section=us");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
  
?>

        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h4"><strong><?php echo $title ?></strong></span>
                    </div>
                    <div class="card-body">
                        <span><?php echo $description ?></span>
                        <span style="float:right" class="text-muted">
                            <?php echo $pubDate ?>
                        </span>
                        <span><a href="<?php echo $link ?>" target="https://www1.cbn.com/cbnnews">Read more...</a></span>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>

</div>
</div>

	<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Us <span>News</span></h3>
 
		<p class="footer-links">
		<a href="index.php">Home</a>
	·
		<a href="rss-cbn.php">CBN</a>
	·
		<a href="rss-business.php">BBC</a>
	·
		<a href="rss-yahoo.php">Yahoo</a>
	
		</p>
 
		<p class="footer-company-name">LatestNews &copy; 2020</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>We are from the </span> USA</p>
		</div>
  <br/>
		<div>
		<i class="fa fa-phone"></i>
		<p>09206372846</p>
		</div>
  <br/>
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="kitarvin23@gmail.com">kitarvin23@gmail.com</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
		<p class="footer-company-about">
		<span>About US News</span>
	News is important for a number of reasons within a society. Mainly to inform
	the public about events that are around them and may affect them. Often news is
	for entertainment purposes too; to provide a distraction of information
	about other places people are unable to get to or have little influence over.
		</p>
 
 
		
 
		</div>
 
		</footer>
		
</body>
</html>
