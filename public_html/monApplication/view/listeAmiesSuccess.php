<?php if(isset($_SESSION['user'])) {?>
  
  <div class="amie_div" >
		<ul>
		<?php
					
				foreach ($context->usersList as $row ) {
				echo '<li>';
				echo '<a href="monApplication.php?action=profil&id='.$row['id'].'">'.$row['identifiant'];
				echo ''.$row['prenom'];
				echo ''.$row['nom'].'</a>';
				echo '<li>';
				}

       ?>
			
		</ul>

		 </div>
		
     </div>
<?php } //session?>
