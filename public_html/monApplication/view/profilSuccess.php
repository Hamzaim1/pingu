<?php if(!isset($_SESSION['user']))
  header( "Refresh:0.01; url=monApplication.php?action=login", true, 303);
else{
 ?>
 
  <div class="profilBody">
  <header>
  </header>
    <div class="row">
      <div class="left col-lg-4">
        <div class="photo-left">
          <img class="photo" src="<?php  
			if(@$context->user[avatar]!=null)
			{
			  echo "".$context->user[avatar];
			}
            else
            {
				echo('https://www.hpci.ch/sites/chuv/themes/bootstrap_hpci/img/default-user-icon-profile.png');
            }
            ?>"/>
        </div>
        <h4 class="name"><?php echo "".$context->user['nom']." ".$context->user['prenom']; ?></h4>
        <p class="info">Date de naissance : <?php echo "".$context->user['date_de_naissance']; ?></p>
        <p class="desc"> status : <?php echo "".$context->user['statut']; ?></p>
		<br>
		
		<?php if($context->user['id']==$_SESSION['id']){ ?>
		
		<button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn-sample">
		Editer</button>
		<?php }?>
		
		
		<div id="modal-wrapper" class="modal">
			<form class="modal-content animate" action="/action_page.php">
			<div class="imgcontainer">
			<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
			<h1 style="text-align:center">Modifier votre status : </h1>
		</div>

		<div class="container">
		  <textarea type="text" placeholder="Votre status" name="statuss" rows="10" cols="70" style="resize:none" ></textarea>		 
		</div>
		 <button type="submit" width="30px" class="Btn-Enregistrer">Enregistrer</button>
		</form>

		</div>
		<?php if($context->user['id']!=$_SESSION['id']) { ?>
			<button onclick="document.getElementById('modal-msg').style.display='block'" class="btn-sample">Envoyer message</button>
		<?php } ?>		
		<div id="modal-msg" class="modal">
		  
		 <form class="modal-content animate" action="/action_page.php">
				
			<div class="imgcontainer">
			  <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
			  <h1 style="text-align:center">Votre message : </h1>
			</div>

			<div class="container">
			
			  <textarea type="text" placeholder="Votre status" name="statuss" rows="10" cols="70" style="resize:none" ></textarea>
			 
			</div>
			 <button type="submit" width="30px" class="Btn-Enregistrer">Envoyer</button>
		  </form>

	</div>

     </div>  
	   
   
	  
<?php } ?>
