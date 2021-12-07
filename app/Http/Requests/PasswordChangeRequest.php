<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordChangeRequest extends FormRequest
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
            'old_password' => ['required', new MatchOldPassword()],
            'password' => 'required|string|confirmed|min:8'
        ];
    }

    public function save()
    {
        $user = User::findOrFail(Auth::id());

        $user->password = Hash::make($this->password);

        $user->save();
    }
}
