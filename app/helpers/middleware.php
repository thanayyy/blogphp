<?php 
    function useOnly($redirect = '/index.php'){
        if (empty($_SESSION['id'])){
            header('Location: ' . BASE_URL . $redirect);
            exit(0);
        }
    }

    function adminOnly($redirect = '/index.php'){
        if (empty($_SESSION['id']) || empty($_SESSION['admin'])){
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