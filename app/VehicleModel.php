<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleModel extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $table = "vehicles";
	protected $fillable = [
		'make', 'model', 'type', 'year', 'engine_type', 'horse_power', 'color', 'vin', 'license_plate', 'mileage', 'int_mileage', 'in_service', 'user_id',
	];

	function driver() {
		return $this->hasOne("App\Drivervehicle", "vehicle_id", "id");
	}

	function income() {
		return $this->hasMany("App\IncomeModel", "vehicle_id", "id");
	}
	function expense() {
		return $this->hasMany("App\Expense", "vehicle_id", "id");
	}
}
