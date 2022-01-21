<?php

namespace App\Extensions\Fasttaxonomy\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TestmeServiceProvider extends ServiceProvider
{
    public function boot()
    {

        Blade::directive('testme', function($components) {
            
            
            $components = $this->getArguments($components);
            
            echo '<pre>';
            print_r($components);
            exit();
            
            
            return '<?php
                echo "123";
            ?>';
        });
        
        
    }
    
    private function getArguments($argumentString)
    {
        //return explode(',', str_replace(['[', ']'], '', $argumentString));

        if(Str::startsWith($argumentString, '[')){
            $argumentString = Str::replaceFirst('[','',$argumentString);
            $argumentString = Str::replaceLast(']','',$argumentString);
        }
        
        return explode(',', $argumentString);
    }

    /**
     * 在容器中注册绑定.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}