<?php

namespace Teunboeke2005\spawnondefault;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\plugin\PluginBase as Plugin;

class main extends Plugin implements Listener{
	public function onEnable(){
  		$this->getServer()->getPluginManager()->registerEvents($this, $this);
  		$this->getServer()->getLogger()->info("AlwaysSpawn Enabled!");
  	}
            
  	public function onPlayerLogin(PlayerLoginEvent $event){  
		$event->getPlayer()->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
    }
                  
}                  
