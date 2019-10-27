<?php

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous">
<link href="../css/style.css" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
</style>
<body>

<form id="regForm" action="/action.php">
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
        <div class="container text-center">
            <h1>Look in the mirror, how good do you look?</h1>
            <iframe src="https://giphy.com/embed/8vt8BQ69pp9TZVECwV" style="display: block; margin: auto; padding-top: 30px;" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/laff-tv-laff-lafftv-tv-8vt8BQ69pp9TZVECwV"></a></p>
            <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
            <input type="checkbox" name='option1' id="option1"/><label for="option1"></label>
            <input type="checkbox" name='option2' id="option2"/><label for="option2"></label>
            <input type="checkbox" name='option3' id="option3"/><label for="option3"></label>
            <input type="checkbox" name='option4' id="option4"/><label for="option4"></label>
            <input type="checkbox" name='option5' id="option5"/><label for="option5"></label>
        </div>
    </div>
    <div class="tab">
        <div class="container text-center">
            <h1>Does your Workplace provide a gym or other discounts at a local alternative?</h1>
            <iframe src="https://giphy.com/embed/3mJyfDFH0BqgbdghWJ" style="display: block; margin: auto; padding-top: 30px;" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cyber-marian-cybermarian-3mJyfDFH0BqgbdghWJ"></a></p>
            <input type="checkbox" name='option6' id="option6"/><label for="option6"></label>
            <input type="checkbox" name='option7' id="option7"/><label for="option7"></label>
            <input type="checkbox" name='option8' id="option8"/><label for="option8"></label>
            <input type="checkbox" name='option9' id="option9"/><label for="option9"></label>
            <input type="checkbox" name='option10' id="option10"/><label for="option10"></label>
        </div>
    </div>
    <div class="tab">
        <div class="container text-center">
            <h1>How out of breathe do you feel after running up a flight of stairs?</h1>
            <iframe src="https://giphy.com/embed/5YaOmKEtpaNUoavY0m" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/globaltv-big-brother-canada-bbcan-bbcan7-5YaOmKEtpaNUoavY0m"></a></p>
            <input type="checkbox" name='option11' id="option11"/><label for="option11"></label>
            <input type="checkbox" name='option12' id="option12"/><label for="option12"></label>
            <input type="checkbox" name='option13' id="option13"/><label for="option13"></label>
            <input type="checkbox" name='option14' id="option14"/><label for="option14"></label>
            <input type="checkbox" name='option15' id="option15"/><label for="option15"></label>
        </div>
    </div>
    <div class="tab">
        <div class="container text-center">
            <h1>Would you enjoy having a walking/hill walking community in your area?</h1>
            <iframe src="https://giphy.com/embed/l2JejjpFLUt5MxZLi" width="480" height="366" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/season-3-the-simpsons-3x23-l2JejjpFLUt5MxZLi"></a></p>
            <input type="checkbox" name='option16' id="option16"/><label for="option16"></label>
            <input type="checkbox" name='option17' id="option17"/><label for="option17"></label>
            <input type="checkbox" name='option18' id="option18"/><label for="option18"></label>
            <input type="checkbox" name='option19' id="option19"/><label for="option19"></label>
            <input type="checkbox" name='option20' id="option20"/><label for="option20"></label>
        </div>
    </div>
    <div class="tab">
        <div class="container text-center">
            <h1>Can you do 15-20 push-ups without breaking a sweat?</h1>
            <iframe src="https://giphy.com/embed/OLY40BwPRUWic" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/monkey-OLY40BwPRUWic"></a></p>
            <input type="checkbox" name='option21' id="option21"/><label for="option21"></label>
            <input type="checkbox" name='option22' id="option22"/><label for="option22"></label>
            <input type="checkbox" name='option23' id="option23"/><label for="option23"></label>
            <input type="checkbox" name='option24' id="option24"/><label for="option24"></label>
            <input type="checkbox" name='option25' id="option25"/><label for="option25"></label>
        </div>
    </div>
    <div class="tab">
        <div class="container text-center">
            <h1>You’re feeling thirsty, how likely are you to get up to get a drink?</h1>
            <iframe src="https://giphy.com/embed/d7neV59KdL9geEWtyC" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/anemmyformegan-d7neV59KdL9geEWtyC"></a></p>
            <input type="checkbox" name='option26' id="option26"/><label for="option26"></label>
            <input type="checkbox" name='option27' id="option27"/><label for="option27"></label>
            <input type="checkbox" name='option28' id="option28"/><label for="option28"></label>
            <input type="checkbox" name='option29' id="option29"/><label for="option29"></label>
            <input type="checkbox" name='option30' id="option30"/><label for="option30"></label>
        </div>
    </div>
    <div class="tab">
        <div class="container text-center">
            <h1>A tv program comes on and the remote is at the other side of the room. Watch it as something new might be good? Get up immediately as you know what you like? </h1>
            <iframe src="https://giphy.com/embed/3pZiiGZ4ZH7YDytOfH" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/bublywater-ad-lazy-3pZiiGZ4ZH7YDytOfH"></a></p>
            <input type="checkbox" name='option31' id="option31"/><label for="option31"></label>
            <input type="checkbox" name='option32' id="option32"/><label for="option32"></label>
            <input type="checkbox" name='option33' id="option33"/><label for="option33"></label>
            <input type="checkbox" name='option34' id="option34"/><label for="option34"></label>
            <input type="checkbox" name='option35' id="option35"/><label for="option35"></label>
        </div>
    </div>
    <div class="tab">
        <div class="container text-center">
            <h1>You get picked to be on stage. How likely are you to steal the spotlight? </h1>
            <iframe src="https://giphy.com/embed/3o7Zetm0RureMk6gzS" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/fuckthatsdelicious-viceland-fuck-thats-delicious-3o7Zetm0RureMk6gzS"></a></p>
            <input type="checkbox" name='option36' id="option36"/><label for="option36"></label>
            <input type="checkbox" name='option37' id="option37"/><label for="option37"></label>
            <input type="checkbox" name='option38' id="option38"/><label for="option38"></label>
            <input type="checkbox" name='option39' id="option39"/><label for="option39"></label>
            <input type="checkbox" name='option40' id="option40"/><label for="option40"></label>
        </div>
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>

    </div>
</form>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

</script>

</body>
</html>

