<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// UK
        DB::table('university')->insert([
            'name' => 'Aston University',
            'slug' => 'aston-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('university')->insert([
            'name' => 'Bangor University',
            'slug' => 'bangor-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Bath Spa University',
            'slug' => 'bath-spa-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Birmingham City University',
            'slug' => 'birmingham-city-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Brunel University London',
            'slug' => 'brunel-university-london',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Coventry University',
            'slug' => 'coventry-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Durham University',
            'slug' => 'durham-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Falmouth University',
            'slug' => 'falmouth-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Glasgow Caledonian University',
            'slug' => 'glasgow-caledonian-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Goldsmiths, University of London',
            'slug' => 'goldsmiths-university-of-london',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Heriot-Watt University',
            'slug' => 'heriot-watt-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Istituto Marangoni',
            'slug' => 'istituto-marangoni',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Kingston University',
            'slug' => 'kingston-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Lancaster University',
            'slug' => 'lancaster-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Loughborough University',
            'slug' => 'loughborough-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Middlesex University',
            'slug' => 'middlesex-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Northumbria University',
            'slug' => 'northumbria-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Northumbria University',
            'slug' => 'northumbria-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Norwich University of the Arts',
            'slug' => 'norwich-university-of-the-arts',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Nottingham Trent University',
            'slug' => 'nottingham-trent-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Plymouth University',
            'slug' => 'plymouth-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Queen Margaret University',
            'slug' => 'queen-margaret-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Queen's University Belfast",
            'slug' => 'queens-university-belfast',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Robert Gordon University',
            'slug' => 'robert-gordon-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Staffordshire University',
            'slug' => 'staffordshire-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Swansea University',
            'slug' => 'swansea-university',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'The University of Liverpool',
            'slug' => 'the-university-of-liverpool',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'The University of Sheffield',
            'slug' => 'the-university-of-sheffield',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University College Birmingham',
            'slug' => 'university-college-birmingham',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Central Lancashire',
            'slug' => 'university-of-central-lancashire﻿',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Derby',
            'slug' => 'university-of-derby',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Dundee',
            'slug' => 'university-of-dundee',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of East Anglia',
            'slug' => 'university-of-east-anglia',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Essex',
            'slug' => 'university-of-essex',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Exeter',
            'slug' => 'university-of-exeter',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Greenwich',
            'slug' => 'university-of-greenwich',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Kent',
            'slug' => 'university-of-kent',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Lincoln',
            'slug' => 'university-of-lincoln',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Strathclyde',
            'slug' => 'university-of-strathclyde',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Sunderland',
            'slug' => 'university-of-sunderland',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Surrey',
            'slug' => 'university-of-surrey',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Sussex',
            'slug' => 'university-of-sussex',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Winchester',
            'slug' => 'university-of-winchester',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // AU
        DB::table('university')->insert([
            'name' => 'Griffith University',
            'slug' => 'griffith-university',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'La Trobe University',
            'slug' => 'La Trobe University',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Le Cordon Bleu',
            'slug' => 'le-cordon-bleu',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Monash University',
            'slug' => 'monash-university',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Queensland University of Technology',
            'slug' => 'queensland-university-of-technology',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Southern Cross University',
            'slug' => 'southern-cross-university',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'University of Tasmania',
            'slug' => 'university-of-tasmania',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // US
        DB::table('university')->insert([
            'name' => 'Adelphi University',
            'slug' => 'adelphi-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'American University',
            'slug' => 'american-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Auburn University',
            'slug' => 'auburn-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'City College of New York',
            'slug' => 'city-college-of-new-york',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Florida International University',
            'slug' => 'florida-international-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'James Madison University',
            'slug' => 'james-madison-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Long Island University',
            'slug' => 'long-island-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Louisiana State University',
            'slug' => 'louisiana-state-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => 'Roosevelt University',
            'slug' => 'roosevelt-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('university')->insert([
            'name' => "St George's University",
            'slug' => 'st-georges-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "St George's University",
            'slug' => 'st-georges-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('university')->insert([
            'name' => "Texas A&M University - Corpus Christi",
            'slug' => 'exas-am-university-corpus-christi',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of Central Florida",
            'slug' => 'university-of-central-florida',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of Illinois - Chicago",
            'slug' => 'university-of-illinois-chicago',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of Kansas",
            'slug' => 'university-of-kansas',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of the Pacific",
            'slug' => 'university-of-the-pacific',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of Vermont",
            'slug' => 'university-of-vermont',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Widener University",
            'slug' => 'widener-university',
            'logo' => '',
            'country_slug' => 'US',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // CA
        DB::table('university')->insert([
            'name' => "Royal Roads University",
            'slug' => 'royal-roads-university',
            'logo' => '',
            'country_slug' => 'CA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of Manitoba",
            'slug' => 'university-of-manitoba',
            'logo' => '',
            'country_slug' => 'CA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of New Brunswick",
            'slug' => 'university-of-new-brunswick',
            'logo' => '',
            'country_slug' => 'CA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // CH
        DB::table('university')->insert([
            'name' => "Cesar Ritz",
            'slug' => 'cesar-ritz',
            'logo' => '',
            'country_slug' => 'CH',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('university')->insert([
            'name' => "Cesar Ritz",
            'slug' => 'cesar-ritz',
            'logo' => '',
            'country_slug' => 'CH',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('university')->insert([
            'name' => "Hotel Institute Montreux",
            'slug' => 'hotel-institute-montreux',
            'logo' => '',
            'country_slug' => 'CH',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "IHTTI School of Hotel Management",
            'slug' => 'ihtti-school-of-hotel-management',
            'logo' => '',
            'country_slug' => 'CH',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Swiss Hotel Management School",
            'slug' => 'swiss-hotel-management-school',
            'logo' => '',
            'country_slug' => 'CH',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        //  IL
        DB::table('university')->insert([
            'name' => "University College Dublin",
            'slug' => 'university-college-dublin',
            'logo' => '',
            'country_slug' => 'CH',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Foundation / Diploma
        DB::table('university')->insert([
            'name' => "Bellerbys College",
            'slug' => 'bellerbys-college',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "CATS College",
            'slug' => 'cats-college',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('university')->insert([
            'name' => "Coventry University ISC",
            'slug' => 'coventry-university-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Coventry University - Oncampus",
            'slug' => 'coventry-university-oncampus',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('university')->insert([
            'name' => "Durham University ISC",
            'slug' => 'durham-university-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('university')->insert([
            'name' => "Griffith College",
            'slug' => 'griffith-college',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Istituto Marangoni ISC",
            'slug' => 'istituto-marangoni-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Kings Education UK",
            'slug' => 'kings-education-uk',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Kingston University ISC",
            'slug' => 'kingston-university-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "La Trobe Melbourne",
            'slug' => 'la-trobe-melbourne',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Lancaster University ISC",
            'slug' => 'lancaster-university-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Lancaster University ISC",
            'slug' => 'lancaster-university-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "Monash College",
            'slug' => 'monash-college',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "QUT International College",
            'slug' => 'qut-international-college',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "The University of Sheffield ISC",
            'slug' => 'the-university-of-sheffield-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of Lincoln ISC",
            'slug' => 'university-of-lincoln-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of Strathclyde ISC",
            'slug' => 'university-of-strathclyde-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of Sunderland - Oncampus",
            'slug' => 'university-of-sunderland-oncampus',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]); 

        DB::table('university')->insert([
            'name' => "University of Surrey ISC",
            'slug' => 'university-of-surrey-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "University of Sussex ISC",
            'slug' => 'university-of-sussex-international-study-centre',
            'logo' => '',
            'country_slug' => 'UK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('university')->insert([
            'name' => "UTAS Foundation",
            'slug' => 'utas-foundation',
            'logo' => '',
            'country_slug' => 'AU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
