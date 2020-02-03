<?php

namespace tiojoin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class tiojoin extends PluginBase implements Listener {

   public function onEnable() {
      $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
      $this->getLogger ()->alert("접속플러그인 적용완료용!");
   }
   public function join(PlayerJoinEvent $event) {
     $player = $event->getPlayer();
     $name = $player->getName();
     if ($player->isOp()) {
       $this->getServer()->broadcastMessage("관리자 { $name }님 환영합니다");
       else {
         $this->getServer()->broadcastMessage("유저 { $name }님 환영합니다");
       }
     }
   }
}
