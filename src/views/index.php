<?php include_once "header.php"; ?>

<div class="container py-2">
    <?php
    if(empty($_GET)){
        require_once 'list.php';
    }else if(!empty($_GET['addFan'])){
        unset($_GET);
        require_once 'add.php';
    }else if(!empty($_GET['importXML'])){
        unset($_GET);
        require_once 'importXML.php';
    }else if(!empty($_GET['addSheet'])){
        unset($_GET);
        $controller->generateCSV();
    }else if(!empty($_GET['remove'])){
        $controller->delete($_GET['remove']);
    }else if(!empty($_GET['edit'])){
        require_once 'edit.php';
    }

    ?>
</div>

<?php include_once "footer.php"; ?>