
    <?php
// Определяем, какая шапка показывать
$header_type = isset($header_type) ? $header_type : 'default';
?>


    <?php if ($header_type == 'home'): ?>
        <!-- Шапка для главной страницы -->
        <div class="header_sec1">
      <header class="header">
        <div class="logo">
          <a href="#" class="main_logo_for_seller">
            <h1>N.SELLER</h1>
          </a>
        </div>
        <div class="header_btns">
          <ul>
            <li><a href="#">Маркетплейс</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Преимущества</a></li>
            <li><a href="#tariffs">Тарифы</a></li>
          </ul>
        </div>
        <div class="enter_btn">
          <a href="enter_seller.php"
            ><div class="link_enter">
              <p>Войти</p>
            </div></a
          >
        </div>
        <div class="menu">
    <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
    <label for="burger-checkbox" class="burger"></label>
    <ul class="burg-list">
        <li><a href="#" class="burg-item">Маркетплейс</a><li>
        <li><a href="#tariffs" class="burg-item">Тарифы</a><li>
        <li><a href="enter_seller.php" class="burg-item">Вход</a><li>
        <li><a href="page2.php" class="burg-item">Регистрация</a><li></li>
    </ul>
      </div>
      </header>
      </div>
        
    <?php elseif ($header_type == 'secondary page'): ?>
        <div class="header_sec1">
        <header class="header">
        <div class="logo">
          <a href="index.php" class="main_logo_for_seller">
            <h1>NOVO SELLER</h1>
          </a>
          <div class="lang_money">
            <a href="#" class="lang_link header_link">
                <div class="languages">
            <p>Языки </p>
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612.007 612.007" style="enable-background:new 0 0 612.007 612.007;" xml:space="preserve"><g><g id="_x31_0"><g><path d="M596.168,130.647c-21.119-21.169-55.382-21.169-76.526,0L306.013,366.44L92.384,130.647 c-21.144-21.169-55.382-21.169-76.525,0c-21.144,21.169-21.144,55.458,0,76.627l248.504,274.31 c11.438,11.438,26.672,16.482,41.651,15.54c14.953,0.942,30.213-4.102,41.65-15.54l248.505-274.31 C617.287,186.105,617.287,151.817,596.168,130.647z" fill="#000000" style="fill: rgb(0, 0, 0);"></path></g></g></g></svg>
          </div>
            </a>
            <a href="#" class="money_link header_link">
                <div class="money">
            <p>Валюта </p>
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612.007 612.007" style="enable-background:new 0 0 612.007 612.007;" xml:space="preserve"><g><g id="_x31_0"><g><path d="M596.168,130.647c-21.119-21.169-55.382-21.169-76.526,0L306.013,366.44L92.384,130.647 c-21.144-21.169-55.382-21.169-76.525,0c-21.144,21.169-21.144,55.458,0,76.627l248.504,274.31 c11.438,11.438,26.672,16.482,41.651,15.54c14.953,0.942,30.213-4.102,41.65-15.54l248.505-274.31 C617.287,186.105,617.287,151.817,596.168,130.647z" fill="#000000" style="fill: rgb(0, 0, 0);"></path></g></g></g></svg>
          </div>
            </a>
        </div>
        </div>
        
        <div class="enter_btn">
          <a href="#"
            ><div class="link_enter">
              <p> <o>ПЕРЕЙТИ НА </o>NOVO </p>
            </div></a
          >
        </div>
        </div>
    </header>
    </div>
        
    <?php else: ?>
        <!-- Стандартная шапка -->
       <div class="header_sec1">
      <header class="header">
        <div class="logo">
          <a href="#" class="main_logo_for_seller">
            <h1>N.SELLER</h1>
          </a>
        </div>
        <div class="header_btns">
          <ul>
            <li><a href="#">Маркетплейс</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Преимущества</a></li>
            <li><a href="#tariffs">Тарифы</a></li>
          </ul>
        </div>
        <div class="enter_btn">
          <a href="enter_seller.php"
            ><div class="link_enter">
              <p>Войти</p>
            </div></a
          >
        </div>
        <div class="menu">
    <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
    <label for="burger-checkbox" class="burger"></label>
    <ul class="burg-list">
        <li><a href="#" class="burg-item">Маркетплейс</a><li>
        <li><a href="#tariffs" class="burg-item">Тарифы</a><li>
        <li><a href="enter_seller.php" class="burg-item">Вход</a><li>
        <li><a href="page2.php" class="burg-item">Регистрация</a><li></li>
    </ul>
</div>

        
      </header>
    </div>
        
    <?php endif; ?>
