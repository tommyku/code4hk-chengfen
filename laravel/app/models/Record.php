<?php

class Record extends Eloquent {

	protected $table = 'c4_records';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('image', 'message', 'lon', 'lat');

}
