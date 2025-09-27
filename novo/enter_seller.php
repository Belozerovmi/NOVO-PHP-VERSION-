<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Shantell+Sans:ital,wght@0,300..800;1,300..800&display=swap"
      rel="stylesheet"
    />
 <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="script" href="script.js" />
    <link rel="stylesheet" href="page_2_style.css" />
    <link rel="stylesheet" href="enter_seller.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NOVO</title>
  </head>
  <body> 
   

  <?php
    $header_type = 'secondary page'; // Указываем тип шапки
    require "lib/header.php";
    ?>
    <!-- HEADER SECTION -->
<div class="sec1">
    <div class="wrapper1">
        <div class="enter_wrapper">
            <div class="enter_body">
                <div class="enter_inner">
                    <h1>Вход в аккаунт</h1>
                     <?php if (isset($_GET['error']) && $_GET['error'] == 'auth'): ?>
        <div style="color: red; background: transparent; padding: 10px; border-radius: 5px; margin-bottom: 20px; text-align: center;">
            Неверный email или пароль
        </div>
         <script>
    // Убираем параметр error из URL без перезагрузки
    if (window.history.replaceState && window.location.search.includes('error=auth')) {
        const newUrl = window.location.pathname;
        window.history.replaceState({}, document.title, newUrl);
    }
    </script>
    <?php endif; ?>
                    <form method = 'POST' action = 'login.php'>
                    <div class="enter_input">
                        <div class="email_input">
                            <p>E-mail</p>
                        <input id="EnterEmail" name="email" class="input_data" type="email" placeholder="" required>
                        
                        </div>
                        <div class="password_input">
                            <p>Пароль</p>
                        <input class="input_data"  name="pass" type="password" placeholder="" required>
                        </div>
                    </div>

                    <button class="continue_btn" type="submit"> ПРОДОЛЖИТЬ </button>
                </div>
</form>
            </div>
            <div class="var_register">
                <h2>Нет аккаунта? </h2>
                <a href="page2.php">РЕГИСТРАЦИЯ</a>
            </div>
            
        </div>
    </div>
</div>



     <!-- FOOTER SECTION -->
      <?php require "lib/footer.php" ?>
  </body>
</html>
