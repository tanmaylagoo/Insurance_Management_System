
function validatePolicyForm() {

    let pno = document.forms["policyForm"]["pno"].value;
    let cid = document.forms["policyForm"]["cid"].value;
    let pid = document.forms["policyForm"]["pid"].value;
    let gcode = document.forms["policyForm"]["gcode"].value;
    let amount = document.forms["policyForm"]["amount"].value;


    if(pno === "" || cid === "" || pid === "" || gcode === "" || amount === ""){
        alert("All fields are required!");
        return false;
    }

  
    if(isNaN(pno) || isNaN(cid) || isNaN(pid) || isNaN(gcode) || isNaN(amount)){
        alert("All values must be numbers!");
        return false;
    }

  
    if(pno <= 0 || cid <= 0 || pid <= 0 || gcode <= 0 || amount <= 0){
        alert("Values must be positive!");
        return false;
    }

  
    if(amount > 10000000){
        alert("Amount too large!");
        return false;
    }

    return true;
}


function validateSignupForm() {

    let user = document.forms["signupForm"]["username"].value;
    let pass = document.forms["signupForm"]["password"].value;

    if(user === "" || pass === ""){
        alert("All fields are required!");
        return false;
    }

    if(user.length < 3){
        alert("Username must be at least 3 characters!");
        return false;
    }

    if(pass.length < 5){
        alert("Password must be at least 5 characters!");
        return false;
    }

    return true;
}



function validateLoginForm() {

    let user = document.forms["loginForm"]["username"].value;
    let pass = document.forms["loginForm"]["password"].value;

    if(user === "" || pass === ""){
        alert("All fields are required!");
        return false;
    }

    return true;
}