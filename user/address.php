<?php
session_start();
include '../conn.php';
$uid=$_REQUEST['uid'];

$sql = "SELECT * FROM user where id = '".$uid."'";
$result = $conn->query($sql);

if ($result->num_rows <= 0) {

echo '请先注册或登录！';
exit;
  }

?>
<!DOCTYPE>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>地址管理</title>
  <link rel="stylesheet" type="text/css" href="../css/general.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/general.js"></script>
  <script type="text/javascript" src="../js/carousel.js"></script>
</head>
<body>
<!-- 顶部开始 -->

<!-- 头部开始 -->
<?php include '../header.php'; ?>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w1100">
      <br>  <br>  <br>  <br>
      <p style="font-size:30px">
<?php

while($row = $result->fetch_assoc()) {
 ?>
 <form class="" action="doaddaddress.php" method="post">
<table>
  <tr>
    <td>联系人：</td>
    <td><input type="text" name="username" value=""></td>
  </tr>
  <tr>
    <td>手机号：</td>
    <td><input type="text" name="tel" value=""></td>
  </tr>
  <tr>
    <td>省：</td>
    <td><input type="text" name="province" value=""></td>
  </tr>
  <tr>
    <td>市：</td>
	<td><input type="text" name="city" value=""></td>
    </td>
  </tr>
  <tr>
    <td>区：</td>
    <td><input type="text" name="district" value=""></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="" value="保存"></td>
  </tr>
</table>

</form>
<?php } ?>
 </p>

</div>
<!-- 页脚开始 -->
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>

