<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class FirebaseController extends Controller
{
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }
    
    public function set()
    {
        function genetare($type) {
            $number = rand(1, 500);
            $status = true;
            if ($type == 'odd') {
                while ($status) {
                    $number = rand(1, 500);
                    if ($number % 2 != 0) {
                        $status = false;
                    }
                }
            } else {
                while ($status) {
                    $number = rand(1, 500);
                    if ($number % 2 == 0) {
                        $status = false;
                    }
                }
            }
            return $number;
        }
        $data = [
            'odd' => genetare('odd'),
            'even' => genetare('even')
        ];
        $this->database->getReference('number')->set($data);
        return redirect()->route('firebase.view');
    }

    public function remove()
    {
        $data = [
            'odd' => 0,
            'even' => 0
        ];
        $this->database->getReference('number')->set($data);
        return redirect()->route('firebase.view');
    }

    public function view()
    {
        $number = $this->database->getReference('number')->getValue();
        return view('generate', compact('number'));
    }
}
