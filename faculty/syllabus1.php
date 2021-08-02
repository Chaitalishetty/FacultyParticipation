<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<main>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Syllabus</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- bootstrp cdn link -->
    <meta name="theme-color" content="#fafafa">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>

  <body>
    <div>
      <form class="form-group" action="syllabus.php" method="post" enctype="multipart/form-data">

        <h1 class="h1">
          <div class="login100-form-title">Syllabus Settings<div>
        </h1>
        <div class="formGroup">
          <label class="SDRN">SDRN: <span class="required">*</span></label>
          <input type="text" class="form-control" required name="SDRN" placeholder="SDRN" value="<?php echo $user_check; ?>" readonly>
        </div>

        <div class="formGroup">
          <label class="name" for="name">Name of the faculty :<span class="required">*</span></label>
          <input type="text" class="form-control" name="Name" placeholder="Enter the name" required readonly value="<?php echo $login_session;
                                                                                                                    echo " ";
                                                                                                                    echo $login_sess; ?>" />
        </div>

        <div class="formGroup">
          <label id="university" for="university">Name of the university :<span class="required">*</span></label>
          <input type="text" class="form-control" name="University" placeholder="University" required>
        </div>

        <div class="formGroup">
          <label id="subject" for="subject">Subject :<span class="required">*</span></label>
          <input type="text" class="form-control" name="Subject" placeholder="Enter the subject" required />
        </div>

        <div class="formGroup">
          <label class="Semester" id="Semester" for="Semester">Semester :<span class="required">*</span></label>
          <select type="dropdown" class="form-control" name="Semester" required>
            <option disabled selected value>Select sem</option>
            <option value="1">I</option>
            <option value="2">II</option>
            <option value="3">III</option>
            <option value="4">IV</option>
            <option value="5">V</option>
            <option value="6">VI</option>
            <option value="7">VII</option>
            <option value="8">VIII</option>
          </select>
        </div>
        <div class="formGroup">
          <label class="venue">Venue:<span class="required">*</span></label>
          <input list="all-collage" class="form-control" required id="venue" name="Venue" onchange="changevenue()"><!-- data list of id all-collage is placed and end of body  -->
        </div>
        <div id="new_venue_box" class="formGroup" style="display: none;">
          <input type="text" name="new_venue" id="new_venue" placeholder=" Enter venue name" required><br><br>
        </div>
        <script>
          function changevenue() {
            var option = (document.getElementById("venue").value);
            if (option == "Other") {
              document.getElementById("new_venue_box").style.display = "block";
              var x = (document.getElementById("new_venue").value);
              //document.getElementById("venue").value=x;
            } else {
              document.getElementById("new_venue_box").style.display = "none";
              document.getElementById("new_venue").defaultValue = "NA";

            }
          }
        </script>







        <div class="formGroup">
          <label id="date" for="date">Date :<span class="required">*</span></label>
          <input type="date" class="form-control" name="Date" data-date="" data-date-format="DD/MM/YYYY" placeholder="DD/MM/YYYY">
        </div>
        <div>
          <input type="file" class="form-control" name="file" size="50" /><br>
          <input type="submit" class="btn btn-danger" name="Next" action="">
          <input type="reset" class="btn btn-danger" value="Clear">
          <a href="welcome.php" class="btn btn-danger">Go back to homepage</a>


        </div>
      </form>

      <datalist id="all-collage">
        <option value="Other">
        <option value="Bharati Vidyapeeth College of Engineering, Belapur, Navi Mumbai">
        <option value="Datta Meghe College of Engineering, Airoli, Navi Mumbai">
        <option value="Don Bosco Institute of Technology, Kurla (West)">
        <option value="Dwarkadas J. Sanghvi College of Engineering, Vile Parle West">
        <option value="Fr. Conceicao Rodrigues College of Engineering, Bandra">
        <option value="Fr. Conceicao Rodrigues Institute of Technology, Vashi">
        <option value="Institute of Chemical Technology, Matunga(Autonomous)">
        <option value="Indian Institute of Technology Bombay, Powai">
        <option value="KC College of Engineering, Thane East">
        <option value="K.J. Somaiya College of Engineering, Vidyavihar">
        <option value="K.J. Somaiya Institute of Engineering and Information Technology, Sion">
        <option value="Konkan Gyanpeeth College of Engineering, Karjat">
        <option value="Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai">
        <option value="M. H. Saboo Siddik College of Engineering - Byculla">
        <option value="Mahatma Gandhi Mission's College of Engineering and Technology, Kamothe">
        <option value="NMIMS Narsee Monjee Institute of Management Studies, Juhu">
        <option value="Padmabhushan Vasantdada Patil Pratishthan's College of Engineering, Sion">
        <option value="Pillai College of Engineering, Panvel">
        <option value="Rajiv Gandhi Institute of Technology, Mumbai">
        <option value="Ramrao Adik Institute of Technology, Nerul">
        <option value="Rizvi College of Engineering, Bandra (West)">
        <option value="Rustomjee Academy for Global Careers, Thane">
        <option value="Sardar Patel College of Engineering - Andheri(West)">
        <option value="Sardar Patel Institute of Technology - Andheri(West)">
        <option value="Shah and Anchor Kutchhi Engineering College, Chembur">
        <option value="Shivajirao S. Jondhale College of Engineering, Dombivali">
        <option value="Sindhudurg Shikshan Prasarak Mandal's College of Engineering, Kankavli">
        <option value="SIES Graduate School of Technology, Nerul">
        <option value="St. Francis Institute of Technology, Borivali">
        <option value="Terna Engineering College, Nerul, Navi Mumbai">
        <option value="Thakur College of Engineering and Technology, Thakur Village, Kandivali">
        <option value="Thadomal Shahani Engineering College Mumbai, Bandra (W)">
        <option value="Vidyalankar Institute of Technology, Wadala(E),Mumbai">
        <option value="Vidyavardhini College of Engineering and Technology, Vasai Road(W)">
        <option value="Usha Mittal Institute of Technology, Santacruz(W), Mumbai">
        <option value="Veermata Jijabai Technological Institute, Matunga, Mumbai">
        <option value="Vivekanand Education Society's Institute of Technology Mumbai, Chembur(E)">
        <option value="Watumull Institute of Electronics Engineering and Computer Technology, Ulhasnagar">
        <option value="Xavier Institute of Engineering Mahim (West)">
        <option value="Yadavrao Tasgaonkar Institute of Engineering & Technology (YTIET), Bhivpuri">
      </datalist>
      <div>
  </body>
</main>

</html>

<style>
  body,
  html {
    height: 100%;
    font-family: Poppins-Regular, sans-serif;
    background-color: antiquewhite;
    line-height: 40px;
    font-size: 20px;
    position: relative;
    left: 60px
  }
</style>