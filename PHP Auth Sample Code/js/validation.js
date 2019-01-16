

/*
  a function to validate register request
 */

      function validateRegistration()
      {
        var password = document.RegisterForm.pword.value;
        var fname = document.RegisterForm.fname.value;
        var lname = document.RegisterForm.lname.value;
        var email = document.RegisterForm.email.value;
        var gender = document.RegisterForm.gender.value;
        var success = true;
         
         // validate password
         if(!validatePassword(password))
         { 
            document.getElementById("pwordError").innerHTML = "password name invalid: must contain at least one upper case, numbers, symbols and at least 6 letters";
            document.RegisterForm.pword.focus() ;
            success = false;
         }

          // validate first name
         if(!validateFirstName(fname))
         { 
            document.getElementById("fnameError").innerHTML = "first name invalid: must contain only letters";
            document.RegisterForm.fname.focus() ;
            success = false;
         }

          // validate last name
         if(!validateFirstName(lname))
         { 
            document.getElementById("lnameError").innerHTML = "last name invalid: must contain only letters";
            document.RegisterForm.lname.focus() ;
            success = false;
         }

         // validate email
         if(!validateEmail(email))
         { 
            document.getElementById("emailError").innerHTML = "email invalid";
            document.RegisterForm.email.focus() ;
            success = false;
         }

         // validate gender
         if(!validateGender(gender))
         { 
            document.getElementById("genderError").innerHTML = "kindly select gender";
            document.RegisterForm.gender.focus() ;
            success = false;
         }
         
        return success;
         
      }

      /////////////////////////////////////////////////////////////////////////////////
      /*
      a function to validate user name. 
      it returns true if value is alphabets only and false otherwise
      */
      function validateName(name){
       if(name.match(/^[A-Za-z]+$/))
         return true;
       else
       return false;
      }

      /*
      a function to validate user name. 
      it returns true if value is alphabets only and false otherwise
      */
      function validatePassword(pword){
       if(pword.match(/^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{6,20}$/))
         return true;
       else
       return false;
      }
        
        /*
      a function to validate first name. 
      it returns true if value is alphabets only and false otherwise
      */
      function validateFirstName(fname){ 
       if(fname.match(/^[A-Za-z]+$/))  
         return true;
       else
       return false;
      }
      
      /*
      a function to validate last name. 
      it returns true if value is alphabets only and false otherwise
      */
      function validateLastName(lname){ 
       if(lname.match(/^[A-Za-z]+$/))  
         return true;
       else
       return false;
      }
      
      /*
      a function to validate email. 
      it returns true if value matches email pattern and false otherwise
      */
      function validateEmail(email){ 
       if(email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))  
         return true;
       else
       return false;
      }
   
   /*
      a function to validate gender 
      it returns true if gender value is not none (default value)
      */
      function validateGender(gender){ 
       if(gender != "none")  
         return true;
       else
       return false;
      }

      /*
      a function to validate major  
      it returns true if major value is not none (default value)
      */
      function validateMajor(major){ 
       if(major != "none")  
         return true;
       else
       return false;
      }
      