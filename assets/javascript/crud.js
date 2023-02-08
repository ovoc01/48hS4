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
                    alert("tsy mety");
                }else{
                    window.location.href="/takalo/home";
                }
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
                    window.location.href="/takalo/sign/login";

                }
            }
        }
    };

    xhr.open("POST", "/takalo/traitement/signup");
    xhr.send(formData);
}

function addcategorie(){

    var form = document.getElementById("addcategory");
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
                    var input = document.getElementById("nomcategory");
                    input.value = "";
                    location.reload();
                    alert("Category added");
                }
            }
        }
    };

    xhr.open("POST", "/takalo/traitement/addcategory");
    xhr.send(formData);
}

function deletecategorie(){

    var form = document.getElementById("modifcategory");
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
                    window.location.href="/takalo/home/manage/addcategory";
                    alert("Category deleted");
                }
            }
        }
    };

    xhr.open("POST", "/takalo/traitement/deletecategorie");
    xhr.send(formData);
}

function modifcategorie(){

    var form = document.getElementById("modifcategory");
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
                    var input = document.getElementById("nomcategory");
                    input.value = "";
                    location.reload();
                    alert("Category updated");
                }
            }
        }
    };

    xhr.open("POST", "/takalo/traitement/modifcategorie");
    xhr.send(formData);
}
