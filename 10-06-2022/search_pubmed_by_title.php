<?php

$curl = curl_init();

if(! isset($_SERVER['argv'][1])){
  
  echo "! Missing search String !
  ";
  echo ".....Searching for 'Jonas Salk' by default: 
  ";
  $search_string = urlencode('Jonas Salk');

} else {

  $search_string = urlencode($_SERVER['argv'][1]);

}

echo ".....Searching Pubmed Titles for ".urldecode($search_string)."
";

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi?db=pubmed&field=title&term='.$search_string.'&retmode=json&rettype=abstract&sort=relevance',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET'
));

$response = curl_exec($curl);

curl_close($curl);

echo "PUBMED Results in Json Format: 
".$response;
