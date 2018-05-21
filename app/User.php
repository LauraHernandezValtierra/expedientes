<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'templeados';
	protected $primaryKey = 'cid_empleado';
	protected $ciniciales = "ciniciales";


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['cnombre', 'cid_empleado','ciniciales', 'ccontrasenia'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['ccontrasenia', 'remember_token'];
	public $remember_token=false;

	 public function getAuthPassword()
    {
        return $this->ccontrasenia;
    }

    public function getCcontraseniaAttribute($value)
    {
        if( \Hash::needsRehash($value) ) {
                $value = \Hash::make($value);
        }
        return  $value;
    }

}
