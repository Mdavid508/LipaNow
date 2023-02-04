//Validation of phone number
const regex = /^0\d{9}$/
let telephone = document.getElementById("telephone").value;
//validate in the company registration page
function validatePhone(){
    let telephone = document.getElementById("telephone").value;
    if(regex.test(telephone)){
        document.getElementById("telephoneError").style.display = "none";
    }else{
        document.getElementById("telephoneError").style.display = "block";
    }
}

//validate in the mpay page.

let mpesaNumber = document.getElementById("mpesaNumber").value;
function checkNumber(){
    let mpesaNumber = document.getElementById("mpesaNumber").value;
    console.log(mpesaNumber);
    if(regex.test(mpesaNumber)){
        document.getElementById("mpesaError").style.display = "none";
    }else{
        document.getElementById("mpesaError").style.display = "block";
    }
}


//javascript implementation of onsubmit event on a form

let companyReg = document.getElementById("companyReg");
companyReg.addEventListener("submit",function(e){
            e.preventDefault(); //prevents the default behaviour of the form i.e Auto submitting
            let companyName = document.getElementById("companyName");
            console.log(companyName);
            let companyTel = document.getElementById("telephone");
            console.log(companyTel)
            let companyEmail = document.getElementById("cemail");
            console.log(companyEmail)
            let password = document.getElementById("cpassword");
            console.log(password)
            let rcpassword = document.getElementById("rcpassword");
            console.log(rcpassword)
            

})


