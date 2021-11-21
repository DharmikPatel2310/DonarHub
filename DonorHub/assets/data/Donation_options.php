<?php  defined('ABSPATH') || die("<br><center><h1>You can't access this site</h1></center>");  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .first_column {
        width: 15%;
      }
      p {
        color: grey;
      }

      pre {
        font-family: "Times New Roman", Times, serif;
        width: 150px;
      }

      .editablediv {
        border: solid 1px black;
        height: 20px;
        text-align: center;
        display: inline-block;
      }
      table {
        width: 100%;
        margin: -2px;
      }
      table tr td {
        padding: 15px;
      }
      table tr {
        outline: rgb(189, 185, 185) thin solid;
      }
    </style>
    <script>
      function showSetDonation(state) {
        if (state == 1) {
          document.getElementById("SetDonationBlock").style.display = "block";
        } else {
          document.getElementById("SetDonationBlock").style.display = "none";
        }
      }
      function showCustomAmtBlock(state) {
        if (state == 1) {
          document.getElementById("CustomAmountEnabledBlock").style.display =
            "block";
        } else {
          document.getElementById("CustomAmountEnabledBlock").style.display =
            "none";
        }
      }
    </script>
  </head>

  <body>
    <table>
      <tr>
        <td class="first_column">
          <pre>Donation option</pre>
        </td>
        <td>
          <input
            type="radio"
            id="multileveldonation"
            name="donationOption"
            onclick="showSetDonation(0)"
          />
          <label for="multileveldonation">Multi-level Doantion</label>
          <input
            type="radio"
            id="setdonation"
            name="donationOption"
            onclick="showSetDonation(1)"
            checked
          />
          <label for="setdonation">Set Doantion</label>
          <br />
          <p>
            Do you want this form to have one set donation price or multiple
            levels (for example, $10, $20, $50)?
          </p>
        </td>
      </tr>
    </table>
    <table id="SetDonationBlock">
      <tr>
        <td class="first_column">
          <pre>Set Donation</pre>
        </td>
        <td>
          <div
            class="editablediv"
            style="
              width: 20px;
              border-top-left-radius: 2px;
              border-bottom-left-radius: 2px;
            "
          >
            &dollar;
          </div>
          <div
            class="editablediv"
            contenteditable="true"
            style="
              width: 100px;
              border-top-right-radius: 2px;
              border-bottom-right-radius: 2px;
              margin-left: -4px;
            "
          >
            25.00
          </div>
          <p>
            This is the set donation amount for this form. If you have a
            <q>Custom Amount Minimum</q>
            set, make sure it is less than this amount.
          </p>
        </td>
      </tr>
    </table>
    <table>
      <tr>
        <td class="first_column">
          <pre>Custom Amount</pre>
        </td>
        <td>
          <input
            type="radio"
            id="enabled"
            name="customamount"
            onclick="showCustomAmtBlock(1)"
            checked
          />
          <label for="multileveldonation">Enabled</label>
          <input
            type="radio"
            id="disabled"
            name="customamount"
            onclick="showCustomAmtBlock(0)"
            
          />
          <label for="setdonation">Disabled</label>
          <br />
          <p>
            Do you want the user to be able to input their own donation amount?
          </p>
        </td>
      </tr>
    </table>
    <table id="CustomAmountEnabledBlock">
      <tr>
        <td class="first_column">
          <pre>Donation Limit</pre>
        </td>
        <td>
          Minimum Amount
          <div
            class="editablediv"
            style="
              width: 20px;
              border-top-left-radius: 2px;
              border-bottom-left-radius: 2px;
            "
          >
            &dollar;
          </div>
          <div
            class="editablediv"
            contenteditable="true"
            style="
              width: 100px;
              border-top-right-radius: 2px;
              border-bottom-right-radius: 2px;
              margin-left: -4px;
            "
          >
            5.00
          </div>
          <br />
          <br />
          Maximum Amount
          <div
            class="editablediv"
            style="
              width: 20px;
              border-top-left-radius: 2px;
              border-bottom-left-radius: 2px;
            "
          >
            &dollar;
          </div>
          <div
            class="editablediv"
            contenteditable="true"
            style="
              width: 100px;
              border-top-right-radius: 2px;
              border-bottom-right-radius: 2px;
              margin-left: -4px;
            "
          >
            999999.99
          </div>
          <br />
          <p>Set the minimum and maximum amount for all gateways.</p>
        </td>
      </tr>
      <tr>
        <td class="first_column">
          <pre>Custom Amount Text</pre>
        </td>
        <td>
          <input type="text" name="CustomAmountText" id="CustomAmountText" />
          <br />
          <p>
            This text appears as a label below the custom amount field for set
            donation forms. For multi-level forms the text will appear as its
            own level (button, radio, or select option).
          </p>
        </td>
      </tr>
    </table>
    <br />
    <table>
      <th colspan="2" style="font-weight: normal; text-align: left; padding-left: 15px;">
         Donation Level 
      </th>
      <tr>
        <td class="first_column"><pre>Amount</pre></td>
        <td>
          <div
            class="editablediv"
            style="
              width: 20px;
              border-top-left-radius: 2px;
              border-bottom-left-radius: 2px;
            "
          >
            &dollar;
          </div>
          <div
            class="editablediv"
            contenteditable="true"
            style="
              width: 100px;
              border-top-right-radius: 2px;
              border-bottom-right-radius: 2px;
              margin-left: -4px;
            "
          >
            100.00
          </div>
        </td>
      </tr>
      <tr>
        <td class="first_column">
          <pre>Text</pre>
        </td>
        <td>
          <div
            class="editablediv"
            contenteditable="true"
            style="width: 150px; border-radius: 2px"
          >
            Conation Level
          </div>
        </td>
      </tr>
      <tr>
        <td class="first_column">
          <pre>Default</pre>
        </td>
        <td>
          <input type="radio" name="Default" id="default" />
          <label for="default">Default</label>
        </td>
      </tr>
    </table>
  </body>
</html>
