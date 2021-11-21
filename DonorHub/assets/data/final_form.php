<?php
defined('ABSPATH') || die("<br><center><h1>You can't access this site</h1></center>");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap");

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      align-items: center;
      background: #9fbccd;
      color: rgba(0, 0, 0, 0.8);
      display: grid;
      font-family: "Montserrat", sans-serif;
      font-size: 14px;
      font-weight: 400;
      height: 100vh;
      justify-items: center;
    }

    .campain-container {
      display: grid;
      grid-template-areas: "left right";
      margin-top: 70px;
      max-width: 900px;
    }

    .left-container {
      background: #474c7e;
      overflow: hidden;
      padding: 40px 0 0 0;
      position: relative;
      text-align: center;
      width: 300px;
    }

    .left-container h1 {
      color: rgba(255, 255, 255, 0.8);
      display: inline-block;
      font-size: 24px;
    }

    .left-container h1 i {
      background: #7d81a7;
      border-radius: 50%;
      color: #474c7e;
      font-size: 24px;
      margin-right: 5px;
      padding: 10px;
      transform: rotate(-45deg);
    }

    .left-container .campain-img {
      bottom: -5px;
      position: absolute;
      text-align: center;
    }

    .left-container .campain-img:before {
      background: #474c7e;
      content: "";
      height: 100%;
      left: 0;
      opacity: 0.4;
      position: absolute;
      width: 100%;
      z-index: 1;
    }

    .left-container img {
      /* filter: sepia(100%); */
      width: 100%;
    }

    .right-container {
      background: #cad8e4;
      display: grid;
      grid-template-areas: "."".";
      width: 500px;
    }

    .right-container h1:nth-of-type(1) {
      color: rgba(0, 0, 0, 0.8);
      font-size: 28px;
      font-weight: 600;
    }

    .right-container .set {
      display: flex;
      justify-content: space-between;
      margin: 10px 0;
    }

    .right-container input {
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 4px;
      height: 38px;
      line-height: 38px;
      padding-left: 5px;
    }

    .right-container textarea {
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 4px;
      line-height: 38px;
      padding-left: 5px;
    }

    .right-container input,
    .right-container label {
      color: rgba(0, 0, 0, 0.8);
    }

    .right-container header {
      padding: 40px;
    }

    .right-container label,
    .right-container input,
    .right-container .campain-photo {
      width: 176px;
    }

    .right-container .campain-photo {
      align-items: center;
      display: grid;
      grid-template-areas: ". .";
    }

    .right-container .campain-photo button {
      border: none;
      border-radius: 50%;
      height: 38px;
      margin-right: 10px;
      outline: none;
      width: 38px;
    }

    .right-container .campain-photo button i {
      color: rgba(0, 0, 0, 0.8);
      font-size: 16px;
    }

    .right-container .pets-weight .radio-container,
    .right-container .donation-level .radio-container {
      display: flex;
      justify-content: space-between;
      width: 100%;
    }

    .right-container footer {
      align-items: center;
      background: #fff;
      display: grid;
      padding: 5px 40px;
    }

    .right-container footer button {
      border: 1px solid rgba(0, 0, 0, 0.2);
      height: 38px;
      line-height: 38px;
      width: 100px;
      border-radius: 19px;
      font-family: "Montserrat", sans-serif;
    }

    .right-container footer #next {
      background: #474c7e;
      border: 1px solid transparent;
      color: #fff;
    }

    .right-container footer #next:hover {
      background: #171a2b;
    }

    .min-amount label,
    .pets-name label,
    .campain-desc label,
    .pets-birthday label,
    .Donation-goal .set-don-goal label,
    .pets-gender label,
    .pets-spayed-neutered label,
    .pets-weight label {
      display: block;
      margin-bottom: 5px;
    }

    .max-amount label,
    .donation-level label,
    .Organization-Name label,
    .custom-amount label,
    .anonymous-donation label,
    .Donation-goal label,
    .campain-name label {
      display: block;
      margin-bottom: 5px;
    }

    .hide {
      display: none;
    }

    .radio-container {
      background: #fff;
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 4px;
      display: inline-block;
      padding: 5px;
    }

    .radio-container label {
      background: transparent;
      border: 1px solid transparent;
      border-radius: 2px;
      display: inline-block;
      height: 26px;
      line-height: 26px;
      margin: 0;
      padding: 0;
      text-align: center;
      transition: 0.2s all ease-in-out;
      width: 80px;
    }

    .radio-container input[type="radio"] {
      display: none;
    }

    .radio-container input[type="checkbox"] {
      display: none;
    }

    .radio-container input[type="radio"]:checked+label {
      background: #9fbccd;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .radio-container input[type="checkbox"]:checked+label {
      background: #9fbccd;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }
  </style>

</head>

<body style="margin-top:100px;">
  <form action="db.php" method="post" enctype="multipart/form-data">
    <div class="campain-container">
      <div class="left-container" style="margin-left:100px; margin-right:0px;">
        <h1>
          <!-- <i style='font-size:24px' class='fas'>&#xf4be;</i> -->

          <img src="http://localhost/wordpress/wp-content/plugins/DonorHub/assets/images/DonationImage.png" alt="">
          DonorHub
        </h1>
        <div class="campain-img">
          <!-- <i class="fas fa-donate"></i>
          <img src="" /> -->
        </div>
      </div>
      <div class="right-container">
        <header>
          <h1>Add New Campaign</h1>
          <div class="set">
            <div class="campain-name">
              <label for="campain-name">Campaign Name</label>
              <input name="campain-name" id="campain-name" placeholder="Campain's name" type="text" />
            </div>
            <div class="campain-photo">
              <button id="campain-upload">
                <img src="https://i.pinimg.com/736x/7d/58/48/7d58481d067e336a6338b7bebfc0fe10.jpg" alt="" height="38px" width="38px" style="border-radius: 50%;">
              </button>
              <label for="cmp-img"> <input type="file" name="cmp-img" id="cmp-img" style="display: none;" />
                Upload a photo</label>
            </div>
          </div>
          <div class="set">
            <div class="campain-desc">
              <label for="campain-desc">Description</label>
              <textarea name="campain-desc" id="campain-desc" placeholder="Campain's description" rows="4" cols="50"></textarea>
            </div>
          </div>

          <!-- Donation goal -->
          <div class="set">
            <div class="donation-goal">
              <label for="don-goal-enable">Doantion Goal</label>
              <div class="radio-container">
                <input id="don-goal-enable" name="donation-goal" type="radio" value="enable" />
                <label for="don-goal-enable" onclick="donationGoalen()">Enable</label>
                <input checked="" id="don-goal-disable" name="donation-goal" type="radio" value="disable" />
                <label for="don-goal-disable" onclick="donationGoaldis()">Disable</label>
              </div>
            </div>
            <div class="donation-goal">
              <div id="set-don-goal" class="hide">
                <label for="don-goal">Donation Goal</label>
                <input name="don-goal" id="don-goal" placeholder="Enter Doation Goal" type="text" />
              </div>
            </div>
          </div>

          <!-- Minimum Amount - Maximum Amount -->
          <div class="set">
            <div class="min-amount">
              <label for="min-amount">Minimum Amount</label>
              <input id="min-amount" name="min-amount" placeholder="5.00" type="text" />
            </div>
            <div class="max-amount">
              <label for="max-amount">Maximum Amount</label>
              <input id="max-amount" name="max-amount" placeholder="99999.00" type="text" />
            </div>
          </div>

          <!-- Donation level -->
          <!-- <div class="donation-level">
            <label for="don-level-10">Donation Level</label>
            <div class="radio-container">
              <input checked="" id="don-level-10" name="donation-level" type="checkbox" value="10" />
              <label for="don-level-10">10</label>
              <input id="don-level-50" name="donation-level" type="checkbox" value="50" />
              <label for="don-level-50">50</label>
              <input id="don-level-200" name="donation-level" type="checkbox" value="200" />
              <label for="don-level-200">200</label>
              <input id="don-level-500" name="donation-level" type="checkbox" value="500" />
              <label for="don-level-500">500</label>
            </div>
          </div> -->

          <!-- Organization Name -->
          <div class="set">
            <div class="Organization-Name">
              <label for="org-name-enable">Organization Name</label>
              <div class="radio-container">
                <input id="org-name-enable" name="org-name-rad" type="radio" value="enable" />
                <label for="org-name-enable" onclick="orgNameEn()">Enable</label>
                <input checked="" id="org-name-disable" name="org-name-rad" type="radio" value="disable" />
                <label for="org-name-disable" onclick="orgNameDis()">Disable</label>
              </div>
            </div>
            <div class=" Organization-Name">
              <div id="org-name" class="hide">
                <label for="org-name">Organization Name</label>
                <input id="org-name" name="org-name" placeholder="Your Organization Name" type="text" />
              </div>
            </div>
          </div>

          <!-- Custom Amount - Anonymous Donation -->

          <div class="set">
            <div class="custom-amount">
              <label for="custom-amount-enable">Custom Amount</label>
              <div class="radio-container">
                <input checked="" id="custom-amount-enable" name="custom-amount" type="radio" value="enable" />
                <label for="custom-amount-enable">Enable</label>
                <input id="custom-amount-disable" name="custom-amount" type="radio" value="disable" />
                <label for="custom-amount-disable">Disable</label>
              </div>
            </div>
            <div class="anonymous-donation">
              <label for="anonymous-donation-enable">Anonymous Donation</label>
              <div class="radio-container">
                <input checked="" id="anonymous-donation-enable" name="anonymous-donation" type="radio" value="enable" />
                <label for="anonymous-donation-enable">Enable</label>
                <input id="anonymous-donation-disable" name="anonymous-donation" type="radio" value="disable" />
                <label for="anonymous-donation-disable">Disable</label>
              </div>
            </div>
          </div>
        </header>
        <footer>
          <div class="set">
            <button id="next" name="submit" type="submit">Submit</button>
          </div>
        </footer>
      </div>
    </div>
  </form>
  <!-- <?php echo '<script>
    document.location.href = "http://localhost/wordpress/wp-content/plugins/DonorHub/assets/data/final_form.php";
  </script>' ?> -->
</body>

</html>