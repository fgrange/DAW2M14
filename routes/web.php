<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

/*
 * Para poder ejecutar el metodo que se encarga de mostrar si existen notificaciones, sea cual sea la vista
 * Incluyolas class Workflow, la declaro y llamo al metodo correspondiente.
 * Lo hice en este archivo ya que es comun para todos.
 */
// fede 04/04/2018 use App\Workflow;
// fede 04/04/2018 $Workflow = new Workflow();
// fede 04/04/2018 $Workflow->NotificacionWorkflow();


Route::get('/', function () {
    return view('welcome');
});

// CU01

// Eugenio
Route::get('/CU01_login', function () {
    return view('CU01_login');
});

Route::post('/CU01_login', "CU01_loginController@login");
//return "comprovant usuari";//view('CU01_login');
//});
//
//
// CU02
Route::get('/CU_2', function () {
    return view('/CU_2');
});
// CU03
//
//
//
// CU04
//Laia i Joy
Route::get('/consultarLogs', 'CU_04Controller@consultarLogs');
//
// CU05
//Laia
Route::get('/buscarDocumentos', 'CU_05Controller@buscador');
Route::get('/resultadoBusqueda', 'CU_05Controller@buscarDocuments');
//
// CU06
//Comentario Javi Millan
//Comentario Sergio Plaza
Route::get("/editarPerfil", "CU06Controller@getEditarPerfil");
Route::post("/editarPerfil/edit", "CU06Controller@editarPerfilEdit"); //->middleware('auth');
//
// CU07
Route::get('/abrirCarpeta/{id}', 'CU_07Controller@abrirCarpeta');
//
//
// CU08
Route::get('/pujarDocument', 'CU_08Controller@getPujarDoc');

Route::post('/pujarDocument', 'CU_08Controller@postPujarDoc');
// CU09
Route::Post('/moureDocument/{id}', 'CU_09Controller@moverDocumento');
//
//
// CU11
Route::get('/pujarVersio/{id}', 'CU_11Controller@getPujarVersio');

Route::post('/pujarVersio/{id}', 'CU_11Controller@postPujarVersio');
// CU12
//
Route::get('/CU12_URL', 'CU12_urlController@generaURL');

//
// CU13
//
//
//
// CU14
//
//
//
// CU15
Route::get('/promocionarVersio/{id}/{versioInterna}', 'CU_15Controller@getPromocionarVersio');
//
//
// CU16
//
//
//
// CU17
//
//
//
// CU18
Route::get('/getDatos/{id}', 'CU_18Controller@getDatos');
Route::Post('/cambiarPermisUsuari/{id}', 'CU_18Controller@cambiarPermisUsuari');
Route::Post('/afegirPermisUsuari/{id}', 'CU_18Controller@afegirPermisUsuari');
Route::Post('/borrarPermisUsuari/{id}', 'CU_18Controller@borrarPermisUsuari');
Route::Post('/cambiarPermisGrup/{id}', 'CU_18Controller@cambiarPermisGrup');
Route::Post('/afegirPermisGrup/{id}', 'CU_18Controller@afegirPermisGrup');
Route::Post('/borrarPermisGrup/{id}', 'CU_18Controller@borrarPermisGrup');
//
// CU19
//
// CU20
Route::Post('/borrarCarpeta/{id}', 'CU_20Controller@eliminarCarpeta');
Route::Post('/borrarDocumento/{id}', 'CU_20Controller@eliminarDocumento');
//
//
// CU21
Route::Post('/moureCarpeta/{id}', 'CU_21Controller@moverCarpeta');
//
//
// CU22
Route::Post('/modificarCarpeta/{id}', 'CU_22Controller@modificarCarpeta');
//
//
// CU23
Route::Post('/crearCarpeta/{id}', 'CU_23Controller@crearCarpeta');
//
//
// CU24
//
//
//
//
//
//
//
// CU26
//Jorge & Issam
Route::get('/CU_26', 'CU_26Controller@getIndex');
Route::post('/CU_26', 'CU_26Controller@postCreate');

//});
//
//
//
//
//
// CU27
//
//
//
// CU28
//
//
//
// CU29
//
//
//
// CU31
//
//
//
// CU32
//
//
//
// CU33
//
//
//
// CU34
//
//
//
// CU35
//
//
//
// CU36 Gestionar Grupos (Oscar y Carlos)
Route::get('CU_36_GestionarGrupos', 'CU_36Controller@getCU_36');
//
//
// CU37 Eliminar Grupo (Oscar y Carlos)
Route::get('CU_37_EliminarGrupo{id}', 'CU_37Controller@getCU_37');
//
//
// CU38 Modificar Grupo (Oscar y Carlos)
Route::get('CU_38_ModificarGrupo', 'CU_38Controller@getCU_38');
//
//
// CU39 Modificar Membres (Oscar y Carlos)
Route::get('CU_39_ModificarMembres', 'CU_39Controller@getCU_39');
//
//
// CU40 Crear Grupo (Oscar y Carlos)
Route::get('CU_40_CrearGrupo', 'CU_40Controller@getCU_40');
//
//
// CU41 Motrar Grups (Oscar y Carlos)
Route::get('CU_41_MostrarGrups', 'CU_41Controller@getCU_41');
//
//
// CU42 Aleix_Prat
Route::get('CU_42', 'CU42Controller@getIndex');
//  Route::get('/', function(){
//      return view("CU_42");
//  });
//  Route::post('/CU42Controller',"CU42Controller@getIndex")
//
// CU43
Route::get('/CU_43', 'CU_43Controller@mostraUsuari');
//Route::post('/delUser/{id}', 'CU_43Controller@eliminarUsuari');
Route::post('/delUser', 'CU_43Controller@eliminarUsuari');
//
// CU44 Gloria Taboada i Aleix Prat
Route::get('/CU_44/{id}', 'CU_44Controller@getIndex');
Route::put('/CU_44/{id}', 'CU_44Controller@putNo');
//
//
// CU45
Route::get('/CU_45', 'CU_45Controller@mostraUsuari');
//Route::post('/modUser/{id}', 'CU_45Controller@modificarUsuari');
Route::post('/modUser', 'CU_45Controller@modificarUsuari');
//
// CU46
//
//
//
// CU47 Aleix Prat i Gloria Taboada
Route::put('/CU_47/{id}', 'CU_47Controller@putSi');
Route::get('/CU_47/{id}', 'CU_47Controller@getIndex');
//
//
// CU48  Mostrar Usuaris (Oscar y Carlos)
Route::get('/CU_48_MostrarUsuaris', 'CU_48Controller@getIndex');
//
//
//
// CU49
Route::get('/filtraLogs', 'CU_49Controller@filtraLogs');
//
//
// CU50
//Jorge & Issam
Route::get('/CU_50', 'CU_50Controller@getIndex');
//
//
//CU51
Route::get('/CU_51', 'CU_51Controller@tancarSessio');
// CU52
Route::get('/CU_52', 'CU_52Controller@getIndex');
Route::post('/newUser', 'CU_52Controller@afegirUsuari');

//
// feina addicional

