<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email = trim(filter_var($_POST['email']));
    $user_pass = $_POST['pass'];
    $name_company = trim(filter_var($_POST['name_company']));
    $country_company = trim(filter_var($_POST['country_company']));
    $city_company = trim(filter_var($_POST['city_company']));
    $adress_company = trim(filter_var($_POST['adress_company']));
    $phone_company = trim(filter_var($_POST['phone_company']));
    $site_company = trim(filter_var($_POST['site_company']));
    $contacts = trim(filter_var($_POST['contacts']));
    $phonenumber = trim(filter_var($_POST['phonenumber']));

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=novo', 'root', 'root');
        $hashed_password = password_hash($user_pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` (user_email, user_pass, name_company, 
        country_company, city_company, adress_company, phone_company, site_company,
        contacts, phonenumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $query = $pdo->prepare($sql);
        $query->execute([
            $user_email, $hashed_password,
            $name_company, $country_company,
            $city_company, $adress_company,
            $phone_company, $site_company,
            $contacts, $phonenumber 
        ]);
        
        // Перенаправляем после успешной регистрации
        header('Location: enter_seller.php');
        exit();
        
    } catch(PDOException $e) {
        $error = "Ошибка регистрации: " . $e->getMessage();
    }
}
?>