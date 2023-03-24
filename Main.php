<?php

declare(strict_types=1);

namespace skyss0fly\essentials;


use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

	
	
	 function onLoad(): void {
			$this->getLogger()->info(TextFormat::MINECOIN_GOLD . "Essentials: v0.01.Alpha loaded.");
		}
	}
	
	 function onEnable(): void {
			$this->getLogger()->info(TextFormat::LIGHT_PURPLE . "Warning: this is a very unstable build.!");
		}
	}
	
	 function onDisable(): void {
			$this->getLogger()->info(TextFormat::DARK_AQUA . "ESSENTIALS: Disabled");
		}
	}
	}
}
