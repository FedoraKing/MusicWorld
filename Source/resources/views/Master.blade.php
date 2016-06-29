<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Music-World</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/MusicWorld.css" />
<body>
    <div id="header">
        <img src="http://localhost:8000/cropped-cropped-Music-Notes-Header.jpg" />
    </div>
    <div id="navi">
        <ul id="main-menu">
            <li><a href="#">Home</a></li>
            <li class="parent"><a href="#">Produkte</a>
            	<ul class="sub-menu">
            	<?php foreach ($categories as $categorie): ?>
            		<li><a class="parent" href="#">{{$categorie->Name}}</a>
            			<ul class="sub-menu">
            			<?php foreach ($subCategories as $subcategorie): ?>
            				<?php if ($subcategorie->TopCategoryId === $categorie->Id) { ?>
            					<li><a href="http://localhost:8000/category/{{$subcategorie->Id}}">{{$subcategorie->Name}}</a></li>
            				<?php } ?>
            				
            			<?php endforeach; ?>
            			</ul>
            		</li>
        		<?php endforeach; ?>
        		</ul>
        	</li>
            <li><a href="#">Musik</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>

        
        
    </div>

    <div id="content">
    	@yield('main_content')
    </div>

    <div id="footer">
        <p>©Colin Couture, Ron Bösch 2016</p>
    </div>
</body>

</html>