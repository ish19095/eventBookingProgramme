<?php

namespace App\Http\Requests;

// use App\Models\SchoolForm as SchoolForm;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateSchoolRequest extends FormRequest
{
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
            // dd($this),
            'school_event_date' => 'required|date|after:yesterday|unique:school_form,temp_date',
            'loc_id' => 'required',
            'schfrm_handler' => 'required',
            'sch_id' => 'required',
            'schgrd_id' => 'required',
            'schfrm_noOfStudent' => 'required|numeric|min:1',
            'schfrm_teacherName' => 'required',
            'schfrm_teacherNo' => 'required|numeric',
            'schfrm_teacherEmail' => 'required|email:rfc,dns'
        ];
    }

    public function messages(){
        return [
            'school_event_date.required' => 'Date is required.',
            'school_event_date.after' => 'Date can not be before today.',
            'school_event_date.unique' => 'Date already used.',
            'loc_id.required' => 'Site is required.',
            'schfrm_handler.required' => 'Staff Member is required.',
            'sch_id.required' => 'School Name is required.',
            'schgrd_id.required' => 'School Year is required.',
            'schfrm_noOfStudent.required' => 'Number of Students is required.',
            'schfrm_noOfStudent.min' => 'Number of Students must be greater then 1.',
            'schfrm_teacherName.required' => 'Teacher\'s Name required.',
            'schfrm_teacherNo.required' => 'Teacher\'s Number required.',
            'schfrm_teacherEmail.required' => 'Teacher\'s Email is required.'
        ];
    }
}
