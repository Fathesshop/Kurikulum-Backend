<?php

namespace App\Http\Controllers;
use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    public function index () {
        $films = Film::all();
        if (!$films) {
            return $this->sendResponse('error', 'Not Found', NULL, 400);
        }
        return $this->sendResponse('succes', 'Congratulions', $films, 200);
    }

    public function store(Request $request, Film $films)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'year' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return response($validator->errors());
            }

            $films->title = $request->title;
            $films->description = $request->description;
            $films->author = $request->author;
            $films->publisher = $request->publisher;
            $films->year = $request->year;

            $films->save();
            $films = Film::all();
            return $this->sendResponse('succes', 'Congratulions', $films, 200);
    }

    public function show($id)
    {
        $films = Film::find($id);
        if (!$films) {
            return $this->sendResponse('error', 'Not Found', NULL, 400);
        }
        return $this->sendResponse('succes', 'COngratulions', $films, 200);
    }

    public function destroy($id)
    {
        $films = Film::find($id);
        if ($films) {
            $films->delete();
            return $this->sendResponse('error', 'Not Found', NULL, 400);
        }
        return $this->sendResponse('succes', 'COngratulions', $films, 200);
    }
}