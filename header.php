<header>
    <div class="site-width">
        <div id="header-left">
            <p>レベルを選べる！<br>草野球マッチングサイト</p>
            <h2 id="header-logo"><a href="top.php">Scout!</a></h2>
        </div>
        <div id="header-right">
            <?php if(empty($_SESSION['user_id'])): ?>
                <div class="btn btn-signup">
                    <a href="signup.php">ユーザー登録</a>
                </div>
                <div class="btn btn-login">
                    <a href="login.php">ログイン</a>
                </div>
            <?php else: ?>
                <div class="btn btn-loggedin">
                    <a href="logout.php">ログアウト</a>
                </div>
                <div class="btn btn-loggedin">
                    <a href="mypage.php">マイページ</a>
                </div>
            <?php endif; ?>
            <!-- ハンバーガーメニュー -->
            <div class="js-hamburger__button hamburger__button">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="js-hamburger__content hamburger__content">
                <nav>
                    <ul>
                        <?php if(empty($_SESSION['user_id'])): ?>
                            <li class="hamburger__item"><a href="signup.php">ユーザー登録</a></li>
                            <li class="hamburger__item"><a href="login.php">ログイン</a></li>
                        <?php else: ?>
                            <li class="hamburger__item"><a href="logout.php">ログアウト</a></li>
                            <li class="hamburger__item"><a href="mypage.php">マイページ</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div><!-- /ハンバーガーメニュー -->
        </div>
    </div>
</header>