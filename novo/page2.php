

<!DOCTYPE html>
<html lang="en-ru">
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
    <link href="script.js" />
    <link rel="stylesheet" href="page_2_style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NOVO</title>
  </head>
  <body>

   
      <?php
    $header_type = 'secondary page'; // Указываем тип шапки
    require "lib/header.php";
    ?>
    <!-- HEADER SECTION -->
    <section class="sec1">
        <div class="wrapper1">
            <div class="registration_card">
                <div class="reg_card_inner">
                    <div class="reg_car_txt">
                        <h1>Регистрация продавца</h1>
                        <p>Заполните указаные поля, чтобы создать аккаунт продавца</p>
                    </div>
                    <div class="account_reg">
                        <h1>Аккаунт</h1>
                        <form method="post" action ="register.php">
                        <div class="account_input_flex">
                            
                             
                            <input class="input_email_account input_data" type="email" name="email"  autocomplete="off" id="emailAccountInput" placeholder="E-mail" value="" required>
                            <input class="input_password_account input_data" type="password" name="pass"  autocomplete="off" id="passAccountInput" placeholder="Пароль" value="" required>
                        
                        </div>
                       
                    </div>
                    <div class="about_company_reg">
                        <h1>О компании</h1>
                        <div class="about_company_flex">
                          
                            <input class="input_name_company input_data" type="text" name="name_company"  autocomplete="off" id="nameCompanyInput" placeholder="Название компании" value="">
                            <input class="input_country_company input_data" type="text" name="country_company"  autocomplete="off" id="CountryCompanyInput" placeholder="Страна" value="">
                            <input class="input_city_company input_data" type="text" name="city_company"  autocomplete="off" id="CityCompanyInput" placeholder="Город" value="">
                            <input class="input_adress_company input_data" type="text" name="adress_company"  autocomplete="off" id="AdressCompanyInput" placeholder="Адрес" value="">
                            <input class="input_phone_company input_data" type="tel" name="phone_company"  autocomplete="off" id="PhoneCompanyInput" placeholder="Мобильный телефон" value="">
                            <input class="input_site_company input_data" type="text" name="site_company"  autocomplete="off" id="SiteCompanyInput" placeholder="Веб-сайт" value="">
                        </div>
                    </div>
                    <div class="contacts_reg">
                        <h1>Контактное лицо</h1>
                        <div class="contactrs_input_flex">
                            <input class="input_fio_contacts input_data" type="text" name="contacts"  autocomplete="off" id="FioContactsInput" placeholder="ФИО" value="">
                            <input class="input_phonenumber_contacts input_data" type="text" name="phonenumber"  autocomplete="off" id="PhoneNumContactsInput" placeholder="Мобильный телефон" value="">
                        </div>
                    </div>
                    <div class="checkbox_reg">
                        <div class="checkbox">
                            <input class="checkbox-input" type="checkbox" id="myCheckbox">
                            <label class="checkbox-label" for="myCheckbox"><p>Авторизуясь, <a target="_blank" href="https://policies.google.com/privacy">Вы принимаете Условия использования и Заявлением о конфиденциальности</a> NOVO</p>
                            </label>
                        </div>
                    </div>

                    <div class="continue_reg_btn">
                        <button class="continue_btn" type="submit"> ПРОДОЛЖИТЬ </button> 
                    </div>
                    </form>
            </div>
        </div>
    </section>
    <!-- FOOTER SECTION -->
        <?php require "lib/footer.php" ?>
  </body>
</html>
