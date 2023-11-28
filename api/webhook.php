<?php require __DIR__ . '/../inc/init.php';
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('Invalid JSON data received');
}

if ($data['event'] === 'order.completed') {
    $paymentData = $data['data'];

    $customerOrder = $order->findLast();

    if ($customerOrder !== null) {
        $order->setStatus($customerOrder['id'], 1);

        $customerUser = $user->get($customerOrder['userId']);

        $products;

        if (!empty($customerUser['products'])) {
          $products = explode('|', $customerUser['products']);
          $products[] = $customerOrder['product'];
          $products = implode('|', $products);
        } else $products = $customerOrder['product'];

        $user->edit($customerUser['id'], $customerUser['name'], $customerUser['avatar'], $products);
    }
}
?>
