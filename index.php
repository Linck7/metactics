<?php
session_start();
include("inc/dbcon.php");
 
include("inc/header.php");
?>



<div class="container">
  <div class="jumbotron">
    <h1>Metactics</h1>      
    <p>INDEX</p>      
    <!--a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a-->
  </div>
</div>

<div class="container">
<div class="jumbotron">

<div class="container-fluid">
	<iframe src="http://challonge.com/metacticstest/module" width="100%" height="600" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
</div>

</div>
</div>



<?php
include("inc/footer.php");
?>