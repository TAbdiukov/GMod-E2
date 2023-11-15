# GMod-E2
My various E2 scripts.

# Scripts
## Main
##### AFK_Mass

* <ins>**Brief**</ins>: Defeats anti-AFK system in an unconventional way. 
* <ins>**Usage**</ins>:
	1. Spawn a hover vehicle
	2. Place a E2 on it, and
	3. Sit inside. 

	The vehicle will twitch slightly, letting the player to take a break
* <ins>**Scope**</ins>: Convenience, automation, installation
* <ins>**Status**</ins>: OK 

##### Crazy Whiskey
* <ins>**Brief**</ins>: Denies service of server's chat, weapon switch, console and other processes.  Finding the root cause of this DoS attack is very difficult.
* <ins>**Scope**</ins>: In-game security research
* <ins>**Usage**</ins>:
	1. Spawn a Wiremod entity that uses RAM for functioning, such as a console screen or a ZSPU.
	2. Place a E2 right on it.
	3. Discover the effects.
* <ins>**Status**</ins>: OK (YMMV with different generated values and devices)

#####  Drunkenzerg
* <ins>**Brief**</ins>: Causes memory exhaustion within minutes. The code creates a memory leak makes server run out of RAM, causing it to crash when trying to allocate memory for critical operations. 

	The name is inspired by [zergRush for Android 2.2/2.3](https://github.com/revolutionary/zergRush/blob/master/zergRush.c)
* <ins>**Scope**</ins>: In-game security research
* <ins>**Usage**</ins>:
	1. Place E2
	2. Wait until E2 crashes. Do not delete the chip after the crash
	3. Edit script slighly to halve the space block size
	4. Place another E2 again. Potentially let it crash, too
	5. Do NOT delete anything, simply wait another 10-30 seconds
	6. Done!
* <ins>**Status**</ins>: OK (YMMV with different server computing powers)


##### Fake Moneyprinter
* <ins>**Brief**</ins>: A simple, customizable: fake moneyprinter for DarkRP.
* <ins>**Scope**</ins>: Humor
* <ins>**Status**</ins>: OK (usefulness is limited by Expression2 limitations)

##### hoyo MIDI player v6
* <ins>**Brief**</ins>: Plays online MIDI music on the server. 
* Requires: `midi.php` and `mc.php`
* <ins>**Scope**</ins>: IRL, sound, player
* <ins>**Status**</ins>: OK (it try different switches for different songs, notably `SmoothSound`)

##### Image_Writer
* <ins>**Brief**</ins>: Prints a real-world online image on a Wiremod Digital Screen. 
* Requires: `image.php`
* <ins>**Scope**</ins>: IRL, image-processing, player.
* <ins>**Status**</ins>: OK 

##### Mario Underwater Theme
* <ins>**Brief**</ins>: Ported from ZSPU, the code plays *full* Super Mario Bros Underwater theme.
* <ins>**Scope**</ins>: IRL, player.
* <ins>**Status**</ins>: OK, enhanced

##### QMon
* <ins>**Brief**</ins>: Takes a non-delimited string (e.g. "9A"), and a Wiremod User wirelink, and then traverses the Wiremod User across requested entities while oscillating it's ON/OFF <ins>**Status**</ins>:, thus interacting with entities. Useful for RP (gain items), sandbox (press random buttons) or otherwise (opening and closing doors)
* <ins>**Scope**</ins>: Troll, in-game security research
* <ins>**Status**</ins>: OK

## .old
##### E2 Proxy
* <ins>**Brief**</ins>: A script from an **unfinished** project to passing HTTP data over the server's IP address. Frontend needs to be yet written
* <ins>**Scope**</ins>: IRL, networking
* <ins>**Status**</ins>: **Unfinished**. Frontend needs to be yet written.
