function setError(id,err){

    element=document.getElementById(id);
    element.innerHTML=err;
    // console.log("I am in the seterror()");
}

function resetSpan(){
    let s=document.getElementsByClassName("valid");
    console.log("i am in the resetspan");
    
    for(m of s){
        console.log(m); 
        m.innerHTML="";
    }
    console.log(typeof(s));
    s.innerHTML=" ";
}
function valid_form() {
    resetSpan();
    let returnvalue=true;
    
    //checking form first name
    let first_name = document.getElementById("fnameRo").value;
    if(first_name.length<3){
        setError("validfname","**name is too short");
        returnvalue=false;
    }
    for(i of first_name){
        if(i=="0"|| i=="1" ||i=="2"|| i=="3" ||i=="4"|| i=="5" ||i=="6"|| i=="7" ||i=="8"|| i=="9" ){
            setError("validfname","**name can't be number");
            
        returnvalue=false;
        }
    }
    

    //checking form last name
    let last_name = document.getElementById("lnameRo").value;
    if(last_name.length<3){
        setError("validlname","**name is too short");
        returnvalue=false;
    }
    for(i of last_name){
        if(i=="0"|| i=="1" ||i=="2"|| i=="3" ||i=="4"|| i=="5" ||i=="6"|| i=="7" ||i=="8"|| i=="9" ){
            // console.log("not allowd")
            setError("validlname","**name can't be number");
            
        returnvalue=false;
        }
    }
    // checking email validation
    let mailCheck = document.getElementById("fmail").value;
    if(mailCheck.length>15){
        setError("validmail","**mail id  is too long");
        returnvalue=false;
    }

    // checking phone Number
    let phoneCheck = document.getElementById("fno").value;
    if(phoneCheck.length>10 || phoneCheck.length<10){
        setError("validphone","**number should be 10 digits");
        returnvalue=false;
    }
    return returnvalue;
}
// //perfrom conditions after change returnvalue
// let nameRo = document.forms["roForm"]["fname"].value;
// // console.log(nameRo);
// if(nameRo.length<=5){
    //     SeterrRo("fname","length of name is too short");
    //     returnvalue = false;
    // }