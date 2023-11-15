# GMod-E2
My various E2 scripts.

# Scripts
## Main
##### AFK_Mass

* Defeats anti-AFK system in an unconventional way. 
* Usage:
	1. Spawn a hover vehicle
	2. Place a E2 on it, and
	3. Sit inside. 

	The vehicle will twitch slightly, letting the player to take a break
* Scope: Convenience, automation, installation
* Status: OK 

##### Crazy Whiskey
* Denies service of server's chat, weapon switch, console and other processes.  Finding the root cause of this DoS attack is very difficult.
* Scope: In-game security research
* Usage:
	1. Spawn a Wiremod entity that uses RAM for functioning, such as a console screen or a ZSPU.
	2. Place a E2 right on it.
	3. Discover the effects.
* Status: OK (YMMV with different generated values and devices)

#####  Drunkenzerg
* Within minutes, causes memory exhaustion. The code creates a memory leak makes server run out of RAM, causing it to crash when trying to allocate memory for critical operations. 

	The name is inspired by [zergRush for Android 2.2/2.3](https://github.com/revolutionary/zergRush/blob/master/zergRush.c)
* Scope: In-game security research
* Usage:
	1. Place E2
	2. Wait until E2 crashes. Do not delete the chip after the crash
	3. Edit script slighly to halve the space block size
	4. Place another E2 again. Potentially let it crash, too
	5. Do NOT delete anything, simply wait another 10-30 seconds
	6. Done!
* Status: OK (YMMV with different server computing powers)


##### Fake Moneyprinter
* A simple, customizable: fake moneyprinter for DarkRP.
* Scope: Humor
* Status: OK (usefulness is limited by Expression2 limitations)

##### hoyo MIDI player v6
* Plays MIDI music on the server. 
* Requires: `midi.php` and `mc.php`
* Scope: IRL, sound, player
* Status: OK (it try different switches for different songs, notably `SmoothSound`)

##### Image_Writer
* Prints a real-world image on the digital screen. 
* Requires: `image.php`
* Scope: IRL, image-processing, player.
* Status: OK 

##### Mario Underwater Theme** 
* Ported from ZSPU, the code plays *full* Super Mario Bros Underwater theme.
* Scope: IRL, player.
* Status: OK, enhanced

##### QMon
* Takes a non-delimited string (e.g. "9A"), and a Wiremod User wirelink, and then traverses the Wiremod User across requested entities while oscillating it's ON/OFF status, thus interacting with entities. Useful for RP (gain items), sandbox (press random buttons) or otherwise (opening and closing doors)
* Scope: Troll, in-game security research
* Status: OK

## .old
##### E2 Proxy
* A script from an **unfinished** project to passing HTTP data over the server's IP address. Frontend needs to be yet written
* Scope: IRL, networking
* Status: **Unfinished**. Frontend needs to be yet written.

