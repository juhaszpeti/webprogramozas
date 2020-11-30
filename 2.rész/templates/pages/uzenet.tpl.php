 <?php
$servername = "mysql.omega";
$username = "juhaszp";
$password = "qT2GHN1s";
try {
    $conn = new PDO("mysql:host=$servername;dbname=juhaszp;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
        if (isset($_POST["nev"]) && isset($_POST["email"]) && isset($_POST["telefon"]) && isset($_POST["megjegyzes"]))
        {
		$stmt2 = $conn->prepare("INSERT INTO kapcsolat_tablazat(id,name,phone,email,text) VALUES('',:name,:phone,:email,:text)");
		$stmt2->bindParam("name", $_POST["nev"], PDO::PARAM_STR);
		$stmt2->bindParam("phone", $_POST['telefon'], PDO::PARAM_STR);
		$stmt2->bindParam("email", $_POST['email'], PDO::PARAM_STR);
		$stmt2->bindParam("text", $_POST['megjegyzes'], PDO::PARAM_STR);
		$stmt2->execute();
        }?>
		
<?php
					$stmt = $conn->prepare("SELECT * FROM `kapcsolat_tablazat` ORDER BY `kapcsolat_tablazat`.`name` DESC");
                    $stmt->execute();
					$count =0;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        echo ' 
						
						<table>
						<tr>
							<th class="short">Név</th>
							<th class="short">Telefonszám</th>
							<th class="short">E-mail</th>
							<th class="long">Üzenet</th>
						</tr>
						<tr>
							<td class="short">'.$row['name'].'</td>
							<td class="short">'.$row['phone'].'</td>
							<td class="short">'.$row['email'].'</td>
							<td class="long">'.$row['text'].'</td>
							
						</tr>
						</table>
						';
                    }
?>		
</body>
</html>