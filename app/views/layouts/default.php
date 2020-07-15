<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PulsePhase:100</title>
<!-- <link rel="stylesheet" href="<?=PROOT?>" media="screen" title="no title" charset="utf-8"> -->
<!-- <script src="<?=PROOT?>js/script"></script> -->

<?= $this->content('head'); ?>
<!-- Bootstrap css -->
<link href="<?=PROOT?>css/pulse100.css" rel="stylesheet">
</head>

<body>
<!-- var_dump($this); -->
<!-- each view layout contains a controllerAction with which to specify a view layout action method -->

<div style="width:100%;">

<div style="position:float; left:5px; top: 5px;">
<h1>Sovereign Search: Welcome <?php echo $this->getPulse(); ?></h1>
<input type="text" placeholder="find someone/something" class="sovereignSearch"/>
</div>
<br><br>
</div>
<img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>ruonA.png" style="width:28%; position:fixed; top:0px; left:72%;" />

<?= $this->content('body'); ?>
</body>

</html>

