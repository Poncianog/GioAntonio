<?php
//Labels the password and Username onto the login, then Submits it.
    require_once(__DIR__ . "/../model/config.php");
?>
   
<h1>Login</h1>

<form>
    <div>
        <label for="usernane">Username: </label>
        <input type="text" name="username" />
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>