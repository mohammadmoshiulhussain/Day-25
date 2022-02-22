<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class student extends Model
{
    use HasFactory;
    public $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Riaz';
        $this->student->email = 'riaz@gmail.com';
        $this->student->mobile = '01712812980';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
            0 => [
                'id'     => 1,
                'name'   => 'Moshiul',
                'email'  => 'moshiul@gmail.com',
                'mobile' => '01712812980',
                'image'  => '',
            ],
            1 => [
                'id'     => 2,
                'name'   => 'jahid',
                'email'  => 'jahid@gmail.com',
                'mobile' => '01913056050',
                'image'  => '',
            ],
        ];
    }
}
