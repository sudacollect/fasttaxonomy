<?php


namespace Gtd\Extension\Fasttaxonomy;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Event;
use ReflectionClass;
use Illuminate\Support\Str;

class FasttaxonomyServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(Router $router,\App\Http\Kernel $kernel)
    {
        $extensions = app('suda_extension')->installedExtensions();
        if(isset($extensions['fasttaxonomy']))
        {
            $this->loadViewsFrom($extensions['fasttaxonomy']['path'].'/resources/views', 'view_extension_fasttaxonomy');    
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        
    }
    
}
