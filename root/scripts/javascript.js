


function validate(){
    var firstname = document.querySelector("#name").value;
    var surname = document.querySelector("#surname").value;
    var password = document.querySelector("#passd").value;
    var email = document.querySelector("#email");
    var button = document.querySelector("#button1");
    var form = document.querySelector("#Formcheck");
    var missing = [ ];
    
    
    //alert(firstname)
    if (!firstname.match(/^[A-Za-z]+$/)){
        missing.push("firstname");
    }
    if (!surname.match(/^[A-Za-z]+$/)){
        missing.push("surname")
    }
    if (email.value.length <= 0){
        missing.push("email")
    }
    if (!password.match(/^[A-Za-z]+$/)){
        missing.push("password")
    }
    if (missing.length === 0)
     {
        alert("Succesful")
        return true;
     }
     displayAlert(missing)
}


function displayAlert(missing){
    console.log(missing);
    alert("The followng must be filled: " + missing)

}

//form.addEventListener("click",validateform);



