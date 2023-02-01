var ticketPrice = document.getElementById('ticketPrice').setAttribute('value', 1200);
    

    //the variable defining an event on change.
    //define the variable

    var tNumber = document.getElementById("ticketsNumber").addEventListener("change", checkQuantity);
    var totalAmount = document.getElementById("totalAmount")
    //function that actually ensures the number of tickets is not below 0.

    function checkQuantity(){
        var tValue = document.getElementById("ticketsNumber").value;

        if(tValue<1){
            alert("The Number of Tickets should be more than 1");
        }else{
            var tPrice = document.getElementById("ticketPrice").value;
            var totalAmount = document.getElementById("totalAmount").setAttribute("value", tValue * tPrice);
            var btn = document.getElementById("checkoutbtn").classList.add("btn-success");
            return totalAmount;

        }
    }


// var btnCheckout = document.getElementById("ticketsNumber").addEventListener("change", onAddValue);

//     function onAddValue(){
        
//     }