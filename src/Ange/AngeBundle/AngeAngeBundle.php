<?php

namespace Ange\AngeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AngeAngeBundle extends Bundle
{
 	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
