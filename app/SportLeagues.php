<?php 
namespace VanguardLTE
{
    class SportLeagues extends \Illuminate\Database\Eloquent\Model
    {
        protected $table = 'sports_leagues';
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
