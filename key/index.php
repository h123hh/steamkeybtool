<!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>SteamKey生成工具</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<?php
if ($_POST["k"] <= "1000") {
    $k = $_POST["k"];
    include '../controller/key.php';
} else {
    echo"<script>alert('最多只能生成1000个');history.go(-1);</script>";
}
if ($_POST["k"] > "0") {
    $k = $_POST["k"];
} else {
    echo"<script>alert('请输入正确的参数');history.go(-1);</script>";
}
?>
<body>
<h3 align="center">SteamKey生成工具</h3>
<div class="container a">

<form method="post" action="down.php">

<div class="form-group">
      <label>生成成功，Key如下</label>
      <textarea class="form-control" readonly rows="10" name="text"><?php
          for ($f=1; $f<=$k; $f++)
          {
              $key1 = getName($n);
              $key2 = getName($n);
              $key3 = getName($n);
              $key = $key1."-".$key2."-".$key3;
              echo $key."\n";
          }
      ?></textarea>
</div>

<button type="submit" class="btn btn-info btn-success btn-block">下载生成的Key</button>
</form>

</div>
</body>