<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Validator;
class NoticiaController extends Controller
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
                      ->has('field') ? $request->session()->get('field') : 'not_titulo'));

                      $request->session()->put('sort', $request
                              ->has('sort') ? $request->get('sort') : ($request->session()
                              ->has('sort') ? $request->session()->get('sort') : 'asc'));

        $noticias = new Noticia();
            $noticias = $noticias->where('not_titulo', 'like', '%' . $request->session()->get('search') . '%')
                //->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                ->paginate(5);
            if ($request->ajax()) {
              return view('noticias.index', compact('noticias'));
            } else {
              return view('noticias.ajax', compact('noticias'));
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
        return view('noticias.form');

        $rules = [
          'not_titulo' => 'required',
          'not_sub_titulo' => 'required',
          'not_contenido' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        return response()->json([
          'fail' =>true,
          'errors' => $validator->errors()
        ]);

        $noticia = new Noticia();
        $noticia->not_titulo = $request->not_titulo;
        $noticia->not_sub_titulo = $request->not_sub_titulo;
        $noticia->not_contenido = $request->not_contenido;
        $noticia->save();

        return response()->json([
          'fail' => false,
          'redirect_url' => url('noticias')
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
          return view('noticias.detail',['noticia' => Noticia::find($id)]);
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
      return view('noticias.form',['noticia' => Noticia::find($id)]);

      $rules = [
        'not_titulo' => 'required',
        'not_sub_titulo' => 'required',
        'not_contenido' => 'required',
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails())
      return response()->json([
        'fail' =>true,
        'errors' => $validator->errors()
      ]);

      $noticia = Noticia::find($id);
      $noticia->not_titulo = $request->not_titulo;
      $noticia->not_sub_titulo = $request->not_sub_titulo;
      $noticia->not_contenido = $request->not_contenido;
      $noticia->save();

      return response()->json([
        'fail' => false,
        'redirect_url' => url('noticias')
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
        Noticia::destroy($id);
        return redirect('noticias');
    }
}
