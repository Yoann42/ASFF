<?php

namespace ASFF\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ASFFUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
