<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

// Route::get('/posts', function(){
//     return "aqui se mostraran los posts";
// });

Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);



// Route::get('/posts/{post}', function($post){
//     return "aqui se mostrara el post {$post}";
// });




// Route::get('/posts/{post}/{category}', function($post, $category){
//     return "aqui se mostrara el post {$post} de la categoria {$category}";
// });


//get , son aquellas peticiones que nosotros hacemos cuando escribimos un url o cuando clickeamos un enlace
//post , aquellas peticiones que mandan informacion no visibles
//put , son peticiones de tipo post. put actualiza los registros
//patch 
//delete , borra los registros

Route::get('prueba', function(){


$post = Post::find(1);
$post->delete();

return 'Eliminado correctamente';


//ORDENAR DE FORMA ASCENDENTE O DESCENDENTE 'asc, 'desc', Y LISTAR TODOS LOS POSTS
// $posts = Post::orderBy('id', 'desc')
// ->select('id', 'title', 'categoria')
// ->take(2)
// ->get();
// return $posts;



//FILTRAR LOS POSTS
// $posts = Post::where('id', '>=' , '2')
//->get();
// return $posts;



//LLAMAR A TODOS LOS POSTS DE LA TABLA
// $post = Post::all();
// return $post;

    //BUSCAR POST POR ID
    // $post = Post::find(2);
    // return $post;


    //BUSCAR UN ELEMENTO EN ESPECIFICO Y ADEMAS MODIFICAR UN REGISTRO
    // $post = Post::where('title', 'titulo del post')
    //             ->first();

    // $post->categoria = 'Desarrollo web';
    // $post->save();

    // return $post;
    // return 'Hola desde la ruta de prueba';





    //CREAR POST
    // $post = new Post;

    // $post->title = 'titulo del post3';
    // $post->content = 'contenido del post3';
    // $post->categoria= 'categoria del post3';

    // $post->save();
    // return $post;
});