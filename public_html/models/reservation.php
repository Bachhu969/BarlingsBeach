<?php
class ReservationDetail{
	public $room_id;
	public $room_name;
	public $departure_date;
	public $arrival_date;
	public $total_days;
	public $rate;
	public $total_cost;
	
	public $first_name;
	public $last_name;
	public $address1;
	public $email;
	public $phone;
	public $order_no;


	public function charging_percent(){
		return chargingPercent($this->arrival_date);
	}
	public function chargin_amt(){
		return round($this->charging_percent() * $this->total_cost/100,2);
	}
	public function full_name(){
		return $this->first_name .' '. $this->last_name;
	}

}