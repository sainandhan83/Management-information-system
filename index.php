<?php
require "userlogin.php"
?>
<html><body>
 <main>
   <div class="wrapper-main">
     <section class="section-default">
       <?php
        if (isset($_SESSION['userid']))
		{
          header('location:loginstatus.php');
		}
?>

    </section>
    </div>
    </main>
<>
</body></html>
