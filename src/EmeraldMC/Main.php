<?php //Always Start your plugin With a <?php.
  namespace JoinMessage; //The name of your plugin gos here.

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent; //this part is important dont forget it.
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat; //We are finished with the first part. (moving on to number 2).

class Main extends PluginBase implements Listener{//Part 2 is finishined now lets move on to the third part
  
  public function onEnable(){//This is the plugin startup.
    $this->getServer()->getPluginManager->registerEvents($this);
    $this->getLogger()->info("AuroraCore Plugin by EmeraldMC has Been Enabled Successfully!");//This will send a message in console saying the plugin is enabled.
  }//time for the last and final part.
  
  public function onPlayerJoin(PlayerJoinEvent $event){
    $p = event->getPlayer();
    $p->sendMessage("§7===============§d===============");
    $p->sendMessage("§l§r");
    $p->sendMessage("§l      §5Aurora§dHCF §r§7BETA");
    $p->sendMessage("§l§r");
    $p->sendMessage("§aNow Playing: §7KitMap");
    $p->sendMessage("§l§r");
    $p->sendMessage("§aStore: §7AuroraMCPE.buycraft.net");
    $p->sendMessage("§aVote: §7Coming Soon");
    $p->sendMessage("§aDiscord: §7Coming Soon");
    $p->sendMessage("§l§r");
    $p->sendMessage("§aGet Started With: §7/f help");
    $p->sendMessage("§l§r");
    $p->sendMessage("§d===============§7===============");
  }
  
  //Thank you guys for watching this video you can find this plugin at https://github.com/xXCaulDevsYT/Youtube-Tutorial-1
  //I Will Also Post A Link In The Description To Send You Directly Here!
