# Simple-PHP-program-to-get-two-input-values-from-the-user

This is a simple PHP program to get two input values from the user and after that to check whether these 
values are equal or not. If these values are equal user can compare the values and print which one is greater
than the other one using selection statements.

++++++++++++++++++++++++++ code +++++++++++++++++++++++

<!DOCTYPE html>
<html>
<body>



<h1 style="color:orange;"> PHP program to get the GPA value</h1>



<form action="gpa.php" method="GET">
    <table>
        <tr>
            <td>Input GPA Value</td>
            <td><input type="text" name="gpa"/></td>
        </tr>
        
        


    </table>
<br>
<button type="submit" name="get_val" value="get_val">Submit</button>
</form>
<br>

<?php
if (isset($_GET["get_val"]))
{
    $f=$_GET['gpa'];
    
    
    if($f <3.00  &&$f >= 2.00)
        {
            echo "GENERAL PASS ";
        }
    
    elseif ($f <3.30  &&$f >= 3.00)
        {
            echo "SECOND CLASS UPPER ";
        }

        elseif ($f <3.70  &&$f >= 3.30)
        {
            echo "SECOND CLASS LOWER ";
        }

    else
        {
            echo "FIRST CLASS ";
        }

}

?> 



</body>
</html>
