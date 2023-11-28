<?php require __DIR__ . '/../inc/init.php';
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['userId']) && isset($_POST['product']) &&
        is_numeric($_POST['userId']) && is_numeric($_POST['product']))
    {
        $order->create($_POST['userId'], $_POST['product']);
    }
}
?>