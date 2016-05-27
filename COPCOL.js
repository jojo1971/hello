
function test(){

       var mavariable = new XMLHttpRequest(),
           text = document.getElementById('text').value,
           nom = document.getElementById('nom').value;

       mavariable.open('POST', 'COPCOL.php',true);
       mavariable.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
       mavariable.send('nom='+nom+'&text='+text);


    document.getElementById('text').value = '';
mavariable.onreadystatechange = function(){
  if(mavariable.readyState == 4 && mavariable.status == 200){

        document.getElementById('mondiv').innerHTML = mavariable.responseText;
  }
}
}


/*var l1    = f.elements["list1"];
var l2    = f.elements["list2"];

var index = l1.selectedIndex;
if(index < 1)
   l2.options.length = 0;
else {
   var xhr_object = null;
	
   if(window.XMLHttpRequest) // Firefox
      xhr_object = new XMLHttpRequest();
   else if(window.ActiveXObject) // Internet Explorer
      xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
   else { // XMLHttpRequest non supporté par le navigateur
      alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");

   }

   xhr_object.open("POST", "COPCOL.php", true);
	
   xhr_object.onreadystatechange = function() {
      if(xhr_object.readyState == 4)
         eval(xhr_object.responseText);
   };

   xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   var data = "family="+escape(l1.options[index].value)+"&form="+f.name+"&select=list2";
   xhr_object.send(data);
}
*/
