<?php 

$patientName = $_POST['patientName'];
$doctorName = $_POST['doctorName'];
$departmentName = $_POST['departmentName'];
$phoneNumber = $_POST['phoneNumber'];
$symptoms = $_POST['symptoms'];
$chooseDate = $_POST['chooseDate'];

if ($patientName && $doctorName && $departmentName && $phoneNumber && $symptoms && $chooseDate) {
    echo 
    "
    <style>
    body {
      text-align: center;
      padding: 40px 0;
      background: #EBF0F5;
    }
      h1 {
        color: #88B04B;
        font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
      }
      p {
        color: #404F5E;
        font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
        font-size:20px;
        margin: 0;
      }
    i {
      color: #9ABC66;
      font-size: 100px;
      line-height: 200px;
      margin-left:-15px;
    }
    .card {
      background: white;
      padding: 60px;
      border-radius: 4px;
      box-shadow: 0 2px 3px #C8D0D8;
      display: inline-block;
      margin: 0 auto;
    }
  </style>
  <body>
    <div class='card'>
    <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>
      <i class='checkmark'>✓</i>
    </div>
      <h1>Success</h1> 
      <p>Dear $patientName, we have received your reservation</p><br></br>
      <p> Patient Name: $patientName </p>
      <p> Doctor's Name: $doctorName </p>
      <p> Department: $departmentName </p>
      <p> Date: $chooseDate </p>
    </div>
  </body>
    ";
    } else {
        echo "
        <style>
        body {
          text-align: center;
          padding: 40px 0;
          background: #EBF0F5;
        }
          h1 {
            color: #930401;
            font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
          }
          p {
            color: #404F5E;
            font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
            font-size:20px;
            margin: 0;
          }
        i {
          color: #930401;
          font-size: 100px;
          line-height: 200px;
          margin-left:-15px;
        }
        .card {
          background: white;
          padding: 60px;
          border-radius: 4px;
          box-shadow: 0 2px 3px #C8D0D8;
          display: inline-block;
          margin: 0 auto;
        }
      </style>
      <body>
        <div class='card'>
        <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>
          <i class='checkmark'>✖</i>
        </div>
          <h1>Failure</h1> 
          <p>Some details are missing.<br/> Please fill in all fields.</p>
        </div>
      </body>
        ";
        }
?> 




  <!-- book section -->

  <!-- <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form action="./Functions_PHP/form_Booking_submitted.php" method = "POST">
            <h4>
              BOOK <span>APPOINTMENT</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name </label>
                <input type="text" class="form-control" id="inputPatientName" placeholder="" name = "patient_name">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="doctor_name" class="form-control wide" id="inputDoctorName">
                  <option value="Normal distribution ">Normal distribution </option>
                  <option value="Normal distribution ">Normal distribution </option>
                  <option value="Normal distribution ">Normal distribution </option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="department_name" class="form-control wide" id="inputDepartmentName">
                  <option value="Normal distribution ">Normal distribution </option>
                  <option value="Normal distribution ">Normal distribution </option>
                  <option value="Normal distribution ">Normal distribution </option>
                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" class="form-control" id="inputSymptoms" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end book section -->