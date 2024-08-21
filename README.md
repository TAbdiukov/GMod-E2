# GMod-E2
My various Expression2 scripts.

## Scripts

### Main
##### [AFK Mass](/Expression2/AFK_Mass.txt)

* **Brief**: Defeats anti-AFK system in an unconventional way.
* **Usage**:
	1. Spawn a hover vehicle.
	2. Place an E2 on it, and
	3. Sit inside.

	The vehicle will twitch slightly, letting the player take a break.
* **Scope**: Convenience, automation, installation.
* **Status**: OK

##### [Crazy Whiskey](/Expression2/Crazy_Whiskey.txt)
* **Brief**: Denies service of server's chat, weapon switch, console, and other processes. Finding the root cause of this DoS attack is very difficult.
* **Scope**: In-game security research
* **Usage**:
	1. Spawn a Wiremod entity that uses RAM for functioning, such as a console screen or a ZSPU.
	2. Place an E2 right on it.
	3. Discover the effects.
* **Status**: OK (YMMV with different generated values and devices)

##### [Fake Moneyprinter](/Expression2/Fake_Moneyprinter.txt)
* **Brief**: A simple, customizable: fake money printer for DarkRP.
* **Scope**: Humor
* **Status**: OK (usefulness is limited by Expression2 limitations)

##### [Hoyo MIDI player v6](/Expression2/Hoyo_Midi_Player_V6.txt)
* **Brief**: Plays online MIDI music on the server.
* **Requires**: hosted, used by a PHP engine [PHP scripts](/PHP_scripts) of `midi.php` and `mc.php`
* **Scope**: IRL, sound, player
* **Status**: OK (try different switches for different songs, notably `SmoothSound`)

##### [Image Writer](/Expression2/Image_Writer.txt)
* **Brief**: Prints a real-world online image on a Wiremod Digital Screen.
* **Requires**: hosted, used by a PHP engine [PHP scripts](/PHP_scripts) `image.php`
* **Scope**: IRL, image-processing, player.
* **Status**: OK

##### [Mario Underwater Theme](/Expression2/Mario_Underwater_Theme.txt)
* **Brief**: Ported from ZSPU, the code plays *full* Super Mario Bros Underwater theme.
* **Scope**: IRL, player.
* **Status**: OK, enhanced

##### [StagesDemo-strcpy](/Expression2/StagesDemo-strcpy.txt)
* **Brief**: Demo of Stage-based programming (state computing) to enable 512MB+ string copy as well as additional operations if needed.
* **Scope**: IRL, performance, demo.
* **Status**: OK

##### [QMon](/Expression2/QMon.txt)
* **Brief**: Takes a non-delimited string (such as "9A"), and a Wiremod User wirelink, and then traverses the Wiremod User across requested entities while oscillating its power status, thus interacting with entities. Useful for RP (gain items), sandbox (press random buttons) or otherwise (opening and closing doors)
* **Scope**: Troll, in-game security research
* **Status**: OK

##### [ZergRush](/Expression2/ZergRush.txt)
* **Brief**: Causes memory exhaustion within minutes. The code creates a memory the leak that makes server run out of RAM, causing it to crash when trying to allocate memory for critical operations.

	The name is inspired by [zergRush for Android 2.2/2.3](https://github.com/revolutionary/zergRush/blob/master/zergRush.c).
* **Scope**: In-game security research
* **Usage**:
	1. Place E2.
	2. Wait until E2 crashes. Do not delete the chip after the crash.
	3. Edit script slightly to halve the space block size (by decrementing 1 power of 2)
	4. Place another E2 again. Potentially let it crash, too.
	5. Do NOT delete anything, simply wait another 10-30 seconds.
	6. Done!
* **Status**: OK (YMMV with different server computing powers)

### [Satellite](/Expression2/Satellite)
'Satellite' engine traverses the map. Satellite code that has multiple use-cases.
##### [Satellite CAM](/Expression2/Satellite/Satellite_CAM.txt)
* **Brief**: Lets a user (most likely the owner) traverse the map using Wiremod Cam Controller.
* **Requires**: Wiremod Cam Controller
* **Usage**:
	1. Place E2.
	2. Place Wiremod Cam Controller.
	3. Wire E2 to Cam Controller.
	4. Press mouse's LMB and RMB at the same time.
* **Scope**: Exploration
* **Status**: OK

##### [Satellite EXT](/Expression2/Satellite/Satellite_EXT.txt)
* **Brief**: Lets the owner traverse the map, if Wiremod Extras are installed on the server.
* **Requires**: Wiremod Extras installed on the server.
* **Usage**:
	1. Place E2.
	2. Press mouse's LMB and RMB at the same time.
* **Scope**: Exploration
* **Status**: OK

##### [Satellite Seat NoClip](/Expression2/Satellite/Satellite_Seat_NoClip.txt)
* **Brief**: Lets a seat (chair or vehicle) driver traverse the map.
* **Requires**: Default Wiremod permissions.
* **Usage**:
	1. Place any chair or vehicle.
	2. Place E2 right on it, so E2 is constrained to a seat.
	3. (Recommended) If available, use "NoCollide All" or "NoCollide World" tool on both E2 and seat.
	4. Use the seat.
* **Scope**: Exploration
* **Status**: OK

### [E2P](/Expression2/E2P)
Expression2Power (E2P) specific hazardous code. Unsupported by mainstream Expression2.
* **[e2p_defender](/Expression2/E2P/e2p_defender.txt)** – Sends RPG missiles to target direction.
* **[e2p_getcoolgear](/Expression2/E2P/e2p_getcoolgear.txt)** – Gives user cool gear.
* **[e2p_godmode](/Expression2/E2P/e2p_godmode.txt)** – Freezes HP at 999.
* **[e2p_noclip](/Expression2/E2P/e2p_noclip.txt)** – Keeps requesting NoClip from backend, until it is granted.

### [RP](/Expression2/RP)
Miscellaneous RP-related code.
* **[BuyHealth RP](/Expression2/RP/buyhealth.txt)** – Automatically buys health if the owner's health is below 100%. Useful for RP. Requires client concmd permissions.
* **[Chat Spy](/Expression2/RP/chat_spy.txt)** – Prints all detected chat commands by players. Useful for RP and other environments where chat is not global.
* **[WhoKilled](/Expression2/RP/WhoKilled.txt)** – If owner is killed, informs the owner who killed them and how. Useful for RP and other environments where the kill display is hidden.

### [.old](/Expression2/.old)
##### [E2 Proxy old](/Expression2/.old/E2_Proxy_old.txt)
* **Brief**: A script from an **unfinished** project to pass HTTP data over the server's IP address. Frontend needs yet to be written.
* **Scope**: IRL, networking
* **Status**: **Unfinished**. Frontend needs to be written.

##### [E2-DOS](/Expression2/.old/E2-DOS.txt)
* **Brief**: Old implementation of CLI OS. Akin to Apple I in functionality and performance. Can work with diverse types of screens (Text Screen, Console Screen, EGP), takes Wire Keyboard input, can execute programs. However, the idea was conceived during early E2 days, and the code suffers from lack of local variables (new addition to Expression2), lambdas, and general need for optimization.
* **Scope**: IRL, computing
* **Status**: **Unmaintained**. Code needs refactoring.

##### [Hoyo's MIDI Player Original](/Expression2/.old/Hoyo's_Midi_Player_original.txt)
* **Brief**: Plays online MIDI music on the server. The original version has some problems.
* **Scope**: IRL, player.
* **Status**: **Superseded (old version)**

##### [Satellite Original](/Expression2/.old/Satellite_Original.txt)
* **Brief**: Original satellite-engine code.
* **Requires**: Wiremod Pod Controller, Wiremod Cam Controller, Wiremod EGP.
* **Scope**: Exploration
* **Status**: **Superseded (old version)**
