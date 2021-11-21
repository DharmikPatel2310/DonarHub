<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet" type="text/css" />

    <link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78060/animate.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <style>
        body {
            background-color: #3672d7;
            text-align: center;
            font-family: "Lato";
            font-weight: 900;
        }

        hr {
            background-color: #96bdff;
            border: 0;
            opacity: 0.2;
            height: 2px;
            margin-top: 1.4em;
        }

        button {
            margin-top: 4em;
            background-color: #ff3a3a;
            border: 1px solid #ff7373;
            color: white;
            font-family: "Lato";
            text-transform: uppercase;
            font-weight: 900;
            font-size: 1.4rem;
            letter-spacing: 0.1em;
            padding: 0.5em 0em;
            width: 12rem;
            border-radius: 0.3rem;
            outline: none;
        }

        .active button {
            border-bottom: 1px solid #ccc;
            border-radius: 0.3rem 0.3rem 0 0;
        }

        .donate form {
            display: none;
            width: 12rem;
            -webkit-box-shadow: 0px 0px 10px 0px #2e5eae;
            -moz-box-shadow: 0px 0px 10px 0px #2e5eae;
            box-shadow: 0px 0px 10px 0px #2e5eae;
            padding-top: 50px;
            border-radius: 0.3rem;
            margin: 0 auto;
            margin-top: -50px;
        }

        .donate input {
            -webkit-appearance: none;
            display: none;
            position: absolute;
        }

        .donate label {
            display: block;
            background-color: #f2f2f2;
            color: #356bc6;
            padding: 0.5em 0;
            width: 12rem;
            font-size: 1.4rem;
            margin: 0 auto;
            border-bottom: 1px solid #ddd;
            transition: all 0.05s ease;
        }

        .donate label:hover,
        .donate label:focus {
            background-color: #ffffff;
            color: #2dbb55;
            -ms-transform: scale(1.02, 1.02);
            /* IE 9 */
            -webkit-transform: scale(1.02, 1.02);
            /* Safari */
            transform: scale(1.02, 1.02);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        .donate label:last-child {
            border-radius: 0 0 0.3rem 0.3rem;
        }

        #custom {
            max-width: 400px;
            margin: 0 auto;
            display: none;
            padding-top: 7em;
        }

        #custom h2 {
            text-align: center;
            margin: 0;
            letter-spacing: 0.2em;
            color: #96bdff;
            font-weight: 700;
            opacity: 0.7;
            text-transform: uppercase;
            font-size: 1.3em;
            padding-bottom: 0.75em;
        }

        #custom .input-group-1 {
            width: 100%;
            margin-bottom: 0em;
            position: relative;
        }

        #custom label {
            text-align: left;
            display: block;
            color: #96bdff;
            font-weight: 700;
            font-size: 2.8em;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            margin: 1.6em 0 0.3em 0.2em;
            position: absolute;
            top: -1.25em;
            left: 0.5em;
        }

        #custom input[type="text"] {
            text-align: left;
            font-family: "Lato";
            background-color: rgba(26, 68, 139, 0.3);
            font-weight: 300;
            border: 0px solid rgba(132, 178, 255, 0.67);
            color: white;
            font-size: 2.8em;
            box-sizing: border-box;
            padding-left: 2em;
            height: 1.9em;
            width: 100%;
            border-radius: 3px;
            outline: none;
        }

        #custom button {
            background-color: #2dbb55;
            border-color: #2dbb55;
            font-size: 1.2em;
            margin-top: 1.2em;
            transition: all 0.2s ease;
        }

        #custom button:hover,
        #custom button:focus {
            -ms-transform: scale(1.04, 1.04);
            /* IE 9 */
            -webkit-transform: scale(1.04, 1.04);
            /* Safari */
            transform: scale(1.04, 1.04);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        #custom .back {
            float: left;
            position: relative;
            text-indent: -999em;
            background-color: transparent;
            border: 3px solid #2e64c0;
            width: 2.4em;
            height: 2.4em;
            border-radius: 50%;
        }

        #custom .back span {
            position: absolute;
            display: block;
            background-color: #2e64c0;
            width: 60%;
            top: 50%;
            margin-top: -1.5px;
            left: 20%;
            height: 3px;
            border-radius: 3px;
        }

        #custom .back span:nth-child(2) {
            width: 40%;
            top: 64%;
            left: 17%;
            -ms-transform: rotate(45deg);
            /* IE 9 */
            -webkit-transform: rotate(45deg);
            /* Safari */
            transform: rotate(45deg);
        }

        #custom .back span:nth-child(3) {
            width: 40%;
            top: 36%;
            left: 17%;
            -ms-transform: rotate(-45deg);
            /* IE 9 */
            -webkit-transform: rotate(-45deg);
            /* Safari */
            transform: rotate(-45deg);
        }

        #custom .warn {
            display: none;
        }

        #custom .next {
            float: right;
        }

        #details {
            padding-top: 7em;
            text-align: left;
            display: none;
            text-align: center;
            margin: 0;
        }

        #details .back {
            float: left;
            position: relative;
            text-indent: -999em;
            background-color: transparent;
            border: 3px solid #2e64c0;
            width: 2.4em;
            height: 2.4em;
            border-radius: 50%;
        }

        #details .back span {
            position: absolute;
            display: block;
            background-color: #2e64c0;
            width: 60%;
            top: 50%;
            margin-top: -1.5px;
            left: 20%;
            height: 3px;
            border-radius: 3px;
        }

        #details .back span:nth-child(2) {
            width: 40%;
            top: 64%;
            left: 17%;
            -ms-transform: rotate(45deg);
            /* IE 9 */
            -webkit-transform: rotate(45deg);
            /* Safari */
            transform: rotate(45deg);
        }

        #details .back span:nth-child(3) {
            width: 40%;
            top: 36%;
            left: 17%;
            -ms-transform: rotate(-45deg);
            /* IE 9 */
            -webkit-transform: rotate(-45deg);
            /* Safari */
            transform: rotate(-45deg);
        }

        #details .next {
            float: right;
        }

        #details h2 {
            text-align: center;
            margin: 0;
            letter-spacing: 0.2em;
            color: #96bdff;
            font-weight: 700;
            opacity: 0.7;
            text-transform: uppercase;
            font-size: 1.3em;
            padding-bottom: 0.75em;
        }

        #details .input-group-1 {
            width: 100%;
            margin-bottom: 0em;
        }

        #details .input-group-2 {
            width: 48.33114%;
            margin-right: 1.33772%;
            margin-bottom: 1.2em;
            float: left;
        }

        #details .input-group-2:nth-child(2n) {
            float: right;
            margin-right: 0;
        }

        #details .input-group-3 {
            width: 37.952%;
            margin-right: 3.33772%;
            margin-bottom: 1.2em;
            float: left;
        }

        #details .input-group-3:nth-child(6n) {
            width: 17%;
        }

        #details .input-group-3:nth-child(7n) {
            float: right;
            margin-right: 0;
        }

        #details .contact-info {
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        #details label {
            text-align: left;
            display: block;
            color: white;
            font-weight: 300;
            font-size: 0.8em;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            margin: 1.6em 0 0.3em 0.2em;
        }

        #details input[type="text"] {
            text-align: left;
            font-family: "Lato";
            background-color: rgba(26, 68, 139, 0.3);
            font-weight: 300;
            border: 0px solid rgba(132, 178, 255, 0.67);
            color: white;
            font-size: 1.3em;
            box-sizing: border-box;
            padding-left: 0.75em;
            height: 2.2em;
            width: 100%;
            border-radius: 3px;
            outline: none;
        }

        #details button {
            background-color: #2dbb55;
            border-color: #2dbb55;
            font-size: 1.2em;
            margin-top: 1.2em;
            transition: all 0.2s ease;
        }

        #details button:hover,
        #details button:focus {
            -ms-transform: scale(1.04, 1.04);
            /* IE 9 */
            -webkit-transform: scale(1.04, 1.04);
            /* Safari */
            transform: scale(1.04, 1.04);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        #card {
            padding-top: 7em;
            text-align: left;
            display: none;
            text-align: center;
            margin: 0;
        }

        #card hr {
            margin-top: 0.2em;
        }

        #card .back {
            float: left;
            position: relative;
            text-indent: -999em;
            background-color: transparent;
            border: 3px solid #2e64c0;
            width: 2.4em;
            height: 2.4em;
            border-radius: 50%;
        }

        #card .back span {
            position: absolute;
            display: block;
            background-color: #2e64c0;
            width: 60%;
            top: 50%;
            margin-top: -1.5px;
            left: 20%;
            height: 3px;
            border-radius: 3px;
        }

        #card .back span:nth-child(2) {
            width: 40%;
            top: 64%;
            left: 17%;
            -ms-transform: rotate(45deg);
            /* IE 9 */
            -webkit-transform: rotate(45deg);
            /* Safari */
            transform: rotate(45deg);
        }

        #card .back span:nth-child(3) {
            width: 40%;
            top: 36%;
            left: 17%;
            -ms-transform: rotate(-45deg);
            /* IE 9 */
            -webkit-transform: rotate(-45deg);
            /* Safari */
            transform: rotate(-45deg);
        }

        #card .next {
            float: right;
        }

        #card h2 {
            text-align: center;
            margin: 0;
            letter-spacing: 0.2em;
            color: #96bdff;
            font-weight: 700;
            opacity: 0.7;
            text-transform: uppercase;
            font-size: 1.3em;
            padding-bottom: 0.75em;
        }

        #card .input-group-1 {
            width: 100%;
            margin-bottom: 0em;
        }

        #card .input-group-2 {
            width: 48.33114%;
            margin-right: 1.33772%;
            margin-bottom: 1.2em;
            float: left;
        }

        #card .input-group-2:nth-child(2n) {
            float: right;
            margin-right: 0;
        }

        #card .input-group-3 {
            width: 37.952%;
            margin-right: 3.33772%;
            margin-bottom: 1.2em;
            float: left;
        }

        #card .input-group-3:nth-child(5n) {
            width: 17%;
        }

        #card .input-group-3:nth-child(3n) {
            float: right;
            margin-right: 0;
        }

        #card .contact-info {
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        #card label {
            text-align: left;
            display: block;
            color: white;
            font-weight: 300;
            font-size: 0.8em;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            margin: 1.6em 0 0.3em 0.2em;
        }

        #card input[type="text"] {
            text-align: left;
            font-family: "Lato";
            background-color: rgba(26, 68, 139, 0.3);
            font-weight: 300;
            border: 0px solid rgba(132, 178, 255, 0.67);
            color: white;
            font-size: 1.3em;
            box-sizing: border-box;
            padding-left: 0.75em;
            height: 2.2em;
            width: 100%;
            border-radius: 3px;
            outline: none;
        }

        #card button {
            background-color: #2dbb55;
            border-color: #2dbb55;
            font-size: 1.2em;
            margin-top: 1.2em;
            transition: all 0.2s ease;
        }

        #card button:hover,
        #card button:focus {
            -ms-transform: scale(1.04, 1.04);
            /* IE 9 */
            -webkit-transform: scale(1.04, 1.04);
            /* Safari */
            transform: scale(1.04, 1.04);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        #check {
            padding-top: 7em;
            text-align: center;
            display: none;
        }

        #check button {
            background-color: #2dbb55;
            border-color: #2dbb55;
            font-size: 1.2em;
            transition: all 0.2s ease;
            display: block;
            margin: 1.5em auto 1em;
            text-shadow: 2px 2px #1f9a42;
        }

        #check button:hover,
        #check button:focus {
            -ms-transform: scale(1.04, 1.04);
            /* IE 9 */
            -webkit-transform: scale(1.04, 1.04);
            /* Safari */
            transform: scale(1.04, 1.04);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        #check p {
            font-weight: 300;
            letter-spacing: 0.03em;
            padding-top: 1em;
            color: white;
            margin: 0;
            font-size: 1.3em;
        }

        #check h2 {
            text-align: center;
            margin: 0;
            letter-spacing: 0.2em;
            color: #96bdff;
            font-weight: 700;
            opacity: 0.7;
            text-transform: uppercase;
            font-size: 1.3em;
            padding-bottom: 0.75em;
        }

        #check span {
            display: inline-block;
            margin: 0 auto;
            border-radius: 5px;
            color: white;
            font-weight: 700;
            font-size: 3.2em;
            letter-spacing: 0.1em;
            padding: 0.2em 1em 0.3em;
            text-shadow: 2px 2px #255bb5;
        }

        #confirm {
            display: none;
            height: 300px;
        }

        #confirm.animated {
            display: block;
        }

        #confirm h2 {
            color: #96bdff;
            margin: 0;
            padding-top: 0px;
            padding-bottom: 20px;
            font-size: 3em;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        #confirm p {
            color: white;
            line-height: 1.6;
            font-size: 1.4em;
            font-weight: 300;
            margin-bottom: 2em;
        }

        #confirm span {
            color: white;
            background-color: #2dbb55;
            padding: 0.25em 0.45em;
            margin: 0 0.15em;
            font-weight: 700;
            text-shadow: 2px 2px #1f9a42;
            font-size: 1em;
            border-radius: 0.2em;
        }

        .processing {
            display: none;
        }

        .processing .mask {
            position: absolute;
            width: 130px;
            height: 100px;
            background-color: #3672d7;
            top: -3em;
            z-index: 999;
        }

        .processing .check {
            position: relative;
            margin: 150px auto 70px;
            width: 110px;
            height: 1px;
        }

        .processing .check span {
            display: block;
            position: absolute;
            height: 0.5em;
            width: 5em;
            border-radius: 3px;
            background-color: #34d461;
        }

        .processing .check span:first-child {
            left: 2em;
            -ms-transform: rotate(-45deg);
            /* IE 9 */
            -webkit-transform: rotate(-45deg);
            /* Safari */
            transform: rotate(-45deg);
        }

        .processing .check span:last-child {
            width: 3em;
            top: 0.9em;
            left: 0.3em;
            -ms-transform: rotate(45deg);
            /* IE 9 */
            -webkit-transform: rotate(45deg);
            /* Safari */
            transform: rotate(45deg);
        }

        .processing .outer {
            position: relative;
            background-color: #2e64c0;
            height: 0.5em;
            width: 14em;
            margin: 1em auto;
            border-radius: 3px;
        }

        .processing .progress {
            position: absolute;
            background-color: #528cef;
            height: 0.5em;
            width: 0em;
            top: 0em;
            left: 0;
            margin: 0;
            border-radius: 3px;
            z-index: 1;
            overflow: hidden;
        }

        .processing span {
            text-transform: uppercase;
            letter-spacing: 0.3em;
            color: #96bdff;
        }

        .clearfix:before,
        .clearfix:after {
            display: table;
            content: "";
        }

        .clearfix:after {
            clear: both;
        }
    </style>
</head>

<body>
    <div class="donate">
        <h2>Mihir Patel</h2>
        <h2><?php echo $_GET['campain_name'] ?></h2>
        <button>Donate</button>
        <form name="donAmount" id="donAmount">
            <input type="radio" value="3" name="amount" id="three" />
            <label for="three">₹5</label>
            <input type="radio" value="25" name="amount" id="twentyfive" />
            <label for="twentyfive">₹25</label>
            <input type="radio" value="100" name="amount" id="hundred" />
            <label for="hundred">₹100</label>
            <input type="radio" value="other" name="amount" id="other" />
            <label for="other">Other</label>
        </form>
    </div>

    <div id="custom">
        <h2>Donation Amount</h2>
        <form name="customDonation" id="customDonation">
            <div class="input-group-1">
                <label for="custom-amount">₹</label>
                <input id="custom-amount" name="custom-amount" type="text" />
                <div class="warn"></div>
            </div>
        </form>
        <div class="clearfix">
            <button class="back" type="button">
                Back
                <span></span>
                <span></span>
                <span></span>
            </button>
            <button class="next" type="button">Next</button>
        </div>
    </div>

    <section id="details">
        <div class="contact-info">
            <h2>Basic Information</h2>
            <form class="clearfix">
                <div class="input-group-2">
                    <label>First Name</label>
                    <input type="text" />
                </div>
                <div class="input-group-2">
                    <label>Last Name</label>
                    <input type="text" />
                </div>
                <div class="input-group-1">
                    <label>Email Address</label>
                    <input type="text" />
                </div>
                <hr />
                <div class="input-group-1">
                    <label>Street Address</label>
                    <input type="text" />
                </div>
                <div class="input-group-3">
                    <label>City</label>
                    <input type="text" />
                </div>
                <div class="input-group-3">
                    <label>State</label>
                    <input type="text" />
                </div>
                <div class="input-group-3">
                    <label>Zip Code</label>
                    <input type="text" />
                </div>
            </form>
            <div class="clearfix">
                <button class="back" type="button">
                    Back
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <button class="next" type="button">Next</button>
            </div>
        </div>
    </section>

    <!-- <section id="card">
        <div class="contact-info">
            <h2>Payment Information</h2>
            <form class="clearfix">
                <div class="input-group-1">
                    <label>Card Number</label>
                    <input type="text" />
                </div>
                <div class="clearfix">
                    <div class="input-group-2">
                        <label>Expiration Date</label>
                        <input type="text" />
                    </div>

                    <div class="input-group-2">
                        <label>Security Code (CVV)</label>
                        <input type="text" />
                    </div>
                </div>
                <hr />
                <div class="input-group-1">
                    <label>Employer</label>
                    <input type="text" />
                </div>

                <div class="input-group-1">
                    <label>Occupation</label>
                    <input type="text" />
                </div>
            </form>
            <div class="clearfix">
                <button class="back" type="button">
                    Back
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <button class="next" type="button">Review</button>
            </div>
        </div>
    </section> -->

    <section class="processing">
        <div class="check">
            <span></span>
            <div class="mask"></div>
            <span></span>
        </div>

        <div class="outer">
            <div class="inner"></div>
            <div class="progress"></div>
        </div>
        <span class="message">Processing</span>
    </section>

    <section id="check">
        <h2>Confirm Payment</h2>
        <p>Please confirm your contribution of</p>
        <span>$8888</span>
        <button class="next" type="button">Pay</button>
    </section>

    <section id="confirm">
        <h2>Thank You!</h2>
        <p>
            Your <span class="amount">$25</span> donation will help us reach
            <strong>570</strong>!
        </p>
    </section>

    <script>
        var amount;
        var reach;

        var x = $(window).width();

        $(".donate form").on("click", function() {
            amount = $("input[name=amount]:checked", "#donAmount").val();
            reach = amount * 22;
            $("#confirm .amount").text("$" + amount);
            $("#check span").text("$" + amount);
            $("#confirm strong").text(reach + " voters");
        });

        $(".donate button").on("click", function() {
            $(".donate").toggleClass("active");
            if ($(".donate").is(".active")) {
                $("form").slideDown(450, "easeOutQuart");
            } else {
                $("form").slideUp(300, "easeInOutQuad");
            }
        });

        $(".donate label").on("click", function() {
            setTimeout(function() {
                if (amount == "other") {
                    // $("#custom").css("margin-left", x / 2);
                    // $("#custom").css("margin-right", x / 2);
                    $("body").addClass("custom");
                    $(".donate").hide(
                        "slide", {
                            easing: "easeInQuart",
                            direction: "left"
                        },
                        700,
                        function() {
                            $("#custom").show(
                                "slide", {
                                    easing: "easeOutQuart",
                                    direction: "right"
                                },
                                700
                            );
                        }
                    );
                } else {
                    $("body").removeClass("custom");
                    $(".donate").hide(
                        "slide", {
                            easing: "easeInQuart",
                            direction: "left"
                        },
                        700,
                        function() {
                            $("#details").show(
                                "slide", {
                                    easing: "easeOutQuart",
                                    direction: "right"
                                },
                                700
                            );
                        }
                    );
                }
            }, 150);
        });

        $("#custom .next").on("click", function() {
            amount = $("input[name=custom-amount]", "#customDonation").val();
            reach = amount * 22;
            $("#confirm .amount").text("$" + amount);
            $("#check span").text("$" + amount);
            $("#confirm strong").text(reach + " voters");
            $("#custom").hide(
                "slide", {
                    easing: "easeInQuart",
                    direction: "left"
                },
                700,
                function() {
                    $("#details").show(
                        "slide", {
                            easing: "easeOutQuart",
                            direction: "right"
                        },
                        700
                    );
                }
            );
        });

        $("#custom .back").on("click", function() {
            $("#custom").hide(
                "slide", {
                    easing: "easeInQuart",
                    direction: "right"
                },
                700,
                function() {
                    $(".donate").show(
                        "slide", {
                            easing: "easeOutQuart",
                            direction: "left"
                        },
                        700
                    );
                }
            );
        });

        $("#details .next").on("click", function() {
            console.log(amount);
            $("#details").hide(
                "slide", {
                    easing: "easeInQuart",
                    direction: "left"
                },
                700,
                // function() {
                //     $("#card").show(
                //         "slide", {
                //             easing: "easeOutQuart",
                //             direction: "right"
                //         },
                //         700
                //     );
                // }
            );
        });

        $("#details .back").on("click", function() {
            if ($("body.custom").length > 0) {
                $("#details").hide(
                    "slide", {
                        easing: "easeInQuart",
                        direction: "right"
                    },
                    700,
                    function() {
                        $("#custom").show(
                            "slide", {
                                easing: "easeOutQuart",
                                direction: "left"
                            },
                            700
                        );
                    }
                );
            } else {
                $("#details").hide(
                    "slide", {
                        easing: "easeInQuart",
                        direction: "right"
                    },
                    700,
                    function() {
                        $(".donate").show(
                            "slide", {
                                easing: "easeOutQuart",
                                direction: "left"
                            },
                            700
                        );
                    }
                );
            }
        });

        // $("#card .next").on("click", function() {
        //     $("#card").hide(
        //         "slide", {
        //             easing: "easeInQuart",
        //             direction: "left"
        //         },
        //         700,
        //         function() {}
        //     );
        // });

        // $("#card .back").on("click", function() {
        //     $("#card").hide(
        //         "slide", {
        //             easing: "easeInQuart",
        //             direction: "right"
        //         },
        //         700,
        //         function() {
        //             $(".details").show(
        //                 "slide", {
        //                     easing: "easeOutQuart",
        //                     direction: "left"
        //                 },
        //                 700
        //             );
        //         }
        //     );
        // });

        // $("#card .next").on("click", function() {
        //     $("#card").hide(
        //         "slide", {
        //             easing: "easeInQuart",
        //             direction: "left"
        //         },
        //         700,
        //         function() {
        //             $("#check").show(
        //                 "slide", {
        //                     easing: "easeOutQuart",
        //                     direction: "right"
        //                 },
        //                 700
        //             );
        //         }
        //     );
        // });

        $("#check .back").on("click", function() {
            $("#check").hide(
                "slide", {
                    easing: "easeInQuart",
                    direction: "right"
                },
                700,
                function() {
                    $("#card").show(
                        "slide", {
                            easing: "easeOutQuart",
                            direction: "left"
                        },
                        700
                    );
                }
            );
        });

        $("#check .next").on("click", function() {
            $("#check").hide(
                "slide", {
                    easing: "easeInQuart",
                    direction: "left"
                },
                700,
                function() {
                    $(".processing").fadeIn(1500, function() {
                        $(".progress").animate({
                                width: "14em"
                            },
                            3500,
                            "easeInOutCirc",
                            function() {
                                $(".mask").hide(
                                    "slide", {
                                        easing: "easeInQuart",
                                        direction: "right"
                                    },
                                    400
                                );
                            }
                        );
                    });
                }
            );

            setTimeout(function() {
                $(".processing .message, .outer").fadeOut();
                $("#confirm").addClass("animated fadeInUp");
            }, 6250);
        });
    </script>
</body>

</html>