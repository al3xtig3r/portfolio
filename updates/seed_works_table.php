<?php

namespace Al3xTig3r\Portfolio\Updates;

use Seeder;

use DB;

use Al3xTig3r\Portfolio\Models\Service;
use Al3xTig3r\Portfolio\Models\Customer;
use Al3xTig3r\Portfolio\Models\Work;

class SeedWorksTable extends Seeder
{
    public function run()
    {
        // Services
        $web = Service::where('name', 'Sito web')->first();
        $consulting = Service::where('name', 'Consulenza')->first();
        $domains = Service::where('name', 'Gestione domini')->first();

        // Customers
        $guntherCelli = Customer::where('name', 'Gunther Celli')->first();
        $footwork = Customer::where('name', 'Footwork')->first();
        $joeCelli = Customer::where('name', 'Joe Celli')->first();
        $pignaseccaApartment = Customer::where('name', 'Pignasecca Apartment')->first();
        $southcoreTeam = Customer::where('name', 'SouthCore Team')->first();
        $magmaSrl = Customer::where('name', 'Magma S.r.l.')->first();
        $baugrafik = Customer::where('name', 'Baugrafik')->first();
        $paolaTedeschi = Customer::where('name', 'Paola Tedeschi')->first();
        $turiTransportSrl = Customer::where('name', 'Turi Transport S.r.l.')->first();
        $newContainersTerminalSrl = Customer::where('name', 'New Containers Terminal S.r.l.')->first();
        $uniLuigiVanvitelli = Customer::where('name', 'Università degli Studi della Campania Luigi Vanvitelli')->first();
        $laPiazzaAlVomero = Customer::where('name', 'La Piazza al Vomero - Casa Vacanze')->first();

        // Attributes
        $attributesTable = DB::table('rainlab_translate_attributes');

        // Works:
        // FCamp
        $fcamp = Work::create([
            'name' => 'Footwork All-Star Camp',
            'description' => 'Progettazione e realizzazione del sito web "Footwork All-Star Camp". Tale sito pubblicizza il camp sportivo dedicato a ragazzi e ragazze organizzato dal gruppo di calciatori freestyler Footwork di cui fa parte il campione italiano di calcio freestyle Gunther Celli.',
            'customer_id' => $footwork->id,
            'service_id' => $web->id,
            'link' => 'https://fcamp.it',
            'gross_price' => '600',
            'public' => true,
            'release_date' => '2018-04-01',
            'expiration_date' => '2019-03-27'
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $fcamp->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Design and implementation of the website \"Footwork All-Star Camp\". This site advertises the sports camp for boys and girls organized by the group of football freestylers Footwork, which includes the Italian freestyle football champion Gunther Celli.","comment":""}'
        ]);

        // Pignasecca
        $pignasecca = Work::create([
            'name' => 'Pignasecca Apartment',
            'description' => 'Progettazione e realizzazione del sito web "Pignasecca Apartment". Tale sito pubblicizza il Bed & Breakfast "Pignasecca Apartment", sito in Napoli centro.',
            'customer_id' => $pignaseccaApartment->id,
            'service_id' => $web->id,
            'link' => 'http://naplesbednbreakfast.com/',
            'gross_price' => '0',
            'public' => true,
            'release_date' => '2018-07-01',
            'expiration_date' => '2019-07-17'
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $pignasecca->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Design and implementation of the website \"Pignasecca Apartment\". This site advertises the Bed & Breakfast \"Pignasecca Apartment\", located in the center of Naples.","comment":""}'
        ]);

        // PT Napoli
        $ptNapoli = Work::create([
            'name' => 'PT Napoli',
            'description' => 'Gestione dominio ptnapoli.it',
            'customer_id' => $joeCelli->id,
            'service_id' => $domains->id,
            'link' => 'ptnapoli.it',
            'gross_price' => '14',
            'public' => false,
            'release_date' => '2018-03-29',
            'expiration_date' => '2019-03-29'
        ]);

        // Le Vie Del Pensiero
        $leVieDelPensiero = Work::create([
            'name' => 'Le Vie del Pensiero',
            'description' => 'Progettazione e realizzazione del sito web "Le Vie del Pensiero". Tale sito pubblicizza l\'attività dell\'esperta D.S.A. e mediatrice metodo Feuerstein Paola Tedeschi.',
            'customer_id' => $paolaTedeschi->id,
            'service_id' => $web->id,
            'link' => 'http://leviedelpensiero.it',
            'gross_price' => '0',
            'public' => true,
            'release_date' => '2011-03-21',
            'expiration_date' => null
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $leVieDelPensiero->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Design and implementation of the website \"Le Vie del Pensiero\". This site advertises the business of the learning disabilities expert and Feuerstein method mediator Paola Tedeschi.","comment":""}'
        ]);

        // Forma Factory
        $formaFactory = Work::create([
            'name' => 'Forma Factory',
            'description' => 'Progettazione e realizzazione dell\'applicazione web "Forma Factory". Nello specifico, ho realizzato un\'applicazione web con funzione di ecommerce per prodotti 3D.',
            'customer_id' => $baugrafik->id,
            'service_id' => $web->id,
            'link' => '#',
            'gross_price' => '0',
            'public' => true,
            'release_date' => '2015-03-21',
            'expiration_date' => null
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $formaFactory->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Design and implementation of the web application \"Forma Factory\". Specifically, I created a web application with ecommerce function for 3D products.","comment":""}'
        ]);

        // DCA Unina 2
        $dcaUninaDue = Work::create([
            'name' => 'DCA Università degli Studi della Campania Luigi Vanvitelli',
            'description' => 'Sviluppo del sito web "DCA Università degli Studi della Campania Luigi Vanvitelli". Tale sito serve per informare il pubblico riguardo l\'esistenza, la posizione e le funzioni del centro di riferimento regionale per i disturbi dell\'alimentazione.',
            'customer_id' => $uniLuigiVanvitelli->id,
            'service_id' => $web->id,
            'link' => 'http://www.dca.unina2.it/',
            'gross_price' => '0',
            'public' => true,
            'release_date' => '2016-12-01',
            'expiration_date' => null
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $dcaUninaDue->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Development of the website \"DCA Università degli Studi della Campania Luigi Vanvitelli\". This site serves to inform the public about the existence, location and functions of the regional referral center for eating disorders.","comment":""}'
        ]);

        // SouthCoreTeam
        $southcore = Work::create([
            'name' => 'SouthCore Team',
            'description' => 'Progettazione e realizzazione del sito web "SouthCore Team". Tale sito pubblicizza la palestra di arti marziali e MMA SouthCore Team.',
            'customer_id' => $southcoreTeam->id,
            'service_id' => $web->id,
            'link' => 'https://www.southcoreteam.com/',
            'gross_price' => '0',
            'public' => true,
            'release_date' => '2017-02-01',
            'expiration_date' => null
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $southcore->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Design and implementation of the website \"SouthCore Team\". This site advertises the martial arts and MMA gym SouthCore Team.","comment":""}'
        ]);

        // Turi Transport
        $turiTransport = Work::create([
            'name' => 'Turi Transport',
            'description' => 'Progettazione e realizzazione del sito web "Turi Transport". Tale sito pubblicizza la società di trasporto container Turi Transport.',
            'customer_id' => $turiTransportSrl->id,
            'service_id' => $web->id,
            'link' => 'https://www.turitransport.it/',
            'gross_price' => '0',
            'public' => true,
            'release_date' => '2017-07-01',
            'expiration_date' => null
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $turiTransport->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Design and implementation of the website \"Turi Transport\". This site advertises the containers transport company Turi Transport.","comment":""}'
        ]);

        // Gunther Celli
        $gunther = Work::create([
            'name' => 'Gunther Celli',
            'description' => 'Progettazione e realizzazione del sito web "Gunther Celli". Tale sito pubblicizza il calciatore freestyler professionista e campione italiano Gunther Celli.',
            'customer_id' => $guntherCelli->id,
            'service_id' => $web->id,
            'link' => 'https://www.gunthercelli.com/',
            'gross_price' => '0',
            'public' => true,
            'release_date' => '2017-07-02',
            'expiration_date' => null
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $gunther->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Design and implementation of the website \"Gunther Celli\". This site advertises the professional football freestyler and Italian champion Gunther Celli.","comment":""}'
        ]);

        // New Containers Terminal
        $newContainersTerminal = Work::create([
            'name' => 'New Containers Terminal',
            'description' => 'Progettazione e realizzazione del sito web "New Containers Terminal". Tale sito pubblicizza la società di gestione container New Containers Terminal.',
            'customer_id' => $newContainersTerminalSrl->id,
            'service_id' => $web->id,
            'link' => 'https://newcontainersterminal.it/',
            'gross_price' => '0',
            'public' => true,
            'release_date' => '2018-03-01',
            'expiration_date' => null
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $newContainersTerminal->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Design and implementation of the website \"New Containers Terminal\". This site advertises the containers management company New Containers Terminal.","comment":""}'
        ]);

        // La Piazza al Vomero
        $laPiazza = Work::create([
            'name' => 'La Piazza al Vomero',
            'description' => 'Progettazione e realizzazione del sito web "La Piazza al Vomero". Tale sito pubblicizza la casa vacanze "La Piazza al Vomero", sito nel quartiere Vomero di Napoli.',
            'customer_id' => $laPiazzaAlVomero->id,
            'service_id' => $web->id,
            'link' => 'https://www.lapiazzaalvomero.it/',
            'gross_price' => '0',
            'public' => true,
            'release_date' => '2016-03-21',
            'expiration_date' => null
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $laPiazza->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Work',
            'attribute_data' => '{"name":"","description":"Design and implementation of the website \"La Piazza al Vomero\". This site advertises the holiday home \"La Piazza al Vomero\", located in the Vomero district of Naples.","comment":""}'
        ]);
    }
}
