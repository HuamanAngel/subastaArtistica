<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(['nombre_producto'=>'Jose Antolinez','descripcion'=>'Retrato de hombre es un cuadro atribuido al artista español José Antolínez, de hacia 1665. Está pintado al óleo sobre lienzo y actualmente se conserva en el Museo Fabre de Montpellier (Francia).',
        'precio_inicial'=>1999.00,
        'image_name1'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/%22Retrato_de_hombre%22_%28posible_autorretrato%29_-_Jos%C3%A9_Antol%C3%ADnez.jpg/1200px-%22Retrato_de_hombre%22_%28posible_autorretrato%29_-_Jos%C3%A9_Antol%C3%ADnez.jpg',
        'image_name2'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/%22Retrato_de_hombre%22_%28posible_autorretrato%29_-_Jos%C3%A9_Antol%C3%ADnez.jpg/1200px-%22Retrato_de_hombre%22_%28posible_autorretrato%29_-_Jos%C3%A9_Antol%C3%ADnez.jpg',
        'image_name3'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/%22Retrato_de_hombre%22_%28posible_autorretrato%29_-_Jos%C3%A9_Antol%C3%ADnez.jpg/1200px-%22Retrato_de_hombre%22_%28posible_autorretrato%29_-_Jos%C3%A9_Antol%C3%ADnez.jpg',
        'image_name4'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/%22Retrato_de_hombre%22_%28posible_autorretrato%29_-_Jos%C3%A9_Antol%C3%ADnez.jpg/1200px-%22Retrato_de_hombre%22_%28posible_autorretrato%29_-_Jos%C3%A9_Antol%C3%ADnez.jpg',
        'estado'=>'Disponible','inicio_subasta'=>'2020-11-25 18:47:00','final_subasta'=>'2021-12-16 23:47:00','user_id'=>1,'latitud'=>-6.770989,'longitud'=>-79.853396,'categoria_id'=>1,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lambayeque',
        'distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Pinctura de paisaje acuarela de montaña y prado',
        'descripcion'=>'Pinctura de paisaje acuarela de montaña y prado','precio_inicial'=>90.0,
        'image_name1'=>'https://www.crushpixel.com/big-static16/preview4/watercolor-landscape-painting-mountain-meadow-2475168.jpg',
        'image_name2'=>'https://www.crushpixel.com/big-static16/preview4/watercolor-landscape-painting-mountain-meadow-2475168.jpg',
        'image_name3'=>'https://www.crushpixel.com/big-static16/preview4/watercolor-landscape-painting-mountain-meadow-2475168.jpg',
        'image_name4'=>'https://www.crushpixel.com/big-static16/preview4/watercolor-landscape-painting-mountain-meadow-2475168.jpg',
        'estado'=>'No disponible','user_id'=>1,'categoria_id'=>2,'user_id_comprador'=>2,'latitud'=>-6.770989,'longitud'=>-79.853396,'condicion'=>'Usado','ubicacion'=>'Lambayeque','distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Pintura en óleo','descripcion'=>'Pintura en óleo','precio_inicial'=>99.00,
        'image_name1'=>'https://p4.wallpaperbetter.com/wallpaper/277/546/570/oil-painting-landscape-clouds-horse-flowers-hd-wallpaper-preview.jpg',
        'image_name2'=>'https://p4.wallpaperbetter.com/wallpaper/277/546/570/oil-painting-landscape-clouds-horse-flowers-hd-wallpaper-preview.jpg',
        'image_name3'=>'https://p4.wallpaperbetter.com/wallpaper/277/546/570/oil-painting-landscape-clouds-horse-flowers-hd-wallpaper-preview.jpg',
        'image_name4'=>'https://p4.wallpaperbetter.com/wallpaper/277/546/570/oil-painting-landscape-clouds-horse-flowers-hd-wallpaper-preview.jpg',
        'estado'=>'Disponible','inicio_subasta'=>'2020-11-25 20:47:00','final_subasta'=>'2021-12-14 22:47:00','user_id'=>2,'categoria_id'=>2,'user_id_comprador'=>2,'latitud'=>-6.770989,'longitud'=>-79.853396,'condicion'=>'Nuevo','ubicacion'=>'Lambayeque','distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Montaña de pintura europea','descripcion'=>'Montaña de pintura europea',
        'precio_inicial'=>30.2,
        'image_name1'=>'https://masdearte.com/media/reb_monta%C3%B1a1-1024x648.jpg',
        'image_name2'=>'https://masdearte.com/media/reb_monta%C3%B1a1-1024x648.jpg',
        'image_name3'=>'https://masdearte.com/media/reb_monta%C3%B1a1-1024x648.jpg',
        'image_name4'=>'https://masdearte.com/media/reb_monta%C3%B1a1-1024x648.jpg',
        'estado'=>'En curso','inicio_subasta'=>'2020-12-10 20:47:00',
        'final_subasta'=>'2021-12-18 18:30:00','user_id'=>1,'categoria_id'=>2,'latitud'=>-12.0621065,'longitud'=>-77.0365256,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lambayeque','distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Paises Nordicos del Prado en Valencia',
        'descripcion'=>'Paises Nordicos del Prado en Valencia','precio_inicial'=>800.0,
        'image_name1'=>'https://i2.wp.com/moovemag.com/wp-content/uploads/2012/11/juego-de-petanca-de-david-teniers.jpg?resize=500%2C284',
        'image_name2'=>'https://i2.wp.com/moovemag.com/wp-content/uploads/2012/11/juego-de-petanca-de-david-teniers.jpg?resize=500%2C284',
        'image_name3'=>'https://i2.wp.com/moovemag.com/wp-content/uploads/2012/11/juego-de-petanca-de-david-teniers.jpg?resize=500%2C284',
        'image_name4'=>'https://i2.wp.com/moovemag.com/wp-content/uploads/2012/11/juego-de-petanca-de-david-teniers.jpg?resize=500%2C284',
        'estado'=>'En curso','inicio_subasta'=>'2020-12-12 20:47:00','final_subasta'=>'2021-12-27 20:55:00','user_id'=>1,'categoria_id'=>3,'user_id_comprador'=>2,'latitud'=>-12.59254,'longitud'=>-69.188191,'condicion'=>'Nuevo','ubicacion'=>'Lambayeque','distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Libro de llosa','descripcion'=>'Libro original de Llosa, lo vendo porque necesito espacio en mi casa','precio_inicial'=>100.2,'image_name1'=>'http://imgfz.com/i/82gfvnq.jpeg','image_name2'=>'http://imgfz.com/i/82gfvnq.jpeg','image_name3'=>'http://imgfz.com/i/82gfvnq.jpeg','image_name4'=>'http://imgfz.com/i/82gfvnq.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-11-21 20:47:20','final_subasta'=>'2021-12-20 20:17:10','user_id'=>2,'categoria_id'=>3,'latitud'=>-5.195464,'longitud'=>-80.630873,'user_id_comprador'=>2,'condicion'=>'Usado','ubicacion'=>'Lambayeque','distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Celular Xiaomi','descripcion'=>'Celular 100% legal','precio_inicial'=>900.0,'image_name1'=>'http://imgfz.com/i/vrnLG64.jpeg','image_name2'=>'http://imgfz.com/i/vrnLG64.jpeg','image_name3'=>'http://imgfz.com/i/vrnLG64.jpeg','image_name4'=>'http://imgfz.com/i/vrnLG64.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-12-10 20:47:00','final_subasta'=>'2021-12-17 20:33:00','user_id'=>1,'categoria_id'=>4,'user_id_comprador'=>3,'user_id_comprador'=>2,'latitud'=>-18.0138521,'longitud'=>-70.2511614,'condicion'=>'Nuevo','ubicacion'=>'Lambayeque','distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Cadena novios','descripcion'=>'Cadena de plata','precio_inicial'=>100.2,'image_name1'=>'http://imgfz.com/i/skgEnly.jpeg','image_name2'=>'http://imgfz.com/i/skgEnly.jpeg','image_name3'=>'http://imgfz.com/i/skgEnly.jpeg','image_name4'=>'http://imgfz.com/i/skgEnly.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-11-27 21:30:00','final_subasta'=>'2021-12-15 20:47:00','user_id'=>2,'categoria_id'=>4,'latitud'=>-3.565364,'longitud'=>-80.456874,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lambayeque','distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);
        //Historial
        DB::table('productos')->insert(['nombre_producto'=>'Flauta','descripcion'=>'Instrumento de viento','precio_inicial'=>30.2,'image_name1'=>'http://imgfz.com/i/JH6RU9o.jpeg','image_name2'=>'http://imgfz.com/i/JH6RU9o.jpeg','image_name3'=>'http://imgfz.com/i/JH6RU9o.jpeg','image_name4'=>'http://imgfz.com/i/JH6RU9o.jpeg','estado'=>'Comprado','inicio_subasta'=>'2021-10-25 20:47:00','final_subasta'=>'2021-12-13 20:47:00','user_id'=>1,'latitud'=>-8.383393,'longitud'=>-74.538623,'categoria_id'=>5,'user_id_comprador'=>2,'condicion'=>'Usado','ubicacion'=>'Lambayeque','distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Motosierra','descripcion'=>'Motosierra electrica','precio_inicial'=>90.0,'image_name1'=>'http://imgfz.com/i/bEdwRlf.jpeg','image_name2'=>'http://imgfz.com/i/bEdwRlf.jpeg','image_name3'=>'http://imgfz.com/i/bEdwRlf.jpeg','image_name4'=>'http://imgfz.com/i/bEdwRlf.jpeg','estado'=>'Comprado','inicio_subasta'=>'2021-11-20 10:17:00','final_subasta'=>'2021-12-20 20:47:00','user_id'=>1,'categoria_id'=>5,'user_id_comprador'=>2,'condicion'=>'Nuevo','latitud'=>-12.59254,'longitud'=>-69.188191,'ubicacion'=>'Lambayeque','distrito'=>'Chiclayo','garantia'=>'No tiene garantía']);


        DB::table('productos')->insert(['nombre_producto'=>'Autoretrato Velázquez','descripcion'=>'Autoretrato Velazquez','precio_inicial'=>30.2,
        'image_name1'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Self-portrait_by_Diego_Vel%C3%A1zquez.jpg/220px-Self-portrait_by_Diego_Vel%C3%A1zquez.jpg',
        'image_name2'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Self-portrait_by_Diego_Vel%C3%A1zquez.jpg/220px-Self-portrait_by_Diego_Vel%C3%A1zquez.jpg',
        'image_name3'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Self-portrait_by_Diego_Vel%C3%A1zquez.jpg/220px-Self-portrait_by_Diego_Vel%C3%A1zquez.jpg',
        'image_name4'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Self-portrait_by_Diego_Vel%C3%A1zquez.jpg/220px-Self-portrait_by_Diego_Vel%C3%A1zquez.jpg',
        'estado'=>'Disponible','inicio_subasta'=>'2020-11-25 18:47:00','final_subasta'=>'2021-12-15 23:47:00','user_id'=>1,'latitud'=>-6.770989,'longitud'=>-79.843396,'categoria_id'=>1,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Durero (Prado)',
        'descripcion'=>'Durero (Prado)','precio_inicial'=>90.0,
        'image_name1'=>'https://upload.wikimedia.org/wikipedia/commons/8/88/Albrecht_D%C3%BCrer%2C_Selbstbildnis_mit_26_Jahren_%28Prado%2C_Madrid%29.jpg',
        'image_name2'=>'https://upload.wikimedia.org/wikipedia/commons/8/88/Albrecht_D%C3%BCrer%2C_Selbstbildnis_mit_26_Jahren_%28Prado%2C_Madrid%29.jpg',
        'image_name3'=>'https://upload.wikimedia.org/wikipedia/commons/8/88/Albrecht_D%C3%BCrer%2C_Selbstbildnis_mit_26_Jahren_%28Prado%2C_Madrid%29.jpg',
        'image_name4'=>'https://upload.wikimedia.org/wikipedia/commons/8/88/Albrecht_D%C3%BCrer%2C_Selbstbildnis_mit_26_Jahren_%28Prado%2C_Madrid%29.jpg',
        'estado'=>'No disponible','user_id'=>1,'categoria_id'=>1,'latitud'=>-14.06493,'longitud'=>-75.728827,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Pintura de paisaje acuerale de montaña y prado','descripcion'=>'Pintura de paisaje acuerale de montaña y prado',
        'precio_inicial'=>100.2,
        'image_name1'=>'https://www.crushpixel.com/big-static18/preview4/watercolor-landscape-painting-mountain-meadow-3111696.jpg',
        'image_name2'=>'https://www.crushpixel.com/big-static18/preview4/watercolor-landscape-painting-mountain-meadow-3111696.jpg',
        'image_name3'=>'https://www.crushpixel.com/big-static18/preview4/watercolor-landscape-painting-mountain-meadow-3111696.jpg',
        'image_name4'=>'https://www.crushpixel.com/big-static18/preview4/watercolor-landscape-painting-mountain-meadow-3111696.jpg',
        'estado'=>'Disponible','inicio_subasta'=>'2020-11-25 20:47:00','final_subasta'=>'2020-12-25 20:47:00','user_id'=>2,'latitud'=>-7.158863,'longitud'=>-78.516059,'categoria_id'=>2,'user_id_comprador'=>1,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Mitologia en un paisaje de Bril y Rubens','descripcion'=>'Mitologia en un paisaje de Bril y Rubens',
        'precio_inicial'=>30.2,
        'image_name1'=>'http://www.revistadearte.com/wp-content/uploads/2011/07/Bril-Paul-y-Rubens-Pedro-Pablo-Paisaje-con-Psique-Prado-16101.jpg',
        'image_name2'=>'http://www.revistadearte.com/wp-content/uploads/2011/07/Bril-Paul-y-Rubens-Pedro-Pablo-Paisaje-con-Psique-Prado-16101.jpg',
        'image_name3'=>'http://www.revistadearte.com/wp-content/uploads/2011/07/Bril-Paul-y-Rubens-Pedro-Pablo-Paisaje-con-Psique-Prado-16101.jpg',
        'image_name4'=>'http://www.revistadearte.com/wp-content/uploads/2011/07/Bril-Paul-y-Rubens-Pedro-Pablo-Paisaje-con-Psique-Prado-16101.jpg','estado'=>'En curso','inicio_subasta'=>'2020-12-10 20:47:00','final_subasta'=>'2021-12-30 18:30:00','user_id'=>1,'latitud'=>-9.529993,'longitud'=>-77.531704,'categoria_id'=>2,'user_id_comprador'=>2,'condicion'=>'Usado','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Lampara de mesa','descripcion'=>'Lampara para ver de noche','precio_inicial'=>800.0,'image_name1'=>'http://imgfz.com/i/CQc2v4i.jpeg','image_name2'=>'http://imgfz.com/i/CQc2v4i.jpeg','image_name3'=>'http://imgfz.com/i/CQc2v4i.jpeg','image_name4'=>'http://imgfz.com/i/CQc2v4i.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-12-22 20:47:00','final_subasta'=>'2021-12-27 20:55:00','user_id'=>1,'categoria_id'=>3,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','latitud'=>-6.230835,'longitud'=>-77.871217,'distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Control remoto','descripcion'=>'Para todos los televisores','precio_inicial'=>100.2,'image_name1'=>'http://imgfz.com/i/hjU4ya7.jpeg','image_name2'=>'http://imgfz.com/i/hjU4ya7.jpeg','image_name3'=>'http://imgfz.com/i/hjU4ya7.jpeg','image_name4'=>'http://imgfz.com/i/hjU4ya7.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-11-21 20:47:20','final_subasta'=>'2021-12-29 20:17:10','user_id'=>2,'latitud'=>-13.161174,'longitud'=>-74.225245,'categoria_id'=>3,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Florero de oro','descripcion'=>'Florero de oro nuevo','precio_inicial'=>300.0,'image_name1'=>'http://imgfz.com/i/1TajLXh.jpeg','image_name2'=>'http://imgfz.com/i/1TajLXh.jpeg','image_name3'=>'http://imgfz.com/i/1TajLXh.jpeg','image_name4'=>'http://imgfz.com/i/1TajLXh.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-12-10 20:47:00','final_subasta'=>'2021-12-15 20:33:00','user_id'=>1,'categoria_id'=>4,'user_id_comprador'=>3,'user_id_comprador'=>2,'latitud'=>-13.522511,'longitud'=>-71.970643,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Cadena de oro','descripcion'=>'100% oro, disponible ahora','precio_inicial'=>100.2,'image_name1'=>'http://imgfz.com/i/rb1WnZ3.jpeg','image_name2'=>'http://imgfz.com/i/rb1WnZ3.jpeg','image_name3'=>'http://imgfz.com/i/rb1WnZ3.jpeg','image_name4'=>'http://imgfz.com/i/rb1WnZ3.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-11-27 20:30:00','final_subasta'=>'2021-11-30 20:47:00','user_id'=>2,'latitud'=>-14.06493,'longitud'=>-75.728827,'categoria_id'=>4,'user_id_comprador'=>2,'condicion'=>'Usado','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);
        //Historial

        DB::table('productos')->insert(['nombre_producto'=>'Microfono REC','descripcion'=>'Para uso profesional','precio_inicial'=>300.2,'image_name1'=>'http://imgfz.com/i/38uGwrK.jpeg','image_name2'=>'http://imgfz.com/i/38uGwrK.jpeg','image_name3'=>'http://imgfz.com/i/38uGwrK.jpeg','image_name4'=>'http://imgfz.com/i/38uGwrK.jpeg','estado'=>'Comprado','inicio_subasta'=>'2020-12-25 20:47:00','final_subasta'=>'2021-12-30 20:47:00','user_id'=>1,'latitud'=>-12.0621065,'longitud'=>-77.0365256,'categoria_id'=>5,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Piano musical','descripcion'=>'Piano negro nuevo','precio_inicial'=>90.0,'image_name1'=>'http://imgfz.com/i/RkmdlHN.jpeg','image_name2'=>'http://imgfz.com/i/RkmdlHN.jpeg','image_name3'=>'http://imgfz.com/i/RkmdlHN.jpeg','image_name4'=>'http://imgfz.com/i/RkmdlHN.jpeg','estado'=>'Comprado','inicio_subasta'=>'2020-11-12 10:17:00','final_subasta'=>'2021-12-20 20:47:00','user_id'=>1,'categoria_id'=>5,'user_id_comprador'=>2,'condicion'=>'Nuevo','latitud'=>-12.59254,'longitud'=>-69.188191,'ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);


        DB::table('productos')->insert(['nombre_producto'=>'Retrato de Juan Pantoja de la Cruz','descripcion'=>'Retrato de Juan Pantoja de la Cruz',
        'precio_inicial'=>2000.2,
        'image_name1'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Infantin_Isabella_Clara_Eugenia_von_Spanien_1599.jpg/220px-Infantin_Isabella_Clara_Eugenia_von_Spanien_1599.jpg',
        'image_name2'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Infantin_Isabella_Clara_Eugenia_von_Spanien_1599.jpg/220px-Infantin_Isabella_Clara_Eugenia_von_Spanien_1599.jpg',
        'image_name3'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Infantin_Isabella_Clara_Eugenia_von_Spanien_1599.jpg/220px-Infantin_Isabella_Clara_Eugenia_von_Spanien_1599.jpg',
        'image_name4'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Infantin_Isabella_Clara_Eugenia_von_Spanien_1599.jpg/220px-Infantin_Isabella_Clara_Eugenia_von_Spanien_1599.jpg',
        'estado'=>'Comprado','inicio_subasta'=>'2020-11-5 20:47:00',
        'final_subasta'=>'2021-11-10 20:47:00','user_id'=>3,'categoria_id'=>1,'latitud'=>-10.666344,'longitud'=>-76.255141,'user_id_comprador'=>1,'condicion'=>'Usado','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Retrato de Mariano Prado Ugarteche','descripcion'=>'Retrato de Mariano Prado Ugarteche','precio_inicial'=>150.2,
        'image_name1'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Mariano_Ignacio_Prado_Ugarteche.jpg/220px-Mariano_Ignacio_Prado_Ugarteche.jpg',
        'image_name2'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Mariano_Ignacio_Prado_Ugarteche.jpg/220px-Mariano_Ignacio_Prado_Ugarteche.jpg',
        'image_name3'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Mariano_Ignacio_Prado_Ugarteche.jpg/220px-Mariano_Ignacio_Prado_Ugarteche.jpg',
        'image_name4'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Mariano_Ignacio_Prado_Ugarteche.jpg/220px-Mariano_Ignacio_Prado_Ugarteche.jpg','estado'=>'Disponible','inicio_subasta'=>'2020-11-25 18:47:00','final_subasta'=>'2021-12-15 23:47:00','user_id'=>1,'latitud'=>-5.195464,'longitud'=>-80.630873,'categoria_id'=>1,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Paisaje Infernal','descripcion'=>'Paisaje Infernal','precio_inicial'=>82.0,
        'image_name1'=>'https://content3.cdnprado.net/imagenes/Documentos/imgsem/4d/4d7c/4d7c0087-97ca-4733-b254-1dbff152911d/61957d4e-dc07-4d8d-9d26-ebbe54f02ef6.jpg',
        'image_name2'=>'https://content3.cdnprado.net/imagenes/Documentos/imgsem/4d/4d7c/4d7c0087-97ca-4733-b254-1dbff152911d/61957d4e-dc07-4d8d-9d26-ebbe54f02ef6.jpg',
        'image_name3'=>'https://content3.cdnprado.net/imagenes/Documentos/imgsem/4d/4d7c/4d7c0087-97ca-4733-b254-1dbff152911d/61957d4e-dc07-4d8d-9d26-ebbe54f02ef6.jpg',
        'image_name4'=>'https://content3.cdnprado.net/imagenes/Documentos/imgsem/4d/4d7c/4d7c0087-97ca-4733-b254-1dbff152911d/61957d4e-dc07-4d8d-9d26-ebbe54f02ef6.jpg','estado'=>'No disponible','user_id'=>5,'categoria_id'=>2,'latitud'=>-6.488505,'longitud'=>-76.359318,'user_id_comprador'=>2,'condicion'=>'Usado','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'La noche estrellada','descripcion'=>'La noche estrellada',
        'precio_inicial'=>100.2,
        'image_name1'=>'https://www.salirconarte.com/wp-content/uploads/2017/06/orig_64571-750x430.jpg',
        'image_name2'=>'https://www.salirconarte.com/wp-content/uploads/2017/06/orig_64571-750x430.jpg',
        'image_name3'=>'https://www.salirconarte.com/wp-content/uploads/2017/06/orig_64571-750x430.jpg',
        'image_name4'=>'https://www.salirconarte.com/wp-content/uploads/2017/06/orig_64571-750x430.jpg',
        'estado'=>'Disponible','inicio_subasta'=>'2020-11-25 20:47:00','final_subasta'=>'2021-12-19 22:47:00','user_id'=>5,'categoria_id'=>2,'latitud'=>-3.565364,'longitud'=>-80.456874,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Televisor','descripcion'=>'Televisor HD 4K','precio_inicial'=>3000.2,'image_name1'=>'http://imgfz.com/i/L5Xw98i.jpeg','image_name2'=>'http://imgfz.com/i/L5Xw98i.jpeg','image_name3'=>'http://imgfz.com/i/L5Xw98i.jpeg','image_name4'=>'http://imgfz.com/i/L5Xw98i.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-12-12 20:47:00','final_subasta'=>'2021-12-30 18:30:00','latitud'=>-8.383393,'longitud'=>-74.538623,'user_id'=>1,'categoria_id'=>3,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Radio','descripcion'=>'Radio antigua, està vieja','precio_inicial'=>70.0,'image_name1'=>'http://imgfz.com/i/pTyzL7S.jpeg','image_name2'=>'http://imgfz.com/i/pTyzL7S.jpeg','image_name3'=>'http://imgfz.com/i/pTyzL7S.jpeg','image_name4'=>'http://imgfz.com/i/pTyzL7S.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-12-22 20:47:00','final_subasta'=>'2021-01-28 20:55:00','user_id'=>4,'categoria_id'=>3,'user_id_comprador'=>2,'condicion'=>'Nuevo','latitud'=>-8.383393,'longitud'=>-70.31313,'ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Perlas','descripcion'=>'Son originales, pero ya no las necesito','precio_inicial'=>400.2,'image_name1'=>'http://imgfz.com/i/AHGy17t.jpeg','image_name2'=>'http://imgfz.com/i/AHGy17t.jpeg','image_name3'=>'http://imgfz.com/i/AHGy17t.jpeg','image_name4'=>'http://imgfz.com/i/AHGy17t.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-11-21 20:47:20','final_subasta'=>'2021-12-6 20:17:10','user_id'=>3,'categoria_id'=>4,'latitud'=>-8.383393,'longitud'=>-70.31313,'user_id_comprador'=>2,'condicion'=>'Usado','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Horno microhondas','descripcion'=>'Maso hecho de oro 100% oro','precio_inicial'=>190.0,'image_name1'=>'http://imgfz.com/i/vrnLG64.jpeg','image_name2'=>'http://imgfz.com/i/vrnLG64.jpeg','image_name3'=>'http://imgfz.com/i/vrnLG64.jpeg','image_name4'=>'http://imgfz.com/i/vrnLG64.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-12-10 20:47:00','final_subasta'=>'2021-12-16 20:33:00','user_id'=>1,'categoria_id'=>4,'user_id_comprador'=>3,'latitud'=>-7.2342,'longitud'=>-70.31313,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Musicube','descripcion'=>'Lo vendo porque ya no los uso','precio_inicial'=>200.2,'image_name1'=>'http://imgfz.com/i/LHYp6Jd.jpeg','image_name2'=>'http://imgfz.com/i/LHYp6Jd.jpeg','image_name3'=>'http://imgfz.com/i/LHYp6Jd.jpeg','image_name4'=>'http://imgfz.com/i/LHYp6Jd.jpeg','estado'=>'En curso','inicio_subasta'=>'2020-11-27 20:30:00','final_subasta'=>'2021-12-30 20:47:00','user_id'=>2,'categoria_id'=>5,'latitud'=>-7.2342,'longitud'=>-70.31313,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);

        DB::table('productos')->insert(['nombre_producto'=>'Guitarra','descripcion'=>'Guitarra, la subasto porque ya no la uso','precio_inicial'=>300.2,'image_name1'=>'http://imgfz.com/i/1HdxlYJ.jpeg','image_name2'=>'http://imgfz.com/i/1HdxlYJ.jpeg','image_name3'=>'http://imgfz.com/i/1HdxlYJ.jpeg','image_name4'=>'http://imgfz.com/i/1HdxlYJ.jpeg','estado'=>'Comprado','inicio_subasta'=>'2020-12-25 20:47:00','final_subasta'=>'2021-12-19 20:47:00','user_id'=>4,'categoria_id'=>5,'latitud'=>-7.2342,'longitud'=>-70.31313,'user_id_comprador'=>2,'condicion'=>'Nuevo','ubicacion'=>'Lima','distrito'=>'Comas','garantia'=>'No tiene garantía']);



    }
}
