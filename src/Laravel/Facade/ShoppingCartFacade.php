<?php
    namespace NiazPardaz\Sms\Laravel\Facade;

    use Illuminate\Support\Facades\Facade;

    class ShoppingCartFacade extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'ShoppingCart';
        }
    }
?>
