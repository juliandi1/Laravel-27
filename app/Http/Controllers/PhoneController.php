<?php

namespace App\Http\Controllers;

use Faker\Factory as Faker;
use App\Models\Phone;
use Illuminate\Http\Request;
use App\Http\Requests\PhoneRequest;
use Database\Factories\PhoneFactory;
use App\Http\Resources\Phone\MainResource;
use App\Http\Resources\Phone\MainCollection;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::all();
        return new MainCollection($phones);
    }

    public function show(Phone $phone)
    {
        return new MainResource($phone);
    }

    public function store(PhoneRequest $request)
    {
        $phone = Phone::create([
            'number' => $request->number,
            'provider_id' => $request->provider_id
        ]);
        return [
            'status' => 'saved',
            'message' => 'phone saved successfully',
            'phone' => new MainResource($phone)
        ];
    }

    public function update(PhoneRequest $request, Phone $phone)
    {
        $phone->update([
            'number' => $request->number,
            'provider_id' => $request->provider_id
        ]);
        return [
            'status' => 'updated',
            'message' => 'phone updated successfully',
            'phone' => new MainResource($phone)
        ];
    }

    public function destroy(Phone $phone)
    {
        $phone->delete();
        return [
            'status' => 'deleted',
            'message' => 'phone deleted successfully',
        ];
    }

    public function generate()
    {
        $faker = Faker::create('id_ID');
        $numbers = [];
        $length = 1;
        while ($length <= 25) {
            $numbers [] = $faker->phoneNumber();
            $length++;
        }
        return $numbers;
    }
}
