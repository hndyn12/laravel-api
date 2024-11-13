<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Validation\Validator;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthdate',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    /**
     * Aturan validasi untuk model ini.
     *
     * @return array
     */
    public static function rules($process)
    {
        if ($process == 'insert') {
            return [
                'name' => 'required|string|max:225',
                'birthdate' => 'required|date',
            ];
        } elseif ($process == 'update') {
            return [
                'name' => 'sometimes|required|string|max:225',
                'birthdate' => 'sometimes|required|date',
            ];
        }
    }

    public static function customValidation(Validator $validator)
    {
        $customAttributes = [
            'name' => 'Nama',
            'birthdate' => 'Tanggal Lahir',
        ];


        $validator->addReplacer('required', function ($message, $attribute, $rule, $parameters) use ($customAttributes) {
            return str_replace(':attribute', $customAttributes[$attribute], ':attribute harus diisi.');
        });

        $validator->addReplacer('date', function ($message, $attribute, $rule, $parameters) use ($customAttributes) {
            return str_replace(':attribute', $customAttributes[$attribute], ':attribute harus berupa tanggal.');
        });
    }
}
