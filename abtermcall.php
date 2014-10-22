<?php

  $pageName ="BTS List";

  require("globals.php");
  include ($tools . "/winsDbConn.php");
  include ($tools . "/sendemailsms_mime_v2.php");
  require($incFolderPath . "/generic.php");
  require($incFolderPath . "/head.php");
  
   if(!checkAccessToPage()){
    header("Location: mainmenu.php");
  }
  
   echo "<div id='manageVesselTitle'>";
  require($abtermcalls . "/abtermcallmenu.php");
  echo "</div>";
  
  echo "<div id='graphDisplayBox6'>";
  require($abtermcalls . "/abtermcallresult.php");
  echo "</div>";

require($incFolderPath . "/foot.php");

?>

 