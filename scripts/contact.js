"use strict";
//get form
const form = document.querySelector("form");
//attach event to the form
form.addEventListener("submit", validate);
function validate(event) {
    const firstName = document.getElementById("firstName");
    const lastName = document.getElementById("lastName");
    const address = document.getElementById("address");
    const phone = document.getElementById("phone");
    const email = document.getElementById("email");

    const creditcard = document.getElementById("creditcard");
    const nameOnCard = document.getElementById("nameOnCard");
    const expiry = document.getElementById("expiry");
    const csv = document.getElementById("csv");
    let error;
    //clear all errors
    const errorList = document.querySelectorAll(".error");
    for (let item of errorList) {
        item.innerHTML = "";
    }
    if (firstName.value.length === 0) {
        error = firstName.parentNode.querySelector(".error");
        error.innerHTML = "Please enter a first name";
        event.preventDefault();
    }
    if (lastName.value.length === 0) {
        error = lastName.parentNode.querySelector(".error");
        error.innerHTML = "Please enter a last name";
        event.preventDefault();
    }
    if (address.value.length === 0) {
        error = address.parentNode.querySelector(".error");
        error.innerHTML = "Please enter a address";
        event.preventDefault();
    }
    if (phone.value.length === 0) {
        error = phone.parentNode.querySelector(".error");
        error.innerHTML = "Please supply a contact number";
        event.preventDefault();
    }

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (phone.value.length === 0 || !email.value.match(validRegex)) {
        error = email.parentNode.querySelector(".error");
        error.innerHTML = "Invalid email address";
        event.preventDefault();
    }

    var cardno = /^(?:[0-9]{16})$/;
    if (creditcard.value.length === 0 || !creditcard.value.match(cardno)) {
        error = creditcard.parentNode.querySelector(".error");
        error.innerHTML = "Please enter a valid creditcard number";
        event.preventDefault();
    }
    if (nameOnCard.value.length === 0) {
        error = nameOnCard.parentNode.querySelector(".error");
        error.innerHTML = "Please enter a nameOnCard";
        event.preventDefault();
    }

    var pattern = /^(0[1-9]|1[0-2])\/2[0-9]{3}$/;///(0|1)[0-9]\/(20)[0-9]{2}/;
    if (expiry.value.match(pattern)) {
        
        var currentDate = new Date();

        var currentMonth = ("0" + (currentDate.getMonth() + 1)).slice(-2);
        var currentYear = String(currentDate.getFullYear()).slice(-2);

        var date_array = expiry.value.split('/');
        var userMonth = date_array[0];
        var userYear = date_array[1].slice(-2);

        if (currentYear == userYear){
            if(currentMonth >= userMonth){
                error = expiry.parentNode.querySelector(".error");
                error.innerHTML = "Please enter a valid month after " + (currentDate.getMonth() + 1);
                event.preventDefault();
            }
        }
        if (userYear < currentYear) {
            //window.alert("Please enter a valid year before"+ currentYear)
            error = expiry.parentNode.querySelector(".error");
            error.innerHTML = "Please enter a valid date after " + (currentDate.getMonth() + 1)+"/"+currentDate.getFullYear();
            event.preventDefault();
        }
    } else {
        error = expiry.parentNode.querySelector(".error");
        error.innerHTML = "Please enter a valid expiry date in MM/YYYY";
        event.preventDefault();
    }
    

    var csvno = /^[0-9]{3,4}$/;
    if (csv.value.length === 0 || !csv.value.match(csvno)) {
        error = csv.parentNode.querySelector(".error");
        error.innerHTML = "Please enter a valid CSV";
        event.preventDefault();
    }

}