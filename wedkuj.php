<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Wędkujemy</title> 
<link rel="stylesheet" href="styl_1.css">     
</head>
<body>
<div class="baner">
<h1>Portal dla wędkarzy</h1>
</div>
<div class="lewy">
<h2>Ryby drapieżne naszych wód</h2>
<?php
         
$baza=mysqli_connect('localhost','root','','wedkowanie');
if(mysqli_connect_errno()){
echo "wystąpił błąd połączenia z bazą";
}
         
$wynik=mysqli_query($baza,"SELECT `nazwa`,`wystepowanie` FROM `ryby` WHERE `styl_zycia` = 1");
while($row=mysqli_fetch_array($wynik))
{
echo "<ul>";
echo "<li>";
echo  $row['nazwa'].","." występowanie: ".$row['wystepowanie'];"<br>";
echo "</ul>";
echo "</li>";
}
mysqli_close($baza);
?>
     </div>
     <div class="prawy">
            <img src="ryba1.jpg" alt="sum"><br>
            <a href="kweredny.txt">Pobierz kwerendy</a>
            
     </div>
     <div class="stopka">
            <p>Stronę wykonał: Daniel </p>   
     </div>
           
    </body> 
</html>
