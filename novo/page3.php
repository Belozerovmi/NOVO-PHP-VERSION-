<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Shantell+Sans:ital,wght@0,300..800;1,300..800&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="script.js" />
    <link rel="stylesheet" href="page_3_style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NOVO</title>
  </head>
  <body>
    <?php

?>
        <?php
    $header_type = 'secondary page'; // Указываем тип шапки
    require "lib/header.php";
    ?>
    <!-- HEADER SECTION -->
    <div class="header_sec2">
      <header class="header2">
        <div class="my_posts"><h1>Мои объявления</h1></div>
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

    <div class="sec3">
      <div class="wrapper3">
        <div class="search_block">
          <div class="search_block_inner">
            <div class="count_of_used">
              <h3>Использовано объявлений:</h3>
              <h2>9/10</h2>
            </div>
            <div class="input-with-button">
              <input
                class="search_input"
                type="text"
                placeholder="Поиск по объявлениям"
              />
              <a href="#" class="add-button">
                <p class="plus-icon">ДОБАВИТЬ</p>
              </a>
            </div>
          </div>
        </div>

        <div class="section_with_cards">
          <div class="car-grid">
            <a href="" class="car-card-link">
              <div class="car-card card1">
                <img src="images/opel.jpg" alt="Car" />
                <div class="car-info">
                  <h3>Opel Combo 1.7 MT</h3>
                  <div class="car-info-flex">
                    <p>2002</p>
                    <p>1285 кг</p>
                    <p>261 000 км</p>
                  </div>
                  <div class="car-cost-geo">
                    <div class="action-buttons">
                      <button class="edit-btn">Редактировать</button>
                      <button class="delete-btn">Удалить</button>
                    </div>
                    <h1>Воронеж</h1>
                    <p class="cost_p">Цена: 345 000 ₽</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="car-card-link"
              ><div class="car-card card2">
                <img src="images/90 bus.webp" alt="Car" />
                <div class="car-info">
                  <h3>ЛиАЗ-5293.70</h3>
                  <div class="car-info-flex">
                    <p>2006</p>
                    <p>10 135 кг</p>
                    <p>1 243 487 км</p>
                  </div>
                  <div class="car-cost-geo">
                    <div class="action-buttons">
                      <button class="edit-btn">Редактировать</button>
                      <button class="delete-btn">Удалить</button>
                    </div>
                    <h1>Воронеж</h1>
                    <p class="cost_p">Цена: 2 450 000 ₽</p>
                  </div>
                </div>
              </div></a
            >
            <a href="" class="car-card-link">
              <div class="car-card card3">
                <img src="images/kamaz.webp" alt="Car" />
                <div class="car-info">
                  <h3>КамАЗ 5531</h3>
                  <div class="car-info-flex">
                    <p>2015</p>
                    <p>7 500 кг</p>
                    <p>533 389 км</p>
                  </div>
                  <div class="car-cost-geo">
                    <div class="action-buttons">
                      <button class="edit-btn">Редактировать</button>
                      <button class="delete-btn">Удалить</button>
                    </div>
                    <h1>Воронеж</h1>
                    <p class="cost_p">Цена: 2 750 000₽</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="car-card-link">
              <div class="car-card card4">
                <img src="images/PAZ.webp" alt="Car" />
                <div class="car-info">
                  <h3>ПАЗ-3205</h3>
                  <div class="car-info-flex">
                    <p>1987</p>
                    <p>2 500 кг</p>
                    <p>490 574 км</p>
                  </div>
                  <div class="car-cost-geo">
                    <div class="action-buttons">
                      <button class="edit-btn">Редактировать</button>
                      <button class="delete-btn">Удалить</button>
                    </div>
                    <h1>Воронеж</h1>
                    <p class="cost_p">Цена: 430 000₽</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="car-card-link"
              ><div class="car-card card5">
                <img src="images/URAL.jpg" alt="Car" />
                <div class="car-info">
                  <h3>Урал-4320</h3>
                  <div class="car-info-flex">
                    <p>1999</p>
                    <p>9 800 кг</p>
                    <p>249,765 км</p>
                  </div>
                  <div class="car-cost-geo">
                    <div class="action-buttons">
                      <button class="edit-btn">Редактировать</button>
                      <button class="delete-btn">Удалить</button>
                    </div>
                    <h1>Воронеж</h1>
                    <p class="cost_p">Цена: 1 420 000₽</p>
                  </div>
                </div>
              </div></a
            >
            <a href="" class="car-card-link"
              ><div class="car-card card5">
                <img src="images/FORD.webp" alt="Car" />
                <div class="car-info">
                  <h3>Iveco Daily</h3>
                  <div class="car-info-flex">
                    <p>2011</p>
                    <p>2 400 кг</p>
                    <p>128,459 км</p>
                  </div>
                  <div class="car-cost-geo">
                    <div class="action-buttons">
                      <button class="edit-btn">Редактировать</button>
                      <button class="delete-btn">Удалить</button>
                    </div>
                    <h1>Воронеж</h1>
                    <p class="cost_p">Цена: 574 000₽</p>
                  </div>
                </div>
              </div></a
            >
            <a href="" class="car-card-link"
              ><div class="car-card card5">
                <img src="images/TRUCK.jpg" alt="Car" />
                <div class="car-info">
                  <h3>Volvo FH13</h3>
                  <div class="car-info-flex">
                    <p>2011</p>
                    <p>7 500 кг</p>
                    <p>1 460 000 км</p>
                  </div>
                  <div class="car-cost-geo">
                    <div class="action-buttons">
                      <button class="edit-btn">Редактировать</button>
                      <button class="delete-btn">Удалить</button>
                    </div>
                    <h1>Воронеж</h1>
                    <p class="cost_p">Цена: 3 790 000 ₽</p>
                  </div>
                </div>
              </div></a
            >
            <a href="" class="car-card-link">
              <div class="car-card card5">
                <img src="images/K700.jpg" alt="Car" />
                <div class="car-info">
                  <h3>Кировец К-700А</h3>
                  <div class="car-info-flex">
                    <p>1991</p>
                    <p>13 400 кг</p>
                    <p>50 574 км</p>
                  </div>
                  <div class="car-cost-geo">
                    <div class="action-buttons">
                      <button class="edit-btn">Редактировать</button>
                      <button class="delete-btn">Удалить</button>
                    </div>
                    <h1>Воронеж</h1>
                    <p class="cost_p">Цена: 4 200 000 ₽</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="car-card-link">
              <div class="car-card card5">
                <img src="images/MERCEDES.webp" alt="Car" />
                <div class="car-info">
                  <h3>Mercedes-Benz V-класс 2.1 AT</h3>
                  <div class="car-info-flex">
                    <p>2022</p>
                    <p>2000 кг</p>
                    <p>112 000 км</p>
                  </div>
                  <div class="car-cost-geo">
                    <div class="action-buttons">
                      <button class="edit-btn">Редактировать</button>
                      <button class="delete-btn">Удалить</button>
                    </div>
                    <h1>Воронеж</h1>
                    <p class="cost_p">Цена:3 460 000 ₽</p>
                  </div>
                </div>
              </div></a
            >
            <!-- Повторяющиеся карточки -->
          </div>
        </div>
        <div class="more_btn">
          <a href="#"
            ><div class="link_enter_2">
              <p>ЗАГРУЗИТЬ ЕЩЁ</p>
            </div></a
          >
        </div>
      </div>
    </div>
    <!-- FOOTER SECTION -->
        <?php require "lib/footer.php" ?>
  </body>
</html>
