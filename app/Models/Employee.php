<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class Employee extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    //This class is the auth class

    /** ------------------------------------------------------------------ */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'login',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** ------------------------------------------------------------------ */


    /**
     * Relations
     */

    public function visits(){
        return $this->hasMany('App\Models\Visit');
    }

    public function sectorDistrict(){
        return $this->belongsTo(SectorDistrict::class, 'sectorDistrict_id');
    }

    public function leader(){
        return $this->belongsTo(self::class, 'leader_id');

    }

    public function privileges(){
        return $this->hasMany(ApplicationsEmployeesPrivilege::class, 'employee_id');
    }

    /** ------------------------------------------------------------------ */


    /**
     * jwt token
     */

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /** ------------------------------------------------------------------ */

    /**
     * Special methods
     */

    //active all relation of the employee table
    public function getAllInformations()
    {
        $this->leader;
        $this->sectorDistrict;
        $this->sectorDistrict->sector;
        $this->visits;
        $this->privileges;

        if ($this->privileges !== null){

            foreach ( $this->privileges as $privilege){
                $privilege->type;
                $privilege->application;
            }
        }
    }
}
