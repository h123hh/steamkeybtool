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
<style>
    .text {
  margin : 50px 6% 50px 6%;
  }
  </style>
<body>
<h3 align="center">SteamKey生成工具</h3>
<div class="container">
<form method="post" action="./key/">
<div class="form-group">
  <label>生成数量</label>
  <input type="text" name="k" class="form-control" placeholder="请输入需要生成Key的数量,不得大于1000">
</div>

<button type="submit" class="btn btn-info btn-success btn-block">立即生成</button>
</form>
</div>

<div class="panel panel-default text">
  <div class="panel-heading">说明</div>
  <div class="panel-body">
    该工具是根据SteamKey的生成规则生成Key的工具，生成出来的Key不是真正的SteamKey，请勿用于违法用途
  </div>
</div>
</body>