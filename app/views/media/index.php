
 
 <?php $this->setSiteTitle('MediaIndex');?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
 
 
 <style>
 .icmContainer{
	  width: 100%;
    overflow-x: auto;
    white-space: nowrap;
 }
 .icmContainer::-webkit-scrollbar {
  display: none;
 }
 .icmcb{
	 width:40%;
	 display:inline-block;
 }
.icmct{
	width:100%;
}
.icmcg{
	width:300%;
}

.divTable{
	display: table;
	width: 100%;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	display: table-cell;
	padding: 30px 100px;
	margin-right:80%;
	margin-left:-10%;
	width:250%;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}
.introHeader{
	width:100%;
	font-size:2.3em;
	color:rgb(49,215,215);
	font-weight:800;
}
.introSub{
	width:100%;
	font-size:1.8em;
	color:rgb(49,215,215);
}
 </style>
 
 
  <!-- TODO -->
 <!-- iterate configurable media content/blurbs-->
 
 <div class="introHeader">@Handler:<?php echo $this->getPulse();?></div>
  <br><br>
  <div class="introSub">I am currently operating my ranch and testing my irrigation system. Contact me to schedule a tour! Enjoy!</div>
  <br><br>
 
<h1>Media/Content</h1>

<div class="icmContainer">
    
<div class="divTable" style="width: 100%;" >
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>

<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>

</div>
</div>
</div>
  </div>
  <br><br>
   
<h1>Storefront</h1>

<div class="icmContainer">
    
<div class="divTable" style="width: 100%;" >
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>

<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>
<div class="divTableCell"><img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>Marketing.png" class="icmcg"/><br><div class="icmct">Marketing</div></div>

</div>
</div>
</div>
  </div>

<?php $this->end(); ?>

  
