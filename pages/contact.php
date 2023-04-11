<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // POSTでのアクセスでない場合
    $name = '';
    $huri = '';
    $email = '';
    $message = '';
    $err_msg = '';
    $complete_msg = '';

} else {
    // フォームがサブミットされた場合（POST処理）
    // 入力された値を取得する
    $name = $_POST['name'];
    $huri = $_POST['huri'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // エラーメッセージ・完了メッセージの用意
    $err_msg = '';
    $complete_msg = '';

    // 空チェック
    if ($name == '' || $huri == '' || $email == '' || $message == '') {
        $err_msg = '全ての項目を入力してください。';
    }

    // エラーなし（全ての項目が入力されている）
    if ($err_msg == '') {
        $to = 'uratasoua@icloud.com'; // 管理者のメールアドレスなど送信先を指定
        $headers = "From: " . $email . "\r\n";

        // 本文の最後に名前を追加
        $message .= "\r\n\r\n" . $name;

        // メール送信
        mb_send_mail($to, $huri, $message, $headers);

        // 完了メッセージ
        $complete_msg = '送信されました！';

        // 全てクリア
        $name = '';
        $huri = '';
        $email = '';
        $message = '';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="../styles/reset.min.css">
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/contact.css" />
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
</head>

<body>
  <!-- ヘッダー -->
  <header class="header">
    <div class="container">
      <!-- ロゴ -->
      <div class="header__logo">
        <a class="logo" href="../index.html">
          旅館ロゴ
        </a>
      </div>
      <!-- ナビゲーションバー -->
      <nav class="header__nav">
        <ul class="nav__wrapper">
          <li class="nav__item"><a href="../index.html">ホーム</a></li>
          <li class="nav__item"><a href="rooms.html">客室</a></li>
          <li class="nav__item"><a href="hotspring.html">温泉</a></li>
          <li class="nav__item"><a href="foods.html">お料理</a></li>
          <li class="nav__item"><a href="">館内案内</a></li>
          <li class="nav__item"><a href="access.html">アクセス</a></li>
          <li class="nav__item"><a href="">FAQ</a></li>
          <li class=""><a href="#!">|</a></li>
          <li class="nav__item"><a href="">JP▽</a></li>
          <li class="header__contact"><a href="">お問い合わせ</a></li>
          <li class="header__reserve"><a href="reserve.html">ご宿泊予約</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="contact">
    <div class="page__title">
      <h1>お問い合わせ</h1>
    </div>

    <?php if ($err_msg != ''): ?>
      <div class="alert alert-danger">
        <?php echo $err_msg; ?>
      </div>
    <?php endif; ?>
    
    <?php if ($complete_msg != ''): ?>
      <div class="alert alert-success">
        <?php echo $complete_msg; ?>
      </div>
    <?php endif; ?>

    <form method="contact__post">
      <div class="contactform">
        <div class="contactform__item">
          <p>お名前</p>
          <input type="text" class="contactform__item__input" placeholder="" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="contactform__item">
          <p>フリガナ</p>
          <input type="text" class="contactform__item__input" placeholder="" name="huri" value="<?php echo $huri; ?>">
        </div>
        <div class="contactform__item">
          <p>メールアドレス</p>
          <input type="email" class="contactform__item__input" placeholder="" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="contactform__item">
          <p class="contactform__item__label">内容</p>
          <textarea class="contactform__item__textarea" name="message"><?php echo $message; ?></textarea>
        </div>
        <input type="submit" class="contactform__btn" value="送信する">
      </div>
    </from>
  </div>
</body>
</html>