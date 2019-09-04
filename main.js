
function validation(){
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var title = document.getElementById("title").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
  
    error_message.style.padding = "10px";
    
    var text;

    if(name.length < 5){
        text = "Please Enter valid Name";
        error_message.innerHTML = text;
        return false;
      }
      if(title.length < 10){
        text = "Please Enter Correct Subject";
        error_message.innerHTML = text;
        return false;
      }
      if(isNaN(phone) || phone.length != 11){
        text = "Please Enter valid Phone Number";
        error_message.innerHTML = text;
        return false;
      }
      if(email.indexOf("@") == -1 || email.length < 6){
        text = "Please Enter valid Email";
        error_message.innerHTML = text;
        return false;
      }
      if(message.length <= 140){
        text = "Please Enter More Than 140 Characters";
        error_message.innerHTML = text;
        return false;
      }
      alert("Your message was sent Successfully!");
      return true;
}

//console.log("it works")