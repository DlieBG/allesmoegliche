<?php
$hostname = "192.168.0.191";
$username = "web";
$password = "IchKannNurLesen";
$db = "db4";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);

$table = "Person";
$rows = ["PersonNr", "Bezeichnung", "Geburtsdatum", "Geburtsort", "Geschlecht", "Staatsangehoerigkeit", "Augenfarbe", "Hautfarbe", "PersonalausweisNr", "Mutter", "Vater"];
?>

<table border="1" align="center">
<tr>
    <?php
        foreach($rows as $row)
        {
            echo('<th>'.$row.'</th>');
        }
    ?>
</tr>
    <?php
        $query = mysqli_query($dbconnect, 'SELECT * FROM '.$table);
        while($result = mysqli_fetch_array($query))
        {
            echo("<tr>");
            foreach($rows as $row)
            {
                echo('<td>'.$result[$row].'</td>');
            }
            echo("</tr>");
        }
    ?>
</table>