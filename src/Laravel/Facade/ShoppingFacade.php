<?php
    namespace Mir\Shopping\Laravel\Facade;

    use Illuminate\Support\Facades\Facade;

    class ShoppingFacade extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'Shopping';
        }
    }
?>
