<?php
session_start();
require_once('../includes/db_connect.php');


    $sessionUsername = $_SESSION['username'];
    $sql = "SELECT * FROM users WHERE username <> :sessionUsername";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':sessionUsername', $sessionUsername, PDO::PARAM_STR);
        $stmt->execute();
    
        // Fetch and echo the results
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $shipsData = $row['ships'];
            // Adjust the column names according to your database schema
        }
    } catch (PDOException $e) {
        // Handle query error
        echo "Error executing the query: " . $e->getMessage();
    }

    $sql = "SELECT * FROM users WHERE username = :sessionUsername";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':sessionUsername', $sessionUsername, PDO::PARAM_STR);
        $stmt->execute();
    
        // Fetch and echo the results
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $hitsData = $row['ships_hits'];
            // Adjust the column names according to your database schema
        }
    } catch (PDOException $e) {
        // Handle query error
        echo "Error executing the query: " . $e->getMessage();
    }




function checkWin($shipsData, $hitsData) {
    $ships = json_decode($shipsData, true)['ships'];
    $hits = json_decode($hitsData, true)['hits'];

    foreach ($hits as $hit) {
        foreach ($ships as $key => $ship) {
            $coordinates = $ship['coordinates'];
            $hitIndex = array_search($hit, $coordinates, true);

            if ($hitIndex !== false) {
                // Remove the hit coordinate if found
                unset($ships[$key]['coordinates'][$hitIndex]);

                // Check if the ship is sunk
                if (empty($ships[$key]['coordinates'])) {
                    unset($ships[$key]);
                }
            }
        }
    }



    // If all ships are sunk, echo "win"
    if (empty($ships)) {
        echo "win";
    }else{
        echo "shit";
    }
}

// $shipsData = '{"ships":[{"id":"ship3","coordinates":[{"x":"A","y":1},{"x":"A","y":2},{"x":"A","y":3}]},{"id":"ship2","coordinates":[{"x":"E","y":3},{"x":"E","y":4}]},{"id":"ship1","coordinates":[{"x":"C","y":3}]}]}';
// $hitsData = '{"hits":[{"x":"A","y":1},{"x":"A","y":2},{"x":"A","y":3},{"x":"E","y":3},{"x":"E","y":4},{"x":"C","y":3}]}';

checkWin($shipsData, $hitsData);

?>
