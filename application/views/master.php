<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= isset($title) ? $title : 'App Home CI' ?></title>
</head>
<body>
<header>this is header</header>
<div class="container">
    <?php $this->load->view($subview); ?>
</div>
<h4>footer</h4>
</body>
</html>