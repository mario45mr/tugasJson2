<?php
$json_data=file_get_contents("astronomy.json");
$json_data_2 = file_get_contents("almanac.json");
$json_data_3 = file_get_contents("yesterday.json");
$parsed_json = json_decode($json_data);
$parsed_json_2 = json_decode($json_data_2);
$parsed_json_3 = json_decode($json_data_3);
//jason data 1
$bulan = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
$pheaseofmoon = $parsed_json->{'moon_phase'}->{'phaseofMoon'};
$Hemisphere = $parsed_json->{'moon_phase'}->{'hemisphere'};
//jason data 2
$derajatC = $parsed_json_2->{'almanac'}->{'temp_high'}->{'normal'}->{'C'};
$derajatF = $parsed_json_2->{'almanac'}->{'temp_high'}->{'normal'}->{'F'};
$codeairport = $parsed_json_2->{'almanac'}->{'airport_code'};
//jason data 3
$kemarin = $parsed_json_3->{'history'}->{'date'}->{'pretty'};
$zonawaktu = $parsed_json_3->{'history'}->{'date'}->{'tzname'};
$tahun = $parsed_json_3->{'history'}->{'date'}->{'year'};
echo "astronomy Australia</br>";
echo "Age of moon : ${bulan}\n</br>";
echo "Phase of moon : ${pheaseofmoon}\n</br>";
echo "Hemisphere : ${Hemisphere}\n</br>";
echo "almanac Australia</br>";
echo "Code Airport : ${codeairport} \n</br>";
echo "Suhu celcius : ${derajatC} C\n</br>";
echo "Suhu Fahrenheit : ${derajatF} F\n</br>";
echo "Yesterday Australia</br>";
echo "Yesterday : ${kemarin} \n</br>";
echo "TimeZone : ${zonawaktu} \n</br>";
echo "Year : ${tahun} \n</br>";
?>

