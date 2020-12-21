<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recodepro";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comments (nome, msg) values ('$nome','$msg')";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - Full Stack Music</title>

    <link rel="stylesheet" href=".././css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
</head>
<body>

    <?php 
        include_once('./includes/menu_simple.html');
    ?>

    <h2 style="color:whitesmoke">Contacts</h2>
    <hr>
    <table border=0 width="100%" cellpadding="20" class="table_contact">
        <tr>
            <td width="50%" align="center">
                <img src="./assets/mail.png" alt="">
                <font face="Arial" size="4">contact@fullstackmusic.com</font>
            </td>

            <td width="50%" align="center">
                <img src="./assets/whatsapp.png" alt="">
                <font face="Arial" size="4">+1 876-999-9999</font>
            </td>
        </tr>
    </table>

    <form method="post" action="" >
        Nome:<br>
        <input type="text" name="nome" style="width:500px"><br>
        Mensagem:<br>
        <input type="text" name="msg" style="width:500px"><br>

        <input type="submit" name="submit" value="enviar"><br>

    </form>


    <?php    
                        $sql = "SELECT * FROM comments";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0){
                            while($rows = $result->fetch_assoc()) {
                                echo "Date: ", $rows['date'], "<br>";
                                echo "Nome: ", $rows['nome'], "<br>";
                                echo "Message: ", $rows['msg'], "<br>";
                            }
                        }else{
                            echo "no comments yet!";
                        }
    ?>
    
    <br><br><br><br>  <br><br><br><br>

    <footer id="footer">
        <p id="payment_methods"><b> Payment methods: </b></p>
        <img src=".././assets/peyment methods.png" alt="payment methods">
        </p>&copy; Recode Pro turmas 2020</p>
     </footer>
</body>
</html>