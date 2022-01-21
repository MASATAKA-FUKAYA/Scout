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
                    <ul class="hamburger__items">
                        <?php if(empty($_SESSION['user_id'])): ?>
                            <li><a href="signup.php">ユーザー登録</a></li>
                            <li><a href="login.php">ログイン</a></li>
                        <?php else: ?>
                            <li><a href="logout.php">ログアウト</a></li>
                            <li><a href="mypage.php">マイページ</a></li>
                            <li><a href="profEdit.php">プロフィール編集</a></li>
                            <li><a href="passEdit.php">パスワード変更</a></li>
                            <li><a href="teamEdit.php">新規チーム作成</a></li>
                            <li><a href="teamSearch.php">チーム検索</a></li>
                            <li><a href="makeMemberRecruit.php">メンバー募集投稿</a></li>
                            <li><a href="memberRecruit.php">メンバー募集を検索</a></li>
                            <li><a href="makeOpponentRecruit.php">対戦相手募集投稿</a></li>
                            <li><a href="opponentRecruit.php">対戦相手を検索</a></li>
                            <li><a href="withdraw.php">退会する</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div><!-- /ハンバーガーメニュー -->
        </div>
    </div>
</header>