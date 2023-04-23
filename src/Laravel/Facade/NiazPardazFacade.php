<?php
    namespace NiazPardaz\Sms\Laravel\Facade;

    use Illuminate\Support\Facades\Facade;

    class NiazPardazFacade extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'NiazPardaz';
        }
    }
?>
