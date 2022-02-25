<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Landingpage FPTU - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($body))?$body:'' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <div id="offcanvas-flip-menu" class="menuMobile" uk-offcanvas="flip: false; overlay: true">
        <div class="uk-offcanvas-bar menuMobile__bar">
            <ul uk-scrollspy-nav="closest: li; scroll: true" class="menuMobile__nav uk-nav-default uk-nav-parent-icon uk-nav-divider" uk-nav="multiple: false;toggle: .menuMobile__nav__icon;collapsible:false;">
                <li><a href="#">TRANG CHỦ</a></li>
                <li><a href="#taisao">TẠI SAO CHỌN ĐH FPT?</a></li>
                <li><a href="#tuyensinh">THÔNG BÁO TUYỂN SINH</a></li>
                <li><a href="#daotao">CHUYÊN NGÀNH ĐÀO TẠO</a></li>
                <li><a href="#dangky">ĐĂNG KÝ HỌC</a></li>
                <li><a href="#">ĐĂNG NHẬP</a></li>
            </ul>
        </div>
    </div>