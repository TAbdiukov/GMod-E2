# GMod-E2
My various E2 scripts.

# Scripts
## Main
##### [AFK Mass](/Expression2/AFK_Mass.txt)

* <ins>**Brief**</ins>: Defeats anti-AFK system in an unconventional way. 
* <ins>**Usage**</ins>:
	1. Spawn a hover vehicle.
	2. Place an E2 on it, and
	3. Sit inside. 

	The vehicle will twitch slightly, letting the player to take a break.
* <ins>**Scope**</ins>: Convenience, automation, installation.
* <ins>**Status**</ins>: OK 

##### [Crazy Whiskey](/Expression2/Crazy_Whiskey.txt)
* <ins>**Brief**</ins>: Denies service of server's chat, weapon switch, console, and other processes.  Finding the root cause of this DoS attack is very difficult.
* <ins>**Scope**</ins>: In-game security research
* <ins>**Usage**</ins>:
	1. Spawn a Wiremod entity that uses RAM for functioning, such as a console screen or a ZSPU.
	2. Place an E2 right on it.
	3. Discover the effects.
* <ins>**Status**</ins>: OK (YMMV with different generated values and devices)

##### [Fake Moneyprinter](/Expression2/Fake_Moneyprinter.txt)
* <ins>**Brief**</ins>: A simple, customizable: fake moneyprinter for DarkRP.
* <ins>**Scope**</ins>: Humor
* <ins>**Status**</ins>: OK (usefulness is limited by Expression2 limitations)

##### [Hoyo MIDI player v6](/Expression2/Hoyo_Midi_Player_V6.txt)
* <ins>**Brief**</ins>: Plays online MIDI music on the server. 
* <ins>**Requires**</ins>: `midi.php` and `mc.php`
* <ins>**Scope**</ins>: IRL, sound, player
* <ins>**Status**</ins>: OK (it try different switches for different songs, notably `SmoothSound`)

##### [Image Writer](/Expression2/Image_Writer.txt)
* <ins>**Brief**</ins>: Prints a real-world online image on a Wiremod Digital Screen. 
* <ins>**Requires**</ins>: `image.php`
* <ins>**Scope**</ins>: IRL, image-processing, player.
* <ins>**Status**</ins>: OK 

##### [Mario Underwater Theme](/Expression2/Mario_Underwater_Theme.txt)
* <ins>**Brief**</ins>: Ported from ZSPU, the code plays *full* Super Mario Bros Underwater theme.
* <ins>**Scope**</ins>: IRL, player.
* <ins>**Status**</ins>: OK, enhanced

##### [StagesDemo-strcpy](/Expression2/StagesDemo-strcpy.txt)
* <ins>**Brief**</ins>: Demo of Stage-based programming (state computing) to enable 512MB+ string copy as well as additional operations if needed. 
* <ins>**Scope**</ins>: IRL, performance, demo.
* <ins>**Status**</ins>: OK

##### [QMon](/Expression2/QMon.txt)
* <ins>**Brief**</ins>: Takes a non-delimited string (e.g. "9A"), and a Wiremod User wirelink, and then traverses the Wiremod User across requested entities while oscillating it's power status, thus interacting with entities. Useful for RP (gain items), sandbox (press random buttons) or otherwise (opening and closing doors)
* <ins>**Scope**</ins>: Troll, in-game security research
* <ins>**Status**</ins>: OK

##### [ZergRush](/Expression2/ZergRush.txt)
* <ins>**Brief**</ins>: Causes memory exhaustion within minutes. The code creates a memory leak makes server run out of RAM, causing it to crash when trying to allocate memory for critical operations. 

	The name is inspired by [zergRush for Android 2.2/2.3](https://github.com/revolutionary/zergRush/blob/master/zergRush.c).
* <ins>**Scope**</ins>: In-game security research
* <ins>**Usage**</ins>:
	1. Place E2.
	2. Wait until E2 crashes. Do not delete the chip after the crash.
	3. Edit script slightly to halve the space block size (by decrementing 1 power of 2)
	4. Place another E2 again. Potentially let it crash, too.
	5. Do NOT delete anything, simply wait another 10-30 seconds.
	6. Done!
* <ins>**Status**</ins>: OK (YMMV with different server computing powers)

## [Satellite](/Expression2/Satellite)
'Satellite' engine traverses the map. Satellite code that has multiple use-cases.
##### [Satellite CAM](/Expression2/Satellite/Satellite%20CAM.txt)
* <ins>**Brief**</ins>: Lets user (most likely owner) traverse the map using Wiremod Cam Controller.
* <ins>**Requires**</ins>: Wiremod Cam Controller
* <ins>**Usage**</ins>:
	1. Place E2.
	2. Place Wiremod Cam Controller.
	3. Wire E2 to Cam Controller.
	4. Press mouse's LMB and RMB at the same time.
* <ins>**Scope**</ins>: Exploration
* <ins>**Status**</ins>: OK

##### [Satellite EXT](/Expression2/Satellite/Satellite%20EXT.txt)
* <ins>**Brief**</ins>: Lets owner traverse the map, if Wiremod Extras are installed on the server.
* <ins>**Requires**</ins>: Wiremod Extras installed on the server.
* <ins>**Usage**</ins>:
	1. Place E2.
	2. Press mouse's LMB and RMB at the same time.
* <ins>**Scope**</ins>: Exploration
* <ins>**Status**</ins>: OK

##### [Satellite Seat NoClip](/Expression2/Satellite/Satellite%20Seat%20NoClip.txt)
* <ins>**Brief**</ins>: Lets a seat (chair or vehicle) driver traverse the map.
* <ins>**Requires**</ins>: Default Wiremod permissions.
* <ins>**Usage**</ins>:
	1. Place any chair or vehicle.
	2. Place E2 right on it, so E2 is constrained to a seat.
	3. (Recommended) If available, use "NoCollide All" or "NoCollide World" tool on both E2 and seat.
	4. Use the seat.
* <ins>**Scope**</ins>: Exploration
* <ins>**Status**</ins>: OK

## [E2P](/Expression2/E2P) 
E2P (Expression2Power) specific hazardous code. Unsupported by mainstream Expression2.
* **`e2p_defender`** – Sends RPG missiles to target direction.
* **`e2p_getcoolgear`** – Gives user cool gear.
* **`e2p_godmode`** – Freezes HP at 999.
* **`e2p_noclip`** – Keeps requesting NoClip from backend, until it is granted.

## [RP](/Expression2/RP)
Miscellaneous RP-related code.
* **`BuyHealth RP`** – Automatically buys health if the owner's health is below 100%. Useful for RP. Requires client concmd permissions.
* **`Chat Spy`** – Prints all detected chat commands by players. Useful for RP and other environments where the chat is not global.
* **`WhoKilled`** – If owner is killed, informs the owner who killed them and how. Useful for RP and other environments where the kill display is hidden.

## [.old](/Expression2/.old)
##### [E2 Proxy old](/Expression2/.old/E2_Proxy_old.txt)
* <ins>**Brief**</ins>: A script from an **unfinished** project to passing HTTP data over the server's IP address. Frontend needs yet to be written.
* <ins>**Scope**</ins>: IRL, networking
* <ins>**Status**</ins>: **Unfinished**. Frontend needs to be yet written.

##### [E2-DOS](/Expression2/.old/E2-DOS.txt)
* <ins>**Brief**</ins>: Old implementation of CLI OS. Akin to Apple I in functionality and performance. Can work with different types of screens (Text Screen, Console Screen, EGP), takes Wire Keyboard input, can execute programs. However, the idea was conceived during early E2 days, and the code suffers from lack of local variables (new addition to Expression2), lambdas, and general need for optimization.
* <ins>**Scope**</ins>: IRL, computing
* <ins>**Status**</ins>: **Unmaintained**. Code needs refactoring.

##### [Hoyo's MIDI Player Original](/Expression2/.old/Hoyo's_Midi_Player_original.txt)
* <ins>**Brief**</ins>: Plays online MIDI music on the server. Original version has some problems.
* <ins>**Scope**</ins>: IRL, player.
* <ins>**Status**</ins>: **Superseded (old version)**

##### [Satellite Original](/Expression2/.old/Satellite%20Original.txt)
* <ins>**Brief**</ins>: Original satellite-engine code.
* <ins>**Requires**</ins>: Wiremod Pod Controller, Wiremod Cam Controller, Wiremod EGP.
* <ins>**Scope**</ins>: Exploration
* <ins>**Status**</ins>: **Superseded (old version)**
