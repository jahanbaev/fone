<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'aa224707e706c425e599',
    'cf07888dbc5ff9608b7f',
    '1266110',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>
