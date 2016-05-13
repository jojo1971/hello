   function aff() {
        var text = encodeURIComponent(document.getElementById('text').value),
            nom = encodeURIComponent(document.getElementById('nom').value),
                  contenu = document.getElementById('contenu'), tab = [];

       if(text == ''){
           alert('Il faut entrer un texte !');
           return false;
       }
       if(nom == ''){
           alert('Il faut entrer un nom !');
           return false;
       }


       var mavariable = new XMLHttpRequest();
mavariable.open('POST', 'fichier.php',true);
       mavariable.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
       mavariable.send('nom='+nom+'&text='+text);

    document.getElementById('text').value = '';
mavariable.onreadystatechange = function(){
  if(mavariable.readyState == 4 && mavariable.status == 200){
        document.getElementById('contenu').innerHTML = mavariable.responseText;
  }
}


    }




