function verifname(champ)
{
   if(champ.value.length < 1 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "#B0F2B6";

}

function verifForm(f)
{
   var pseudoOk = verifname(f.exampleInputName1);
  
   if(pseudoOk )
   { 
      alert ("Le formulaire est rempli correctement");
      return true;
   }
   
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}