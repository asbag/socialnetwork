<?php

namespace tximista\cliente1\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class tximistacliente1UserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
