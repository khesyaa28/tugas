<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php $nama = "Grenda Ravello";
      $nik = "6827300937465";
      $alamat ="Sawojajar";
      $jk="P";
      ?>

       <h4><?php echo "K A R T U - P E L A J A R"?></h4><br>
        <img src="lav.jpg" weight="100" height="120" hspace="10" vspace="0" align="left"/>
        
    
        <?php echo "Nama   : ".$nama;?><br>
        <?php echo "NIK    : ".$nik;?> <br>
        <?php echo "Alamat :" .$alamat;?><br>
        <?php if($jk== "P"){
          echo "Jenis Kelamin : ".$jk;
        }else{
          echo "Jenis Kelamin : L";}?>

        <br><br><br><br><br>
 <?php  $x=2;
        switch($x){
          case 1 : 
            echo "Tahu Telor";
          break;
          case 2 :
            echo "Lemper";
          break;
  }?>

  <?php for($a=0;$a<5;$a++){
    echo "Bilangan ke $a= "$a."<br/>";}?>
        
        
</body>
</html>