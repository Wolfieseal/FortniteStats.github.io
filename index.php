<?php
    include "functions.php";

    $platform = "pc";
    $epicNickname = "Ship";

    $playerStats = getPlayerStats ($platform, $epicNickname)


?>

















<!DOCTYPE html>
<html>
    <head>
        <title>Fornite Stats Homepage</title>
        <link rel="stylesheet" href="Styles2.css" />
    </head>
    <body>
    		<div class="nav3">
		<div class="section"><a href="index.html">Fortnite tracker</a></div>
		</div>

    	<div class="nav2">
		<div class="section"><a href="help.php">About</a></div> <div class="section"><a href="contacts.php">Contacts</a></div>
			
		</div>
        <h1>Welcome!</h1>
        <form id="form" role="search">
            <label for="platform">Platform:</label>
            <div class="inputs">
                <select name="platform">
                    <option value="pc">PC</option>
                    <option value="console">Console</option>
                    <option value="mobile">Mobile</option>
                </select>
                <input
                    type="search"
                    name="q"
                    placeholder="Fornite Username..."
                />
                 <button submit="code.js">Search</button>
            </div>
        </form>
        <script type="module" src="code.js" defer></script>
    </body>
</html>
