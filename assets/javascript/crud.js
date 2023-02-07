var xhr;

try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
catch (e)
{
    try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
    catch (e2)
    {
        try {  xhr = new XMLHttpRequest();  }
        catch (e3) {  xhr = false;   }
    }
}


function signin(){

    var form = document.getElementById("log-in");
    var formData = new FormData(form);

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // évite de faire le submit par défaut
    });

    xhr.onreadystatechange  = function() {
        if(xhr.readyState  == 4){
            if(xhr.status  == 200) {
                var retour = JSON.parse(xhr.responseText);
                if(retour==1){
                    console.log("tsy mety");
                    alert("tsy mety");
                }else{
                    console.log("test" + retour);
                    window.location.href="/takalo/home";

                }
            } else {

            }
        }
    };

    xhr.open("POST", "/takalo/traitement/login");
    xhr.send(formData);
}

function signup(){

    var form = document.getElementById("inscription");
    var formData = new FormData(form);

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // évite de faire le submit par défaut
    });

    xhr.onreadystatechange  = function() {
        if(xhr.readyState  == 4){
            if(xhr.status  == 200) {
                var retour = JSON.parse(xhr.responseText);
                if(retour==1){
                    console.log("tsy mety");
                    alert("tsy mety");
                }else{
                    console.log("test" + retour);
                    alert("account signed in");
                    window.location.href="/takalo/home/login";

                }
            } else {

            }
        }
    };

    xhr.open("POST", "/takalo/traitement/signup");
    xhr.send(formData);
}

