<html>
<head></head>
<body>
<meta name="keywords" content="HTML5,CSS3,JavaScript" />
<link rel="stylesheet" href="colores.css"/>
<?php 
$pais = array();
$pais["Mexico"] = array("Guadalajara","Monterrey","Tijuana","Toluca","Hidalgo");
$pais["Japon"] = array("Tokyo","Kyoto","Nerima","Shibuya","Okinawa");
$pais["Alemania"] = array("berlin","munich","Hamburgo","Colonia","Francfort");
$pais["Egipto"] = array("El cairo","Abu_simbel","Tebas","Luxor","Gize");
$pais["Rusia"] = array("Moscu","San Petersburgo","Samara","Kazan","Novosibirsk");
$pais["España"] = array("Barcelona","Madrid","Valencia","Sevilla","Zaragoza");
$pais["Francia"] = array("Aviñon","Burdeos","Cannes","Paris","Tolouse");
$pais["Italia"] = array("Roma","Milan","Napoles","Turin","Plaremo");
$pais["Ucrania"] = array("Kyiv","Lviv","Yalta","Sebastopol","Odesa");
$pais["Finlandia"] = array("Helsinki","Tampere","Turku","Rovaniemi","Espoo");

echo "<ul>"; 
foreach($pais as $nombre => $ciudades){
echo "<li> <h1> <span class = 'violeta'>".$nombre; echo "</span><h1></li>"; 
for($i=0; $i<count($ciudades); $i++){
echo "<li align='right' >".$ciudades[$i]; echo "</li>"; 
       }
}
echo "</ul>"; 
?>
</body>
</html>