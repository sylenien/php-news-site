<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>News !?</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>


		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
    
					 <?php foreach ($newsList as $newsItem):?>
					<div class="post">
						<h2 class="title"><?php echo $newsItem['title'];?> </h2>
						<p class='byline'><?php echo $newsItem['date'];?></p>
                        <p class="meta"><a href="#">Posted by
                            <?php echo $newsItem['author_name'];?></a> </p>
                           <p class='text'> <?php echo $newsItem['short_content'];?> </p>
                        <div class='meta'>
                        <p><a href="/news/id=<?php echo $newsItem['id'];?>" class='comments'>Read more >> </a></p>
                            </div>
					</div>
				    <?php endforeach;?>
                    
					<div style="clear: both;"> <p>&nbsp; </p></div>
				</div>
            </div>
        </div>


</body>
</html>

     
                  