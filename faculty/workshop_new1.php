<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta charset="utf-8">
  <title>Workshop</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
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

        <h1>
          <div class="login100-form-title">
          WORKSHOPS - STTP - FDP
          </div>
        </h1>
        <div class="formGroup">
          <label class="Sdrn">SDRN:<span class="required">*</span></label>
          <input type="text" readonly class="form-control" required name="SDRN" placeholder="enter the number" value="<?php echo $user_check; ?>">
        </div>
        <div class="formGroup">
          <label class="Name">Name of faculty:<span class="required">*</span></label>
          <input type="text" class="form-control" required name="Name of faculty" placeholder="enter the name" value="<?php echo $login_session;
                                                                                                                      echo " ";
                                                                                                                      echo $login_sess; ?>" readonly>
        </div>
        <div class="formGroup">
          <label for="Criteria">Criteria :<span class="required"> *</span></label>
          <input list="Criteria" class="form-control" id="select-criteria" name="criteria" required />
          <datalist id="Criteria">
            <option value="Workshop">
            <option value="STTP">
            <option value="Training Program">
            <option value="FDP">
          </datalist>
        </div>
        <div class="formGroup">
          <label class="Seminar">Name of Workshop:<span class="required">*</span></label>
          <input type="text" class="form-control" required name="Name of Seminar/Webinar" placeholder="enter the name">

        </div>
        <div class="formGroup">
          <label class="event">Sponsorship received for event from:<span class="required">*</span></label>
          <input type="text" class="form-control" name="Sponsor received for event from" required placeholder="enter the name">
        </div>
        <div class="formGroup">
          <label class="venue">Venue:<span class="required">*</span></label>
          <input list="all-collage" class="form-control" required id="venue" name="Venue" onchange="changevenue()"><!-- data list of id all-collage is placed and end of body  -->
          <div id="new_venue_box" style="display: none;">
            <input type="text" name="new_venue" id="new_venue" placeholder=" Enter venue name" required>
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
        </div>
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
        <label class="date">DATE<span class="required">*</span></label>
        <div class="formGroup">
          <label for="From">From:</label>
          <input id="startDate" class="form-control" type="date" required ata-date="" name="Date_From" data-date-format="DD/MM/YYYY" placeholder="DD/MM/YYYY">
        </div>
        <div class="formGroup">
          <label for="To">To:</label>
          <input id="endDate" class="form-control" type="date" required ata-date="" name="Date_To" data-date-format="DD/MM/YYYY" placeholder="DD/MM/YYYY" onchange="cal()">
        </div>
        <div class="formGroup">
          <label class="days">No.of days:<span class="required">*</span></label>
          <input readonly id="noOfDays" class="form-control" type="number" name="Days" placeholder="enter the no.of days">
        </div>
        <script type="text/javascript">
          function cal() {
            var start = new Date(document.getElementById("startDate").value);
            var end = new Date(document.getElementById("endDate").value);

            var noday = document.getElementById("noOfDays");
            noday.value = ((end - start) / (24 * 3600 * 1000)) + 1;
            if (noday.value <= 0) {
              alert("Please select valid end date ");
              document.getElementById("noOfDays").value = "00";
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
          <select id="Source" class="form-control" name="Source of Funding" onchange="funding(this);">
            <option disabled selected value> -- select an option -- </option>
            <option value="Self">Self</option>
            <option value="Other">Other
            </option>
          </select>

          <div id="other_source_box">
            <input type="text" class="form-control" id="other_source" name="Other_source" placeholder="enter Source of Funding" style="display: none;">
          </div>
        </div>
        <script type="text/javascript">
          function funding(src) {
            if (src.value == "Other") {
              document.getElementById("other_source_box").style.display = "block";
              document.getElementById("other_source").style.display = "block";
              document.getElementById("amt").defaultValue = "";

            } else {
              document.getElementById("other_source_box").style.display = "none";
              document.getElementById("other_source").style.display = "none";
              document.getElementById("amt").defaultValue = "000";

            }

          }
        </script>
        <div class="formGroup">
          <label class="Amount">Registration Amount:<span class="required">*</span></label>
          <input type="number" class="form-control" required name="Registration Amount" value="" placeholder="enter the amount">
        </div>
        <div class="formGroup">
          <label class="Amount">Amount funded:<span class="required">*</span></label>
          <input type="number" class="form-control" name="Amount funded" id="amt" value="" placeholder="enter the amount">
        </div>
        <div class="formGroup">
          <label class="Allowance">Travelling Allowance:<span class="required">*</span></label>
          <select class="form-control" id="TA" name="TA" onclick="allowance(this);">
            <option value="NA">NA</option>
            <option value="YES">YES</option>
          </select>
          <div id="Amt" style="display:none;">
            <input type="number" class="form-control" name="TA1" placeholder="enter the amount">
          </div>
        </div>
        <script type="text/javascript">
          function allowance(amt) {
            amt_box = document.getElementById("Amt");
            if (amt.value == "YES") {
              amt_box.style.display = "block";
            } else {
              amt_box.style.display = "none";
            }
          }
        </script>

        <input class="form-control" type="file" name="file" size="50" required /><br>
        <input type="submit" class="btn btn-danger" name="Next" action="">
        <input type="reset" class="btn btn-danger" value="Clear">
        <a href="welcome.php" class="btn btn-danger">Go back to homepage</a>

      </form>
    </div>
  </div>
</body>

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