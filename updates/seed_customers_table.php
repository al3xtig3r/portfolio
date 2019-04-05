<?php

namespace Al3xTig3r\Portfolio\Updates;

use Seeder;

use Al3xTig3r\Portfolio\Models\Customer;

class SeedCustomersTable extends Seeder
{
    public function run()
    {
        // Gunther
        $guntherCelli = Customer::create([
            'name' => 'Gunther Celli',
            'email' => 'gun_wd_twy@hotmail.com',
            'phone' => '+393295612293',
        ]);

        $footwork = Customer::create([
            'name' => 'Footwork',
            'email' => 'gun_wd_twy@hotmail.com',
            'phone' => '+393295612293',
        ]);

        // Joe
        $joeCelli = Customer::create([
            'name' => 'Joe Celli',
            'email' => 'jojoe86@libero.it',
            'phone' => '+393491468592',
            'public' => false,
        ]);

        $pignaseccaApartment = Customer::create([
            'name' => 'Pignasecca Apartment',
            'email' => 'jojoe86@libero.it',
            'phone' => '+393491468592',
        ]);

        $southcoreTeam = Customer::create([
            'name' => 'SouthCore Team',
            'email' => 'jojoe86@libero.it',
            'phone' => '+393491468592',
        ]);

        // Magma
        $magmaSrl = Customer::create([
            'name' => 'Magma S.r.l.',
            'email' => 'amministrazione@magma.it',
            'phone' => '+393349624305',
        ]);

        // Le Vie Del Pensiero
        $paolaTedeschi = Customer::create([
            'name' => 'Paola Tedeschi',
            'email' => 'p-tedeschi@libero.it',
            'phone' => '+393289163313',
        ]);

        // Baugrafik
        $baugrafik = Customer::create([
            'name' => 'Baugrafik',
            'email' => 'davide.ercolano@gmail.com',
            'phone' => '+393930258894',
        ]);

        // Turi
        $turiTransportSrl = Customer::create([
            'name' => 'Turi Transport S.r.l.',
            'email' => 'amministrazione@turi-transport.it',
            'phone' => '+390817527051',
        ]);

        $newContainersTerminalSrl = Customer::create([
            'name' => 'New Containers Terminal S.r.l.',
            'email' => 'amministrazione@newct.info',
            'phone' => '+390817527051',
        ]);

        // Unina 2
        $uniLuigiVanvitelli = Customer::create([
            'name' => 'Università degli Studi della Campania Luigi Vanvitelli',
            'email' => 'dca@unina2.it',
            'phone' => '+390815666514',
        ]);

        // Guido
        $laPiazzaAlVomero = Customer::create([
            'name' => 'La Piazza al Vomero - Casa Vacanze',
            'email' => 'lapiazza34@gmail.com',
            'phone' => '+393929957704',
        ]);
    }
}
