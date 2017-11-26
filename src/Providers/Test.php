<?php
 
namespace Plentyapp\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
 
class Test extends ServiceProvider{
     
    public function register(){
        $this->getApplication()->register(TestRoute::class);
    }
    
}