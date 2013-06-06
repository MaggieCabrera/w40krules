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
        //$units = Unit::all();

        //$this->layout->content = View::make('units.index', compact('units'));
        $armies = Army::with('units')->get();
        
        $this->layout->content = View::make('units.index', compact('armies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->layout->content = View::make('units.create')
            ->with('armies', Army::lists('name', 'id'))
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
        $value = Input::get('value');
        $type = Input::get('type');
        $army = Input::get('army');

        //Validar
       // $v= Unit::validate(array('name' => $name, 'value' => $value));

       // if($v!==true){
            //return Redirect::to('/')->withErrors($v);
            //return 'error validacion';
       // }

        //Comprobar que no está repetido
        $record = Unit::where('name', 'LIKE', $name)->first();
        if($record){
            return 'ya existe!';
        }

        //añadir a db
        $row = Unit::create(array(
            'name' => $name,
            'value' => $value,
            'type' => $type,
            'army' => $army
        ));

        //crear un view con el resultado
        if($row){
            $armies = Army::with('units')->get();
            $this->layout->content = View::make('units.index', compact('armies'));
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
        $unit = Unit::find($id);

        $this->layout->content = View::make('units.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $unit = Unit::find($id);

        $this->layout->content = View::make('units.edit', compact('unit'))
            ->with('armies', Army::lists('name', 'id'))
            ->with('type', Unittype::lists('name', 'id'))
            ->with('rules', Rule::lists('name', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $name = Input::get('name');
        $value = Input::get('value');
        $type = Input::get('type');
        $army = Input::get('army');



        $unit = Unit::find($id);

        $unit->name = $name;
        $unit->value = $value;
        $unit->type = $type;
        $unit->army = $army;

        $guarda=$unit->save();

        //crear un view con el resultado
        if($guarda){
            //return View::make('home.result')->with('name', $row->name);
            $this->layout->content = View::make('units.edit', compact('unit'))
                ->with('army', Army::lists('name', 'id'))
                ->with('type', Unittype::lists('name', 'id'));
        }
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