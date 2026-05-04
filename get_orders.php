<?php
// get_orders.php
header('Content-Type: application/json');

// PANELDE SADECE BİR TANE VERDİĞİ O UZUN ANAHTARI BURAYA YAPIŞTIR
$personal_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJlODcxYTZhNTZmMGNiZmYwMGE2ZjQ3OGMzM2FlMDc1MCIsImp0aSI6ImFiNTkzMzE5ZWU2YWRkODE5ZTZhMzU5YmQxNTAxMjY4MTE4M2JlNThlZmNkNTQ5OTdjMWQwZDRmZTYxZmM4Y2Y0ZDFkYjQwYWI3MzVhYmRhZDczZTk5ZTMwMTA0YjIwOTg1N2EyNGE4NGM3MTUxYTI1YzhmZjcyODBkMDkzMWQ1YTgzMzA0ODA3ZDliMGI1Yjk4Y2UzZWE3NTI4ZDE3ZjgiLCJpYXQiOjE3Nzc5MDY0OTgsIm5iZiI6MTc3NzkwNjQ5OCwiZXhwIjoxOTM1NjkxMjU4LCJzdWIiOjI1MDQxMzcsInNjb3BlcyI6WyJvcmRlcnM6cmVhZCIsIm9yZGVyczp3cml0ZSIsInByb2R1Y3RzOnJlYWQiLCJwcm9kdWN0czp3cml0ZSIsInNoaXBwaW5nczpyZWFkIiwic2hpcHBpbmdzOndyaXRlIiwiZGlzY291bnRzOnJlYWQiLCJkaXNjb3VudHM6d3JpdGUiLCJwYXlvdXRzOnJlYWQiLCJyZWZ1bmRzOnJlYWQiLCJyZWZ1bmRzOndyaXRlIiwic2hvcDpyZWFkIiwic2hvcDp3cml0ZSJdfQ.vZVehH0BEDSIOqJLbcDfS6El_1CuRGAqCAMht--1VQgMENY1bETkFZpxb5aiTnN-Dk0Snb756AIgIVSmX-Uw5GStkcx58UiuTYDzHP6z5Bcmne9DHGAhQutSWNeSq12zX2epdUP8qW6DhWI3x2QQJLfbtzf5gM6M2dpBj6g5M87DzCkkwDNIJB_tNGIOAbNyPiOMG3qXqHhMlQpd1IW_BqD8Y9J9UJWg2MHMU9UAHNKBvpVucS4rCS3N0b_aiOlz-igjyx5BiEYehkImJ0Z6FHDpjBvofMUp6kwRtf2-WS5PfI2zimTp3UAz3NzqCQ_DNxc5rekq-_7iLX4tzodgvw';

function getOrders($token) {
    // Burada Shopier API'sine senin PAT anahtarınla istek atıyoruz
    // Şimdilik sistemin nasıl görüneceğini anlaman için sana örnek bir veri dönüyorum
    // Gerçek bağlantı için Shopier dökümanındaki curl isteğini buraya ekleyebilirsin
    
    return [
        [
            "id" => "206687245331",
            "productName" => "BLI V1 PRO Mouse",
            "date" => "4 Mayıs 2026",
            "price" => "299,99 TL",
            "status" => "Siparişin Hazırlanıyor",
            "img" => "https://bliesports.com.tr/mouse.png",
            "shopierUrl" => "https://www.shopier.com/ShowProductProxy/siparis_takip.php"
        ]
    ];
}

$orders = getOrders($personal_token);
echo json_encode($orders);
?>
