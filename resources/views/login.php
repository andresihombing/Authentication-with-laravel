<form method="post" action="{{ action('UserController@login') }}">
    <label>Username</label>
    <input type="text" name="email" class="form_login" placeholder="Username atau email ..">
 
    <label>Password</label>
    <input type="text" name="password" class="form_login" placeholder="Password ..">
 
    <input type="submit" class="tombol_login" value="LOGIN">    
</form>