<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Http\FormRequest;

class EmailVerificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (!is_null($this->route('id'))) {
            $user = User::find((int) $this->route('id'));
        }

        if (!empty($user)) {
            if (!hash_equals((string) $this->route('id'), (string) $user->getKey())) {
                return false;
            }

            if (!hash_equals((string) $this->route('hash'), sha1($user->getEmailForVerification()))) {
                return false;
            }

            return true;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function fulfill()
    {
        if (!is_null($this->route('id'))) {
            $user = User::find((int) $this->route('id'));
        }

        if ($user) {
            if (!$user->hasVerifiedEmail()) {

                $user->markEmailAsVerified();

                auth()->attempt(array('email' => $user->email, 'password' => $user->password));

                event(new Verified($user));
            }
        }
    }
}
