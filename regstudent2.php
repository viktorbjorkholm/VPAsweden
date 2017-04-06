<!DOCTYPE html>
<html lang="en">
  <head>
 
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
<script>
$(function(){
    $('#profile_image').change( function(e) {
        
        var img = URL.createObjectURL(e.target.files[0]);
        $('.image').attr('src', img);
    });
});
</script>
<script>
function fetch()
	{
		var get  = document.getElementById("get").value;
		document.getElementById("put").value = get;
	}

</script>

    <title>My site</title>

	  <!-- länk till stylesheet -->
	<link rel="stylesheet" type="text/css" href="VPACSS.css">
	
    <style type="text/css">
    
    </style>

  </head>
  <body>
   <img src="Bilder/indexbild.jpg" class="bg">
		</img>
   <div class="flex-container">
   <div class="headermain">
   <header>
		 <div class="indexmeny">
		<ul>
  <li><a href="#home"> <button type="button" class="btn btn-warning">Meny</button></a></li>
  <li><a href="#news">  <button type="button" class="btn btn-warning" >Logga in</button></a></li>

</ul>
		 </div>
	</header>
	
	</div>
		<main>
		
		<div class="mainform">
		
		<div class="circlespace">
		<div class="circle">
		</div>
		</div>
		<div class="regform">

<form action="upload.php" method="post" enctype="multipart/form-data">
		
  
	
      
      <input type="password" class="form-control" id="eft" placeholder="Lärosäte" style=" margin-bottom:25px;">
	  
      <input type="password" class="form-control" id="eft" placeholder="Program" style=" margin-bottom:25px;">
      
	  
      <select class="form-control" id="sel1" style="margin-bottom:25px;">
	   <option value="" disabled selected>Jag pluggar inom område..</option>
        <option>Data/it</option>
        <option>Ekonomi</option>
        <option>3</option>
        <option>4</option>
      </select>
	  
	   <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Om mig..." style="margin-bottom:25px;"></textarea>
	   
	   <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Mina kompetenser..."  style="margin-bottom:25px; "></textarea>

	  <form>
	  
	  <div class="prisform">
	  <div class="priscont">
	Välj ditt pris: 
	</div>
	<div class="priscont2">
	 <output name="ageOutputName" id="ageOutputId">30</output>
	 <div class="priscont">
	kr/h
	 </div> </div>
	 <div class="priscontslider">
	
	 <input type="range" name="ageInputName" id="ageInputId" value="30" min="20" max="150" oninput="ageOutputId.value = ageInputId.value">
	 </div>
	  <div class="priscontinfo">
	 <a href="url"> <img src="Bilder/info.png" class="infoimg" ></a>
	  </div>
	 </div>
	 
	 
<div class="profilbild">
    <img src="Bilder/profilicon1.png" class="image">
</div>
    <div class="profilvalj">
	<p>Välj din profilbild</p>
    <input type="file" id="profile_image"  class="custom-file-input">
</div>

</form>

<div class="checkbox">
  <label><input type="checkbox" value="">Jag godkänner 
<a href="url">användarvillkor</a>
</label>

</div>
	

      
     <button type="submit" class="btn btn-default" style="width: 100%; background-color: #ec971f; color: white; ">Slutför </button>

  </form>
		
	
		</div>
		</div>
		
		
		</main>
		<footer>
		
		LOL
		</footer>
		
		
	</div>
  </body>
</html>