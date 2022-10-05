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