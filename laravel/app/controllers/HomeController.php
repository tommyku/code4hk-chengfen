<?php

class HomeController extends BaseController {

    public function update()
    {
        $validator = Validator::make(
            Input::all(),
            [
                'photo' => 'image',
                'message' => 'required'
            ]
        );

        if ($validator->fails()) {
            return Response::make('bad request', 400);
        }

        // upload file
        $fn = str_random(40).".".Input::file('photo')->getClientOriginalExtension();
        Input::file('photo')->move(public_path().'/res/', $fn);

        // make record
        Record::create([
            'image' => $fn,
            'message' => Input::get('message'),
            'lon' => '0', // stub
            'lat' => '0' // stub
        ]);

        return Response::make('created', 201);
    }

    public function index()
    {
        return View::make('hello');
    }

    public function view()
    {
        return View::make('view', ['records' => Record::orderBy('created_at', 'desc')->get()]);
    }
}