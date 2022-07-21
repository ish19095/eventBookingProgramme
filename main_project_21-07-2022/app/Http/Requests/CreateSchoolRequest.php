<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        $curDate = date('Y-m-d');
        return [
            'school_event_date' => 'required|date|after_or_equal:$curDate',
            'school_event_site' => 'required',
            'school_event_staff_member' => 'required',
            'school_event_school_name' => 'required',
            'school_event_school_year' => 'required',
            'school_event_num_students' => 'required|numeric|min:1',
            'school_event_teacher_name' => 'required',
            'school_event_teacher_number' => 'required|numeric',
            'school_event_teacher_email' => 'required|email:rfc,dns',
            'school_event_donation' => 'required'
        ];
    }

    public function messages(){
        return [
            'school_event_date.required' => 'Date is required.',
            'school_event_site.required' => 'Site is required.',
            'school_event_staff_member.required' => 'Staff Member is required.',
            'school_event_school_name.required' => 'School Name is required.',
            'school_event_school_year.required' => 'School Year is required.',
            'school_event_num_students.required' => 'Number of Students is required.',
            'school_event_num_students.min' => 'Number of Students must be greater then 1.',
            'school_event_teacher_name.required' => 'Teacher\'s Name required.',
            'school_event_teacher_number.required' => 'Teacher\'s Number required.',
            'school_event_teacher_email.required' => 'Teacher\'s Email is required.',
            'school_event_donation.required' => 'Donation is required.'
        ];
    }
}
