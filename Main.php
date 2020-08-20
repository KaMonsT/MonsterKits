<?php

namespace mk;

use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\Item;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\level\sound\AnvilUseSound;
use pocketmine\plugin\PluginBase as P;
use pocketmine\event\Listener as L;


class main extends P implements L {

   public function onEnable(){$this->getlogger()->info
   
   (    "\n§f»  §aMønster§fKits «
    
    
           Plugin §aOn");
   }
   
   public function onDisable(){$this->getlogger()->info
   ("\n§f»  §4Mønster§fKits «
    
    
           Plugin §4Off");
   }
