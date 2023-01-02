<?php
  $API_KEY = 'your-api-key-goes-here';
  $PAGE_ID = 'lvfvnbdyvr13';
  $METRIC_ID = 'vx3560qcqdt1';
  $BASE_URI = 'https://api.statuspage.io/v1';
 
  $ch = curl_init(sprintf("%s/pages/%s/metrics/%s/data.json", $BASE_URI, $PAGE_ID, $METRIC_ID));
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Authorization: OAuth " . $API_KEY,
      "Expect: 100-continue"
    )
  );
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
  // need at least 1 data point for every 5 minutes
  // submit random data for the whole day
  $total_points = (60 / 5 * 24);
  for($i = 0; $i < $total_points; $i++) {
    $ts = time() - ($i * 5 * 60);
    $value = rand(0, 99);
    $postparams = array(
      "data[timestamp]" => $ts,
      "data[value]" => $value
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postparams);
    $resultStringified = curl_exec($ch);
 
    $result = json_decode($resultStringified);
    $error = $result->error;
 
    if ($error) {
      printf("Error encountered. Please ensure that your page code and authorization key are correct.");
      break;
    }
 
    printf("Submitted point %d of %d\n", ($i + 1), $total_points);
    sleep(1);
  }
?>