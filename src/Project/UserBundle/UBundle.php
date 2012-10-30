<?php

namespace Project\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
