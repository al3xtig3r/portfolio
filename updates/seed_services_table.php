<?php

namespace Al3xTig3r\Portfolio\Updates;

use Seeder;

use DB;

use Al3xTig3r\Portfolio\Models\Service;

class SeedServicesTable extends Seeder
{
    public function run()
    {
        $attributesTable = DB::table('rainlab_translate_attributes');

        // Websites
        $web = Service::create([
            'name' => 'Sito web',
            'icon' => 'globe',
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $web->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Service',
            'attribute_data' => '{"name":"Website"}'
        ]);

        // Apps
        $app = Service::create([
            'name' => 'App',
            'icon' => 'mobile',
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $app->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Service',
            'attribute_data' => '{"name":"App"}'
        ]);

        // Marketing
        $marketing = Service::create([
            'name' => 'Web Marketing',
            'icon' => 'line-chart',
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $marketing->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Service',
            'attribute_data' => '{"name":"Web Marketing"}'
        ]);

        // Consulting
        $consulting = Service::create([
            'name' => 'Consulenza',
            'icon' => 'user',
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $consulting->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Service',
            'attribute_data' => '{"name":"Consulting"}'
        ]);

        // Domains
        $domains = Service::create([
            'name' => 'Gestione domini',
            'icon' => 'hdd-o',
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $domains->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Service',
            'attribute_data' => '{"name":"Domain management"}'
        ]);

        // Redesign
        $redesign = Service::create([
            'name' => 'Redesign / Restyling',
            'icon' => 'tree',
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $redesign->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Service',
            'attribute_data' => '{"name":"Redesign / Restyling"}'
        ]);

        // Project
        $project = Service::create([
            'name' => 'Progetto',
            'icon' => 'map',
        ]);

        $attributesTable->insert([
            'locale' => 'en',
            'model_id' => $project->id,
            'model_type' => 'Al3xTig3r\Portfolio\Models\Service',
            'attribute_data' => '{"name":"Project"}'
        ]);
    }
}
