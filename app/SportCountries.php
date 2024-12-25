<?php 
namespace VanguardLTE
{
    class SportCountries extends \Illuminate\Database\Eloquent\Model
    {
        protected $table = 'sports_countries';
        protected $fillable = [
            'ip', 
            'status'
        ];
        public $timestamps = false;
        public static function boot()
        {
            parent::boot();
        }
    }

}
