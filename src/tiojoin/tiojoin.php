<?php

namespace tiojoin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class tiojoin extends PluginBase implements Listener {

   public function onEnable() {
      $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
      $this->getLogger ()->alert("티오 접속플러그인 적용완료");
   }
   public function join(PlayerJoinEvent $event) {
     $event->setJoinMessage(false);
     $player = $event->getPlayer();
     $name = $player->getName();
     if ($player->isOp()) {
       $this->getServer()->broadcastMessage("§e§l관리자§a $name §e님이 접속하셨습니다");
     }
       else {
         $this->getServer()->broadcastMessage("§f§l유저§a $name §f님이 접속하셨습니다");
       }
     }
     public function Quit(PlayerQuitEvent $event) {
       $player = $event->getPlayer();
       $name = $player->getName();
       if ($player->isOp()) {
         $this->getServer()->broadcastMessage("§e§l관리자§a $name §e님이 퇴장하셨습니다");
       }
         else {
           $this->getServer()->broadcastMessage("§f§l유저§a $name §f님이 퇴장하셨습니다");
         }
     }
   }
