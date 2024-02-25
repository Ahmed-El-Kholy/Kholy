<?php
if ( isset($_GET['status']) )
{
    /*Open File */
    $myfile = fopen("status.txt","w");
    if($_GET['status'] == 'on')
    {
        fwrite($myfile,'1');
        header ("Location: indexLedOn.html");
    }
    elseif($_GET['status'] == 'off')
    {
        fwrite($myfile,'0');
        header ("Location: indexLedOff.html");
    }

    fclose($myfile);
}   
?>