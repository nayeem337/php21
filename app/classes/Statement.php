<?php


namespace App\classes;


class Statement
{
    public $message;

    public $firstNumber,$lastNumber;
    public $name,$email,$phone ,$data;

    public function index()
    {

        //        echo $this->message = 'Hello World';
        /*
         * Repeated Statement
         * for
         * while
         * do while
         * foreach
         *
         */

//        $this->firstNumber = 50;
//        $this->lastNumber = 20;
//
//        $this->name = [];
//        $this->name[0] = 'Habibur Rahman';
//        echo $this->name[0];

//        $this->data=['Rahim','Karim','10','20.50','453tfgyg'];
//        echo $this->data[2];
//
//        $this->data =[
//            'name'=>'Arif ',
//            'email'=>'arif@gmail.com',
//            'phone'=>'0151000',
//        ];
//        '<br/>';
//        echo $this->data['email'];
//        '<br/>';
//        echo $this->data['phone'];
//        '<br/>';
//        echo $this->data['name'];

        $this->data=[

           0 => [
            'name'=>'Arif ',
            'email'=>'arif@gmail.com',
            'phone'=>'0151000',
           ],

              1 => [
        'name'=>'Hossen ',
        'email'=>'arif@gmail.com',
        'phone'=>'0151000',
    ],

          2 => [
        'name'=>'Sohag',
        'email'=>'arif@gmail.com',
        'phone'=>'0151000',
    ],

        ];


//        echo $this->data[0]['name'];
//          echo '<pre>';
//        print_r($this->data);
//          var_dump($this->data);

//        foreach ($this->data as $datum)
//        {
//            echo $datum['name'].'<br/>';
//        }

        echo '<br/>';

        foreach ($this->data as $datum)
        {
            echo 'Name: '.$datum['name'].',Email: '.$datum['email'].',Phone: '.$datum['phone'];
        }











//         for($this->firstNumber;$this->firstNumber<=60; $this->firstNumber++)
//         {
//             echo $this->firstNumber.',';
//         }

//        while ($this->firstNumber<15)
//        {
//            echo $this->firstNumber.' ';
//            $this->firstNumber++;
//        }
//
//         do{
//             echo $this->firstNumber.'';
//             $this->firstNumber++;
//         }
//        while ($this->firstNumber<12);


//
    }
}