<?php

namespace spawnondefault;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\plugin\PluginBase as Plugin;
use pocketmine\utils\TextFormat as TF;

class main extends Plugin implements Listener{

	public function onEnable(){
  		$this->getServer()->getPluginManager()->registerEvents($this, $this);
      		$this->getServer()->getLogger()->info(TF::GREEN . "I been Enabled");
                $this->getServer()->getLogger()->info(TF::AQUA . "Autor: Teunboeke & davidlouis101");
          	}

        public function onDisable() {
	        $this->getServer()->getLogger()->info(TF::GREEN . "I been Enabled");
                $this->getServer()->getLogger()->info(TF::AQUA . "Autor: Teunboeke & davidlouis101");
	        }
            
          	public function onPlayerLogin(PlayerLoginEvent $event){  
            		$event->getPlayer()->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
            }
   }
