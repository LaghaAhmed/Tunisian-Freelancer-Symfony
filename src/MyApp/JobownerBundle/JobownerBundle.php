<?php

namespace MyApp\JobownerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JobownerBundle extends Bundle
{
     public function getParent() 
             {         
                    return 'FOSUserBundle';     
         
             } 
}
