<!--  <div class="hero-unit-table">					
		<a href = "iPhone.php" name = "" class = "btn btn-primary">iPhone</a> 			
		<a href = "lenovo.php" name = "" class = "btn btn-info">Lenovo</a> 
		<a href = "lg.php" name = "" class = "btn btn-info">LG</a>
		<a href = "samsung.php" name = "" class = "btn btn-info">Samsung</a> 	
		<a href = "cherry.php" name = "" class = "btn btn-success">Cherry Mobile</a> 					
</div> -->


<!-- <div class="five ui buttons">
	<a href="iPhone.php"><button class="ui button">iPhone</button></a>
	<a href="lenovo.php"><button class="ui button">Lenovo</button></a>
	<a href="lg.php"><button class="ui button">LG</button></a>
	<a href="samsung.php"><button class="ui button">Samsung</button></a>
	<a href="cherry.php"><button class="ui button">Cherry Mobile</button></a>
</div> -->

<!-- <div class="ui compact menu">
  <div class="ui simple dropdown item">
    <span class="text">iPhone</span>
    <i class="dropdown icon"></i>
    <div class="menu">
      <a href="iPhone.php"><div class="item">iPhone</div></a>
      <a href="lenovo.php"><div class="item">Lenovo</div></a>
      <a href="lg.php"><div class="item">LG</div></a>
      <a href="samsung.php"><div class="item">Samsung</div></a>
      <a href="cherry.php"><div class="item">Cherry Mobile</div></a>
    </div>
  </div>
</div> -->

<div style="padding-left: 30px; padding-right: 148px;">
    <div class="blue ui five item menu">
      <a class="item active" href="iPhone.php" id="iPhone" onclick="pChangeClass(this.id);">iPhone</a>
      <a class="item" href="lenovo.php" id="lenovo" onclick="pChangeClass(this.id);">Lenovo</a>
      <a class="item" href="lg.php" id="lg" onclick="pChangeClass(this.id);">LG</a>
      <a class="item" href="samsung.php" id="samsung" onclick="pChangeClass(this.id);">Samsung</a>
      <a class="item" href="cherry.php" id="cherry" onclick="pChangeClass(this.id);">Cherry Mobile</a>
    </div>
</div>


<!--
<script type="text/javascript">

    window.onload = function()
    {
        document.getElementById("iPhone").className = "item";
        document.getElementById("lenovo").className = "item";
        document.getElementById("lg").className = "item";
        document.getElementById("samsung").className = "item";
        document.getElementById("cherry").className = "item";
        
        if(localStorage.getItem('pStatus') == "true")
        {
            document.getElementById(localStorage.getItem('pClass')).className = "item active";
        }
        else
            document.getElementById("iPhone").className = "item active";
        
        localStorage.setItem('pClass',null);
        localStorage.setItem('pStatus',null);
    }
    
    function pChangeClass(id)
    {
        localStorage.setItem('pClass',id);
        localStorage.setItem('pStatus',"true");
    }

</script>
-->
