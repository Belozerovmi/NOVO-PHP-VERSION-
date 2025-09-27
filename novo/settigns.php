<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Shantell+Sans:ital,wght@0,300..800;1,300..800&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="script.js" />
    <link rel="stylesheet" href="page_settings.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NOVO</title>
  </head>
  <body>
    <!-- HEADER -->
        <?php
    $header_type = 'secondary page'; // Указываем тип шапки
    require "lib/header.php";
    ?>
    <!-- HEADER SECTION -->
    <div class="header_sec2">
      <header class="header2">
        <div class="my_posts"><h1>Настройки профиля</h1></div>
        <div class="header2_btns">
          <ul class="header_2_ul">
            <li class="header2_menu">
              <div class="link-ease-in-out">
                <a class="var_short_txt" href="page3.php">
                  <o>Объявления</o>
                  <p>Мои объявления</p></a
                >
              </div>
            </li>
            <li class="header2_menu">
              <div class="link-ease-in-out">
                <a class="var_short_txt" href="page_sub.php">
                  <o>Подписка</o>
                  <p>Управление подпиской</p></a
                >
              </div>
            </li>
            <li class="header2_menu">
              <div class="link-ease-in-out">
                <a class="var_txt" href="#">
                  <img
                    src="images/message-logo.png"
                    alt=""
                    class="menu_icons"
                  />
                  <p>Сообщения</p></a
                >
              </div>
            </li>
            <li class="header2_menu">
              <div class="link-ease-in-out">
                <a class="var_txt" href="settigns.php">
                  <img src="images/settings.svg" alt="" class="menu_icons" />
                  <p>Настройки профиля</p></a
                >
              </div>
            </li>
          </ul>
        </div>
      </header>
    </div>
    <!-- HEADER -->

    <div class="sec3">
      <div class="wrapper3">
        <div class="profile">
          <h1>Профиль OFT Leasing</h1>
          <a href="#">
            <p>Выйти из аккаунта</p>
          </a>
        </div>
        <div class="account_settings">
           <!-- начало первого аккордеона -->
            <div class="first_accor">
              <details id="myDetails" open>
            <summary>
              Настройки аккаунта <button id="accord_btn" class="toggle-button">></button>
            </summary>
            <div class="accord-settings">
                <div class="your_email">
                  <p>Ваш E-mail адрес:</p>
                  <a href="https://mail.google.com/" target="_blank" >leasingOFT@gmail.com</a>
                </div>

                <div class="edit_section">
                  <div class="email_edit">
                    <h4>Изменить E-mail адрес</h4>
                    <input type="email" placeholder="Введите новый E-mail адрес">
                    <button class="btn">СОХРАНИТЬ</button>
                  </div>
                  <div class="password_edit">
                    <h4>Изменить пароль</h4>
                    <input type="password" placeholder="Введите новый пароль">
                    <div class="pass_btn">
                       <button class="btn">СОХРАНИТЬ</button>
                    <a href="#" class="forgot-password">Забыли пароль?</a>
                    </div>
                  </div>
                </div>
                </div>
          </details>
            </div>
          
           <!-- конец первого аккордеона -->
                <!-- начало второго аккордеона -->
                 <details id="myDetails2" open>
                  <summary>Изменить контактную информацию <button id="accord_btn2" class="toggle-button">></button></summary>
                   <div class="accord-settings">
                    
                    <div class="text_edit_info_about_company">
                      <p>Тут Вы можете поменять информацию про компанию,
                          которую видят Ваши клиенты </p>
                    </div>
                <div class="about_company_flex">
                            <input class="input_name_company input_data" type="text" name="name"  autocomplete="off" id="nameCompanyInput" placeholder="Название компании" value="">
                            <input class="input_country_company input_data" type="text" name="name"  autocomplete="off" id="CountryCompanyInput" placeholder="Страна" value="">
                            <input class="input_city_company input_data" type="text" name="name"  autocomplete="off" id="CityCompanyInput" placeholder="Город" value="">
                            <input class="input_adress_company input_data" type="text" name="name"  autocomplete="off" id="AdressCompanyInput" placeholder="Адрес" value="">
                            <input class="input_post_company input_data" type="text" name="name"  autocomplete="off" id="PostCompanyInput" placeholder="Почтовый индекс" value="">
                            <input class="input_phone_company input_data" type="tel" name="name"  autocomplete="off" id="PhoneCompanyInput" placeholder="Мобильный телефон" value="">
                            <input class="input_site_company input_data" type="text" name="name"  autocomplete="off" id="SiteCompanyInput" placeholder="Веб-сайт" value="">
                            <input class="input_time_company input_data" type="text" name="name"  autocomplete="off" id="SiteCompanyInput" placeholder="Время работы" value="">
                        </div>
                        <div class="contacts_reg">
                        <h1>Контактное лицо</h1>
                        <div class="contactrs_input_flex">
                            <input class="input_fio_contacts input_data" type="text" name="name"  autocomplete="off" id="FioContactsInput" placeholder="ФИО" value="">
                            <input class="input_phonenumber_contacts input_data" type="text" name="name"  autocomplete="off" id="PhoneNumContactsInput" placeholder="Мобильный телефон" value="">
                        </div>
                        
                    </div>
                    <div class="continue_reg_btn">
                        <a href="#">
                            <h1 class="continue_btn">СОХРАНИТЬ ИЗМЕНЕНИЯ</h1>
                        </a>
                    </div>
              </div>
            
                 </details>
                <!-- конец второго аккордеона -->
                <!-- начало третьего аккордеона -->
                 <details id="myDetails3" open>
                  <summary>Изменить описание компании <button id="accord_btn3" class="toggle-button">></button></summary>
                  <div class="accord-settings">
                      <div class="text_edit_discription_about_company">
                      <p>Опишите Вашу компанию. Эта информация будет показана на странице продавца </p>
                    </div>
                    <div class="textarea">
                     <div id="toolbar">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-header" value="1"></button>
                        <button class="ql-list" value="ordered"></button>
                      </div>
                      
                      <!-- Контейнер редактора -->
                      <div id="editor" style="height: 150px;">
                        <textarea name="" id="" placeholder="">Добавить описание...</textarea>
                      </div>
                      <!-- Подключение скрипта Quill -->
                      <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                      
                      <script>
                        var quill = new Quill('#editor', {
                          modules: { toolbar: '#toolbar' },
                          theme: 'snow'
                        });
                      </script>
                    </div>
                    <div class="continue_reg_btn">
                        <a href="#">
                            <h1 class="continue_btn">СОХРАНИТЬ ИЗМЕНЕНИЯ</h1>
                        </a>
                    </div>
                  </div>
                 </details>
                <!-- конец третьего аккордеона -->
                 </div>
              </div>  <!--wrapper3-->
            
         
        </div>
      </div>
    </div>

    <script>
    document.getElementById('accord_btn').addEventListener('click', function(event) {
        event.preventDefault(); // предотвращаем стандартное поведение
        const details = document.getElementById('myDetails');
        if (details) {
            details.open = !details.open; // переключаем состояние open
        }
    });

    document.getElementById('accord_btn2').addEventListener('click', function(event) {
        event.preventDefault(); // предотвращаем стандартное поведение
        const details = document.getElementById('myDetails2');
        if (details) {
            details.open = !details.open; // переключаем состояние open
        }
    });

    document.getElementById('accord_btn3').addEventListener('click', function(event) {
        event.preventDefault(); // предотвращаем стандартное поведение
        const details = document.getElementById('myDetails3');
        if (details) {
            details.open = !details.open; // переключаем состояние open
        }
    });
</script>
     <!-- FOOTER SECTION -->
      <?php require "lib/footer.php" ?>
  </body>
</html>