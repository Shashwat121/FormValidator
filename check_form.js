function validate_details()
{
   var name = document.getElementById('name');
   var email = document.getElementById('email');
   var mobile = document.getElementById('mobile');

   var name_regx = /[0-9\@!#$%&'*+-/=?^_`{|}~]/;
   var mobile_regx = /[6-9]\d{9}/;
   var email_regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+)\.([a-z]{2,7})(.[a-z]{2,7})?$/;

   if (name.value.trim() == "" && email.value.trim() == "" && mobile.value.trim() == "" )
   {
     alert("All the fields are empty!! Please fill all the fields and then press submit.")
     return false;
   }
   else if (name_regx.test(name.value))
   {
      alert("Invalid Name format!!");
      return false;
   }
   else if (name.value.trim() == "")
   {
      alert("Name field is left blank. Please enter your name!!");
      return false;
   }

   else if (email.value.trim() == "")
   {
     alert("Email id field is left blank. Please enter your Email id!!");
     return false;
   }
   else if (!(email_regx.test(email.value)))
   {
      alert("Invalid Email id format!!");
      return false;
   }

   else if (mobile.value.trim() == "")
   {
     alert("Mobile number field is left blank. Please enter your Mobile number!!");
     return false;
   }
   else if (!(mobile_regx.test(mobile.value)) || mobile.value.length!=10)
   {
      alert("Invalid Mobile number format!!");
      return false;
   }
   else
   {
      return true;
   }

}
