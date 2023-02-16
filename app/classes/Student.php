<?php


namespace App\classes;


class Student
{
    public $students;
    public function __construct()
    {
        $this->students =[
            0=>[
                'name' => 'Arif',
                'email'=>'arifsohag@gmail.com',
                'phone' =>'015100',
                'city' => 'Dhaka',
                'address' => 'Dhanmdondi'
            ],
            1=>[
                'name' => 'Sohag',
                'email'=>'sohga@gmail.com',
                'phone' =>'018700',
                'city' => 'Shariatpur',
                'address' => 'Motizheel'
            ],
            2=>[
                'name' => 'Hossen',
                'email'=>'hossen@gmail.com',
                'phone' =>'0147100',
                'city' => 'rangpur',
                'address' => 'mohammadpur'
            ],
            3=>[
                'name' => 'Brandon',
                'email'=>'brandon@gmail.com',
                'phone' =>'0187100',
                'city' => 'Barishal ',
                'address' => 'Barishal city'
            ],
            4=>[
                'name' => 'Maxwel',
                'email'=>'maxwell@gmail.com',
                'phone' =>'0171100',
                'city' => 'Khulna',
                'address' => 'Zigatola'
            ],
        ];
    }

    public function getAllStudents()
    {
        return $this->students;
    }
}