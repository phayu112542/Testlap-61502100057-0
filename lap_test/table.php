<?php require_once("connect.php");
if(isset($_GET['id_movie'])){
    $result = $conn-> query("DELETE FROM major WHERE id_movie=".$_GET['id_movie']);
    if($result){
        header("Location table.php");
    }else{
        echo"ลบข้อมูลไม่สำเร็จ";
    }
  }
?>

<body>
    <button onclick="window.location='index1.php';">เพิ่มข้อมูล</button>
</body>
<form action="." method="get">
    <input type="text" name="search" id="search" placeholder="ค้นหา">
    <button type="submit" name="serach_click">ค้นหา</button>
</form>
<form action="login.php" method="post">
    <button type="submit" name="logout">ออกจากระบบ</button>
</form><br>
<table style="width:100%;" border="1">

  <tr>
    <th>รหัสนักศึกษา</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>วันเกิด</th>
    <th>pin</th>
    <th>จัดการ</th>

  </tr>
  <?php
  $sql = "SELECT * FROM major";
 $result = $conn ->query($sql);

 while($rs = $result->fetch_object()){
  ?>
  
  
  <tr>
    <td><?=$rs->id_movie?></td>
    <td><?=$rs->movie_name?></td>
    <td><?=$rs->time?></td>
    <td><?=$rs->name_cus?></td>
    <td><?=$rs->pin?></td>
    <td>
    <a href="edit.php?id_movie=<?=$rs->id_movie?>">แก้ไข</a>
    <a href="table.php?id_movie=<?=$rs->id_movie?>">ลบ</a>
      
    </td>
  </tr>
  <?php } ?>
</table>