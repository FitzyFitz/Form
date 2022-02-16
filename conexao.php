<?php

        $cpf = $_POST['fcpf'];

        try {
                $pdo = new PDO('mysql:host=localhost;dbname=bd_cpf', "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $stmt = $pdo->prepare('INSERT INTO cpf (cpf) VALUES(:cpf)');
                $stmt->execute(array(
                ':cpf' => $cpf
                ));
        
                //echo $stmt->rowCount();
        } catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage();
                }

?>