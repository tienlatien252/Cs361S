
<?php
$db_hostname = "127.0.0.1"; 
$db_user = "parchment"; 
$db_password = "U..$3dE~44io9-N_8-1f7a8(&B6)0R"; 
$db_database = "parchment"; 

$conn_string = "host={$db_hostname} dbname={$db_database} user={$db_user} password={$db_password}"; 

try { 
$db = pg_connect($conn_string); 
$sql = "SELECT pg_read_file('/var/www/documents/shared/IWptBJzlVU/Final exam v3-draft.rtf');";	
$search_results = pg_query($db, $sql); 
echo $search_results;
} catch (Exception $e) { 
echo $e->getMessage(); 
} 
?>
