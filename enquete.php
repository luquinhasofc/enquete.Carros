<?php  
      if (isset($_POST['enquete_musica'])){
        setcookie('enquete_musica', $_POST[enquete_musica]);
      }

      if(isset($_COOKIE['enquete_musica'])){
        echo "Você já voltou. Não pode fazer novamente";
        } else{
            include 'enquete.html';


      }

?>  
