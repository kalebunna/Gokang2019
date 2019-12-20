<?php
require_once('koneksi.php');
if($_SERVER['REQUEST_METHOD']=='GET') {
  $sql = "SELECT * FROM tukang inner join kategori_tukang on kategori_tukang.KD_KTG=tukang.KD_KTG ORDER BY tukang.KD_TUKANG ASC";
  $res = mysqli_query($con, $sql);

  $result = array();
  while($row = mysqli_fetch_array($res)){
  	$q = mysqli_query($con, "SELECT *, avg(RTG) as jml_rating, count(RTG) as jml_orang from rating where KD_TUKANG='$row[KD_TUKANG]'");
    
    $b1 = mysqli_query($con, "SELECT * from rating where KD_TUKANG='$row[KD_TUKANG]' and RTG='1'");
    $b1_jml = mysqli_num_rows($b1);
    $b2 = mysqli_query($con, "SELECT * from rating where KD_TUKANG='$row[KD_TUKANG]' and RTG='2'");
    $b2_jml = mysqli_num_rows($b2);
    $b3 = mysqli_query($con, "SELECT * from rating where KD_TUKANG='$row[KD_TUKANG]' and RTG='3'");
    $b3_jml = mysqli_num_rows($b3);
    $b4 = mysqli_query($con, "SELECT * from rating where KD_TUKANG='$row[KD_TUKANG]' and RTG='4'");
    $b4_jml = mysqli_num_rows($b4);
    $b5 = mysqli_query($con, "SELECT * from rating where KD_TUKANG='$row[KD_TUKANG]' and RTG='5'");
    $b5_jml = mysqli_num_rows($b5);

    if ($b1_jml > 0) {
      $jml_b1 = $b1_jml;
    }else {
      $jml_b1 = 0;
    }

    if ($b2_jml > 0) {
      $jml_b2 = $b2_jml;
    }else {
      $jml_b2 = 0;
    }

    if ($b3_jml > 0) {
      $jml_b3 = $b3_jml;
    }else {
      $jml_b3 = 0;
    }

    if ($b4_jml > 0) {
      $jml_b4 = $b4_jml;
    }else {
      $jml_b4 = 0;
    }

    if ($b5_jml > 0) {
      $jml_b5 = $b5_jml;
    }else {
      $jml_b5 = 0;
    }

  	$d = mysqli_fetch_array($q);
  	$z = round($d['jml_rating'], 2);
    array_push($result, array('kode'=>$row[0], 'nama'=>$row[5], 'telp'=>$row[4], 'keahlian'=>$row['NM_KTG'], 'rating'=>$z, 'jml_orang'=>$d['jml_orang'], 'b1'=>$jml_b1, 'b2'=>$jml_b2, 'b3'=>$jml_b3, 'b4'=>$jml_b4, 'b5'=>$jml_b5));
  }
  echo json_encode(array("value"=>1,"result"=>$result));
  mysqli_close($con);
}
?>