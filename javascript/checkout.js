var ticketPrice = document.getElementById('ticketPrice').setAttribute('value', 1200);
    

    //the variable defining an event on change.
    //define the variable

    var tNumber = document.getElementById("ticketsNumber").addEventListener("change", checkQuantity);
    var totalAmount = document.getElementById("totalAmount")
    //function that actually ensures the number of tickets is not below 0.
     //page load
    var btn = document.getElementById("checkoutbtn");
    let  quantityError = document.getElementById("quantityError");
    function checkQuantity(){
       
        let tValue = document.getElementById("ticketsNumber").value;
        console.log(tValue);
        if(tValue<1){
            // alert("The Number of Tickets should be more than 1");
            // quantityError.style.display = "block";
            quantityError.innerHTML = "Ticket quantity must be greater than 1";
            setTimeout(()=>quantityError.remove(), 3000); 

        }else{
            // quantityError.style.display = "none";
            var tPrice = document.getElementById("ticketPrice").value;
            var totalAmount = document.getElementById("totalAmount").setAttribute("value", tValue * tPrice);
            btn.classList.add("btn-success");
            return totalAmount;

        }
    }

//verify the value of the number of tickets before proceeding to checkout
// let tAmount = document.getElementById("totalAmount").value;
//  console.log(totalAmount);

 btn.addEventListener("click", pCheckout);
 
 let checkoutError = document.getElementById("checkoutError")

 function pCheckout(){
    // e.preventDefault();
   
    let tValue = document.getElementById("ticketsNumber").value;
    console.log(tValue);
    if(tValue===''){
        checkoutError.innerHTML = "Enter the Number of Tickets required";
        setTimeout(() => checkoutError.remove(), 3000); 
             
        }else{
        window.location.href = "mpay.php"
        // checkoutError.style.display = "block";
         
    }
 }
    
//  The Mpay page script to check whether the telephone number is valid before proceeding
//  let regex = /^0\d{9}$/;
//  let mpesaError = document.getElementById("mpesaError");
//  let mpesaNumber = document.getElementById("mpesaNumber");
//  mpesaNumber.addEventListener("change",checkNumber);
 
 
//  function checkNumber(){
//     let mpesaNumber = document.getElementById("mpesaNumber");
//     mpesaValue = mpesaNumber.value;
//     console.log("mpesaValue")
//     if(mpesaValue.match(regex)){
//         mpesaError.style.display = "block";
//     }else{
//         mpesaError.style.display = "none";
//     }
//     // let test = document.getElementById("test");
//     // test.textContent = mpesaValue;
    
//  }

// let fname = 'mugo';
// let lname = 'david'
// console.log(`my name is ${fname} and my last name is${lname}`);