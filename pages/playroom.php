<?php
session_start();
require_once '../includes/db_connect.php';
$Username = $_SESSION['username'];
try {
//Vale tin timi left sto column game_status
$updateSql = "UPDATE users SET game_status = 'left' WHERE username = :username";
$updateStmt = $pdo->prepare($updateSql);
$updateStmt->bindParam(':username', $Username);
$updateStmt->execute();
}catch (PDOException $e) {
  // Handle database errors
  echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Battleship Game</title>
 <link rel="stylesheet" href="../css/playroom.css">
</head>
<body>


<div style="font-size:30px; font-weight:700; position:absolute;top:30px; left:30px;">Navmaxia</div>
<div class="top-section">
  <div class="ekfonitis" id="ekfonitis" style="padding: 5px;">
      <p id="inner-text">Πατήστε το κουμπί για να ξεκινήσετε.</p>
  </div>
  <button id="startBtn" onclick="start()">Ψάξε αντίπαλο</button>
</div>


<div>
  <!-- left Grid -->
  <div class="grid-container" id="grid2">
    <div class="label-cell"></div>
    <div class="label-cell">1</div>
    <div class="label-cell">2</div>
    <div class="label-cell">3</div>
    <div class="label-cell">4</div>
    <div class="label-cell">5</div>

    <div class="label-cell">A</div>
    <div class="grid-cell" id="grid2-cell-A-1"></div>
    <div class="grid-cell" id="grid2-cell-A-2"></div>
    <div class="grid-cell" id="grid2-cell-A-3"></div>
    <div class="grid-cell" id="grid2-cell-A-4"></div>
    <div class="grid-cell" id="grid2-cell-A-5"></div>

    <div class="label-cell">B</div>
    <div class="grid-cell" id="grid2-cell-B-1"></div>
    <div class="grid-cell" id="grid2-cell-B-2"></div>
    <div class="grid-cell" id="grid2-cell-B-3"></div>
    <div class="grid-cell" id="grid2-cell-B-4"></div>
    <div class="grid-cell" id="grid2-cell-B-5"></div>

    <div class="label-cell">C</div>
    <div class="grid-cell" id="grid2-cell-C-1"></div>
    <div class="grid-cell" id="grid2-cell-C-2"></div>
    <div class="grid-cell" id="grid2-cell-C-3"></div>
    <div class="grid-cell" id="grid2-cell-C-4"></div>
    <div class="grid-cell" id="grid2-cell-C-5"></div>

    <div class="label-cell">D</div>
    <div class="grid-cell" id="grid2-cell-D-1"></div>
    <div class="grid-cell" id="grid2-cell-D-2"></div>
    <div class="grid-cell" id="grid2-cell-D-3"></div>
    <div class="grid-cell" id="grid2-cell-D-4"></div>
    <div class="grid-cell" id="grid2-cell-D-5"></div>

    <div class="label-cell">E</div>
    <div class="grid-cell" id="grid2-cell-E-1"></div>
    <div class="grid-cell" id="grid2-cell-E-2"></div>
    <div class="grid-cell" id="grid2-cell-E-3"></div>
    <div class="grid-cell" id="grid2-cell-E-4"></div>
    <div class="grid-cell" id="grid2-cell-E-5"></div>
  </div>
  <p style="text-align: center; padding: 10px; margin-left: 40px;">Ο Πίνακας μου </p>
</div>



  <!-- right grid-->
  <div>
    <div id="overlay"></div>
    <div class="grid-container" id="grid1">
      <div class="label-cell"></div>
      <div class="label-cell">1</div>
      <div class="label-cell">2</div>
      <div class="label-cell">3</div>
      <div class="label-cell">4</div>
      <div class="label-cell">5</div>
  
      <div class="label-cell">A</div>
      <div class="grid-cell" id="grid1-cell-A-1"></div>
      <div class="grid-cell" id="grid1-cell-A-2"></div>
      <div class="grid-cell" id="grid1-cell-A-3"></div>
      <div class="grid-cell" id="grid1-cell-A-4"></div>
      <div class="grid-cell" id="grid1-cell-A-5"></div>
  
      <div class="label-cell">B</div>
      <div class="grid-cell" id="grid1-cell-B-1"></div>
      <div class="grid-cell" id="grid1-cell-B-2"></div>
      <div class="grid-cell" id="grid1-cell-B-3"></div>
      <div class="grid-cell" id="grid1-cell-B-4"></div>
      <div class="grid-cell" id="grid1-cell-B-5"></div>
  
      <div class="label-cell">C</div>
      <div class="grid-cell" id="grid1-cell-C-1"></div>
      <div class="grid-cell" id="grid1-cell-C-2"></div>
      <div class="grid-cell" id="grid1-cell-C-3"></div>
      <div class="grid-cell" id="grid1-cell-C-4"></div>
      <div class="grid-cell" id="grid1-cell-C-5"></div>
  
      <div class="label-cell">D</div>
      <div class="grid-cell" id="grid1-cell-D-1"></div>
      <div class="grid-cell" id="grid1-cell-D-2"></div>
      <div class="grid-cell" id="grid1-cell-D-3"></div>
      <div class="grid-cell" id="grid1-cell-D-4"></div>
      <div class="grid-cell" id="grid1-cell-D-5"></div>
  
      <div class="label-cell">E</div>
      <div class="grid-cell" id="grid1-cell-E-1"></div>
      <div class="grid-cell" id="grid1-cell-E-2"></div>
      <div class="grid-cell" id="grid1-cell-E-3"></div>
      <div class="grid-cell" id="grid1-cell-E-4"></div>
      <div class="grid-cell" id="grid1-cell-E-5"></div>
    </div>
    <p style="text-align: center; padding: 10px; margin-left: 100px;">Πίνακας αντιπάλου</p>
  </div>
  
<div style="position:absolute; color:black; bottom:0px; left:0px; padding:0px 10px 0px 10px; background-color:#e3e3e3; border-top-right-radius: 10px;">
<p>Είσαι ο <span style="font-weight:600;"><?php echo $_SESSION["username"];?></span></p> 
</div>

 <div style="position:absolute; top:40px; right:40px;">
 <a onclick="logout()" style="font-size:14px; padding:7px 10px 7px 10px; border: 1px solid red; border-radius:10px; cursor:pointer;">Έξοδος</a>
</div>




<div style="width:100%; height:100%; background-color: rgba(0, 0, 0, 0.95); position:absolute; display:none;" id="modal">
  <div style="color:white; text-align:center; font-size:20px; position:absolute; top:40%; left:50%; transform: translateX(-50%);">
    <p id="final-announcement" style="font-size:30px; font-weight:600;"></p>
    <p>Κάνε επαναφόρτωση σελίδας για νέο αγώνα.</p>
  </div>
</div>




  
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="../js/playroom-scrips.js"></script>
</body>
</html>
