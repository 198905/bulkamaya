var formMessage=document.querySelector('.messageC');
var formbouton=document.querySelector('.messageEnvoyer');

//text in qreq=button et inversement
formMessage.addEventListener("input", () => {
  if (formMessage.value.trim() !== "") {
    formbouton.style.display = "inline-block";
  } else if (formMessage.value.trim() == ""){
    formbouton.style.display = "none";
  }
});
formbouton.addEventListener('click',function(event) {
    formbouton.style.display = "none";
})
formMessage.addEventListener("input", () => {
  if (formMessage.value.trim() !== "") {
    formbouton.style.display = "inline-block";
  } else if (formMessage.value.trim() == ""){
    formbouton.style.display = "none";
  }
});
//box size has text size
var textSize=document.querySelector('.messageUser');
var formbouton=document.querySelector('.messageEnvoyer');

//display
async function loadGetMessages() {
    const response = await fetch('get.php');
    const text = await response.text();
    document.querySelector('.messages').innerHTML = text;
    }
    setInterval(loadGetMessages, 500);//500    get    

//write without refreshing
var form = document.getElementById("form");
form.addEventListener('submit', function(event) {
    event.preventDefault(); 

    var formData = new FormData(form);

    // AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "model.php", true);
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");

    // Définir une fonction de rappel pour gérer la réponse du serveur
    xhr.onload = function() {
        if (xhr.status === 200) {

            //console.log(xhr.responseText);  Afficher la réponse dans la console
        }
        setTimeout(function () {
            var myDiv = document.querySelector('.messages');
        myDiv.scrollTop = myDiv.scrollHeight - myDiv.clientHeight;
        },500)
    }

    // Envoyer les données du formulaire au serveur
    xhr.send(formData);
    formMessage.value='';
});

    
    
    
    
    
    
    
  
