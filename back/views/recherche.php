<?php

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $terme = $_GET['terme'];
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

 if (isset($terme))
 {
  $select_terme = $bdd->prepare("SELECT id_commande, id_utilisateur,dateAchat,tabAchats FROM commande WHERE id_utilisateur LIKE ? ");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8" >
  <title>Les résultats de recherche</title>
 </head>
    <style>
 .element {
width: 250px; 
height: 350px;
margin:0px;
position:relative;
display:inline-block;
vertical-align:top;    
}
div#columns figure {
    display: inline-block;
    background: #FEFEFE;
    border: 2px solid #FAFAFA;
    box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
    margin: 0 0px 15px;
    -webkit-column-break-inside: avoid;
    -moz-column-break-inside: avoid;
    column-break-inside: avoid;
    padding: 15px;
    padding-bottom: 5px;
    background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
    opacity: 1;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

#columns figure:hover{
    -webkit-transform: scale(1.1);
    -moz-transform:scale(1.1);
    transform: scale(1.1);

}
#columns:hover figure:not(:hover) {
    opacity: 0.4;
}

</style>
 <body>
  <?php
  while($terme_trouve = $select_terme->fetch())
  {
  	  ?>  <div class="element" id="columns" >
                            
                        
                            <figure>
                                
                                <div >  </div> 
                                    
                                      
                                    
                                 
                                       <h4><?php echo $terme_trouve['nom']; ?></h4>
                                       <p><?php echo $terme_trouve ['categorie']; ?></p>
                                       <div  ><?php echo $terme_trouve['prix']; ?></div>
                                </figure>     
                                        
                            </div>
                        
                                
                             
                             
                           
                    


                  <?php
  
  }
  $select_terme->closeCursor();
   ?>
 </body>
</html>