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
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="script.js" />
    <link rel="stylesheet" href="page_sub.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NOVO</title>
  </head>
  <body>
 
    <?php
    $header_type = 'secondary page'; // Указываем тип шапки
    require "lib/header.php";
    ?>
    <!-- HEADER SECTION -->
    <div class="header_sec2">
      <header class="header2">
        <div class="my_posts"><h1>Управление подпиской</h1></div>
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
                <a class="var_short_txt" href="#">
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

    <div class="sec3">
      <div class="wrapper3">
        <div class="your_plan_flex">
          <h2>Ваш тарифный план:</h2>
          <div class="your_plan_inner">
            <div class="plan_card">
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
                </div></a
              >
            </div>
            <div class="plan_date">
              <div class="date_right">
                <p>Оплачено:</p>
                <h3>15.10.2024</h3>
              </div>
              <div class="date_left">
                <p>Дейстивтелен до:</p>
                <h3>15.10.2025</h3>
              </div>
            </div>
          </div>
          <div class="under_crd_txt">
            <p>
              Вы выбрали бесплатный пакет Starter, который действует до
              <span>15.10.2025.</span> <br />
              С <span>15.09.25 </span> этот пакет будет стоить
              <span>999 рублей / месяц</span>.
            </p>
          </div>
        </div>
        <hr />
        <div class="other_plans_flex">
          <h2>Другие тарифные планы:</h2>
          <div class="other_plans_inner">
            <div class="other_plans_cards">
              <a href="#" class="card_link2">
                <div class="card2 crd">
                  <img
                    class="circle circl2"
                    src="images/circles02(light theme).png"
                    alt=""
                    loading="lazy"
                  />
                  <p>Premium</p>
                  <h1>999₽<span style="font-size: 14px"> / месяц</span></h1>
                  <h4>До 30 объявлений</h4>
                  <img
                    src="images/Vector 3 (green).png"
                    alt=""
                    class="arrow"
                    loading="lazy"
                  />
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
                  <h1>1999₽<span style="font-size: 14px"> / месяц</span></h1>
                  <h4>До 50 объявлений</h4>
                  <img
                    src="images/Vector 3 (green).png"
                    alt=""
                    class="arrow"
                    loading="lazy"
                  />
                </div>
              </a>
            </div>

            <div class="sales_department">
              <h4>
                Для размещения более 50-ти объявлений в месяц, свяжитесь с
                отделом продаж
              </h4>

              <a href="" id="open_pop_up">
                <h2 class="r_site_btn">ПОДРОБНЕЕ</h2>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FOOTER SECTION -->
         <?php require "lib/footer.php" ?>
  </body>
</html>
