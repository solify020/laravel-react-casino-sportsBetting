<?php 
namespace VanguardLTE\Http\Controllers\Api
{
    include_once(base_path() . '/app/ShopCore.php');
    include_once(base_path() . '/app/ShopGame.php');
    class SportsApiController extends ApiController
    {
        public function test()
        {
            return 'this is test return value';
        }
    }
}
