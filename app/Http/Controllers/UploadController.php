<?php

namespace app\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Input as Input;

class UploadController extends Controller
{


    public function upload()
    {

        $id = Auth::user()->id;

        $structure = "uploads/user/$id";


        if (!is_dir($structure)) {
            mkdir($structure, 0777, true);
        }


        if (Input::hasFile('file')) {


            $file = Input::file('file');

            foreach ($file as $photos) {
                $name = md5(rand(000, 999));

                $photos->move($structure, $name . '.' . $photos->getClientOriginalExtension());
            }


        }

        if (count(!empty($files))) {
            $files = glob("$structure/*.*");
            for ($i = 0; $i < count($files); $i++) {

                echo '	<li--><img src="' . $files[$i] . '" />';
            }


        }


    }
}
