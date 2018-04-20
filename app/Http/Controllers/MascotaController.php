<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mascota;
use Illuminate\Support\Facades\Validator;
class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $request->session()->put('search', $request
              ->has('search') ? $request->get('search') : ($request->session()
              ->has('search') ? $request->session()->get('search') : ''));

              $request->session()->put('field', $request
                      ->has('field') ? $request->get('field') : ($request->session()
                      ->has('field') ? $request->session()->get('field') : 'mas_nombre'));

                      $request->session()->put('sort', $request
                              ->has('sort') ? $request->get('sort') : ($request->session()
                              ->has('sort') ? $request->session()->get('sort') : 'asc'));

        $mascotas = new Mascota;
            $mascotas = $mascotas->where('mas_nombre', 'like', '%' . $request->session()->get('search') . '%')
                //->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                ->paginate(5);
            if ($request->ajax()) {
              return view('mascotas.index', compact('mascotas'));
            } else {
              return view('mascotas.ajax', compact('mascotas'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        if ($request->isMethod('get'))
        return view('mascotas.form');

        $rules = [
          'mas_nombre' => 'required',
          'mas_edad' => 'required',
          'mas_imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'mas_apto' => 'required',
          'mas_castrado' => 'required',
          'mas_sexo' => 'required',
          'mas_descripcion' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        return response()->json([
          'fail' =>true,
          'errors' => $validator->errors()
        ]);

        $mascota = new Mascota();
        $mascota->mas_nombre = $request->mas_nombre;
        $mascota->mas_edad = $request->mas_edad;
        $mascota->mas_imagen = $request->mas_imagen;
        $mascota->mas_apto = $request->mas_apto;
        $mascota->mas_castrado = $request->mas_castrado;
        $mascota->mas_sexo = $request->mas_sexo;
        $mascota->mas_descripcion = $request->mas_descripcion;
        $mascota->save();

        return response()->json([
          'fail' => false,
          'redirect_url' => url('mascotas')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        if($request->isMethod('get')) {
          return view('mascotas.detail',['mascota' => Mascota::find($id)]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
      if ($request->isMethod('get'))
      return view('mascotas.form',['mascota' => Mascota::find($id)]);

      $rules = [
          'mas_nombre' => 'required',
          'mas_edad' => 'required',
          'mas_imagen' => 'required',
          'mas_apto' => 'required',
          'mas_castrado' => 'required',
          'mas_sexo' => 'required',
          'mas_descripcion' => 'required',
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails())
      return response()->json([
        'fail' =>true,
        'errors' => $validator->errors()
      ]);

      $mascota = Mascota::find($id);
      $mascota->mas_nombre = $request->mas_nombre;
      $mascota->mas_edad = $request->mas_edad;
      $mascota->mas_imagen = $request->mas_imagen;
      $mascota->mas_apto = $request->mas_apto;
      $mascota->mas_castrado = $request->mas_castrado;
      $mascota->mas_sexo = $request->mas_sexo;
      $mascota->mas_descripcion = $request->mas_descripcion;
      $mascota->save();

      return response()->json([
        'fail' => false,
        'redirect_url' => url('mascotas')
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Mascota::destroy($id);
        return redirect('mascotas');
    }
}
