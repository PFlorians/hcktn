<?php
/**
 * autoloader
 */
   spl_autoload_register(
       function($clName)
       {
           if(file_exists($clName . ".php"))
           {
                  require_once($clName .".php");
           }
           else
           {
               throw new Exception("Error trying to load file: " . $clName . ".php", 1000);
           }
       }
   );
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
     $ldp=new LdapConnect("DEUDCFRAN2002.grouphc.net", 389);
     $conn=$ldp->tstConnect();
     var_dump($conn);
     if(isset($ldp) && isset($conn))
     {
       $ldp->setDomain("grouphc.net");
       $ldp->setDc("DC=grouphc,DC=net");
       $ldp->setOU("OU=Users,OU=GOC,OU=GIT");
       $ldp->setUsername("pafloria");
       $ldp->setPassword("memoryOfKashmere1913");
       $ldp->searchConn($conn);
     }
   }
  ?>
