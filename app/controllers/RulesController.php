<?php

class RulesController extends BaseController {

    protected $layout = 'master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $rules = Rule::all();

        $this->layout->content = View::make('rules.index', compact('rules'));
        //compact crea un array con el id como rules y el valor
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->layout->content = View::make('rules.create');
    }

    /**
     * Store a newly created resource in storage. (POST /rules)
     *
     * @return Response
     */
    public function store()
    {
        $name = Input::get('name');
        $description = Input::get('description');

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
     * Display the specified resource. (Single)
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $rule = Rule::find($id);

        $this->layout->content = View::make('rules.show', compact('rule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $rule = Rule::find($id);

        $this->layout->content = View::make('rules.edit', compact('rule'));
    }

    /**
     * Update the specified resource in storage. (PUT /rules/id)
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $name = Input::get('name');
        $description = Input::get('description');

        //Validar
        $v= Rule::validate(array('name' => $name, 'description' => $description));

        if($v!==true){
            //return Redirect::to('/')->withErrors($v);
            return 'error validacion';
        }

        //Comprobar que no está repetido
       /* $record = Rule::where('name', 'LIKE', $name)->first();
        if($record){
            return 'ya existe!';
        }*/

        //añadir a db
        /*$row = Rule::create(array(
            'name' => $name,
            'description' => $description
        ));*/

        $rule = Rule::find($id);

        $rule->name = $name;
        $rule->description = $description;

        $guarda=$rule->save();

        //crear un view con el resultado
        if($guarda){
            //return View::make('home.result')->with('name', $row->name);
            $this->layout->content = View::make('rules.edit', compact('rule'));
        }
    }

    /**
     * Remove the specified resource from storage. (DELETE /rules/$id)
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        return 'destroy con id: '.$id;
    }

}