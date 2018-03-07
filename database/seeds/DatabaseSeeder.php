<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Caracteristicas::create(['nombre' => 'Television']);
        App\Caracteristicas::create(['nombre' => 'Wifi']);
        App\Caracteristicas::create(['nombre' => 'Proyector']);
        App\Caracteristicas::create(['nombre' => 'Aire Acondicionado']);

        $users = factory(App\User::class, 10)->create();

        $caracteristicas = \App\Caracteristicas::all();

        $alquiler = factory(App\Alquiler::class, 10)->create();


        $users->each(function (App\User $user) use ($users, $caracteristicas, $alquiler) {
            $salas = factory(App\Salas::class, 10)->create([
                'user_id' => $user->id
            ]);


            $salas->each(function (App\Salas $sala) use ($caracteristicas, $users, $alquiler) {
                $alquiler->create([
                    'user_id' => $sala->user_id,
                    'salas_id' => $sala->id
                ]);

                $sala->caracteristicas()->sync(
                    $caracteristicas->random(mt_rand(1, 4))
                );


            });


        });

    }
}
