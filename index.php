<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multistep form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<form class="cube design" method="post" action="./db.php">
    <div class="cube_side cube_side-front design_page" id="firstlastdiv">
      <h3 class="design_heading">Registration</h3>
      <input placeholder="First Name" class="design_input"  required  name="fname"id="fname">
      <input placeholder="Last Name" class="design_input" required name="lname" id="lname">
      <button type="button" class="design_btn cube_next" id ="total_name">
        Next 
      </button>
    </div>
    <div class="cube_side design_page">
      <h3 class="design_heading">Registration</h3>
      <input placeholder="E-mail" class="design_input"  required name="emailid" id ="email">
      <button type="button" class="design_btn design_btn-half cube_prev">
        Previous
      </button>
      <button type="button" class="design_btn design_btn-half cube_next" id="emails">
        Next
      </button>
    </div>
    <div class="cube_side design_page">
      <h3 class="design_heading">Registration</h3>
      <input type="tel" placeholder="Phone No" class="design_input"  required  name="phn" id ="phn">
      
      <button type="button" class="design_btn design_btn-half cube_prev">
        Previous
      </button>
      <button type="button" class="design_btn design_btn-half cube_next"  id ="phnnext">
        Next
      </button>
      
    </div>
    <div class="cube_side design_page" id="passworddiv">
      <h3 class="design_heading">Registration</h3>
      <input placeholder="Password" class="design_input"  required name="pswd1" id ="passw1"type="password">
      <input placeholder="Confirm Password" class="design_input"  required name="pswd" id ="passw2"type="password">
      <button type="button" class="design_btn design_btn-half cube_prev">
        Previous
      </button>
      <button type="button" class="design_btn design_btn-half cube_next" id ="pswdnext" >
        Next
      </button>
      
    </div>
    <div class="cube_side design_page"><h3 class="design_heading">Confirm Your Details</h3>
    <div class="row">
        <div class="col-sm-10" >
          <input type="text" placeholder="First Name" name="f_name" class="design_input" readonly id="confirmfname" >
        </div> 
        <div class="col-sm-2" >
         <button type="button" class="design" > edit</button>
        </div>
        <div class="col-sm-10" >
           <input type="text" placeholder="Last Name" name="l_name" class="design_input" readonly id="confirmlname">
        </div>
        <div class="col-sm-2" >
            <button type="button" class="design">edit</button>
        </div>
        <div class="col-sm-10" >
      <input type="text" placeholder="E-mail" class="design_input" name="f_email" readonly id="confirmemail">
        </div>
        <div class="col-sm-2" >
         <button type="button" class="design"> edit</button>
        </div>
        <div class="col-sm-10" >
      <input type="tel" placeholder="Phone No" class="design_input" name="f_pno" readonly id="confirmpno"> 
        </div>
        <div class="col-sm-2" >
        <button type="button" class="design"> edit</button>
        </div>
        <div class="col-sm-10" >
            <input type="text" placeholder="Password" class="design_input" name="f_pass" readonly id="confirmpass"> 
              </div>
              <div class="col-sm-2" >
              <button type="button" class="design"> edit</button>
              </div>
      <!-- <button type="button" class="design_btn design_btn-half cube_prev">
        Previous
      </button> -->
      <input type="submit" id="submit12" class="btn design_btn design_btn-half cube_submit">
      <!-- <button type="submit" id="submit12" class="design_btn design_btn-half cube_submit">
       Submit
      </button> -->
        </div>
   </div>
   </form>
<!-- <div class="instruction"><a target="_blank" class="instruction_link" href="https://medium.com/@bugwheels94/how-to-create-a-3d-cubical-form-in-html-css-bem-and-js-ff46f972c072">How To Use</a></div> -->

<script>
    $(document).ready(function(){
     $("#submit12").on("click",function(){
         alert("hello");
        var fname=$("#f_name").val();
        var lname=$("#l_name").val();
        var password=$("#f_pass").val();
        var email=$("#f_email").val();
        var phone=$("#f_pno").val();
        // var status=$("#n_msg").val();

      if(name=="" || email=="" || phone==""){
        // alert("Enter all the details")
      }
      else if(phone.length<10 || phone.length>10 ){
        // alert("enter 10 digit number")
      }
    //    else{
    //     alert("success")
    //   }
     })
    });
</script>

<script>
  var initForm = function(classOfForm) {
  var cube = document.querySelector(classOfForm);
  var sides = cube.querySelectorAll('.cube_side');
  var currentIndex = 0;
  var maxHeight = 0, maxWidth = 0;
  var flag = false;
  sides.forEach(function(e) {
    maxHeight = Math.max(e.offsetHeight, maxHeight);
    maxWidth = Math.max(e.offsetWidth, maxWidth);
  })
  cube.style.height = maxHeight + 'px'
  cube.style.width = maxWidth + 'px'
  var render = function(prevIndex, fromClass, toClass, cond) {
    if (cond) {
      sides[prevIndex].className =
        sides[prevIndex]
          .className
          .replace(new RegExp(' cube_side-front', 'g'), ''); 
      sides[prevIndex].className += fromClass
    }
    sides[currentIndex].className = sides[currentIndex]
        .className
        .replace(new RegExp(toClass, 'g'), '');      
    sides[currentIndex].className += ' cube_side-front';      
  }
  function goToNext () {
    // alert(currentIndex)
        if(currentIndex === 0){
            var F_name = $("#fname").val();
            var L_name =$("#lname").val();
            // alert(L_name)
            if(F_name =="" || L_name=="" || typeof F_name === "undefined" || typeof L_name === "undefined")
            {
                alert("Enter full name")
                return false
            }
            else{
                localStorage.setItem("Firstname",F_name)
                localStorage.setItem("Lastname",L_name)

            }
        }
        else if(currentIndex === 1){
            var email = $("#email").val();
            var pattern1 = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/
            console.log(pattern1.test(email))
            if(email =="")
            {
                alert("Enter  email")
                return false
            }
            else if(!pattern1.test(email))
            
            {
                alert("Enter valid email")
                return false
            }
            else{
                localStorage.setItem("email",email)
            }
        }
        else if(currentIndex === 2)
        {
            var phn = $("#phn").val();
            var phnpattern =/^\(?([6-9]{1})\)?[-. ]?([0-9]{9})$/
            if(phn ==""||(!phnpattern.test(phn)))

            {
                alert("Enter proper phone number")
                return false
            }
            else{
                localStorage.setItem("phone",phn)
            }
        }
        else if(currentIndex === 3)
        {
           var pswd = $("#passw1").val();
           var pswd1 = $("#passw2").val();
           var pattern = /^(?=.*[a-z])[A-Za-z0-9\d=!\-@._*]+$/
           if(pswd == ""||pswd1 ==""||pswd.length <8 ||pswd != pswd1||(!pattern.test(pswd)))
           {
            alert ("Enter correct pswd")
            return false
           }
           else{
            localStorage.setItem("password",pswd)
           }
        }
        
        
        
      if (sides.length === currentIndex+1) return;
      currentIndex++;
      render(currentIndex - 1,  ' cube_side-left',  ' cube_side-right', currentIndex - 1 >= 0);
  }
  function goToPrev () {
      if (0 === currentIndex) return;
      currentIndex--;
      render(currentIndex + 1, ' cube_side-right',  ' cube_side-left', currentIndex + 1 < sides.length);
  }
  cube.querySelectorAll('.cube_next').forEach(function(e) {
    e.addEventListener('click', goToNext)
  })
  cube.querySelectorAll('.cube_prev').forEach(function(e) {
    e.addEventListener('click', goToPrev);
  })
//   return {
//     next: goToNext,
//     prev: goToPrev
//   }
}

var form = initForm('.cube')


</script>

 <!-- <script>

  $(document).ready(function(){
      $("#pswdnext").click(function(){
        var password =  $("#passw1").val();
        // alert(password)
        var confrimpswd = $("#passw2").val();
        // var pattren = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?.*[@#%_)(!]{8,15}$/;
       var pattern = /^(?=.*[a-z])[A-Za-z0-9\d=!\-@._*]+$/;
       if((password=="")||(confrimpswd="")){
            alert("please enter all details")
            return false
        }
       
       

        // if(!pattern.test(password))
        // {
        //     alert("Password should be more than 8 charcters")
        //     return false
        // }
        if(password!=confrimpswd){
            alert("Password dosent match")
            return false
           
        }
       else{
        goToNext ()
       }
        })

//    else if(password.length < 8)
// {
//     alert ("Password should be more than 8 charcters") 
//     return false
// } 


//     else if(!pattern.test(password))
//     {
// alert("PLs enter again")
//     }
    // else if(!pattern.test(password))
    //     {
    // alert("PLs enter again")
    // return false
    //     }
    // else (password != confrimpswd)
    // {
    // alert("password doesn't match")
    // return false
    // }
    
       });
  // });

   


        // $(document).ready(function(){
        //    $("#phnnext").click(function(){
        //     var phone = $("#phn").val();
        // // alert(phone)
        //     var phnpattern = /[6-9]{1}[0-9]{9}/;
        //     if(!phnpattern.test(phone))
        //     {
        //         alert("Enter correct format")
        //         return false
             
        //     }
        //    })
        // })
  
   
//      $(document).ready(function(){
//         $("#emails").click(function(){
//             var em = $("#email").val();
//             // alert(em)
//     var pattern1 = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,3}\b$/i;
// //var pattern1 = / ^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$/
//             if(!pattern1.test(em))
// {
   
//   alert('not a valid e-mail address');
//   return false
  
// }

//         })
//      });
   
    </script>  -->
    <!-- <script>
    function checkPassword() {
        password1 = passw1.value;
        password2 = passw2.value;
        alert(password1)
        alert(password2)
        var displaying=document.getElementById("passworddiv")
        // If password not entered
        if (password1 == ''){
            alert ("Please enter Password");
            
            displaying.style.display="block";
            return false;
        }   
        // If confirm password not entered
        else if (password2 == ''){
            alert ("Please enter confirm password");
            displaying.style.display="block";
            return false;
        }
        // If Not same return False.  
        else if (password1 != password2) {
                    alert ("\nPassword did not match: Please try again...")
                    displaying.style.display="block";
                    return false;
                }
  
                // If same return True.
                else{
                    alert("Password Match: Welcome to GeeksforGeeks!")
                    goToNext ()
                    // return true;
                }
            }  
    </script> -->


<script>
        $(document).ready(function(){
            $("#pswdnext").on("click",function(){

           
            var firstname=localStorage.getItem("Firstname")
            var lastname=localStorage.getItem("Lastname")
            var email=localStorage.getItem("email")
            var phone=localStorage.getItem("phone")
            var password=localStorage.getItem("password")

            $("#confirmfname").attr("value",firstname);
            $("#confirmlname").attr("value",lastname);
            $("#confirmemail").attr("value",email);
            $("#confirmpno").attr("value",phone);
            $("#confirmpass").attr("value",password);
            
        localStorage.clear();


        })
        })
</script>