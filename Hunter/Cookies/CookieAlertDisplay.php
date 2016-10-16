<?php

namespace Hunter\Cookies;

class CookieAlertDisplay {

	public static function display()
	{
		echo '	
			<div class="cookieAlert">				
				We use cookies on this site. By using this site you agree to our policy.
				<form method="POST">
		  			<input type="hidden" name="cookieAlert" value="1">
					<input name="submit" type="submit" value="Hide this message">
					
				</form>
			</div>
		';

	}
}