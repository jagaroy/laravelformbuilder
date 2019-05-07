<?php

namespace Jaga\LaravelFormBuilder\Tools;

use Illuminate\Http\Request;
// use App\Http\Requests;
use Illuminate\Routing\Controller;

class Jforms extends Controller
{
	public function getClassStr($class)
	{

		if ( ! is_array($class)) {

			die('<h2 style="color:red">Jforms error: classes values must be in array!</h2>');
		}

		$classStr = "";

		foreach ($class as $key => $value) {

			$classStr .= $value." ";
		}

		return $classStr;
	}

	public function formInput(array $data)
	{

		//array
		$class = !empty($data['classes']) ? $data['classes'] : [];

		$classStr = $this->getClassStr($class);

		//array
		$value = !empty($data['values']) ? $data['values'] : [];

		if ( ! is_array($value)) {

			echo 'Jforms error: values of values must be in array!';

			return;
		}

		$valueStr = !empty($value['prev_value']) ? $value['prev_value'] : "";

		//single text
		$type = !empty($data['type']) ? $data['type'] : "";
		
		//single text
		$name = !empty($data['name']) ? $data['name'] : "";

		//single text
		$id = !empty($data['id']) ? $data['id'] : "";

		// boolean
		$requiredStr = ( !empty($data['required']) && $data['required']) ? " required " : "";

		$formField = '<input type="'.$type.'" name="'.$name.'" value="'.$valueStr.'" id="'.$id.'" class="'.$classStr.'" '.$requiredStr.' />';

		return $formField;
	}

	public function formSelect(array $data)
	{

		//array
		$class = !empty($data['classes']) ? $data['classes'] : [];

		$classStr = $this->getClassStr($class);

		//array
		$value = !empty($data['values']) ? $data['values'] : [];

		if ( ! is_array($value)) {

			echo 'Jforms error: values of values must be in array!';

			return;
		}

		$active = !empty($data['active']) ? $data['active'] : "";

		$valueStr = "";

		foreach ($value as $key => $value) {

			$activeness = ($key == $active) ? ' selected ' : '';

			$valueStr .= '<option value="'.$key.'" '.$activeness.'>'.$value.'</option>';
		}
		
		//single text
		$name = !empty($data['name']) ? $data['name'] : "";

		//single text
		$id = !empty($data['id']) ? $data['id'] : "";

		// boolean
		$requiredStr = ( !empty($data['required']) && $data['required']) ? " required " : "";

		$formField = '<select name="'.$name.'" id="'.$id.'" class="'.$classStr.'" '
						.$requiredStr.' >'
						.$valueStr
						.'</select>';

		return $formField;
	}
	
	public function formRadio(array $data)
	{
		//array
		$class = !empty($data['classes']) ? $data['classes'] : [];

		$classStr = $this->getClassStr($class);

		//array
		$value = !empty($data['values']) ? $data['values'] : [];

		if ( ! is_array($value)) {

			echo 'Jforms error: values of values must be in array!';
			return;
		}

		//single text
		$name = !empty($data['name']) ? $data['name'] : "";

		//single text
		$id = !empty($data['id']) ? $data['id'] : "";

		// boolean
		$requiredStr = ( !empty($data['required']) && $data['required']) ? " required " : "";
		
		$active = !empty($data['active']) ? $data['active'] : "";

		$formField = "";

		foreach ($value as $key => $value) {

			$activeness = ($key == $active) ? ' checked ' : '';

			$formField .= '<input style="margin-left:20px;" type="radio" name="'.$name.'" class="'.$classStr.'" value="'.$key.'" '.$activeness.' /> <label>'.$value.'</label>';
		}

		return $formField;
	}
	
	public function formCheckbox(array $data)
	{
		
		$class = !empty($data['classes']) ? $data['classes'] : [];

		$classStr = $this->getClassStr($class);

		//array
		$value = !empty($data['values']) ? $data['values'] : [];

		if ( ! is_array($value)) {

			echo 'Jforms error: values of values must be in array!';

			return;
		}

		//single text
		$name = !empty($data['name']) ? $data['name'] : "";

		//single text
		$id = !empty($data['id']) ? $data['id'] : "";

		// boolean
		$requiredStr = ( !empty($data['required']) && $data['required']) ? " required " : "";

		$formField = "";
		
		foreach ($value as $key => $value) {

			$formField .= '<input style="margin-left:20px;" type="checkbox" name="'.$name.'" class="'.$classStr.'" value="'.$key.'" /> <label>'.$value.'</label>';
		}

		return $formField;
	}



}

?>