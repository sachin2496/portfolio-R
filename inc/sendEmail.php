<?php
    // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md
    require_once '/path/to/vendor/autoload.php';
    use Twilio\Rest\Client;

    $sid    = "AC36e5d266b52677fc40ac49767f7d08cb";
    $token  = "1a123b9d22066b7af2eb1804822be71b";
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
      ->create("whatsapp:+917643927304", // to
        array(
          "from" => "whatsapp:+14155238886",
          "body" => "Your appointment is coming up on July 21 at 3PM"
        )
      );

print($message->sid);

?>