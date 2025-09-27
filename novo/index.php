<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Shantell+Sans:ital,wght@0,300..800;1,300..800&display=swap"rel="stylesheet"/>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="script.js" />
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NOVO</title>
  </head>
  <body>
    <script src="script.js" defer></script>
    <button id="backToTop" class="back-to-top" title="Наверх">↑</button>

    <!-- ШАПКА, ПОДКЛЮЧАЕМАЯ С PHP -->
    <?php
    $header_type = 'home'; // Указываем тип шапки
    require "lib/header.php";
    ?>
    <!-- ШАПКА, ПОДКЛЮЧАЕМАЯ С PHP -->
    
    <div  id="about_company_anchor"  class="sec1">
      <div class="wrapper1">
        <div class="bg_photo1">
          <div class="page_1_txt">
            <p>Novo - маркетплейс техники</p>
            <h1>
              Продавайте технику <br />
              быстро и удобно
            </h1>
            <a href="page2.php">
              <h2 class="page_1_btn">СТАТЬ ПРОДАВЦОМ НА NOVO</h2>
            </a>
          </div>
        </div>
      </div>
      <div class="about_us">
        <p>Про компанию</p>
        <h2>
          NOVO - торговая площадка коммерческого <br />транспорта и тяжёлой
          техники
        </h2>
      </div>
      <div class="about_us_photos">
        <div class="stepped-container">
          <a href="#top" class="block_link"
            ><div class="block block-1">
              <span>Коммерческий транспорт</span>
            </div></a
          >
          <a href="#top" class="block_link"
            ><div class="block block-2">
              <span
                >Сельхозтехника</span
              >
            </div>
          </a>
          <a href="#top" class="block_link">
            <div class="block block-3">
              <span
                >Строительная <br />
                техника</span
              >
            </div>
          </a>
          <a href="#top" class="block_link">
            <div class="block block-4">
              <span
                >Складское <br />
                оборудование</span
              >
            </div>
          </a>
        </div>
      </div>
    </div>

    <div id="advantages" class="sec2">
      <div class="wrapper2">
        <div class="photos_sec2">
          <div class="first_img z1">
            <img src="images/screen.png " alt="" loading="lazy" />
          </div>

          <div class="bluedot">
            <img src="images/blue dot.png" alt="" loading="lazy" />
          </div>
          <div class="bluedot2">
            <img src="images/blue dot.png" alt="" loading="lazy" />
          </div>

          <div class="img_txt1">
            <h1>
              Понятный<br />
              мессенджер
            </h1>
          </div>
          <div class="img_txt2">
            <h1>
              Удобный<br />
              дизайн
            </h1>
          </div>
          <div class="img_txt3">
            <h1>
              Круглосуточная<br />
              поддержка
            </h1>
          </div>
        </div>
      </div>
    </div>

    <div id="tariffs" class="sec3">
      <div class="wrapper3">
        <div class="sec3_txt">
          <p>Тарифы и цены</p>
          <h1>
            Станьте продавцом сегодня и получите <br />10 объявлений бесплатно
          </h1>
        </div>
        <div class="cards_special">
          <a href="#" class="card_link1">
            <div class="card1 crd">
              <img
                class="circle circl1"
                src="images/circles03(light theme).png"
                alt=""
                loading="lazy"
              />
              <p>Starter</p>
              <h1>Бесплатно</h1>
              <h4>До 10 объявлений</h4>
              <img
                src="images/Vector 3 (green).png"
                alt=""
                class="arrow"
                loading="lazy"
              />
              <img class="arrow2" src="images/Vector 3.png" alt="">
              </div
          ></a>
          <a href="#" class="card_link2">
            <div class="card2 crd">
              <img
                class="circle circl2"
                src="images/circles02(light theme).png"
                alt=""
                loading="lazy"
              />
              <p>Premium</p>
              <h1>999₽<span> / месяц</span></h1>
              <h4>До 30 объявлений</h4>
              <img
                src="images/Vector 3 (green).png"
                alt=""
                class="arrow"
                loading="lazy"
              />
               <img class="arrow2" src="images/Vector 3.png" alt="">
            </div>
          </a>
          <a href="#" class="card_link3">
            <div class="card3 crd">
              <img
                class="circle circl3"
                src="images/circles01(light theme).png"
                alt=""
                loading="lazy"
              />
              <p>Ultimate</p>
              <h1>1999₽<span> / месяц</span></h1>
              <h4>До 50 объявлений</h4>
              <img
                src="images/Vector 3 (green).png"
                alt=""
                class="arrow"
                loading="lazy"
              />
              <img class="arrow2" src="images/Vector 3.png" alt="">
            </div>
          </a>
        </div>
<!-- pop up -->
             <div id="customAlert">Это пользовательское уведомление!</div>

            <div class="pop_up" id="pop_up">
              <div class="pop_up_container">
                <div id="pop_up_body" class="pop_up_body">
                  <h1>Мы свяжемся с Вами в ближайшее время</h1>
                  <p>Впишите свои данные и мы перезвоним Вам <br>
                    для создания личного тарифного плана</p>
                  
                  <input class="input_name_input input_pop" type="text" name="name"  autocomplete="off" id="nameInput" placeholder="Ваше имя" value="">
                  <p id="nameErrorText" style="display:none; color:red; margin: 0;">Неверное имя</p>
                  <!-- имя -->
                  <input class="input_mail_input input_pop" id="emailInput" type="email" autocomplete="off" name="mail" id="mail" placeholder="E-mail адрес" value="">
                  <p id="errorText" style="color: red; display: none; margin: 0;">Некорректный email</p>
                  <!-- e-mail -->
                  <input class="input_phone_num_input input_pop" type="tel" name="phone_num" autocomplete="off" id="phoneInput" placeholder="Номер телефона" pattern="\+?[0-9\s\-\(\)]+ value="">
                  <p id="phoneErrorText" style="color: red; display: none; margin: 0; padding: 0;">Некорректный номер телефона</p>
                  <!-- номер телефона -->
                   <a href="" id="callback">
                <h2 class="pop_up_btn">ОТПРАВИТЬ</h2>
              </a>
              
                  <div id="pop_up_close" class="pop_up_close">
                    &#10006
                  </div>
                </div>
              </div>
            </div>
        

        <div class="special_offer">
          <div class="iphone_left">
            <img src="images/iphone(light).png" alt="" loading="lazy" />
            
            
          </div>
          <div class="right_site">
            <div class="right_site_txt">
              <h1>
                Хотите размещать более 50-ти<br />
                объявлений в месяц?
              </h1>
              <p>
                Мы предложим индивидуальные <br />
                условия сотрудничества
              </p>

              <a href="" id="open_pop_up">
                <h2 class="r_site_btn">ПОДРОБНЕЕ</h2>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec4">
      <div class="wrapper4">
        <h1>Начать продавать легко</h1>
      </div>
      <div class="flex_sec4">
        <div class="flex_step1">
          <div class="step1_left photo">
            <img class="steps_photo" src="images/step1.png" alt="" loading="lazy" />
            <img class="step_photos_mobile sphm1" src="images/step1_mobile.png" alt="">
          </div>
          <div class="step1_right txt_sec4">
            <p>Шаг первый</p>
            <h4>Регистрация</h4>
          </div>
        </div>
        <div class="flex_step2">
          <div class="step2_left photo">
            <img class="steps_photo" src="images/screen_light themepng.png" alt="" loading="lazy" />
            <img class="step_photos_mobile sphm2" src="images/step2_mobile.png" alt="">
          </div>
          <div class="step2_right txt_sec4">
            <p>Шаг второй</p>
            <h4>Выбор пакета</h4>
          </div>
        </div>
        <div class="flex_step3">
          <div class="step3_left photo3">
            <img class="steps_photo" src="images/step3.png" alt="" loading="lazy" />
            <img class="step_photos_mobile sphm3 " src="images/step3_mobile.png" alt="">
          </div>
          <div class="step3_right txt_sec4">
            <p>Шаг третий</p>
            <h4>Размещение <br class="br_step" />объявления</h4>
          </div>
        </div>
      </div>
      <div class="sec4_button">
        <a href="page2.php">
          <h2 class="sec4_btn">СТАТЬ ПРОДАВЦОМ</h2>
        </a>
      </div>
    </div>

     <?php require "lib/footer.php" ?>
  </body>
</html>
