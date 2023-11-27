<?php
include './../class/dishorder.php';
$detail = new OrderDishes();
if (isset($_POST['feedback'])) {
    $result1 = $detail->addFeedback($_POST["id"], $_POST["feedback"]);
    if ($result1) {
        header('Location: ./../index.php?page=ct-pdm&id=' . $_POST["id"]);
    }
}
