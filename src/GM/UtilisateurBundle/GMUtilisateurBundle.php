<?php

namespace GM\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GMUtilisateurBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
