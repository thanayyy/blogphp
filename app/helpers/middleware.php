<?php 
    function userOnly($redirect = '/index.php'){
        if (empty($_SESSION['id'])){
            echo "You must login first";
            header('Location: ' . BASE_URL . $redirect);
            exit(0);
        }
    }

    function adminOnly($redirect = '/index.php'){
        if (empty($_SESSION['id']) || empty($_SESSION['admin'])){
            echo "You don't have permission";
            header('Location: ' . BASE_URL . $redirect);
            exit(0);
        }
    }

    function guestOnly($redirect = '/index.php'){

        if (empty($_SESSION['id'])){
            header('Location: ' . BASE_URL . $redirect);
            exit(0);
        }
    }
?>