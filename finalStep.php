<?php
include("finalStepHeader.html");

session_start();

echo $_SESSION['passengerFN'];
echo "<BR>";

echo $_SESSION['passengerSN'];
echo "<BR>";


if (isset($_SESSION['luggage'])){
   
    echo $_SESSION['subTenKG'];
    echo "<BR>";
   
  
    echo $_SESSION['overTenKG'];

}
?>
</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</input>
        </div>
    </div>
   
       
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
   
</form>