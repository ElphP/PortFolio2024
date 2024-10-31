<?php


function fetchGitHubData($endpoint,$GitHubToken)
{
   

    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL,  $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer ".$GitHubToken,
        "User-Agent: ElphP",
        "Accept: application/vnd.github+json"
    ]);

    $response = curl_exec($ch);

   
   
    curl_close($ch);


    return $response;
}

// Appel pour obtenir des données spécifiques (définies par le fetch JS)
if (isset($_GET['github_data'])) {
    $endpoint = $_GET['github_data'];
    $GitHubToken= getenv('GITHUB_TOKEN');
  
    echo fetchGitHubData($endpoint,$GitHubToken);
    exit();
}

function checkEndPointExist($url, $GitHubToken)  {
    // Initialiser une requête cURL
    $ch = curl_init($url);



    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . $GitHubToken,
        "User-Agent: ElphP",
        "Accept: application/vnd.github+json"
    ]);
    // Configurer cURL pour une requête HEAD
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    // Exécuter la requête
    curl_exec($ch);

    // Vérifier le code de statut HTTP
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Fermer cURL
    curl_close($ch);

    // Vérifier si le code HTTP indique que l'image existe
   echo json_encode(["codeHTTP"=>$httpCode]);
}

if (isset($_GET['check'])) {
    $url = $_GET['check'];
    $GitHubToken = getenv('GITHUB_TOKEN');

    echo checkEndPointExist($url, $GitHubToken);
    exit();
}