<?php

namespace HealthTag1b;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\level\particle\FlameParticle;
use pocketmine\level\sound\LaunchSound;
use pocketmine\math\Vector3;
use pocketmine\utils\TextFormat as Color;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerMoveEvent;

class Main extends PluginBase implements Listener{
	
	private $maxDefault=5;

	public function onEnable(){
        	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onMove(PlayerMoveEvent $event){
		$player = $event->getPlayer();
		
		$this->setMaxHealthDefault(20);
	       
		$player->setNameTag($this->set($player->getName()."\n§l§2    ".$player->getHealth()."§c/§2 : ".$this->getMaH());
	       
	}
	private function set($set){
	return Color::GOLD.$set;
        }
        // API
        
        public function setMaxHealthDefault($amount){
        return $this->maxDefault = $amount;
        }
        public function getMaxH(){
        return $this->maxDefault;
        }
        }
}
