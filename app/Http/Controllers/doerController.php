<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoerRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Doer;
use Illuminate\View\View;

/**
 * Class doerController
 * @package App\Http\Controllers
 */

class doerController extends Controller
{


    public function formPhysical_face(DoerRequest $req){
        if ($req->isMethod('get'))
            return view('formPhysical_face');
        else{
            $doer = new Doer();

            $doer->name = $req->input('name');
            $doer->surname = $req->input('surname');
            $doer->passport = $this->uploadPassport($req ,'passport', 'doers');
            $doer->profile_photo = $req->input('profile_photo');
            $doer->description = $req->input('description');
            $doer->photo_of_work = $req->input('photo_of_work');
            $doer->services = $req->input('services');
            $doer->city = $req->input('city');
            $doer->legal_status = $req->input('legal_status');
            $doer->save();

            return 1;
        }

    }

    public function formIndividual_businessman(DoerRequest $req){

    	if ($req->isMethod('get'))
           return view('formIndividual_businessman');
        else{
            $doer = new Doer();

            $doer->name = $req->input('name');
            $doer->surname = $req->input('surname');
            $doer->passport = $this->uploadImage($req ,'passport');
            $doer->payer_registration_number = $req->input("payer_registration_number");
            $doer->individual_businessman = $req->input('certificate_of_registration_of_an_individual_businessman');
            $doer->profile_photo = $req->input('profile_photo');
            $doer->description = $req->input('description');
            $doer->photo_of_work = $req->input('photo_of_work');
            $doer->services = $req->input('services');
            $doer->city = $req->input('city');
            $doer->legal_status = $req->input('legal_status');

            $doer->save();

            return 'Ok2';
        }
    }

    public function formLegal_face(DoerRequest $req){
    	if ($req->isMethod('get'))
           return view('formLegal_face');
        else{
            $doer = new Doer();

            $doer->short_title = $req->input('short_title');
            $doer->legal_name = $req->input('legal_name');
            $doer->payer_registration_number = $req->input("payer_registration_number");
            $doer->short_title = $req->input("legal_entity_registration_certificate");
            $doer->profile_photo = $req->input('profile_photo');
            $doer->description = $req->input('description');
            $doer->photo_of_work = $req->input('photo_of_work');
            $doer->services = $req->input('services');
            $doer->city = $req->input('city');
            $doer->legal_status = $req->input('legal_status');

            $doer->save();
            return 'Ok4';
        }
    }


    /**
     * @param Request $request
     * @param $name_field
     * @return mixed|string
     */

    private function uploadPassport(Request $request , $form_field , $link){
        if ($request->hasFile($form_field)){
            $path = $request->file($form_field)->store( $link,'public');
            $breakPath = (explode('/', $path));
            return end($breakPath);
        }
    }
}
