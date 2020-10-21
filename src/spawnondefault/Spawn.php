<?php

namespace spawnondefault;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\plugin\PluginBase as Plugin;

class main extends Plugin implements Listener{

	public function onEnable(){
  		$this->getServer()->getPluginManager()->registerEvents($this, $this);
      		$this->getServer()->getLogger()->info("AlwaysSpawn Plugin in noe Enabled!");
                $this->getServer()->getLogger()->info("Autor: Teunboeke & davidlouis101");
          	}

        public function onDisable{
      		$this->getServer()->getLogger()->info("AlwaysSpawn Plugin is now Disabled");
                $this->getServer()->getLogger()->info("Autor: Teunboeke & davidlouis101");
          	}
            
          	public function onPlayerLogin(PlayerLoginEvent $event){  
            		$event->getPlayer()->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
            }
   }
