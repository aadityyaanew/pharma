<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultSettings = [
            // Contact Details
            'phone' => '+91 6352727517',
            'phone_raw' => '+916352727517',
            'alternate_phone' => '6352727517',
            'whatsapp_number' => '916352727517',
            'email' => 'pdev63575@gmail.com',
            'support_email' => 'pdev63575@gmail.com',
            'address' => 'Nilkanth sky, Jay Ambe Life Care, shop no. 88 ground floor, opp APMC Nava Bazar flyover Karjan district: Vadodara Gujarat pin Code: 391240',
            'managing_director' => 'Mr. Dev Patel',
            'fssai_license' => 'WHO-GMP & FSSAI Certified',
            'plant_certifications' => 'WHO-GMP Compliant • ISO 9001:2015 • DCGI Approved Formulations',

            // Social Media Links
            'facebook' => '',
            'instagram' => '',
            'instagram_handle' => '',
            'linkedin' => '',
            'youtube' => '',
            'x' => '',

            // General Website Information
            'name' => 'Jay Ambe Life Care',
            'tagline' => 'COMMITTED TO HEALTH • DEDICATED TO LIFE',
            'copyright_text' => '© ' . date('Y') . ' Jay Ambe Life Care. All Rights Reserved.',
        ];

        foreach ($defaultSettings as $key => $value) {
            Setting::firstOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        Setting::clearCache();
    }
}
