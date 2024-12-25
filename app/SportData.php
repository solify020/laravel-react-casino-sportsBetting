<?php 
namespace VanguardLTE
{
    class SportData extends \Illuminate\Database\Eloquent\Model
    {
        protected $table = 'sports';
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
