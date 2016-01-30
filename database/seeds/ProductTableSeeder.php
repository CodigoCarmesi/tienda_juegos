<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			 [
                'name'=>'fifa16',
                'slug'=>'fifa-2016',
                'description'=>'juego fifa 2016',
                'extract'=>'nuevo juego de futbol de konami',
                'price'=>40000,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/09/01/PS4G0204_201591181537_b.png',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'joystick ps4',
                'slug'=>'joystick-ps4',
                'description'=>'mando para ps4 inhalambrico color negro',
                'extract'=>'mando inhalambrico sin pilas',
                'price'=>40000,
                'image'=>'http://www.zmart.cl/Productos/ps4_dualshock4_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>2
            ],
            [
                'name'=>'consola ps4',
                'slug'=>'consola-ps4',
                'description'=>'consola de juego ps4 edicion glacier',
                'extract'=>'consola edicion glacier',
                'price'=>370000,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/06/30/File_2015630113321_s.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>3
            ],
            [
                'name'=>'Star Wars Battlefront PC (DIGITAL)',
                'slug'=>'star-wars',
                'description'=>'¡Este 2015 Star Wars regresa a la pantalla grande...y debuta en la nueva generación de videojuegos con el regreso de la saga "BattleFront"!',
                'extract'=>'nuevo juego de pc/play station/xbox one.',
                'price'=>38990,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/04/17/JUE1313_201541717152_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'Fallout 4 ps4',
                'slug'=>'fallout-4',
                'description'=>'¡La serie de RPG post-apocalíptico más popular del mundo debuta en la nueva generación de videojuegos!',
                'extract'=>'Fallout 4 es la esperada secuela de la saga de rol',
                'price'=>45000,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/06/03/PS4G0206_201563135650_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'Rise of the Tomb Raider ',
                'slug'=>'rise-of-the-tomb-raider',
                'description'=>'¡Lara Croft regresa en una aventura épica que continúa con la reinventada saga de aventura y supervivencia!',
                'extract'=>'una aventura cinemática de supervivencia donde te unirás a Lara Croft',
                'price'=>44990,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/07/23/XBONEG096_2015723141018_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'Guitar Hero Live',
                'slug'=>'guitar-hero-live ',
                'description'=>'¡GUITAR HERO REGRESA CON UNA EXPERIENCIA DE MÚSICA EN VIVO!',
                'extract'=>'¡CON GUITAR HERO LIVE, TÚ ERES LA ESTRELLA DE ROCK!',
                'price'=>89990,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/11/10/PS4G0187_20151110125159_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'Rainbow Six Siege ',
                'slug'=>'rainbow-six-siege ',
                'description'=>'¡La serie de FPS táctico por excelencia regresa en una nueva y espectacular entrega!',
                'extract'=>'La guerra contra el terrorismo en la nueva generación de videojuegos',
                'price'=>45000,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/03/16/PS4G0096_2015316163834_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'Call of Duty: Black Ops III',
                'slug'=>'black-ops-3',
                'description'=>'¡La línea entre arma y soldado es borrada completamente en la tercera entrega de Call of Duty: Black Ops!',
                'extract'=>'Entra al campo de batalla del futuroe de la tecnología',
                'price'=>44990,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/04/27/PS4G0185_201542710224_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'WRC 5 ',
                'slug'=>'WRC-5',
                'description'=>'El FIFA World Rally Championship (WRC) reúne a los mejores pilotos conduciendo los vehículos basados en la serie con las condiciones climáticas más difíciles y variadas del mundo. En 2015, las carreras de esta increíble aventura pasan por 13 rallies en 14 países en todo tipo de superficie: de las carreras forestales nevadas a los terrenos montañosos pedregosos.',
                'extract'=>'la mejor experiencia de juego a los aficionados de rallye y de juegos de carrera.',
                'price'=>34990,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/09/21/XBONEG238_2015921103324_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'Just Cause 3 XBOX ONE',
                'slug'=>'just-cause-3',
                'description'=>'¡Rico “El Escorpión” Rodríguez regresa al mundo de los videojuegos para sembrar el caos!',
                'extract'=>'Lucha por liberar a tu patria de un dictador.',
                'price'=>46000,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/05/04/XBONEG127_201554124143_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'Minecraft: Story Mode Season Disc',
                'slug'=>'minecraft-story-mode-season-disc',
                'description'=>'Minecraft : Story Mode es una aventura jugable basada en el popular juego donde tú eres la estrella y las decisiones que tomes influyen en cómo la historia será contada.',
                'extract'=>'El Exitoso juego de pc ahora en Xbox',
                'price'=>30000,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/10/01/XBONEG231_201510113304_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'Mario Tennis Ultra Smash',
                'slug'=>'mario-tennis-ultra-smash',
                'description'=>'Mario y compañía sirven para ganar el partido en Mario Tennis: Ultra Smash, solo para Wii U.',
                'extract'=>'Mario Tennis: Ultra Smash para Wii U.',
                'price'=>39990,
                'image'=>'http://www.zmart.cl/Productos/SKU/2015/11/12/WIUG0148_20151112121613_b.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>1
            ],
            [
                'name'=>'Xbox One 500GB Edición Fifa 16',
                'slug'=>'xbox-one',
                'description'=>'Xbox One es la octava generación de consolas de videojuegos. Actualmente es de las mejores consolas del mercado por sus capacidades y características técnicas. Sin olvidar por sus juegos de última generación con la mejor tecnología. ',
                'extract'=>'La gran primicia de poder jugar todos los juegos de Xbox One y de Xbox 360 en una consola',
                'price'=>319990,
                'image'=>'https://media.linio.cl/p/microsoft-xbox-8626-805216-1-product.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>3
            ],
            [
                'name'=>'Consola WiiU Deluxe 32GB',
                'slug'=>'consola-wiiu',
                'description'=>'Por primera vez, experimenta tu mundo de Nintendo favorito con una cristalina alta definición. Conecta a tu pantalla y juega en HD. Compartible con 1080p, 1080i, 720p, 480p y 480i. Cables compatibles: HDMI™, cable por componentes de Wii, cable de video compuesto Wii (S-Video) y cable A/V estéreo de Wii.',
                'extract'=>'Incluido con cada consola Wii U, el nuevo y revolucionario mandoZWii U.',
                'price'=>280000,
                'image'=>'https://media.linio.cl/p/nintendo-6490-65249-1-product.jpg',
                'visible'=>1,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'category_id'=>3
            ],
			
		);

		Product::insert($data);
    }
}
