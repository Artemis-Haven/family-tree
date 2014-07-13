<?php

namespace Family\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FamilyUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
