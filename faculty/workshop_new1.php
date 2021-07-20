<?php
  include('session.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
    <meta charset="utf-8">
    <title>Workshop</title><meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
      <!-- bootstrp cdn link -->

    <meta name="theme-color" content="#fafafa">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div>
    <div>
    <form class="form-group" action="workshop_new.php" method="POST" enctype="multipart/form-data">
    
    <h1><div class="login100-form-title">
        Workshop
     </div></h1>
     <div class="formGroup"> 
      <label class="Sdrn">SDRN:<span class="required">*</span></label>
      <input type="text" class="form-control" required name="SDRN" placeholder="enter the number" value="<?php echo $user_check;?>">
    </div>
    <div class="formGroup"> 
      <label class="Name">Name of faculty:<span class="required">*</span></label>
      <input type="text" class="form-control" required name="Name of faculty" placeholder="enter the name" value="<?php echo $login_session; echo" " ;echo $login_sess;?>">
    </div>
	  <div class="formGroup">               
                  <label for="Criteria">Criteria :<span class="required"> *</span></label>
                  <input list="Criteria" class="form-control" id="select-criteria" name="criteria" required/>
                      <datalist id="Criteria">
                          <option value="Workshop">
                          <option value="STTP">  
                          <option value="Training Program">
                          <option value="FDP" >      
                      </datalist>
    </div>
    <div class="formGroup"> 
      <label class="Seminar">Name of Workshop:<span class="required">*</span></label>
      <input type="text" class="form-control" required name="Name of Seminar/Webinar" placeholder="enter the name">

    </div>
    <div class="formGroup"> 
      <label class="event">Sponsorship received for event from:<span class="required">*</span></label>
      <input type="text" class="form-control"name="Sponsor received for event from" required placeholder="enter the name">
    </div>
    <div class="formGroup"> 
      <label class="venue">Venue:<span class="required">*</span></label>
          <input list="all-collage" class="form-control" required id="venue" name="Venue" onchange="changevenue()"><!-- data list of id all-collage is placed and end of body  -->
          <div id="new_venue_box" style="display: none;">
            <input type="text" name="new_venue" id ="new_venue" placeholder=" Enter venue name"  required >
          </div>
          <script>
            function changevenue(){
              var option=(document.getElementById("venue").value);
              if(option=="Other"){
                document.getElementById("new_venue_box").style.display="block";
                var x=(document.getElementById("new_venue").value);
                //document.getElementById("venue").value=x;
              }
              else{
                document.getElementById("new_venue_box").style.display="none";
                document.getElementById("new_venue").defaultValue="NA";                
                
              }
            }
          </script>
    </div>  
          <datalist id="all-collage">
 <!-- copy pasted from result.txt file for searchable dropdown of venue -->
                <option value="Other">
                <option value = "Bharati Vidyapeeth College of Engineering, Belapur, Navi Mumbai">
<option value = "Datta Meghe College of Engineering,�Airoli, Navi Mumbai">
<option value = "Don Bosco Institute of Technology,�Kurla�(West)">
<option value = "Dwarkadas J. Sanghvi College of Engineering,�Vile Parle�West">
<option value = "Fr. Conceicao Rodrigues College of Engineering,�Bandra">
<option value = "Fr. Conceicao Rodrigues Institute of Technology,�Vashi">
<option value = "Institute of Chemical Technology,�Matunga(Autonomous)">
<option value = "Indian Institute of Technology Bombay,�Powai">
<option value = "KC College of Engineering,�Thane�East">
<option value = "K.J. Somaiya College of Engineering,�Vidyavihar">
<option value = "K.J. Somaiya Institute of Engineering and Information Technology,�Sion">
<option value = "Konkan Gyanpeeth College of Engineering,�Karjat">
<option value = "Lokmanya Tilak College of Engineering,�Kopar Khairane, Navi Mumbai">
  <option value = "M. H. Saboo Siddik College of Engineering�-�Byculla">
<option value = "Mahatma Gandhi Mission's College of Engineering and Technology,�Kamothe">
<option value = "NMIMS�Narsee Monjee Institute of Management Studies,�Juhu">
<option value = "Padmabhushan Vasantdada Patil Pratishthan's College of Engineering,�Sion">
<option value = "Pillai College of Engineering,�Panvel">
<option value = "Rajiv Gandhi Institute of Technology, Mumbai">
<option value = "Ramrao Adik Institute of Technology,�Nerul">
<option value = "Rizvi College of Engineering,�Bandra�(West)">
<option value = "Rustomjee Academy for Global Careers,�Thane">
<option value = "Sardar Patel College of Engineering�-�Andheri(West)">
<option value = "Sardar Patel Institute of Technology�-�Andheri(West)">
<option value = "Shah and Anchor Kutchhi Engineering College,�Chembur">
<option value = "Shivajirao S. Jondhale College of Engineering,�Dombivali">
<option value = "Sindhudurg Shikshan Prasarak Mandal's College of Engineering,�Kankavli">
<option value = "SIES Graduate School of Technology,�Nerul">
<option value = "St. Francis Institute of Technology,�Borivali">
<option value = "Terna Engineering College,�Nerul,�Navi Mumbai">
<option value = "Thakur College of Engineering and Technology,�Thakur Village,�Kandivali">
<option value = "Thadomal Shahani Engineering College�Mumbai,�Bandra�(W)">
<option value = "Vidyalankar Institute of Technology,�Wadala(E),Mumbai">
<option value = "Vidyavardhini College of Engineering and Technology,�Vasai Road(W)">
<option value = "Usha Mittal Institute of Technology,�Santacruz(W),�Mumbai">
<option value = "Veermata Jijabai Technological Institute,�Matunga,�Mumbai">
<option value = "Vivekanand Education Society's Institute of Technology�Mumbai, Chembur(E)">
<option value = "Watumull Institute of Electronics Engineering and Computer Technology,�Ulhasnagar">
<option value = "Xavier Institute of Engineering�Mahim�(West)">
<option value = "Yadavrao Tasgaonkar Institute of Engineering & Technology�(YTIET),�Bhivpuri">
 </datalist>
      <label class="date">DATE<span class="required">*</span></label>
    <div class="formGroup"> 
      <label for="From">From:</label>
      <input id="startDate"  class="form-control" type="date" required ata-date="" name="Date_From" data-date-format="DD/MM/YYYY" placeholder="DD/MM/YYYY" onchange="cal()">
    </div>
    <div class="formGroup"> 
      <label for="To">To:</label>
      <input id="endDate"  class="form-control" type="date" required ata-date="" name="Date_To" data-date-format="DD/MM/YYYY" placeholder="DD/MM/YYYY" onchange="cal()">
    </div>
    <div class="formGroup"> 
      <label class="days">No.of days:<span class="required">*</span></label>
      <input disabled id="noOfDays" class="form-control" type="number" required name="Days"  placeholder="enter the no.of days" >
    </div>
  <script type="text/javascript">

    function cal(){
 var start=new Date(document.getElementById("startDate").value);
 var end =new Date(document.getElementById("endDate").value);

 var noday=document.getElementById("noOfDays");
 noday.value = ((end-start)/(24*3600*1000))+1;
if(noday.value<= 0)
    {
      alert("Please select valid end date ");
      document.getElementById("noOfDays").value="00";
    }
 } 
</script>
<div class="formGroup">   
  <label class="Organiser">Organiser:<span class="required">*</span></label>
  <input type="text" class="form-control" required name="Organiser" value="" placeholder="enter the name">
</div>
<div class="formGroup"> 
  <label class="choose">Level:<span class="required">*</span></label>
    <select id="Choose" class="form-control" required id="Choose" name="Local/State/National/International">
     <option value="local">Local</option>
     <option value="state">State</option>
     <option value="National">National</option>
     <option value="International">International</option>
   </select>
</div>
<div class="formGroup"> 
  <label class="Funding">Source of Funding:<span class="required">*</span></label>
   <select id="Source"  class="form-control" name="Source of Funding" onchange="funding(this);">
     <option disabled selected value> -- select an option -- </option>
     <option value="Self">Self</option>
     <option value="Other">Other
     </option>        
   </select>

   <div id="other_source_box">
     <input type="text"  class="form-control" id="other_source" name="Other_source" placeholder="enter Source of Funding" style="display: none;" >
  </div>
</div>
<script type="text/javascript">
  function funding(src){
      if(src.value=="Other"){
        document.getElementById("other_source_box").style.display = "block";
       document.getElementById("other_source").style.display = "block";
       document.getElementById("amt").defaultValue="";
       
       } else {
        document.getElementById("other_source_box").style.display = "none";
        document.getElementById("other_source").style.display = "none";
        document.getElementById("amt").defaultValue="000";

       }

  }
 </script>
<div class="formGroup"> 
  <label class="Amount">Registration Amount:<span class="required">*</span></label>
    <input type="number"  class="form-control" required name="Registration Amount" value="" placeholder="enter the amount">
</div>
<div class="formGroup"> 
    <label class="Amount">Amount funded:<span class="required">*</span></label>
   <input type="number"  class="form-control" name="Amount funded" id="amt" value="" placeholder="enter the amount">
</div>
<div class="formGroup"> 
  <label class="Allowance">Travelling Allowance:<span class="required">*</span></label>
   <select  class="form-control" id="TA" name="TA" onclick="allowance(this);" >
     <option value="No">NA</option>
     <option value="Yes">YES</option>
   </select>
  <div id="Amt">
    <input type="number"  class="form-control" required name="TA1" placeholder="enter the amount">
  </div>
</div>
  <script type="text/javascript">
      function allowance(amt){
        if(amt.value=="Yes"){
          document.getElementById("Amt").style.display="block";
        }else{
          document.getElementById("Amt").style.display="none";
          document.getElementById("Amt").defaultValue="000";
        }
      }
  
  </script>
 <input  class="form-control" type="file" name="file" size="50" required /><br>
<input type="submit" class="btn btn-danger" name="Next" action="">  
 <input type="reset" class="btn btn-danger" value="Clear">
 <a href="welcome.php" class="btn btn-danger">Go back to homepage</a>



    </form>
    </div>
   </div>
  </body>
</html>
<style>



  /*//////////////////////////////////////////////////////////////////
  [ FONT ]*/
  
  @font-face {
    font-family: Poppins-Regular;
    src: url('../fonts/poppins/Poppins-Regular.ttf'); 
  }
  
  @font-face {
    font-family: Poppins-Medium;
    src: url('../fonts/poppins/Poppins-Medium.ttf'); 
  }
  
  @font-face {
    font-family: Montserrat-Medium;
    src: url('../fonts/montserrat/Montserrat-Medium.ttf'); 
  }
  
  @font-face {
    font-family: Montserrat-SemiBold;
    src: url('../fonts/montserrat/Montserrat-SemiBold.ttf'); 
  }
  
  /*//////////////////////////////////////////////////////////////////
  [ RESTYLE TAG ]*/
  
  * {
    margin: 0px; 
    padding: 0px; 
    box-sizing: border-box;
  }
      /* for compulsory indector stars  */
      .required {
          color:red;
      }
  body, html {
    height: 100%;
    font-family: Poppins-Regular, sans-serif;
      background-color:antiquewhite;
  }
  
  /*---------------------------------------------*/
  a {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
  }
  
  a:focus {
    outline: none !important;
  }
  
  a:hover {
    text-decoration: none;
    color: #fc00ff;
    border-color: #fc00ff;
  }
  
  /*---------------------------------------------*/
  h1,h2,h3,h4,h5,h6 {
    margin: 0px;
  }
  
  p {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
  }
  
  ul, li {
    margin: 0px;
    list-style-type: none;
  }
  
  
  /*---------------------------------------------*/
  input {
    outline: none;
    border: solid 1px;
  }
  
  textarea {
    outline: none;
    border: none;
  }
  
  textarea:focus, input:focus {
    border-color: transparent !important;
  }
  
  input:focus::-webkit-input-placeholder { color:transparent; }
  input:focus:-moz-placeholder { color:transparent; }
  input:focus::-moz-placeholder { color:transparent; }
  input:focus:-ms-input-placeholder { color:transparent; }
  
  textarea:focus::-webkit-input-placeholder { color:transparent; }
  textarea:focus:-moz-placeholder { color:transparent; }
  textarea:focus::-moz-placeholder { color:transparent; }
  textarea:focus:-ms-input-placeholder { color:transparent; }
  
  input::-webkit-input-placeholder { color: #555555;}
  input:-moz-placeholder { color: #555555;}
  input::-moz-placeholder { color: #555555;}
  input:-ms-input-placeholder { color: #555555;}
  
  textarea::-webkit-input-placeholder { color: #555555;}
  textarea:-moz-placeholder { color: #555555;}
  textarea::-moz-placeholder { color: #555555;}
  textarea:-ms-input-placeholder { color: #555555;}
  
  label {
    display: block;
    margin: 0;
  }
  
  /*---------------------------------------------*/
  button {
    outline: none !important;
    border: none;
    background: transparent;
  }
  
  button:hover {
    cursor: pointer;
  }
  
  iframe {
    border: none !important;
  }
  
  
  /*//////////////////////////////////////////////////////////////////
  [ Utility ]*/
  .txt1 {
    font-family: Montserrat-SemiBold;
    font-size: 16px;
    color: #555555;
    line-height: 1.5;
  }
  
  .txt2 {
    font-family: Poppins-Regular;
    font-size: 14px;
    color: #999999;
    line-height: 1.5;
  }
  
  .bo1 {border-bottom: 1px solid #999999;}
  
  /*//////////////////////////////////////////////////////////////////
  [ login ]*/
  
  .limiter {
    width: 100%;
    margin: 0 auto;
  }
  
  .container-login100 {
    width: 100%;  
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;;
  }
  
  
  .wrap-login100 {
    width: 680px;
    background: #fff;
    border-radius: 10px;
    position: relative;
  }
  
  
  /*==================================================================
  [ Form ]*/
  
  .login100-form {
    width: 100%;
  }
  
  .login100-form-title {
    width: 100%;
    display: block;
    font-family: Montserrat-Medium;
    font-size: 39px;
    color: #555555;
    line-height: 1.2;
    text-align: center;
  }
  
  /*------------------------------------------------------------------
  [ Button sign in with ]*/
  .btn-face,
  .btn-google {
    font-family: Montserrat-SemiBold;
    font-size: 18px;
    line-height: 1.2;
  
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px;
    width: calc((100% - 20px) / 2);
    height: 70px;
    border-radius: 10px;
    box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
    -o-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
    -ms-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    position: relative;
    z-index: 1;
  }
  
  .btn-google::before,
  .btn-face::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    top: 0;
    left: 0;
    background: #a64bf4;
    background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
    background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
    background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
    background: linear-gradient(45deg, #00dbde, #fc00ff);
    opacity: 0;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  }
  
  .btn-face {
    color: #fff;
    background-color: #3b5998;
  }
  
  .btn-face i {
    font-size: 30px;
    margin-right: 17px;
    padding-bottom: 3px;
  }
  
  .btn-google {
    color: #555555;
    background-color: #fff;
  }
  
  .btn-google img {
    width: 30px;
    margin-right: 15px;
    padding-bottom: 3px;
  }
  
  .btn-face:hover:before,
  .btn-google:hover:before {
    opacity: 1;
  }
  
  .btn-face:hover,
  .btn-google:hover {
    color: #fff;
  }
  
  
  /*------------------------------------------------------------------
  [ Input ]*/
  
  .wrap-input100 {
    width: 100%;
    position: relative;
    background-color: #f7f7f7;
    border: 1px solid #e6e6e6;
    border-radius: 10px;
  }
  
  
  /*---------------------------------------------*/
  .input100 {
    font-family: Poppins-Regular;
    color: #333333;
    line-height: 1.2;
    font-size: 18px;
  
    display: block;
    width: 100%;
    background: transparent;
    height: 60px;
    padding: 0 20px;
  }
  /*------------------------------------------------------------------
  [ Focus Input ]*/
  
  .focus-input100 {
    position: absolute;
    display: block;
    width: calc(100% + 2px);
    height: calc(100% + 2px);
    top: -1px;
    left: -1px;
    pointer-events: none;
    border: 1px solid #fc00ff;
    border-radius: 10px;
  
    visibility: hidden;
    opacity: 0;
  
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  
    -webkit-transform: scaleX(1.1) scaleY(1.3);
    -moz-transform: scaleX(1.1) scaleY(1.3);
    -ms-transform: scaleX(1.1) scaleY(1.3);
    -o-transform: scaleX(1.1) scaleY(1.3);
    transform: scaleX(1.1) scaleY(1.3);
  }
  
  .input100:focus + .focus-input100 {
    visibility: visible;
    opacity: 1;
  
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
  }
  
  .eff-focus-selection {
    visibility: visible;
    opacity: 1;
  
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
  }
  
  
  /*------------------------------------------------------------------
  [ Button ]*/
  .container-login100-form-btn {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
  }
  
  .login100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 60px;
    background-color: #333333;
    border-radius: 10px;
  
    font-family: Poppins-Medium;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
  
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    position: relative;
    z-index: 1;
  }
  
  .login100-form-btn::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    top: 0;
    left: 0;
    background: #a64bf4;
    background: -webkit-linear-gradient(45deg, #93167E, #b00c50);
    background: -o-linear-gradient(45deg, #93167E, #b00c50);
    background: -moz-linear-gradient(45deg, #93167E, #b00c50);
    background: linear-gradient(45deg, #93167E, #b00c50);
    opacity: 0;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  }
  
  .login100-form-btn:hover:before {
    opacity: 1;
  }
  
  
  /*------------------------------------------------------------------
  [ Alert validate ]*/
  
  .validate-input {
    position: relative;
  }
  
  .alert-validate::before {
    content: attr(data-validate);
    position: absolute;
    max-width: 70%;
    background-color: #fff;
    border: 1px solid #c80000;
    border-radius: 2px;
    padding: 4px 25px 5px 10px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 12px;
    pointer-events: none;
  
    font-family: Poppins-Regular;
    color: #c80000;
    font-size: 14px;
    line-height: 1.4;
    text-align: left;
  
    visibility: hidden;
    opacity: 0;
  
    -webkit-transition: opacity 0.4s;
    -o-transition: opacity 0.4s;
    -moz-transition: opacity 0.4s;
    transition: opacity 0.4s;
  }
  
  .alert-validate::after {
    content: "\f12a";
    font-family: FontAwesome;
    display: block;
    position: absolute;
    color: #c80000;
    font-size: 18px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 18px;
  }
  
  .alert-validate:hover:before {
    visibility: visible;
    opacity: 1;
  }
  
  @media (max-width: 992px) {
    .alert-validate::before {
      visibility: visible;
      opacity: 1;
    }
  }
  
  
  /*//////////////////////////////////////////////////////////////////
  [ Responsive ]*/
  @media (max-width: 768px) {
    .wrap-login100 {
      padding-left: 60px;
      padding-right: 60px;
    }
  
  @media (max-width: 576px) {
    .wrap-login100 {
      padding-left: 15px;
      padding-right: 15px;
    }
  
    .btn-face,
    .btn-google {
      width: 100%;
    }
  }</style>
  
