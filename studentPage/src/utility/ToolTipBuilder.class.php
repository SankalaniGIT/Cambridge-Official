<?php
class ToolTipBuilder{
 
   public static function buildToolTipCalendar($task){
    $toolTip = "";
    $toolTip .= "<b>File Reference</b> : ".$task->getProjectCase()->getFile_reference();
    $toolTip .= "<br><b>Case Number</b>  : ".$task->getProjectCase()->getCaseNumber();
    $toolTip .= "<br><b>Client </b>  : ".$task->getProjectCase()->client->getFirst_name()." ".
    $task->getProjectCase()->client->getLast_name();
    $toolTip .= "<br><b>Step Name</b> : ".$task->getStep_name();

    return $toolTip;
   }
}
?>