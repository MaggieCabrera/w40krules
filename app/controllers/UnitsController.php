<?php

class UnitsController extends BaseController {

    protected $layout = 'master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->layout->content = View::make('units.create')
            ->with('army', Army::lists('name', 'id'))
            ->with('type', Unittype::lists('name', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $name = Input::get('name');
        $armies = Input::get('armies');

        //Validar
        $v= Rule::validate(array('name' => $name, 'description' => $description));

        if($v!==true){
            //return Redirect::to('/')->withErrors($v);
            return 'error validacion';
        }

        //Comprobar que no está repetido
        $record = Rule::where('name', 'LIKE', $name)->first();
        if($record){
            return 'ya existe!';
        }

        //añadir a db
        $row = Rule::create(array(
            'name' => $name,
            'description' => $description
        ));

        //crear un view con el resultado
        if($row){
            $rules = Rule::all();

            $this->layout->content = View::make('rules.index', compact('rules'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}