<?php  
    if (isset($_POST["submit-btn"])) { 
        echo "<div> POST BODY <br>"; 
        print_r($_POST); 
        echo "</div>"; 
    } 
?> 