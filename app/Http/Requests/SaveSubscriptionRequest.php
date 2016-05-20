<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveSubscriptionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'parent_firstname' => 'required',
            'parent_lastname' => 'required',
            'email' => 'required|email',
            'child_firstname' => 'required',
            'child_lastname' => 'required',
            'birthday' => 'required|date',
            'entrydate_id' => 'integer',
            'school_id' => 'required|integer'
		];
	}

}
