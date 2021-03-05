function myFun(){
    var FirstName=document.getElementById('FirstName').value;
    var LastName=document.getElementById('LastName').value;
    var Email=document.getElementById('email').value;
    var MobileNo=document.getElementById('number').value;
      var pattern1="^[a-zA-Z]+$";
      var reg1= new RegExp(pattern1);
      var pattern2="^[a-zA-Z]+$";
      var reg2= new RegExp(pattern2);
      var pattern3="^[a-zA-Z@]"; 
      var reg3 = new RegExp(pattern3);
      var pattern4="^[0-9]{10}$"; 
			var reg4 = new RegExp(pattern4);

   if(reg1.test(FirstName))
      {
        document.getElementById('errFirstName').innerHTML="";
      }
    else
      {
        document.getElementById('errFirstName').innerHTML="Please Enter Valid Name.";
      }
      
   if(reg1.test(FirstName))
      {
        document.getElementById('errLastName').innerHTML="";
      }
    else
      {
        document.getElementById('errLastName').innerHTML="Please Enter Valid LastName.";
      }

      if(reg3.test(Email))
			{
				document.getElementById('errEmail').innerHTML="";
			}
		else
			{
				document.getElementById('errEmail').innerHTML="Please Enter Valid Email.";
      }
      if(reg4.test(MobileNo))
			{
				document.getElementById('errMobile').innerHTML="";
			}
		else
			{
				document.getElementById('errMobile').innerHTML="Please Enter Valid Mobile No.";
			}
  }


