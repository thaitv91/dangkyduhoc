<?php

use Illuminate\Database\Seeder;
use App\Models\University;
use Carbon\Carbon;
class UniversityMetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	// Aston University
    	$university_name = 'Aston University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> '<p>Founded in 1895 and a University since 1966, Aston is a research-intensive university known for its world-class teaching quality and strong links to industry, government and commerce.</p><p>Ranked 27 out of 124 UK universities by the Complete University Guide 2014 and 30 out of 119 universities by the Guardian University Guide 2014, Aston University has cemented its place among Britain’s elite higher education institutions. A leading university for graduate employment success for over 25 years, Aston University has consistently outdone eminent institutions such as Oxford University in this area.</p><p>Subject strengths: Business and Management, subjects allied to Medicine, Pharmacy and Pharmacology, Psychology, Biological Sciences, Mechanical Engineering, Modern Languages.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>',

	            'campus' 		=> '<p>Aston University is located in the centre of the vibrant city of Birmingham on a self-contained green campus with all academic, accommodation and social facilities located on-site.</p><p>Students have easy access to excellent nightlife, culture, sport, shopping and work - the campus is a five-minute walk from the main shopping and social areas of the city and a fifteen-minute walk from Birmingham New Street station (a national rail hub).</p>',

	            'facebook' 		=> 'https://www.facebook.com/astonuniversity', 
	            'twitter' 		=> 'https://twitter.com/AstonUniversity', 
	            'youtube'		=> 'https://www.youtube.com/user/AstonUniversity', 
	            'flickr' 		=> 'https://www.flickr.com/photos/astonuniversity', 
	            'website' 		=> 'http://www.aston.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Bangor University
    	$university_name = 'Bangor University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> '<p>Established in 1884 when it received its Royal Charter, Bangor University is based in the city of Bangor in North Wales. It was a founding member institution of the University of Wales and received its independence in 2007.</p><p>In a fairly recent research assessment exercise, Bangor University was identified as having world-leading research in all 19 subject areas that were evaluated. It is also acknowledged for being the 2nd cheapest destination for higher education in the UK, as well as one of the most inspiring and beautiful.</p><p>Subject Strengths: Accounting and Finance, Psychology, Sports Science, Ocean Science, and Electronic Engineering. It is also reputed for its Humanities, Science, Education and Health programmes.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>',

	            'campus' 		=> "<p>Bangor is reported to be one of the cheapest places live in the UK. The University has approximately 2300 places and guarantees a place for freshers. There are also private halls and independent renting available though agencies or directly with the home owner.</p><p>Bangor's coastal location means that watersports are available to those who can brave the temperatures. The city itself has a vibrant shopping centre, a Victorian pier and a whole host of other quirky attractions. It is also close to Snowdonia National Park.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/BangorUniversity%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/BangorUni%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/BangorTV%E2%80%8E', 
	            'flickr' 		=> '', 
	            'website' 		=> 'http://bangor.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Bath Spa University
    	$university_name = 'Bath Spa University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> '<p>Bath Spa University is based in and around the beautiful historical city of Bath, UK. The university evolved from the Bath School of Art which came into existence 160 years ago and continues to enjoy the distinction of being one of the leading arts schools in the UK.</p><p>With an emphasis on creativity, culture and enterprise, Bath Spa University was ranked 7th in UK for quality of Teaching and Learning by Times Higher Education in 2010, and scored 88% in National Student Survey 2011.</p><p>Subject Strengths: Art & Design; Education; Science, Enterprise and Environment; Humanities and Cultural Industries; Music & Performing Arts.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>',

	            'campus' 		=> "<p>The campus is home to all undergraduate courses and subjects except Art and Design. There can’t be many universities in the UK that rival this unique setting. It's an amazing parkland estate (leased from the Duchy of Cornwall), and despite its idyllic rural setting, it's only four miles from the buzz of central Bath.</p><p>The grounds were designed by the well-known landscape architect Capability Brown in the eighteenth century. The campus also has its our very own nature reserve, a lake with its own lakeside walk, woods, historic listed buildings, and rolling fields.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/bath.spa.university', 
	            'twitter' 		=> 'http://twitter.com/BathSpaUni%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com/user/BathSpaUniversity', 
	            'flickr' 		=> 'http://www.flickr.com/groups/bathspa/pool/', 
	            'website' 		=> 'https://www.bathspa.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Birmingham City University
    	$university_name = 'Birmingham City University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Birmingham City University is the West Midlands' largest provider of higher education for undergraduate study, and its portfolio of part-time courses is among the most substantial in the UK.</p><p>With a reputation for its high-quality courses and teaching standards as well as state-of-the-art facilities, first-rate staff, and focus on practical skills and professional relevance, the university was ranked top 30 in the UK for graduate-level employability by the Sunday Times University Guide in 2013.</p><p>Subject Strengths: Design, Communications and Media Studies, Computing, Education, English, Healthcare, the Performing Arts and Social Sciences.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The City Centre Campus is a multi-million pound centre of excellence in the heart of Birmingham’s Eastside development. It is made up of two buildings: Millennium Point and The Parkside Building.</p><p>Millennium Point is home to courses from our Faculty of Technology, Engineering and the Environment (TEE), as well as Birmingham School of Acting.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/birminghamcityuniversity%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/MyBCU%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/birminghamcityuni%E2%80%8E', 
	            'flickr' 		=> 'http://www.flickr.com/photos/birminghamcityuniversity/', 
	            'website' 		=> 'http://www.bcu.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Brunel University London
    	$university_name = 'Brunel University London';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Since becoming a university in 1966, Brunel's mission has been to combine academic rigour with the practical, entrepreneurial and imaginative approach pioneered by its namesake, Isambard Kingdom Brunel. It's proving successful.</p><p>The university has invested £400m in social, teaching, accommodation and sporting facilities in recent years. Its 15,000 students are now all on a single campus at Uxbridge – a rarity in London – and enjoy a strong sense of community. And more than 2,500 international students from over 100 different countries at Brunel help to create a diverse and cosmopolitan atmosphere.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Brunel is a campus-based university, located in the large suburban town of Uxbridge on the western edge of London. Uxbridge has a range of bars and nightclubs on offer to cater to almost every taste. The centre of London is not far away. Alternatively, Colne Valley Park and its woodlands, lakes, rivers and nature reserves are just 15 minutes away.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/bruneluniversity/', 
	            'twitter' 		=> 'https://twitter.com/Bruneluni', 
	            'youtube'		=> 'https://www.youtube.com/user/BrunelUniversity', 
	            'flickr' 		=> 'https://www.flickr.com/photos/bruneluniversity/', 
	            'website' 		=> 'http://www.brunel.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Coventry University
    	$university_name = 'Coventry University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Since its first incarnation as the Coventry College of Design back in 1843, the Midlands-based institution has had a few revamps over the years. There are currently over 22,000 students attending the university, 85 per cent of whom are undergraduates.</p><p>Health and nursing degrees are amongst the most popular courses at Coventry. Its engineering courses are also a huge draw, especially now that the courses are housed in the brand new Engineering and Computing Building.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Coventry currently occupies a purpose-built campus in Coventry City Centre adjacent to Coventry Cathedral and the Herbert Art Gallery and Museum. It occupies a mix of new purpose-built buildings, converted structures, and those inherited from its predecessor institutions. The centrepiece of the campus is The Hub, an award-winning building which opened in August 2011. The Hub is the home of the Coventry University Students’ Union, other student support services, a bar and nightclub, and a food hall and food outlets catered by Compass Group.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/coventryuniversity', 
	            'twitter' 		=> 'https://twitter.com/covcampus', 
	            'youtube'		=> 'https://www.youtube.com/user/CovStudent', 
	            'flickr' 		=> 'https://www.flickr.com/search/?q=coventry%20university', 
	            'website' 		=> 'http://www.coventry.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Durham University
    	$university_name = 'Durham University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Lovely Durham is home to one of the country's top universities. The city is picturesque, wooded, hilly, and aching with heritage. The brooding Norman cathedral dominates the skyline – and it tells you something about the prestige of the university that one of its colleges is housed in the castle right next door.</p><p>Durham is a collegiate university, meaning that student life has a real sense of focus and community to it. There's also more than a whiff of Oxbridge to proceedings.</p><p>The university is currently ranked 5th to 6th in the UK by recent national league tables of the British universities, and in the world's top 100 by QS and The Higher Education Rankings. There are 25 different academic schools and departments, which each operate under one of the following three faculties: Arts and Humanities, Science, and Social Science and Health.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Durham City is the main location of the university and contains 14 of the 16 colleges along with most of the academic departments. Every college at the university has its own student facilities - including its own bar. For those wanting to venture further afield, there are a bars and restaurants in the city, but many students choose to take the train to nearby Newcastle, where a plethora of things to do await. Historic Durham is known for its 11th century castle and Norman Cathedral, which together are designated a UNESCO World Heritage Site and dominate the city's skyline.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/durhamuniversity', 
	            'twitter' 		=> 'https://twitter.com/durham_uni', 
	            'youtube'		=> 'https://www.youtube.com/user/DurhamUniversity', 
	            'flickr' 		=> 'https://www.flickr.com/groups/durham_university/', 
	            'website' 		=> 'https://www.dur.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Falmouth University
    	$university_name = 'Falmouth University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Falmouth University is a specialist creative multi-arts institution for rethinking convention and outthinking challenges. At a time when conventional thinking doesn't work any more, it's a potent formula. Falmouth's history dates back to 1902 when it was founded as Falmouth College of Arts. Today, it is a premier destination among students interested in the creative arts.</p><p>Falmouth University has been ranked the No. 1 Art University in the UK in both the Complete University Guide and The Sunday Times. Its Art and design courses has also achieved the maximum 24/24 rating from the Quality Assurance Agency for Higher Education.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Subtropical gardens and light-flooded studios make Falmouth Campus a haven for creative practice. With a lively creative community, impressive facilities and a library packed with resources, it’s the perfect space to share and develop your skills.</p><p>What's more, just a few steps from the town centre and a short stroll to the shores of Gyllyngvase beach, inspiration is never far from reach.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/falmouthuni%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/FalmouthUni%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com/user/FalmouthUniversity%E2%80%8E', 
	            'flickr' 		=> 'http://www.flickr.com/photos/jiscinfonet/sets/72157632169037486/', 
	            'website' 		=> 'http://www.falmouth.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Glasgow Caledonian University
    	$university_name = 'Glasgow Caledonian University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>With a history traceable to 1875, Glasgow Caledonian University in Scotland was formally instituted in 1993 and effectively became Glasgow’s third university.</p><p>Glasgow Caledonian University is regularly ranked among the UK's top 10 modern universities, and is widely regarded as one of the UK's most dynamic and innovative universities.In 2013, the UK's Higher Education Statistics Agency ranked Caledonian as Scotland's second best university in terms of employability among graduates and 11th best in the UK.</p><p>Subject Strengths: Engineering and Built Environment; Health and Life Sciences as well as Business.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "GCU is located in a modern purpose-built campus in the heart of Glasgow’s city centre. The Saltire Centre is the hub of student life and the centerpiece of the University’s Glasgow Campus. The £23m futuristic learning centre houses the University’s entire library collection, the majority of student support services, over 1800 study spaces, a learning café, and a ground-floor mall.</p><p>There's never a shortage of things to do in Glasgow with pubs, restaurants, bars and clubs on every corner. Football plays a large part in Glasgow life, with rivals Rangers and Celtic dominating the Scottish Premier League and sporting conversation, and the city has at least one festival every month celebrating things from film to comedy.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/falmouthuni%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/FalmouthUni%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com/user/FalmouthUniversity%E2%80%8E', 
	            'flickr' 		=> 'http://www.flickr.com/photos/jiscinfonet/sets/72157632169037486/', 
	            'website' 		=> 'http://www.falmouth.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Goldsmiths, University of London
    	$university_name = 'Goldsmiths, University of London';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>A UK top 20 creative university, and in the QS top 100 worldwide for arts and humanities, Goldsmiths prides itself on teaching independent thought and critical interpretation and reflection.</p><p>Goldsmiths mostly teaches arts and humanities subjects such as History of Art and Music, and offers 22 different degree programmes. Goldsmith's unique academic approach stems from close interaction between 15 academic departments and specialist centres and units. Students can also benefit from extensive industry links and support with placement opportunities.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "Beyond studying, you'll find your time at Goldsmiths is enriched by some of the exciting things taking place on our South East London campus.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/GoldsmithsUoL/', 
	            'twitter' 		=> 'https://twitter.com/goldsmithsuol', 
	            'youtube'		=> 'https://www.youtube.com/user/GoldsmithsLondon', 
	            'flickr' 		=> '', 
	            'website' 		=> 'http://www.gold.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Heriot-Watt University
    	$university_name = 'Heriot-Watt University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Heriot-Watt University began life in 1821 as the School of Arts of Edinburgh, the world's first Mechanics Institute,</p><p>Heriot-Watt specialises in science, engineering, design, business and languages. Some of the unique courses offered at the institution are Brewing and Distilling, Interpreting and Translation and Actuarial programmes, and all degrees are taught with practical learning as the main focus.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "Heriot-Watt's main campus is located in Riccarton in South West Edinburgh on 380 acres of parkland. The campus consists of: student residences, a postgraduate centre, shops, several library collections, childcare, healthcare, a chaplaincy, a variety of recreational and sports facilities, and a museum. It is also home to the Edinburgh Conference Centre and Europe's oldest research park, which opened in 1971</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/HeriotWattUni', 
	            'twitter' 		=> 'https://twitter.com/HeriotWattUni', 
	            'youtube'		=> 'http://www.youtube.com/user/HeriotWattUni', 
	            'flickr' 		=> 'https://www.flickr.com/photos/heriotwattuni/', 
	            'website' 		=> 'http://www.hw.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Istituto Marangoni
    	$university_name = 'Istituto Marangoni';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Is it possible to teach fashion? That was probably the question that Giulio Marangoni, famous for his clothes which were already being worn by Italian aristocracy, asked himself in 1935. To answer this question, he founded the Istituto Artistico dell’abbigliamento Marangoni, or the Marangoni Artistic Clothing Institute in Milan. It was a school to train professionals and technicians who were highly specialized in the world of fashion.</p><p>During its existence Istituto Marangoni has never stopped believing in the value of training, constantly updating its programmes to be sure they are always in line with Italian and international market needs, opening the London campus in 2013.</p><p>The teaching spaces of Istituto Marangoni have tested the talents of four generations of professionals, hailing from 106 different countries and representing the heritage of our school. Today Istituto Marangoni continues to successfully ‘ teach fashion ’, as its founder wished. Beyond fashion, it also teaches design, which has many contact points and overlaps with the world of fashion: colour, materials and creativity.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "Istituto Marangoni London is located in one of the most artistic and creative area of the city - Shoreditch - the right place to watch the future with all the visual and cultural stimulation around.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/marangonischool', 
	            'twitter' 		=> 'https://twitter.com/marangonischool', 
	            'youtube'		=> 'https://www.youtube.com/user/istitutomarangoni', 
	            'flickr' 		=> '', 
	            'website' 		=> 'http://www.istitutomarangoni.com/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Kingston University
    	$university_name = 'Kingston University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Kingston University, established in 1992 and based in Southwest London, is a forward-looking university with a wealth of academic talent and an innovative research culture. Its history goes all the way back to 1889, when it opened as Kingston Technical Institute.</p><p>The university was ranked within the top 100 universities in the UK by The Complete University Guide in 2013 and within the top 3-5% of universities globally by QS World University Rankings for the same year, making it the highest new UK entry into the latter ranking system.</p><p>Subject Strengths: Architecture, aeronautical engineering, business, forensic science, geography, geology, illustration and animation, fashion, law, mathematics, nursing, social sciences and surveying.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "This is the hub of student activity in Kingston. Students from all campuses converge on this large complex which is home to the Students' Union headquarters, the gym, the health centre and the John Galsworthy building, a £20million teaching and learning facility.</p><p>Students based here study Arts and Social Sciences, Civil Engineering, Computing and Information Systems, Mathematics and Statistics, Radiography, Science and Surveying.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/kingstonuni%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/KingstonUni%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/KingstonEMarketing%E2%80%8E', 
	            'flickr' 		=> 'http://www.flickr.com/groups/kingston-uni/pool', 
	            'website' 		=> 'http://kingston.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    } 

	    // Lancaster University
    	$university_name = 'Lancaster University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Lancaster was given its royal charter in 1964 and in under 50 years has become one of the best universities in the country. It is a collegiate university, and all students are members of one or other of the nine colleges. Academic staff are affiliated with a college and often have an active role. The attractive self-contained campus is set in lovely parkland and has undergone a major investment in recent years to provide award-winning facilities.</p><p>Lancaster has a thriving arts scene and is within easy reach of areas of outstanding natural beauty such as the Lake District and Bowland Forest. It's also handy for the big cities of Manchester and Liverpool.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The Lancaster University campus occupies a beautiful 360-acre parkland site at Bailrigg, just three miles from Lancaster City Centre. The campus is home to over 12,000 students and 2,500 employees.</p><p>The Bailrigg campus is brimming with culture and boasts its own theatre, art gallery and concert series. The Nuffield Theatre is one of the largest professional studio theatres in Europe. It hosts public performances of theatre, contemporary dance and live art from some of the best-known and respected companies from the UK and abroad. The Peter Scott Gallery is a small gem of a contemporary art gallery and home to the University's international art collection</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/lancasteruniversity', 
	            'twitter' 		=> 'https://twitter.com/LancasterUni', 
	            'youtube'		=> 'https://www.youtube.com/user/lancasteruniversity', 
	            'flickr' 		=> 'https://www.flickr.com/photos/lancasteruniversity/', 
	            'website' 		=> 'http://www.lancaster.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Loughborough University
    	$university_name = 'Loughborough University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Established in 1966, Loughborough University of Technology (renamed Loughborough University in 1996) is based in the town of Loughborough, which in turn is located within the city of Leicestershire in England. Its history dates back to 1901, when it was set up as the Loughborough Institute of Technology.</p><p>Loughborough University has received 7 Queen’s Anniversary Prizes, and was ranked #11 of a 119 institutions in the UK by the Guardian University Guide 2016 and #13 in the Sunday Times University Guide 2015. The institution was also the only university to have been voted England's Best Student Experience for six consecutive years in the Times Higher Education league table.</p><p>Subject Strengths: Sports Science, Business and Management, Hospitality & Tourism, Art & Design, Engineering, Information Services.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Loughborough's campus is on a single site in Leicestershire's largest town, and spans 438 acres. The Loughborough campus is home to one of the UK's biggest independently owned Student Unions, with weekly events such as Hey Ewe and Friday Night Disco proving popular with students.</p><p>Nearby Leicester and Nottingham are also easily accessible from the university, so students who are missing city life won't have to travel too far.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/lborouniversity', 
	            'twitter' 		=> 'http://twitter.com/lborouniversity%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/lborouniversity%E2%80%8E', 
	            'flickr' 		=> 'http://www.flickr.com/groups/lufbra/pool/', 
	            'website' 		=> 'http://www.lboro.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Middlesex University
    	$university_name = 'Middlesex University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>For nearly 140 years Middlesex University London and its predecessor institutions have been home to innovators and change-makers. The university boasts one of the most diverse communities of students and staff of any university in the UK, with almost 19,400 students and 1,900 staff from 140 different countries at the modern north London campus in Hendon.</p><p>Middlesex's degrees are largely career and internationally focused, with Dance, Fashion and Business amongst the most popular courses. In recent year over £200m has been spent in the campus to create a state of the art centre of excellence which includes a new purpose-built centre for art, design, media and performing arts students as well as dedicated science labs.</p><p>In 2017, Middlesex received a silver award for high-quality teaching in the government's new Teaching Excellence Framework (TEF). The university also became the highest-ranked modern university in London in the Times and Sunday Times Good University Guide.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Middlesex's flagship London campus combines modern facilities and expert teaching with the advantage of studying in one of the most diverse and exciting cities on earth.</p><p>In recent years we have invested more than £200 million to transform our London campus into a state-of-the-art centre for excellence, with facilities and equipment that rival those of the world's top universities.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/MiddlesexUniversity', 
	            'twitter' 		=> 'https://twitter.com/middlesexuni', 
	            'youtube'		=> 'https://www.youtube.com/user/MiddlesexUniVideo', 
	            'flickr' 		=> '', 
	            'website' 		=> 'http://www.mdx.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Northumbria University
    	$university_name = 'Northumbria University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>With around 35,000 students from over 140 countries, Northumbria University is one of the UK’s largest and most successful universities. Northumbria has a rich history going back through its constituent colleges to the late nineteenth century. It was founded as Newcastle Polytechnic in 1969 and inaugurated as a university in 1992.</p><p>Offering courses in most major subject areas such as Engineering, Computing, Sciences, Business, Law, Design, Built and Natural Environment, Arts, Social Sciences, Psychology, Sport, Health and many more. Northumbria’s consistently excellent performance in UK quality audits places it at the very top among modern universities.</p><p>Sixteen of its subject areas have been awarded 22 or more out of a maximum possible of 24 by the Quality Assurance Agency. The cost of living is lower in Newcastle than many other cities in the UK and it has once again been voted the UK’s Top University City! Northumbria boasts one of the best inner-city sites in the country having invested well over £100 million in its city centre campus.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>City Campus East, designed by Atkins, has become a Newcastle landmark since opening in September 2007, winning awards from The Journal newspaper and the Low Carbon New Build Project of the Year accolade. City Campus East is home to the Schools of Law, Design and the Newcastle Business School (NBS). NBS and Law are housed in one building, and the School of Design is across a courtyard. City Campus West is home to the Schools of Arts & Social Sciences, Built & Natural Environment, Computing, Engineering & Information Sciences and Life Sciences. Also located on this campus is the University Library, Students' Union building and Sport Central, a £30 m sports facility for students, staff and the community which opened in 2010.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/NorthumbriaUni', 
	            'twitter' 		=> 'https://twitter.com/NorthumbriaUni', 
	            'youtube'		=> 'https://www.youtube.com/user/northumbriauni?hl=en-GB&gl=SG', 
	            'flickr' 		=> 'https://www.flickr.com/photos/jiscinfonet/sets/72157594364762101/', 
	            'website' 		=> 'https://www.northumbria.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Norwich University of the Arts
    	$university_name = 'Norwich University of the Arts';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Norwich University of the Arts (commonly NUA) is a higher education specialist art, design and media university, based on a single site in the centre of Norwich, in the United Kingdom. The history of Norwich University of the Arts dates back to 1845 when the Norwich School of Design was established to provide designers for local industries. Its founders were the artists and followers of the 'Norwich School of Painters', the only provincial British group to establish an international reputation for landscape painting.</p><p>Undergraduate courses are offered in a range of art and design fields, including Animation, Architecture, Design for Publishing, Fashion, Fashion Communication and Promotion, Film and Moving Image Publishing, Fine Art, Games Art and Design, Graphic Communication, Graphic Design, Illustration, Photography, Textile Design and VFX.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Norwich is a thriving cultural centre with a number of galleries, museums, theatres and events, including the oldest international arts festival in the UK. One of the top 10 shopping centres in the UK, Norwich is a major regional focus for business and commerce. It is a city with a warm and welcoming attitude to its student population.</p><p>Beyond the city limits, the county of Norfolk’s great houses and medieval villages provide their own historical and architectural interest. Norfolk enjoys a tranquil coastline strewn with beaches and small fishing communities. The world famous Norfolk Broads National Park comprises a network of lakes and rivers stretching 200km.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/NUAnews', 
	            'twitter' 		=> 'https://twitter.com/NorwichUniArts', 
	            'youtube'		=> 'https://www.youtube.com/user/NUCAview', 
	            'flickr' 		=> '', 
	            'website' 		=> 'http://www.nua.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Nottingham Trent University
    	$university_name = 'Nottingham Trent University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Nottingham Trent University (NTU) is a public university in Nottingham, England. Its roots go back to 1843 with the establishment of the Nottingham Government School of Design which still exists within the university today. It is the 14th largest university in the UK with 27,920 students split over three different campuses.</p><p>The university has significant international recognition for its work in Art and Design (Fashion in particular), Communication, Business, Cultural and Media Studies and English Language and Literature, and for its Professions allied to Medicine, French and Law.</p><p>The 2014 REF report indicated that 90% of the university's research is considered of either \"world-leading\", \"internationally-excellent\", or \"internationally-recognised\" status. In 2015, the university was awarded the Queen's Anniversary Prize for Higher and Further Education, the highest national honour for a UK University based on numerous research projects.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>In the heart of Nottingham, our City Campus truly impresses, from its revamped buildings and facilities to an award-winning Students’ Union.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/NottinghamTrentUniversity?fref=ts', 
	            'twitter' 		=> 'https://twitter.com/TrentUni', 
	            'youtube'		=> 'https://www.youtube.com/user/NottinghamTrentUni', 
	            'flickr' 		=> 'https://www.flickr.com/photos/nottinghamtrentuni/sets', 
	            'website' 		=> 'https://www.ntu.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Plymouth University
    	$university_name = 'Plymouth University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Plymouth University is the largest university in the South West of England. Established in 1992, it was formerly known by as the School of Navigation when it opened in 1862.</p><p>Consistently ranked as one of the leading universities in the UK, and awarded a Queen's Anniversary Prize for Higher and Further Education in 2012, Plymouth has a strong record of excellence, enterprise and innovation across its teaching and research activities. It is ranked 53 out of 100 universities under the age of 50 globally.</p><p>Subject Strengths: Environmental Sciences, Robotics and Computer Science, Education, Psychology, Engineering, Architecture, Social Work, Hospitality and Tourism, Sustainability, and Business Studies.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Plymouth is a pretty fishing and port city with a military history. The University of Plymouth's large student population brings a vibrant, younger culture to the city, and there are regular gigs at Plymouth Pavilion and varied options at the city's nightclubs. There are three bars run by the student union on campus.</p><p>This is the University's main campus and home to the Faculties of Arts, Health, Education and Society, Plymouth Business School, Science and Technology, and the Peninsula Medical School.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/plymouthuni', 
	            'twitter' 		=> 'https://twitter.com/PlymUni', 
	            'youtube'		=> 'http://www.youtube.com/user/PlymouthUniversity', 
	            'flickr' 		=> 'http://www.flickr.com/photos/plymouthuniversity/', 
	            'website' 		=> 'http://www.plymouth.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Queen Margaret University
    	$university_name = 'Queen Margaret University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Based at a purpose-built campus, which opened in late 2007, QMU prides itself on its friendly and supportive learning environment. Even the architecture of our innovative campus is designed to ensure that there are plenty of opportunities for students to mix with others on different courses.</p><p>The campus itself offers an inspiring learning environment, designed with student input, to meet the needs of 21st century students.</p><p>QMU offers a wide range of professionally relevant undergraduate courses in the areas of healthcare; social sciences; performing arts; film, media and PR; and business, tourism and hospitality management.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The campus is on one site in Musselburgh, on the eastern edge of Edinburgh.</p><p>The campus's facilities includes specialist laboratories and clinics - including a nursing simulation suite and speech and audiology labs – as well as a video production and editing suite</p><p>There are 800 en suite bedrooms for students in self-contained flats for three to six students. The average price of renting privately owned accommodation in Edinburgh is £85 per week, although this can vary from £60-£150 weekly.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/QueenMargaretUniversity', 
	            'twitter' 		=> 'https://twitter.com/QMUniversity', 
	            'youtube'		=> 'http://www.youtube.com/user/QMUniversity', 
	            'flickr' 		=> 'https://www.flickr.com/groups/qmu/', 
	            'website' 		=> 'http://www.qmu.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Queen's University Belfast
    	$university_name = "Queen's University Belfast";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Queen's has an excellent academic reputation. As a member of the Russell Group (the UK's leading research-intensive universities), its students enjoy being taught by world-leading academics. Queen's performed impressively in the latest national research audit, with analysis of the results placing it in the UK's top 20.</p><p>The university has won Queen's Anniversary prizes for further and higher education on five occasions – for world-class achievement in cancer research, green chemistry, environmental research, palaeoecology and law.</p><p>Recognised for its focus on employability and entrepreneurship skills, its graduates are in senior leadership positions in 80 of Northern Ireland's top 100 companies. The University offers a unique Degree Plus programme formally recognising skills acquired during extracurricular work. Students receive the award alongside their degree on graduation.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>A 15-minute walk from the centre of Belfast, the university's leafy campus is nestled between the buzz of nearby Botanic Avenue and the beautiful Botanic Gardens and Ulster Museum. Queen's plays a large role in the community and is a key supporter of culture and the arts. The University boasts Northern Ireland's only arthouse cinema and the acclaimed Naughton Gallery.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/QueensUniversityBelfast/', 
	            'twitter' 		=> 'https://twitter.com/QueensUBelfast', 
	            'youtube'		=> 'https://www.youtube.com/user/Come2Queens', 
	            'flickr' 		=> 'https://www.flickr.com/groups/384243@N22/pool/', 
	            'website' 		=> 'http://www.qub.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Robert Gordon University
    	$university_name = "Robert Gordon University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Robert Gordon opened a hospital in Aberdeen in the 17th century which, by 1881, had become a day school and adult education institution called Robert Gordon College. It then merged with Aberdeen Mechanics' Institute before gaining university status in 1992 and changing to its current name.</p><p>Robert Gordon University (RGU) teaches courses focusing on Oil and Gas, Health and Wellbeing and the creative industries. Course areas include Engineering, Law and Social Work.</p><p>According to the 2013 Times Good University Guide it is the best modern university in the UK, while according to The Guardian University Guide 2013 it is the best modern university in Scotland and 2nd-best in the UK. It was shortlisted for Sunday Times University of the Year 2012 and was named Best Modern University in the UK for 2012 by The Sunday Times University Guide.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The Garthdee campus, in a peaceful riverside setting, started life as home to Gray's School of Art and the Scott Sutherland School of Architecture & Built Environment. In 1998, its development began with the building of Aberdeen Business School (then known as the Faculty of Management), designed by renowned architect Norman Foster.</p><p>The campus continued to grow with the addition of the Faculty of Health & Social Care in 2002 (home to the Schools of Health Sciences, Nursing & Midwifery and Applied Social Studies) and the £11million sports centre, RGU SPORT, in 2005. Many of the University's administrative departments have been rehomed at Garthdee and other support facilities are also there, including a nursery and medical practice.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/robertgordonuniversity/', 
	            'twitter' 		=> 'https://twitter.com/RobertGordonUni', 
	            'youtube'		=> 'https://www.youtube.com/user/RobertGordonUni', 
	            'flickr' 		=> 'https://www.flickr.com/photos/iainh124a/sets/72157635437082134/', 
	            'website' 		=> 'http://www.rgu.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Staffordshire University
    	$university_name = "Staffordshire University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Staffordshire University was established in 1992, but the institution can trace its roots back to 1906. The university is one of the few in the UK to offer undergraduate degrees on a fast track system, which means they take two years, instead of the traditional three. Staffordshire also specialises in secondary teacher training courses, business and computing. It is also the only university in the UK to offer a BA (Hons) in Cartoon and Comic Arts.</p><p>There are about 17,000 undergraduates at Staffordshire. Another 3,000 or so study Staffordshire awards at regional partner colleges. The university boasts a lively student union and the cost of living is relatively low, making it one of the most affordable universities.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>This is the main campus of Staffordshire University, and primarily offers law, business, sciences, applied computing, engineering, arts, design, journalism and media production courses. The Stoke campus features its own student nightclub called the \"LRV\" short for the Leek Road Venue. This nightclub hosts a variety of student nights on various days of the week but its main open nights are on a Wednesday and Friday. A public film theatre is situated on the side of the Flaxman building on College Road, and shows mainstream and independent films on a regular basis to an audience of up to 180 people, as well as being used for large lectures. In 2006, a new TV studio facility was opened by former BBC Director General Greg Dyke in the Arts, Media and Design faculty building on College Road, Stoke.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/staffsuni', 
	            'twitter' 		=> 'https://twitter.com/staffsuni', 
	            'youtube'		=> 'https://www.youtube.com/user/staffsuni', 
	            'flickr' 		=> 'https://www.flickr.com/photos/staffsuniversity', 
	            'website' 		=> 'http://www.staffs.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Swansea University
    	$university_name = "Swansea University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Founded in 1920, Swansea University is a vibrant, research-led university located in Wales. It is the third largest university in Wales in terms of number of students.The university campus is located next to the coast at the north of Swansea Bay, just outside Swansea city centre.</p><p>With a commitment to delivering an outstanding student experience, with research-led and practice-driven teaching of the highest quality, Swansea University is rising steadily in various ranking systems. It is ranked 49th in the UK by the Complete University Guide and within the top 3-5% of universities worldwide.</p><p>Subject Strengths: Biological Sciences, Civil and Chemical Engineering, Economics, Finance and Accounting, Law, and Sports Science</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The university has a beachfront location overlooking Swansea Bay on the south coast of wales. The Singleton Park campus lies approximately two miles from the centre of Swansea.</p><p>Swansea is perhaps most famous for its stunning array of beaches and the majority of must-do activities here are centred around the beautiful sweeping coastline. There are many beachfront companies which specialise in organising a range of activities including surfing, horse riding, kite surfing, wind surfing and sailing.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/swanseauniversity%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/SwanseaUni%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com/user/SwanseaUniVideo', 
	            'flickr' 		=> 'http://www.flickr.com/photos/swanseauniversity/', 
	            'website' 		=> 'http://www.swan.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // The University of Liverpool
    	$university_name = "The University of Liverpool";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The term \"red brick university\" originates in Liverpool where the buildings' colouring was a distinguishing feature but it has since become shorthand for a generation of institutions which brought university education to the north of England. At Liverpool, you will expect everything that is classic redbrick: excellent ratings in teaching and research, a large and diverse student body, a strong sense of self and a location in a top city.</p><p>The university has a wide range of courses at different levels on offer, from Bachelors of Art to PhDs, and many of these include a year working in industry. Its more attractive courses include Law (approved in Singapore), Aerospace Engineering, Artificial Intelligence and Tropical Disease Biology.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The University is mainly based around a single urban campus approximately five minutes walk from Liverpool City Centre, at the top of Brownlow Hill and Mount Pleasant. Occupying 100 acres, it contains 192 non-residential buildings that house 69 lecture theatres, 114 teaching areas and state-of-the-art research facilities.</p><p>The main site is divided into three faculties: Health and Life Sciences; Humanities and Social Sciences; and Science and Engineering. The Veterinary Teaching Hospital (Leahurst) and Ness Botanical Gardens are based on the Wirral Peninsula.</p><p>In 2011 the University made a commitment to invest £660m into the 'Student Experience', £250m of which will reportedly be spent on Student Accommodation. Fifty-one residential buildings, on or near the campus, provide 3,385 rooms for students, on a catered or self-catering basis.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/UniversityofLiverpool', 
	            'twitter' 		=> 'https://twitter.com/livuni', 
	            'youtube'		=> 'https://www.youtube.com/user/UofLTube?gl=SG&hl=en-GB', 
	            'flickr' 		=> 'https://www.flickr.com/search?text=liverpool%20university', 
	            'website' 		=> 'http://www.liv.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // The University of Sheffield
    	$university_name = "The University of Sheffield";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>One of the most prestigious universities in the UK, The University of Sheffield was established in 1905 and has the honour of membership to the illustrious Russell Group of Universities, known for their research-intensive endeavours.</p><p>The University of Sheffield is currently ranked 71st in the world by QS World University Rankings and was named University of the Year in 2011 in the Times Higher Education award. It has also received 4 Queen's Anniversary Prizes, which recognises outstanding contributions by universities and colleges to the nation's intellectual, economic, cultural and social life.</p><p>Subject Strengths: Medicine, Mechanical Engineering, Psychology, Law, Management, Geography, Politics and International Relations as well as the Humanities.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The combined student populations of the University of Sheffield and Sheffield Hallam University mean that the city is always bustling with young people. Sheffield's music hot spots are frequented by big name bands, and as the biggest city in South Yorkshire, there's a vast number of bars, pubs and clubs in the area.</p><p>University buildings are clustered close together about a mile to the west of the city centre, where you can find all the shops, bars and pubs you could desire.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/theuniversityofsheffield%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/sheffielduni%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/uniofsheffield', 
	            'flickr' 		=> '', 
	            'website' 		=> 'http://www.shef.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University College Birmingham
    	$university_name = "University College Birmingham";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The university has buildings at Summer Row and Newhall Street, as well as the Postgraduate Centre at George Street. In addition, the university has Halls of Residence, with space for 872 students, at The Maltings and Cambrian Hall, which are both situated just off Broad Street, the main entertainment district in the city. The new development at The Maltings also includes a sports hall, shop and student bar, Joshuas.</p><p>The university has a range of specialist facilities including training restaurants, a fully equipped health and leisure club, libraries, hairdressing and beauty therapy salons, food and beverage test laboratories, a video production suite, demonstration theatres and computer suites including a facility for Early Years students.</p><p>The college opened a second teaching building in 2001 at Richmond House, in nearby Newhall Street which houses its hairdressing and beauty salons and sports therapy suites, both of which are open to the public. Further Education courses in sport and tourism are also taught there. In 2014, UCB opened its new Postgraduate Centre at George Street, a dedicated teaching and research facility for its postgraduate students.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/ucbofficial/', 
	            'twitter' 		=> 'https://twitter.com/ucbofficial', 
	            'youtube'		=> 'https://www.youtube.com/user/ucbofficialpage', 
	            'flickr' 		=> '', 
	            'website' 		=> 'http://www.ucb.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Central Lancashire
    	$university_name = "University of Central Lancashire";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of Central Lancashire (UCLAN) was established in 1992 but can trace its history back to the establishment of the fantastically-named Institute for the Diffusion of Knowledge in 1828. It has evolved over the years to become a world-class university involved in cutting-edge innovation; it received the Times Higher Education Award in 2013 for its contributions to tertiary education.</p><p>Subject Strengths: Business Studies, Management Studies, Pharmacology, Toxicology and Pharmacy, Physical Geography and Environmental Science, Sports Science, and Tourism.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>At our Burnley Campus, you can take advantage of the fantastic resources that we have to support your study, teaching and learning, sports and recreation. The Campus is very supportive and friendly with small class sizes, and you will receive exceptional academic and personal support.</p><p>The Campus plays an important part in the overall economic and social development of Pennine Lancashire and you will have opportunities to participate in work placement or volunteering activities with local employers such as British Aerospace, Rolls Royce, Cisco Systems and Aircelle.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/official.uclan', 
	            'twitter' 		=> 'http://twitter.com/UCLan%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/uclanvideo%E2%80%8E', 
	            'flickr' 		=> 'http://www.flickr.com/photos/uclan/', 
	            'website' 		=> 'http://www.uclan.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Derby
    	$university_name = "University of Derby";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Derby is proud of its personal touch: small classes, a personal tutor and a friendly atmosphere. The majority of its classes have fewer than 30 students. The compact city of Derby is an economic powerhouse with global brands such as Rolls-Royce, Toyota and Bombardier, as well as a thriving creative sector and around 90 incubation units.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The Lancaster University campus occupies a beautiful 360-acre parkland site at Bailrigg, just three miles from Lancaster City Centre. The campus is home to over 12,000 students and 2,500 employees.</p><p>The Bailrigg campus is brimming with culture and boasts its own theatre, art gallery and concert series. The Nuffield Theatre is one of the largest professional studio theatres in Europe. It hosts public performances of theatre, contemporary dance and live art from some of the best-known and respected companies from the UK and abroad. The Peter Scott Gallery is a small gem of a contemporary art gallery and home to the University's international art collection</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/derbyuni/', 
	            'twitter' 		=> 'https://twitter.com/DerbyUni', 
	            'youtube'		=> 'https://www.youtube.com/user/UniversityofDerby', 
	            'flickr' 		=> 'https://www.flickr.com/photos/derbyuni/albums/', 
	            'website' 		=> 'https://www.therightu.com/university/www.derby.ac.uk', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Dundee
    	$university_name = "University of Dundee";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of Dundee is a public research university based in the city and Royal Burgh of Dundee in Scotland.</p><p>Founded in 1881, the institution became a constituent college of St Andrews University in 1897. Autonomy was regained in 1967, and the University celebrated 40 years as an independent university in 2007.</p><p>The University of Dundee has a long-established commitment to teaching quality and student experience and is currently ranked within the top 200 universities by Times Higher Education, receiving a Queen’s Anniversary Prize for its contributions to the nation’s intellectual, economic, cultural and social life.</p><p>Subject Strengths: Law, Medicine and Dentistry, Biological Sciences, Urban Planning, Civil Engineering, Philosophy and Art.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The City Campus is the main campus of University of Dundee,virtually traffic-free, with attractive landscaped spaces. Although surprisingly compact, it's full of top class facilities and a lively social scene. Most students are on or near the campus 24/7 and it's easy to make new friends here. It's like a campus university without being miles away from the nearest town. The attractions of the city centre and the cultural quarter - with cafes, restaurants, gift shops and galleries - are just a stroll away</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/UniversityofDundee', 
	            'twitter' 		=> 'https://twitter.com/DundeeUniv', 
	            'youtube'		=> 'http://www.youtube.com/user/DundeeUniv', 
	            'flickr' 		=> '', 
	            'website' 		=> 'http://www.dundee.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of East Anglia
    	$university_name = "University of East Anglia";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of East Anglia is an increasingly popular campus-based university, just a couple of miles from the centre of Norwich.The university ranked 1st for student satisfaction by the Times Higher Education magazine in 2013, and came in top 20 in the UK in the latest university rankings by The Times and Sunday Times, The Guardian and The Complete University Guide</p><p>UEA boasts excellent sporting facilities, bars and cafes, and the Sainsbury Centre for Visual Arts, not to mention some striking 1960s architecture. It prides itself on being at the forefront of green awareness, and is meeting its energy needs via its on-campus biomass generating plant. Latest figures show that 91.3% of our graduates are in employment or postgraduate education within 6 months after graduating.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Norwich is a thriving cultural centre with a number of galleries, museums, theatres and events, including the oldest international arts festival in the UK. One of the top 10 shopping centres in the UK, Norwich is a major regional focus for business and commerce. It is a city with a warm and welcoming attitude to its student population.</p><p>Beyond the city limits, the county of Norfolk’s great houses and medieval villages provide their own historical and architectural interest. Norfolk enjoys a tranquil coastline strewn with beaches and small fishing communities. The world famous Norfolk Broads National Park comprises a network of lakes and rivers stretching 200km.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/ueaofficial', 
	            'twitter' 		=> 'https://twitter.com/DerbyUni', 
	            'youtube'		=> 'https://twitter.com/uniofeastanglia', 
	            'flickr' 		=> 'https://www.flickr.com/photos/uniofeastanglia/', 
	            'website' 		=> 'https://www.uea.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Essex
    	$university_name = "University of Essex";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of Essex is a British public research university which was established in 1963 and received its Royal Charter in 1965.</p><p>The university exhibits an international character with 132 countries represented in its student body. The latest Research Assessment Exercise (RAE) in 2008 ranked Essex ninth in the UK for the quality of its research with more than 90% of research recognised internationally for its quality, with 22% of research rated as 'world leading'. The university is referenced by QS World University Rankings as a world leader in social science, with internationally recognised strengths in the humanities.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The Campus was originally designed to be a university town with all facilities on one site. Within easy walking distance you will find teaching buildings, award-winning student accommodation, shops, banks, a gallery and a theatre, bars and cafés, and sports facilities. Wivenhoe Park, in which our Colchester Campus is set, has a fascinating history. Today, its striking landscape of more than 200 acres provides a tranquil place for all to enjoy. The parkland is home to a range of plants and wildlife including some extraordinary and historic trees.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/uniofessex', 
	            'twitter' 		=> 'https://twitter.com/uni_of_essex', 
	            'youtube'		=> 'https://www.youtube.com/user/uniessex', 
	            'flickr' 		=> 'https://www.flickr.com/photos/universityofessex', 
	            'website' 		=> 'http://www.essex.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Exeter
    	$university_name = "University of Exeter";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of Exeter is a public research university located in Exeter, South West England, United Kingdom. The university was founded and received its Royal Charter in 1955.</p><p>Exeter is a member of the Russell Group of leading research-intensive UK universities, and has been ranked no. 1 in the Russell group for student satisfaction, and no. 1 in the UK for international student satisfaction. The university was named The Sunday Times University of the Year in 2013 and has maintained a top positions, coming in 7th out of all UK universities in 2015. Almost 500 million has been invested in the campuses over the last five years to ensure that student receive the best education through state-of-the-art facilities.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The Penryn Campus is set in 100 acres of countryside, close to the waterside town of Falmouth, and boasts beautiful views over the Fal estuary. It offers peace and tranquillity as well as a lively student community with a vibrant mixture of students from science, engineering, humanities and arts backgrounds. The Penryn Campus rates in the top ten nationally for student satisfaction: students say it’s a highly personal experience, intellectually stretching but great fun, where everyone quickly gets to know their peers.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/exeteruni', 
	            'twitter' 		=> 'https://twitter.com/uniofexeter', 
	            'youtube'		=> 'https://www.youtube.com/user/universityofexeter', 
	            'flickr' 		=> 'https://www.flickr.com/photos/26126239@N02/', 
	            'website' 		=> 'http://www.exeter.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Greenwich
    	$university_name = "University of Greenwich";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The university dates back to 1890, when Woolwich Polytechnic was founded in Woolwich as the second-oldest polytechnic in the United Kingdom. In 1970, Woolwich Polytechnic merged with various other higher education institutions to form Thames Polytechnic. In the following years, Dartford College (1976), Avery Hill College (1985), Garnett College (1987) and parts of Goldsmiths College and the City of London College (1988) were incorporated.</p><p>In 1992, Thames Polytechnic was granted university status by the Major government (together with various other polytechnics) and renamed University of Greenwich. In 2001, the university gave up its historic main campus in the Bathway Quarter in Woolwich, relocating to its current main campus in Greenwich Park.</p><p>The university has ranked well in terms of student satisfaction across all 20 listed universities in London – with it topping lists of 2010, 2011, 2012 and 2013 consecutively. It has not left the top five since its entry in 2010. The University of Greenwich has been ranked among the 200 institutions with the most global outlook and named one of the \"most international\" universities on the planet by Times Higher Education magazine.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The Avery Hill Campus consists of two sites, Mansion Site and Southwood Site, both of which are located in the 86-acre Avery Hill Park in Eltham, south-east London. Only a few minutes' walk apart, these two Victorian sites house some of the best teaching, living and sporting facilities.</p><p>Students can use computing and laboratory equipment, lecture theatres and a TV studio with 1,000 square feet of floor space. The library has an extensive collection of books and journals and its staff provide expert media support.</p><p>A £14 million project to improve facilities on campus has brought two new buildings to the Southwood Site. The David Fussey Building is home to a sports and teaching centre with a multi-purpose sports hall for staff and students and a 220-seat lecture theatre. The upper floors include four clinical skills laboratories, which replicate NHS wards, allowing trainee health professionals to get real hands-on experience.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/www.gre.ac.uk', 
	            'twitter' 		=> 'https://twitter.com/UniofGreenwich', 
	            'youtube'		=> 'https://www.youtube.com/user/UniversityGreenwich', 
	            'flickr' 		=> '', 
	            'website' 		=> 'http://www.gre.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Kent
    	$university_name = "University of Kent";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of Kent is a public research university based in Kent, United Kingdom. It was founded in 1965 and is recognised as a plate glass university.</p><p>In 2014 the university was ranked 80th in the world by the Times Higher Education World University Rankings in Top 100 Universities Under 50 Years. Additionally, Times Higher Education also ranked the university 20th in the United Kingdom in 2015 though aggregating multiple ranking results into a comprehensive table of ranking tables. It is among a group of institutions to consistently score 90% or above for overall satisfaction in the National Student Survey.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The main Canterbury campus covers 300 acres (1.2 km2) and is in an elevated position just over two miles (3 km) from the city centre. It currently has approximately 12,000 full-time and 6,200 part-time students and some 600 academic and research staff, and is the largest campus of the university.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/UniversityofKent/', 
	            'twitter' 		=> 'https://twitter.com/UniKent', 
	            'youtube'		=> 'https://www.youtube.com/user/UniversityofKent', 
	            'flickr' 		=> 'https://www.flickr.com/photos/universityofkent/albums', 
	            'website' 		=> 'https://www.kent.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Lincoln
    	$university_name = "University of Lincoln";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>It would seem that the University of Lincoln, established under that name in 2001, is a relatively new university. However, it has origins tracing back to 1861 when the institution was known as the Hull School of Art.</p><p>Since receiving the royal charter to become a fully-fledged university, the University of Lincoln (previously known as the University of Lincolnshire and Humberside from 1996-2000) has enjoyed a meteoric rise up the university league tables, surpassing 60 UK universities on the Times Good University guide in the past 6 years alone.</p><p>Subject Strengths: Law, Psychology, Social Policy, Social Work as well as Communication and Media Studies.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The main campus at Lincoln is located in the centre of the historic city of Lincoln on the picturesque Brayford Pool waterfront. Brayford Wharf, once a Roman port, is now a lively modern marina full of pubs, restaurants, hotels and a cinema, and the high street lies at the foot of the historic quarter. The historic Castle Square and the third largest cathedral in Britain are the most popular attractions here, and help to transport over a million visitors a year back to medieval times.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/universityoflincoln', 
	            'twitter' 		=> 'http://twitter.com/unilincoln%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/UniversityofLincoln', 
	            'flickr' 		=> 'https://www.flickr.com/groups/university_of_lincoln/pool/', 
	            'website' 		=> 'http://www.lincoln.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Strathclyde
    	$university_name = "University of Strathclyde";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Established more than 200 years ago 'for the good of mankind', the University of Strathclyde is renowned for excellent teaching, research and strong links with industry, government and business.</p><p>The university is Scotland's third largest university by number of students, with students and staff from over 100 countries. It is also one of the 39 old universities in the UK comprising the distinctive second cluster of elite universities after Oxbridge. The institution was awarded University of the Year 2012 and Entrepreneurial University of the year 2013 by Times Higher Education.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The campus is located in the centre of Glasgow, one of Europe's most exciting cities, and close to Scotland's stunning scenery, including Loch Lomond. The city centre has a vibrant arts scene, cutting-edge music, legendary nightlife, an exciting selection of places to eat out and much more.</p><p>The campus has a city centre location close to central train and bus stations and is only 20 minutes from Glasgow Airport.</p><p>Strathclyde is investing £350 million over 10 years to transform its dynamic and digital campus.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/UniversityOfStrathclyde/', 
	            'twitter' 		=> 'https://twitter.com/UniStrathclyde', 
	            'youtube'		=> 'https://www.youtube.com/user/UniStrathclyde', 
	            'flickr' 		=> 'https://www.flickr.com/groups/strathclyde/', 
	            'website' 		=> 'http://www.strath.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Sunderland
    	$university_name = "University of Sunderland";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Established in 1992, the University of Sunderland is based in the city of Sunderland in the North East of England. It was originally set up as Sunderland Technical College in 1901 and steadily gained in stature and reputation through the years.</p><p>One of six universities to be shortlisted for 'University of the Year 2012' in the Times Higher Education Supplement Awards and emerging with the honour of being named the Best New University in North East England that same year, the University of Sunderland also has the happiest students in the North East, according to the latest national survey on student satisfaction.</p><p>Subject strengths: Pharmacy, Health and Sports Sciences, Teacher Training, Media, Art & Design, Business, Computing and Technology, Social Sciences and Law.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Sunderland City Campus has a diverse student population with students from many other countries including Australia, Bangladesh, China, India, Indonesia, France, Germany, Korea and Vietnam. Diversity at the campus means students will be studying in a truly international environment, with opportunities to develop friendships and connections from around the world.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/sunderlanduniversity%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/sunderlanduni%E2%80%8E', 
	            'youtube'		=> 'https://www.youtube.com/user/sunderlanduniversity', 
	            'flickr' 		=> 'http://www.flickr.com/groups/sunderlanduni/', 
	            'website' 		=> 'http://www.sunderland.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Surrey
    	$university_name = "University of Surrey";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Established in 1966 with roots dating back to 1891, the University of Surrey is an ambitious, research-intensive academic institution located within the county town of Guildford, Surrey, in the South East of England.</p><p>The university’s research is highly regarded, winning 3 Queen’s Anniversary Prizes as a result of research endeavours. It is considered the leading higher education in South East England and is ranked highly nationally; 8th overall by The Guardian, 13th overall by the Complete University Guide, and 12th overall by the Times and Sunday Times Good University Guide 2014.</p><p>Subject Strengths: Engineering, Science</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The campus is situated within sight of the idyllic Surrey Hills, named as an Area of Outstanding Natural Beauty, and filled with endless opportunities to relax and unwind – from pretty country pubs and National Trust sites such as Box Hill and Polesden Lacey, to local breweries and vineyards, and acres of rolling countryside for walking and cycling.</p><p>Just ten minutes’ walk from campus, Guildford is an exciting mixture of historical, cultural and modern delights. Whilst it offers all the convenience of a modern town, you’ll also feel as safe and included as in any village.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/universityofsurrey%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/UniOfSurrey%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/UniversityofSurrey%E2%80%8E', 
	            'flickr' 		=> 'http://www.flickr.com/groups/unis/', 
	            'website' 		=> 'http://www.surrey.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Sussex
    	$university_name = "University of Sussex";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Established slightly more than 50 years ago, the University of Sussex is the only university surrounded by a national park, the South Downs. Yet, it's just 50 minutes from London by train and four miles from lovely, lively Brighton, with its vibrant nightlife, second-largest arts festival in the UK, al fresco lifestyle, great shops, Royal Pavilion and seaside attractions.</p><p>Sussex performed well in the latest national research audit, with analysis of the results placing the university in the top 40 of UK institutions. In the 2014 National Student Survey, 88% of Sussex students were satisfied or very satisfied with the teaching on their course</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The university is situated in undulating parkland on the edge of Brighton, and laid claim to being the \"only English university located entirely within a designated Area of Outstanding Natural Beauty\". The campus is designed by Sir Basil Spence who gave the site a playful charm with the library constructed to look like an open book and the entire site being shaped like a sitting cat. The designs were appreciated in the architecture community, winning multiple awards.</p><p>The student union is a strong campaigning union but also organises events, regular club nights and sports teams. The union organises the student newspaper and magazine (The Badger and Pulse) which keep students up-to-date with events on campus and the cultural life of Brighton.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/uniofsussex', 
	            'twitter' 		=> 'https://twitter.com/sussexuni', 
	            'youtube'		=> 'https://www.youtube.com/user/universityofsussex', 
	            'flickr' 		=> 'https://www.flickr.com/photos/universityofsussex/', 
	            'website' 		=> 'http://www.sussex.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Winchester
    	$university_name = "University of Winchester";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of Winchester is a public research university based in the city of Winchester, Hampshire, England. The university has origins tracing back to 1840.</p><p>Ranked 10th for teaching excellence in The Times and The Sunday Times 2016 Good University Guide and fourth for student satisfaction in England in the National Student Survey 2015, the university continues to further strengthen its position as a top provider of higher education.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Student life is centred on the King Alfred Campus within walking distance of the historic cathedral city of Winchester. In recent years, the King Alfred campus has undergone much change to enhance its facilities, including the new £6.5 million state of the art learning and teaching St Alphege building.</p><p>The King Alfred Campus also includes the University Centre (Student Union), the Chapel, a state-of-the-art gym and other sports facilities and Faculty buildings where the majority of lectures and seminars take place. Many undergraduate students live in the halls of residence on the King Alfred Campus, Queens Road and Burma Road (opened in 2013) or in the accommodation at nearby West Downs.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/UniversityofWinchester/', 
	            'twitter' 		=> 'https://twitter.com/_UoW', 
	            'youtube'		=> 'https://www.youtube.com/user/UniofWinchester', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.winchester.ac.uk/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Griffith University
    	$university_name = "Griffith University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>In the years after its establishment in 1975, Griffith University has come to be regarded as one of Australia’s most innovative universities and one of the most influential in the Asia-Pacific region.</p><p>With campuses spanning three Australian cities from Brisbane to Gold Coast, Griffith University offers more than 300 degrees and places a pedagogical emphasis on producing work-ready graduates who can make meaningful contributions to the world.</p><p>Subject Strengths: Asian Politics, Trade and Development; Climate Change Adaptation, Criminology, Drug Discovery and Infectious Diseases, Health Sciences, Medicine, Sustainable Development, Music and the Arts.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Home to more than 2,500 students, this campus is based in one of Australia’s most rapidly developing regions, between Brisbane and the Gold Coast.</p><p>This community focused campus is renowned as a national showcase of social inclusion in higher education, having achieved this through innovative partnerships, industry engagement and program pathways, with a strong focus on community health and education.</p><p>Students have access to a bookshop, café/bar, a general store, a community lounge and sporting facilities, plus welfare, counselling and other support services.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/griffithuniversity%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/Griffith_Uni%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/griffithuniversity%E2%80%8E', 
	            'flickr' 		=> 'https://www.flickr.com/groups/griffithuniversity/',
	            'website' 		=> 'http://www.griffith.edu.au/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // La Trobe University
    	$university_name = "La Trobe University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>La Trobe University came into being in 1967 and was the third university to open in the state of Victoria, Australia. Its main campus is located in the Melbourne, which has the distinction of being the most liveable city and the fourth most student-friendly city in the world.</p><p>A reputable university and one of the premier institutions in Australia for Allied Health and Bioscience degree and research programmes, La Trobe was ranked 20th out of all Australian universities by QS World University Rankings in 2013.</p><p>Subject Strengths: Nursing, Physiotherapy, Occupational Therapy, Speech Pathology, Microbiology, Biochemistry Cell Biology.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The Melbourne campus (La Trobe’s main campus) is set in 256 hectares of beautiful bushland on the traditional lands of the Wurundjeri and Boonerwrung people, 14kms north-east of Melbourne’s CBD.</p><p>The campus has a genuine community feel that offers a fantastic environment for both study and socialising. There’s always plenty going on for students, with regular cultural and sporting activities, live entertainment, and a host of other activities run by student clubs and associations. In addition to its serene setting, the campus is renowned for its world-class library, Research and Development Park, and wildlife sanctuary.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/latrobe%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/latrobe%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com/user/LatrobeUniAustralia', 
	            'flickr' 		=> 'http://www.flickr.com/photos/latrobeuni/',
	            'website' 		=> 'http://www.latrobe.edu.au/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    } 

	    // Le Cordon Bleu
    	$university_name = "Le Cordon Bleu";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Le Cordon Bleu established a presence in Australia in 1992 when it signed a tripartite agreement with the International College of Hotel Management and TAFE SA to deliver the International Diploma of Hotel Management.</p><p>From these beginnings, Le Cordon Bleu Australia grew to include campuses in Sydney and Melbourne. Today Le Cordon Bleu Australia is registered to deliver a broad range of vocational and higher education programmes in its own right and partnering with other highly respected, credible and quality tertiary institutions, which has from the beginning been a central component of the Le Cordon Bleu business model - a model that continues to drive business expansion today.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The TAFE NSW Northern Sydney Institute, Ryde College is the venue for the Le Cordon Bleu Sydney Culinary Institute. Located in the leafy suburb of North Ryde, 17 kms north of the Sydney CBD, our specialist tourism and hospitality facility is one of the largest in the Asia-Pacific region. The Institute has proudly been offering Le Cordon Bleu programmes since 1996.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/LeCordonBleuAustralia', 
	            'twitter' 		=> 'https://twitter.com/LCBaustralia', 
	            'youtube'		=> 'https://www.youtube.com/c/LCBAustralia', 
	            'flickr' 		=> '',
	            'website' 		=> 'https://www.cordonbleu.edu/australia/home/en', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Monash University
    	$university_name = "Monash University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Established in 1958 and based in Melbourne (ranked Australia’s most liveable city in the world from 2011-2013), Monash University is the second-oldest university in the state of Victoria, Australia</p><p>Youthful and ambitious, Monash University has grown to become Australia’s largest university, with offshore campuses in South Africa, Italy and China, India and Malaysia, and is considered among its most successful and progressive. Additionally, the university is ranked in the top 1 percent of universities worldwide.</p><p>Subject Strengths: Arts and Humanities, the Social Sciences, Life Sciences, Biomedicine, Medicine, Law as well as Engineering and Technology.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Berwick campus is one of Monash's newest campus, having been established in 1996. It is situated on a 55-hectare site in the City of Casey, which is in Melbourne's south-eastern suburbs, approximately 40 km from the city centre, and in one of three fastest growing municipalities in Australia. Being a new campus, students and staff enjoy state-of-the-art facilities.</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/Monash.University%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/MonashUni%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/monashunivideo%E2%80%8E', 
	            'flickr' 		=> 'http://www.flickr.com/photos/monashuni',
	            'website' 		=> 'http://www.monash.edu.au/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Queensland University of Technology
    	$university_name = "Queensland University of Technology";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Established in 1989 and based in Brisbane, Queensland University of Technology (QUT) is a major Australian university that is known for a strong focus on applied research.</p><p>Highly regarded for the quality of education it provides, QUT falls within the top 10 universities in Australia, and first among Australian universities under 50 years of age according to the 2013 edition of Times Higher Education ranking.</p><p>Subject Strengths: Business, Creative Industries, Education, Health and Biomedicine, Information Security, Law, Science and Engineering, and Sustainable Resources.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Located next to the Brisbane River and the Botanic Gardens, QUT Gardens Point is Brisbane's inner-city university campus.</p><p>The $230 million Science and Engineering Centre is a world-leading model for teaching and research in science, technology, engineering and mathematics. It also includes, food and retail spaces, swimming pool and gym.</p><p>The campus is also home to the Gardens Cultural Precinct, which includes Gardens Theatre, QUT Art Museum and Old Government House</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/QUTBrisbane%E2%80%8E', 
	            'twitter' 		=> 'http://twitter.com/QUT%E2%80%8E', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/TheQUTube%E2%80%8E', 
	            'flickr' 		=> 'http://www.flickr.com/photos/queenslanduniversityoftechnology/',
	            'website' 		=> 'http://www.qut.edu.au/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Southern Cross University
    	$university_name = "Southern Cross University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Southern Cross University is a vibrant, contemporary Australian university with beautiful campuses at the Gold Coast, Lismore and Coffs Harbour, and branch campuses in Sydney and Melbourne. The University also operates The Hotel School Sydney and The Hotel School Melbourne in partnership with Mulpha Australia.</p><p>Degrees are offered across a broad range of disciplines, and are designed in consultation with industry. Many involve work placements and internships and other forms of hands-on learning to produce work-ready graduates. Research is undertaken in areas that are regionally relevant and globally significant, in disciplines as diverse as geoscience, plant genetics, cetacean research, health and wellbeing and tourism.</p>",

	            'campus' 		=> "<p>Located in the vibrant Northern Rivers region, the Lismore campus is set on more than 75 hectares of lush landscaped gardens and rainforest walkways. The Lismore campus houses specialist facilities including the Law Moot Court, Nursing and Massage and Osteopathy Room, Sport and Exercise Science facilities including a Biomechanics laboratory and purpose built facilities for Contemporary Music, Visual Arts and Media students.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/southerncrossuniversity', 
	            'twitter' 		=> 'https://twitter.com/SCUonline', 
	            'youtube'		=> 'https://www.youtube.com/user/UniSCU', 
	            'flickr' 		=> 'https://www.flickr.com/photos/scu-edu-au/',
	            'website' 		=> 'http://scu.edu.au/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Tasmania
    	$university_name = "University of Tasmania";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Founded on the 1st of January in 1890 and based in Sandy Bay, Tasmania with campuses in Newnham and Cradle Coast, the University of Tasmania (UTAS) has a growing reputation as one of Australia’s foremost teaching and research institutions.</p><p>UTAS prides itself on being able to provide students with a stimulating learning environment which features low student-teacher ratios and many opportunities to pursue collaborative partnerships with various industry partners of the university, and is ranked among the top 10 research universities in Australia and in the top 2 percent of universities globally.</p><p>Subject Strengths: Law, Medicine, Environmental Studies, Marine Sciences, Architecture and the Arts.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The main Hobart campus is set on 100 hectares in the suburb of Sandy Bay, overlooking the Derwent River and five minutes' travel from the city centre. It has magnificent Mount Wellington as a backdrop and much of the upper campus is in natural bushland.</p><p>Much of the upper campus is in natural bushland. Closer to the city centre are the Tasmanian Conservatorium of Music, the Clinical School (and more recently the medical sciences building) and the Tasmanian School of Art. About 10,000 students are enrolled at the Sandy Bay campus..</p>",
	            
	            'facebook' 		=> 'http://www.facebook.com/UniversityofTasmania', 
	            'twitter' 		=> 'http://twitter.com/UTAS_', 
	            'youtube'		=> 'http://www.youtube.com.sg/user/UniversityOfTasmania%E2%80%8E', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.utas.edu.au/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Adelphi University
    	$university_name = "Adelphi University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Adelphi University is a private university located in New York, and the oldest institution of higher education on Long Island, New York.</p><p>Adelphi is dedicated to expanding global awareness through education and communication. With a special relationship with the UN and the International Leadership Coordinating Committee, and study abroad programs, it’s an engaged university in the world community. Adelphi has an overall student-to-faculty ratio of 10:1. Its diverse international student body consists of 5,000 undergraduate and 2,600 graduate and doctoral students. Adelphi’s faculty includes internationally renowned scientists, artists, critics and scholars.</p><p>For the tenth year, Adelphi University has been named a \"Best Buy\" in higher education by the Fiske Guide to Colleges. The university was also named a 2010 Best College in the Northeastern Region by The Princeton Review. The institution was awarded the 2010 Carnegie Classification for Community Engagement by the Carnegie Foundation for the Advancement of Teaching. U.S. News & World Report ranked Adelphi University #153 among National Universities.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The home of Adelphi’s main campus since 1929 - is one of Long Island’s most historic and scenic towns. Located fewer than 20 miles from Manhattan, Garden City is a tight-knit community of just over 20,000 residents. Aptly named, the village is an oasis of bucolic beauty with fine facilities - such as excellent public schools - as well as a thriving downtown with a mixture of small shops and restaurants and national retailers. Garden City provides a safe and elegant home for Adelphi’s main campus.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/AdelphiU/', 
	            'twitter' 		=> 'https://twitter.com/AdelphiU', 
	            'youtube'		=> 'https://www.youtube.com/user/AdelphiUniv', 
	            'flickr' 		=> 'https://www.flickr.com/search/?text=adelphi%20university',
	            'website' 		=> 'http://www.adelphi.edu/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // American University
    	$university_name = "American University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Students who share a desire to understand and shape tomorrow’s world are attracted to American University because of its culture of engagement and service, and access and opportunity permeate the campus environment.</p><p>American University offers a broad and flexible choice of majors and minors. Students may double major, construct their own interdisciplinary major or have their major in one school and a minor in another. American University encourages students to transcend the boundaries of academic disciplines. The International Student and Scholar Services office meets the special needs of international students, providing visa and immigration support, orientation, leadership opportunities, and counselling.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            'facebook' 		=> 'https://www.facebook.com/AmericanUniversity', 
	            'twitter' 		=> 'https://twitter.com/AmericanU?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 
	            'youtube'		=> 'https://www.youtube.com/user/americanuniversity', 
	            'flickr' 		=> 'https://www.flickr.com/photos/americanuniversity/',
	            'website' 		=> 'http://www.american.edu/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Auburn University
    	$university_name = "Auburn University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Auburn University is situated in the small city of Auburn, Alabama, in the Southeastern United States. Auburn is not only a great place to live, it was also ranked 18th in Forbes' list of \"The Best Small Places for Business and Careers\" and the fourth most educated city in the U.S.</p><p>Auburn is ranked #103 Tier 1 National University and also rated one of the Top 10 Best Places to Live in the 2015 US News and World Report. With 12 colleges and schools and nationally ranked programs in architecture, business, engineering, pharmacy, and veterinary medicine, Auburn University students have an edge with their level of professionalism, communication skills, and preparation.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",
	            'campus' 		=> "",
	            'facebook' 		=> 'https://www.facebook.com/auburnu/', 
	            'twitter' 		=> 'https://twitter.com/AuburnU', 
	            'youtube'		=> 'https://www.youtube.com/user/AuburnUniversity', 
	            'flickr' 		=> 'https://www.flickr.com/photos/auburnuniversity/',
	            'website' 		=> 'http://www.auburn.edu/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // City College of New York
    	$university_name = "City College of New York";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Auburn University is situated in the small city of Auburn, Alabama, in the Southeastern United States. Auburn is not only a great place to live, it was also ranked 18th in Forbes' list of \"The Best Small Places for Business and Careers\" and the fourth most educated city in the U.S.</p><p>Auburn is ranked #103 Tier 1 National University and also rated one of the Top 10 Best Places to Live in the 2015 US News and World Report. With 12 colleges and schools and nationally ranked programs in architecture, business, engineering, pharmacy, and veterinary medicine, Auburn University students have an edge with their level of professionalism, communication skills, and preparation.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The main campus of The City College of New York is comprised of 36 tree-lined acres running from 133rd Street to 140th Street in Harlem, bounded by St. Nicholas Terrace and St. Nicholas Park on the east and Amsterdam Avenue on the west.It includes 13 College buildings at present, as well as the New York State Structural Biology Center and the two new state-of-the-art research buildings rising on South Campus and due to open in 2014.The College's beautiful original five buildings, designed by George Browne Post in the Neo-Gothic style, have landmark status.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/TheCityCollegeofNewYork/', 
	            'twitter' 		=> 'https://twitter.com/citycollegeny', 
	            'youtube'		=> 'https://www.youtube.com/user/citycollegeofny', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://international.ccny.cuny.edu/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // City College of New York
    	$university_name = "City College of New York";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Auburn University is situated in the small city of Auburn, Alabama, in the Southeastern United States. Auburn is not only a great place to live, it was also ranked 18th in Forbes' list of \"The Best Small Places for Business and Careers\" and the fourth most educated city in the U.S.</p><p>Auburn is ranked #103 Tier 1 National University and also rated one of the Top 10 Best Places to Live in the 2015 US News and World Report. With 12 colleges and schools and nationally ranked programs in architecture, business, engineering, pharmacy, and veterinary medicine, Auburn University students have an edge with their level of professionalism, communication skills, and preparation.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>The main campus of The City College of New York is comprised of 36 tree-lined acres running from 133rd Street to 140th Street in Harlem, bounded by St. Nicholas Terrace and St. Nicholas Park on the east and Amsterdam Avenue on the west.It includes 13 College buildings at present, as well as the New York State Structural Biology Center and the two new state-of-the-art research buildings rising on South Campus and due to open in 2014.The College's beautiful original five buildings, designed by George Browne Post in the Neo-Gothic style, have landmark status.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/TheCityCollegeofNewYork/', 
	            'twitter' 		=> 'https://twitter.com/citycollegeny', 
	            'youtube'		=> 'https://www.youtube.com/user/citycollegeofny', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://international.ccny.cuny.edu/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Florida International University
    	$university_name = "Florida International University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Located in sunny Miami and the hub of business in South Florida, FIU is designated as a top-tier research institution with emphasis on research as a major component in the university's mission. The Herbert Wertheim College of Medicine and the School of Computing and Information Sciences' Discovery Lab, are just two of many colleges, schools, and centers that actively enhance the university’s ability to set new standards through research initiatives.</p><p>FIU’s School of Hospitality and Tourism Management is one of the top-ranked schools in the U.S., and its School of Journalism and Mass Communication has produced 8 Pulitzer Prize Winners. Its programs in Criminal Justice and International Business are also ranked top 10 in the US.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>FIU has two major campuses: Modesto A. Maidique Campus in West Miami-Dade County, and Biscayne Bay Campus in North Miami Beach.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/floridainternational', 
	            'twitter' 		=> 'https://twitter.com/FIU', 
	            'youtube'		=> 'https://www.youtube.com/user/FloridaInternational', 
	            'flickr' 		=> 'https://www.flickr.com/photos/fiu/',
	            'website' 		=> 'http://www.fiu.edu/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // James Madison University
    	$university_name = "James Madison University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Founded in 1908, James Madison University is a top-ranking US state university in Virginia offering excellent value for money on a beautiful campus with state-of-the-art facilities.</p><p>The university is ranked the #2 public university in the South by U.S.News & World Report, and in America's top 50 'Best Value' public universities by Princeton Review and is known for having a strong culture of community and civic engagement.</p><p>Subject Strengths: Business, Health Professions, Communication, and the Social Sciences.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>James Madison University sits on 655 acres outside of Harrisonburg, VA. The grounds provide plenty of grassy, open space for students to hang out and enjoy the sun.</p><p>The campus is split into six separate areas – Bluestone, Hillside, Lake, and Village on the west side of Interstate 81 and Ridge and Skyline on the east side. People can cross the highway to access areas on either side via a bridge or tunnel. Generally speaking, the older center of campus is around Bluestone, where the main quad is located, and the campus was originally contained on the west side of the highway.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/jamesmadisonuniversity', 
	            'twitter' 		=> 'https://twitter.com/JMU', 
	            'youtube'		=> 'http://www.youtube.com/user/DukeDogTV', 
	            'flickr' 		=> 'http://www.flickr.com/groups/1132487@N22/',
	            'website' 		=> 'http://www.jmu.edu/', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Long Island University
    	$university_name = "Long Island University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>One of the largest and most comprehensive private universities in the USA, Long Island University, established in 1926, is nationally recognised for its academic strengths across a wide range of disciplines and for its proximity to New York City.</p><p>Subject Strengths: Liberal Arts and Sciences, Business and Management, Performing and Media Arts, and Information Science.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Post Campus is on the north shore of Long Island - in the idyllic neighborhood known as the 'Gold Coast', an historic suburban community that has been the subject of popular novels and major motion pictures. This charming area has many beautiful homes and scenic gardens. The campus itself is an historic landmark featuring three glorious mansions. The campus is only 20 miles - just 50 minutes by car - away from the excitement of New York City. Wall Street, Broadway, Little Italy, Greenwich Village, Soho, Tribeca, Fifth Avenue, Times Square and some of the top museums and galleries are all waiting for you to explore.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/LIUPost', 
	            'twitter' 		=> 'https://twitter.com/LIUPost', 
	            'youtube'		=> 'http://www.youtube.com/user/CWPostLIU', 
	            'flickr' 		=> 'http://www.flickr.com/photos/liupost',
	            'website' 		=> 'http://www.liu.edu/cwpost', 
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Louisiana State University
    	$university_name = "Louisiana State University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Located in Baton Rouge, Louisiana, LSU is recognized as a Top 100 Public University by US News & World Report, attracting students from all 50 U.S. states and more than 100 countries. Only an hour away from New Orleans, Baton Rouge combines the comfort of a small city with a lively downtown, food and arts scene.</p><p>LSU graduates include Oscar winners, world-renowned orthopedic surgeons, famous athletes, global architects, and more. As an LSU alumni, you will have connections to top companies like Gerber, Kraft, Nestlé, Ralph Lauren, Vera Wang, DreamWorks Animation, CNN, Nike, Ernst & Young, Deloitte & Touche LLP, JPMorgan Chase, and Shell. The LSU alumni network stretches across the U.S. and around the globe, forever connected by the cheer “Geaux Tigers”!</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>LSU is located in Baton Rouge, the capital of Louisiana. Baton Rouge means “Red Stick” and was named by French explorers in 1699.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/geauxlsu/', 
	            'twitter' 		=> 'https://twitter.com/lsu', 
	            'youtube'		=> 'https://www.youtube.com/user/LSU', 
	            'flickr' 		=> 'https://www.flickr.com/groups/lsu/pool/',
	            'website' 		=> 'http://www.lsu.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Roosevelt University
    	$university_name = "Roosevelt University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Established in 1945, Roosevelt University has an outstanding location in downtown Chicago, which allows international students to reap all the opportunities of studying in one of the best cities in the world.</p><p>A private, mid-size, urban university, Roosevelt University is distinguished as the 4th most ethnically diverse university in the US Midwest region and is committed to ensuring its graduates are well-rounded, community-minded citizens driven to be socially conscious and progressive leaders.</p><p>Subject Strengths: Social Sciences, Social Justice, Sustainable Development, and Hospitality and Tourism Studies.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Downtown Chicago is where academics, culture, commerce and recreation come together. The 3rd most populated city in the USA, Chicago is home to many Fortune 500 companies, and world-class attractions. The university building houses University residences for more than 600 students. Modern, air-conditioned rooms offer breathtaking views of the city of Chicago and Lake Michigan. A dining hall, fitness center, student services such as career development and academic advising, and student activities and organizations, are conveniently grouped on floors 1 to 5.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/RooseveltUniversity', 
	            'twitter' 		=> 'https://twitter.com/RooseveltU', 
	            'youtube'		=> 'http://www.youtube.com/user/RooseveltUniversity?gl=SG&hl=en-GB', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.roosevelt.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // St George's University
    	$university_name = "St George's University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Founded as an independent School of Medicine in 1976, St. George’s University has evolved into a top center of international education, drawing students and faculty from 140 countries to the island of Grenada, in the West Indies. Students attending St. George’s enjoy the benefits of a thriving multicultural environment on the True Blue campus, offering all the amenities and technologically-advanced facilities of a world-class institution.</p><p>The University’s over 15,000 graduates include physicians, veterinarians, scientists, and public health and business professionals across the world. The University offers medical, and veterinary degrees in the schools of Medicine and Veterinary Medicine, and independent and dual graduate degrees in the sciences, public health, and business. Undergraduate degree programs are also available through its School of Arts and Sciences. The University programs are accredited and approved by many governing authorities. St. George’s is affiliated with educational institutions worldwide, including the United States, the United Kingdom, Canada, Australia and Ireland.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "<p>Students begin their academic studies at the stunning True Blue campus, which rises atop a peninsula in the southwest corner of Grenada and is a beautiful combination of Georgian architecture visually enhanced with vivid Caribbean colors. A recent major building campaign resulted in more than 65 new buildings that are spread across the vibrant seaside location. The campus is always expanding to keep up with the latest technologies and to provide students with the best learning environment.</p>",
	            
	            'facebook' 		=> 'https://www.facebook.com/StGeorgesU', 
	            'twitter' 		=> 'https://twitter.com/stgeorgesu', 
	            'youtube'		=> 'https://www.youtube.com/user/StGeorgesU', 
	            'flickr' 		=> 'https://www.flickr.com/photos/sguedu',
	            'website' 		=> 'http://www.sgu.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Texas A&M University - Corpus Christi
    	$university_name = "Texas A&M University - Corpus Christi";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Texas A&M University–Corpus Christi is a state university located in Corpus Christi, Texas, United States, on Ward Island in Oso Bay. The university has an excellent academic reputation with respected faculty working together with students to generate and research new ideas. The University is a part of the distinguished Texas A&M University System, one of the largest education systems in the USA, and offers a wide range of highly-rated degree programmes.</p><p>Students who choose A&M-Corpus Christi enjoy a warm and friendly community where faculty often work one-on-one with students on issues facing them in the local environment. This includes marine life, renewable energy and healthcare.</p><p>Known as the Island University, A&M-Corpus Christi is the only university in the USA located on its own island, at the heart of the Texas Gulf Coast. Roads lined with palm trees stretch throughout the campus, and with the nearby natural wetlands, a scenic hike-and bike trail and a university beach, it is easily first choice for location alone.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/islanduniversity', 
	            'twitter' 		=> 'https://twitter.com/IslandCampus', 
	            'youtube'		=> 'https://www.youtube.com/user/TAMUCCvideogallery', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.tamucc.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Central Florida
    	$university_name = "University of Central Florida";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of Central Florida was founded in 1963 and is the second-largest university in the country. It provide over 210 degree programs to over 61,000 students through main campus, hospitality campus, health sciences campus, and 10 other regional locations.</p><p>UCF started with nothing but a promise by President Millican to accentuate the individual and focus on excellence. Under President Hitt’s current leadership, UCF’s student enrollment reached 50,000 faster than any U.S. university. The 2015 U.S. News & World Report’s Best Colleges rankings set UCF as #3 “up and coming” in the nation. In 2014,Kiplinger’s and The Princeton Review ranked UCF as one of the nation’s best values for a college education.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/UCF/', 
	            'twitter' 		=> 'https://twitter.com/UCF', 
	            'youtube'		=> 'https://www.youtube.com/user/UCF', 
	            'flickr' 		=> 'https://www.flickr.com/photos/universityofcentralflorida/',
	            'website' 		=> 'http://www.ucf.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Illinois - Chicago
    	$university_name = "University of Illinois - Chicago";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of Illinois at Chicago or UIC is a state-funded public research-intensive university located in Chicago, Illinois, United States. The second campus established under the University of Illinois system, UIC is also the largest university in the Chicago area, having approximately 29,000 students enrolled in 15 colleges.</p><p>UIC operates the largest medical school in the United States, and serves as the principal educator for Illinois’ physicians, dentists, pharmacists, physical therapists, nurses and other healthcare professionals. UIC's medical school has research expenditures exceeding $412 million and consistently ranks in the top 50 U.S. institutions for research expenditures.</p><p>In the 2015 U.S. News & World Report's ranking of colleges and universities, UIC ranked as the 129th best in the \"national universities\" category. The 2015 Times Higher Education World University Rankings ranked UIC as the 18th best in the world among universities less than 50 years old.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/uic.edu', 
	            'twitter' 		=> 'https://twitter.com/thisisuic', 
	            'youtube'		=> 'https://www.youtube.com/user/thisisUIC', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.uic.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Kansas
    	$university_name = "University of Kansas";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Since its founding, the University of Kansas has embodied the aspirations and determination of the abolitionists who settled on the curve of the Kaw River in August 1854. Nearly 150 years later, KU has become a major public research and teaching institution of 28,000 students and 2,600 faculty on five campuses (Lawrence, Kansas City, Overland Park, Wichita, and Salina). Its diverse elements are united by their mission to educate leaders, build healthy communities, and make discoveries that change the world.</p><p>A member of the prestigious Association of American Universities since 1909, KU consistently earns high rankings for its academic programs. It's programs in Urban Policy and Special Education are ranked National #1 in the US News World Report. Its faculty and students are supported and strengthened by endowment assets of more than $1.44 billion. It is committed to expanding innovative research and commercialization programs.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "Considered one of the most beautiful in the nation, KU's central campus occupies 1,000 acres on and around historic Mount Oread in Lawrence, a community of about 90,000 in the forested hills of eastern Kansas. Ten of KU's 13 schools are based here, as are internationally recognized research centers and laboratories.",
	            
	            'facebook' 		=> 'https://www.facebook.com/KU', 
	            'twitter' 		=> 'https://twitter.com/KUnews', 
	            'youtube'		=> 'https://www.youtube.com/user/KU', 
	            'flickr' 		=> 'https://www.flickr.com/photos/universityofkansas/',
	            'website' 		=> 'https://www.ku.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of South Carolina
    	$university_name = "University of South Carolina";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of South Carolina is a public research university located in Columbia, South Carolina, United States, with seven satellite campuses. Its campus covers over 359 acres (145 ha) in downtown Columbia not far from the South Carolina State House.</p><p>The University is categorized by the Carnegie Foundation for the Advancement of Teaching as having \"very high research activity\" and curricular community engagement. It has been ranked as an \"up-and-coming\" university by U.S. News & World Report, and its undergraduate and graduate International Business programs have ranked among the top three programs in the nation for over a decade.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/uofsc', 
	            'twitter' 		=> 'https://twitter.com/UofSC', 
	            'youtube'		=> 'https://www.youtube.com/user/southcarolina', 
	            'flickr' 		=> 'https://www.flickr.com/photos/uofsc/',
	            'website' 		=> 'http://www.sc.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of South Carolina
    	$university_name = "University of South Carolina";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of South Carolina is a public research university located in Columbia, South Carolina, United States, with seven satellite campuses. Its campus covers over 359 acres (145 ha) in downtown Columbia not far from the South Carolina State House.</p><p>The University is categorized by the Carnegie Foundation for the Advancement of Teaching as having \"very high research activity\" and curricular community engagement. It has been ranked as an \"up-and-coming\" university by U.S. News & World Report, and its undergraduate and graduate International Business programs have ranked among the top three programs in the nation for over a decade.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/uofsc', 
	            'twitter' 		=> 'https://twitter.com/UofSC', 
	            'youtube'		=> 'https://www.youtube.com/user/southcarolina', 
	            'flickr' 		=> 'https://www.flickr.com/groups/23172930@N00/',
	            'website' 		=> 'http://www.pacific.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of the Pacific
    	$university_name = "University of the Pacific";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>University of the Pacific is located on a beautiful campus 1.5 hours from San Francisco. In addition to liberal arts, the University has schools of education, engineering and business, and graduate schools in dentistry, law, pharmacy and health sciences. The oldest chartered university in California, UOP was first in the state to admit women.</p><p>Pacific offers a superior, student-centered learning experience integrating liberal arts and professional education. It is ranked #108 National Universities (U.S. News & World Report), #3 Best-Value College in California (The Brookings Institution) and #12 Best-Value College in the U.S. (The Economist).</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "This is the main campus of University of the Pacific. It is home to three main residential halls: Grace Covell Hall, Southwest Hall, and the Quad Buildings. In 2008, the university opened a new University Center, at a cost of $38 million, to centralize all campus student-centered activities. The Don & Karen DeRosa University Center houses a new central dining hall, student cafe, pub, bookstore and conference centers, replacing the McCaffrey Center. It also built a new $20 million Biological Sciences Center in 2008 that provides advanced classroom and laboratory facilities for students studying the natural sciences and the health sciences.",
	            
	            'facebook' 		=> 'https://www.facebook.com/universityofthepacific/', 
	            'twitter' 		=> 'https://twitter.com/UOPacific', 
	            'youtube'		=> 'https://www.youtube.com/universityofthepacific', 
	            'flickr' 		=> 'https://www.flickr.com/groups/23172930@N00/',
	            'website' 		=> 'http://www.pacific.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Vermont
    	$university_name = "University of Vermont";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>University of the Pacific is located on a beautiful campus 1.5 hours from San Francisco. In addition to liberal arts, the University has schools of education, engineering and business, and graduate schools in dentistry, law, pharmacy and health sciences. The oldest chartered university in California, UOP was first in the state to admit women.</p><p>Pacific offers a superior, student-centered learning experience integrating liberal arts and professional education. It is ranked #108 National Universities (U.S. News & World Report), #3 Best-Value College in California (The Brookings Institution) and #12 Best-Value College in the U.S. (The Economist).</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "This is the main campus of University of the Pacific. It is home to three main residential halls: Grace Covell Hall, Southwest Hall, and the Quad Buildings. In 2008, the university opened a new University Center, at a cost of $38 million, to centralize all campus student-centered activities. The Don & Karen DeRosa University Center houses a new central dining hall, student cafe, pub, bookstore and conference centers, replacing the McCaffrey Center. It also built a new $20 million Biological Sciences Center in 2008 that provides advanced classroom and laboratory facilities for students studying the natural sciences and the health sciences.",
	            
	            'facebook' 		=> 'https://www.facebook.com/universityofthepacific/', 
	            'twitter' 		=> 'https://twitter.com/UOPacific', 
	            'youtube'		=> 'https://www.youtube.com/universityofthepacific', 
	            'flickr' 		=> 'https://www.flickr.com/groups/23172930@N00/',
	            'website' 		=> 'http://www.pacific.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Widener University
    	$university_name = "Widener University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Founded in 1821 and based in an area just south of Philadelphia, Widener University is an entrepreneurial, metropolitan university that offers the resources of a large research institution within a small academic community.</p></p>Widener students are well prepared for the global market-place of the 21st Century, and will be challenged to seek dynamic partnerships in life and business worldwide.</p></p>Subject Strengths: Business, Technology, History, Arts and Entertainment.</p></p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "At Widener University, students can get involved in more than 80 campus clubs, pledge with about 10 fraternities and sororities, and play intramural sports. More serious athletes can join the Widener Pride athletic teams, which compete in the NCAA Division III Middle Atlantic Conference. Notable Widener University alumni include esteemed director Cecil B. DeMille, whose films include The Ten Commandments and Cleopatra.",
	            
	            'facebook' 		=> 'https://www.facebook.com/wideneruniversity', 
	            'twitter' 		=> 'https://twitter.com/WidenerUniv', 
	            'youtube'		=> 'http://www.youtube.com/user/WidenerUniv', 
	            'flickr' 		=> 'http://www.flickr.com/photos/widener/',
	            'website' 		=> 'http://www.widener.edu/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Royal Roads University
    	$university_name = "Royal Roads University";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Accredited in 1995, Royal Roads University is a highly-regarded Canadian public university, located in Victoria, Canada. The university has a long history of excellence which dates back to 1940, when it first became a military college.</p><p>There is a strong emphasis on a practical, applied programs delivered by award-winning faculty who are internationally recognised practitioners in their fields..</p><p>Subject Strengths: Global Business, Tourism, Hospitality Management, Communication, and Justice Studies.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",
	            'campus' 		=> "Royal Roads University is located on Vancouver Island in British Columbia, the most popular Canadian province for international students. It is a short distance away from Victoria, is a safe, clean and attractive city with a relaxed pace and lots of university and college students. Getting over 2,200 hours of sun each year, Victoria is one of the sunniest places in Canada.</p><p>The bustling city center has a host of shops, entertainment, pubs and restaurants surrounding the beautiful inner harbour. Victoria is also a tourist destination with over 4 million visitors per year who come both to stay overnight in the city and as day visitors from cruise ships. The city is ideal for outdoor recreation such as cycling, hiking, jogging, kayaking and water sports.",
	            
	            'facebook' 		=> 'https://www.facebook.com/royalroadsu', 
	            'twitter' 		=> 'https://twitter.com/RoyalRoads', 
	            'youtube'		=> 'https://www.youtube.com/user/RoyalRoadsUni?feature=watch', 
	            'flickr' 		=> 'http://www.pinterest.com/royalroads/pins/',
	            'website' 		=> 'http://www.royalroads.ca/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of Manitoba
    	$university_name = "University of Manitoba";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The University of Manitoba is the province’s largest university, with over twenty faculties for you to explore.</p><p>With over 100 student groups and recreation clubs, co-op work opportunities, travel exchange programs, and community service projects at home and abroad, the University of Manitoba offers you more ways to connect, develop leadership skills, and expand your awareness and understanding of this world we all share.</p><p>Subject Strengths: Medicine, Health Sciences</p><p>* This university is offered through partnership with Think Education Pte Ltd</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "The main Fort Garry campus (located on the Red River in south Winnipeg) comprises over 60 teaching and research buildings of the University and sits on 233 hectares (580 acres) of land. In addition, Smartpark is the location of seven buildings leased to research and development organizations involving university-industry partnerships.",
	            
	            'facebook' 		=> 'http://www.youtube.com/user/YouManitoba', 
	            'twitter' 		=> 'https://twitter.com/umanitoba', 
	            'youtube'		=> 'http://www.youtube.com/user/YouManitoba', 
	            'flickr' 		=> '',
	            'website' 		=> 'hhttp://umanitoba.ca/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University of New Brunswick
    	$university_name = "University of New Brunswick";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Initially modeled on the Anglican ideals of older, European institutions, the University of New Brunswick was founded in 1785 as the Academy of Liberal Arts and Sciences. It is the oldest English language university in Canada and one of four schools that claim the title of oldest public university in North America.</p><p>The university offers over 75 degrees in fourteen faculties at the undergraduate and graduate levels with a total student enrollment of approximately 11,400 between two principal campuses. In 2013, Maclean's magazine ranked UNB 4th nationally in its evaluation of the top fifteen comprehensive universities in Canada, and UNB's law school was ranked 2nd across Canada.</p><p>Subject Strengths: Law, Biomedical Engineering, English</p><p>* This university is offered through partnership with Think Education Pte Ltd</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "A first-class teaching and research institution, the University of New Brunswick in Fredericton (UNBF) is a home away from home for more than 8,000 students annually. Now in its third century, the campus has 11 academic faculties. The university’s cultural fare includes an art centre, galleries, concerts, films, and resident musicians and writers.</p><p>Those who wander outside the campus gates will experience the capital city of New Brunswick. Filled with parks and green spaces, Fredericton is known as the City of Stately Elms. It offers a variety of outdoor sporting activities, both on and off the river, and an inviting downtown core. Professional theatre, street-side cafés, and a farmer’s market all contribute to the city’s charm.",
	            
	            'facebook' 		=> 'https://www.facebook.com/uofnb', 
	            'twitter' 		=> 'https://twitter.com/UNB', 
	            'youtube'		=> 'http://www.youtube.com/user/unbtube', 
	            'flickr' 		=> 'https://www.flickr.com/search?text=university%20of%20new%20brunswick&sort=relevance',
	            'website' 		=> 'http://www.unb.ca/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Cesar Ritz
    	$university_name = "Cesar Ritz";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The programmes offered at César Ritz Colleges are based on the philosophy of César Ritz, founder of the famous Ritz-Paris hotel, who is widely recognized as the pioneer of luxury hotels. With hard work, innovation, flair and a touch of class, César Ritz accomplished an unprecedented career in the hospitality industry and rose to legendary status. It is his tradition of luxury, excellence and service that created the standards for hotels and restaurants throughout the world, setting the foundation for our international Swiss hotel management school.</p><p>Bachelor students can choose to start their studies at our Swiss hotel school in French-speaking Le Bouveret or German-speaking Lucerne. By studying and living in different regions, students can discover the diverse aspects of the famous Swiss hospitality culture, through their Swiss journey.</p><p>Graduates of the double Bachelor programme earn both a César Ritz Colleges Bachelor degree and a Washington State University (USA) Bachelor degree in Hospitality Business Management.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/CesarRitzHotelSchool/', 
	            'twitter' 		=> 'https://twitter.com/cesar_ritz', 
	            'youtube'		=> 'https://www.youtube.com/user/webmasterritz', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.cesarritzcolleges.edu/en/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Hotel Institute Montreux
    	$university_name = "Hotel Institute Montreux";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>As an international institute of hospitality and hotel management, the Hotel Institute Montreux supports the success of aspiring individuals through the development of strong hospitality management, interpersonal, language, and cultural skills. The business focus of the program, which is offered in collaboration with Northwood University, a leading management university in the United States, will open doors to a wide variety of career options.</p><p>Hotel Institute Montreux offers a combination of business programs that blend renowned Swiss hospitality practices with contemporary American management expertise. This unique combination will prepare graduates for top-end management positions in the world of hospitality and business.</p><p>Students specialize in Finance, Marketing, Human Resources or Luxury Business Management, opening a wide range of career options in the industry of hospitality and business upon graduation. Graduates have in-depth knowledge of their chosen field, along with expertise in one or more foreign languages.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/himhotelinstitutemontreux/', 
	            'twitter' 		=> 'https://twitter.com/hotelinstitute', 
	            'youtube'		=> 'https://www.youtube.com/user/hotelinstitute', 
	            'flickr' 		=> 'https://www.flickr.com/search/?text=Hotel%20Institute%20Montreux',
	            'website' 		=> 'http://www.hotelinstitutemontreux.com/en/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // IHTTI School of Hotel Management
    	$university_name = "IHTTI School of Hotel Management";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>IHTTI School of Hotel Management is one of the leading Swiss hotel management schools worldwide, sharing the best industry practices and preparing students for management careers in the international hospitality sector since 1984.</p><p>The programmes offered at IHTTI are based upon the world-renowned Swiss hotel management training, together with the latest industry innovations in design, technology and luxury brand management. Students are joining a reputed international hotel school and learn from the world’s experts, through professional partnerships with LesConcierges, the world’s premier provider of global concierge services and solutions, and HBA/Hirsch Bedner Associates, a leader in hospitality interior design worldwide.</p><p>With the ever-increasing competition between hotels and the growing popularity of boutique and design style hotels, IHTTI graduates respond to a demand for multi-skilled managers with an eye for detail and an in-depth know-how of design principles.</p><p>The skills learnt at IHTTI School of Hotel Management are applicable to a vast range of roles in hospitality, luxury brand management, hotel design and tourism-related businesses.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/IHTTI/', 
	            'twitter' 		=> 'https://twitter.com/ihtti', 
	            'youtube'		=> 'https://www.youtube.com/user/IHTTIHotelSchool', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.ihtti.com/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Swiss Hotel Management School
    	$university_name = "Swiss Hotel Management School";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>At the Swiss Hotel Management School students learn the traditions of Swiss hoteliers in an authentic environment. Students at the international Swiss hotel school can choose from a broad range of programmes in Hotel Operations, Events, Resort and Spa Management or Food & Beverage and Restaurant Management.</p><p>The Swiss Hotel Management School offers an exciting range of programmes founded upon the internationally recognized Swiss traditions and focuses on global trends, business strategy and operational leadership. Students who join the international hotel school learn the art of Swiss Hospitality Management and develop the principles of the Swiss Hospitality Touch.</p><p>Students from more than 80 nationalities are found studying in two exceptional settings, which offer a unique learning environment, steeped in the heritage of the Swiss hospitality tradition. The historic Caux Palace campus overlooks the Swiss Riviera and the Leysin campus, housed in two former hotels in the stunning Swiss Alps.</p><p>At the Swiss Hotel Management School students gain hands-on experience in operational facilities including a restaurant open to the public, a spa with a public section, a culinary arts studio and an events gallery. These facilities at the Swiss hotel school are designed to replicate real-life situations and ensure that graduates have a high level of employability.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/SwissHotelManagementSchool/', 
	            'twitter' 		=> 'https://twitter.com/shmshotelschool', 
	            'youtube'		=> 'https://www.youtube.com/user/SwissHotelSchool', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.shms.com/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // University College Dublin
    	$university_name = "University College Dublin";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>University College Dublin is Ireland's largest university, with over 1,480 faculty staff and 32,000 students. It is located in Dublin, the Irish capital. At UCD, over 20% of the student population are international students from over 127 countries. UCD has over 160 societies and clubs, and the sports facilities on campus are among the finest in the country.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "Originally located in locations across Dublin city, all of the university's faculties have since been relocated to a 133-hectare campus at Belfield, four kilometres to the south of the city centre. The Belfield campus has since developed into a complex of modern buildings and inherited Georgian town houses, accommodating the colleges of the University as well as its student residences and many leisure and sporting facilities.",
	            
	            'facebook' 		=> 'https://www.facebook.com/universitycollegedublin', 
	            'twitter' 		=> 'https://twitter.com/ucddublin', 
	            'youtube'		=> 'https://www.youtube.com/user/MyUCD', 
	            'flickr' 		=> 'https://www.flickr.com/groups/universitycollegedublin/pool/',
	            'website' 		=> 'https://www.therightu.com/university/www.ucd.ie',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Bellerbys College
    	$university_name = "Bellerbys College";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Bellerbys College focusses on helping students to prepare for a brighter future from the minute they join us. Our colleges in Brighton, Cambridge, London and Oxford each offer a specialist focus, enabling you to get the highest quality learning in the best possible environment, led by teachers who share your passion. We offer a range of programmes, from GCSE and A Level to university preparation with our Foundation, Undergraduate Year 1 and English language and summer courses.</p><p>The Foundation Money Back Promise</p><p>If you are a Qualifying Student and you do not receive an offer of a Course of Study at a UK university, we will refund all Tuition Fees paid by you for your Foundation Programme.</p><p>If you are a Top 30 Qualifying Student and you do not receive an offer of a Course of Study at a UK university ranked overall or by course in the top 30 by The Times or The Guardian league tables at the time of offer, we will refund all Tuition Fees paid by you for your Foundation Programme.</p><p>Application for a refund must be made in writing to the appropriate Bellerbys College Principal no later than 31 December 2017 for assessment after which this offer expires. This must include a copy of the UCAS offers received.</p><p>Full terms and conditions of this offer are available from your local representative</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/bellerbyscollege/', 
	            'twitter' 		=> 'https://twitter.com/bellerbys', 
	            'youtube'		=> 'https://www.flickr.com/photos/bellerbyscollege/', 
	            'flickr' 		=> 'https://www.flickr.com/groups/universitycollegedublin/pool/',
	            'website' 		=> 'http://www.bellerbys.com/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // CATS College
    	$university_name = "CATS College";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Since our foundation in 1952, we have grown into one of the most innovative and successful independent education providers in UK and USA.</p><p>Our philosophy is simple: we combine exceptionally high-quality teaching with a deep understanding of our students and their personal needs. We do this in a welcoming and enriching environment, a home-from-home where students are free to develop their potential both academically and personally.</p><p>Our students are taught by outstanding teachers and supported by a talented welfare and support team who are experienced at nurturing and guiding international pupils so that every student fulfils their potential within the British or American educational system.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/CATSCanterbury', 
	            'twitter' 		=> 'https://twitter.com/CATScollege', 
	            'youtube'		=> 'https://www.youtube.com/channel/UC3KpaF-F_k_DUk8gac0vSRw', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.catseducation.com/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Coventry University ISC
    	$university_name = "Coventry University ISC";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The Coventry University London Campus International Study Centre (ISC), based in the centre of London, provides international students with a direct route onto a range of degrees at the University.</p><p>Our programmes consist of academic modules, study skills and English language training to ensure that you have the skills to succeed when you progress onto your chosen degree programme.</p><p>ISC programmes will introduce you to the style of teaching and learning that you will experience when you progress onto your degree. You will learn via one-to-one tutorials, small seminars and as part of larger lecture groups.</p><p>International Foundation Year</p><p>This course is designed to help international students succeed in a UK classroom environment and meet the entry requirements for undergraduate study.</p><p>International Year One</p><p>This course is equivalent to the first year of an undergraduate degree and it leads to the second year of your chosen degree.</p><p>Pre-Masters Programme</p><p>This course is specifically designed to meet the needs of international students. You will gain the specialist skills and knowledge you need to succeed in your Master’s degree.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/LondonCampus', 
	            'twitter' 		=> 'https://twitter.com/LondonCampus', 
	            'youtube'		=> 'https://www.youtube.com/playlist?list=PL26A6CB33D854E077', 
	            'flickr' 		=> '',
	            'website' 		=> 'http://www.coventryisc.com/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Durham University ISC
    	$university_name = "Durham University ISC";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>The International Study Centre is located at Durham University’s Queen’s Campus in Stockton-on-Tees. It is a modern purpose-built site situated in a waterfront setting. It offers a full range of facilities and study resources to ensure you can make the most of your studies and be fully prepared for your undergraduate or postgraduate study at Durham University's City Campus.</p><p>At Durham University - ranked #4 in the UK - you’ll join a community of world-leading academics who are at the forefront of their field and fully committed to deliver a cutting-edge, research-led curriculum.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "Durham is one of the UK’s most historic universities, and its unique collegiate system creates a strong sense of belonging. The University provides outstanding opportunities that help to enrich student life and create some of the world’s most sought after graduates.</p><p>When you complete your course at Durham International Study Centre and progress to your degree, you will be studying at a world top 100 university with a global reputation for teaching and research. Lecturers are world-leaders their fields, and students benefit from cutting-edge facilities.",
	            
	            'facebook' 		=> 'https://www.facebook.com/iscdurham/', 
	            'twitter' 		=> '', 
	            'youtube'		=> 'https://www.youtube.com/channel/UCpuDqH-vyeIMEYlnR_jZOfQ', 
	            'flickr' 		=> '',
	            'website' 		=> 'https://www.durhamisc.com/',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Griffith College
    	$university_name = "Griffith College";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Griffith College offers a range of university-level programs to prepare students for a smooth transition into further degree studies at Griffith University. The college has worked in partnership with Griffith University since 1997. The university-designed programs are often taught by university lecturers and they prepare students for the demands of higher education in Australia.</p><p>Griffith College specialises in delivering the learning process within a supportive environment, with small class sizes and additional contact hours to those typically offered within a university. This teaching model has resulted in high success rates for the students.</p><p>Griffith College is proud of the rich cultural mix within its student population, with more than 60 different nationalities represented at Griffith College. Student mentors and caring staff help students settle into Griffith College and life in Australia.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "Griffith College is located on Griffith University's Gold Coast campus. It is set amongst native bushland and located just minutes from the famous golden beaches of Surfers Paradise. It is our newest addition to Griffith College. With a light rail station on campus it is easy for students to get both to campus and to the beach to enjoy some well earned down-time.",
	            
	            'facebook' 		=> 'https://www.facebook.com/GriffithCollegeAUS/', 
	            'twitter' 		=> 'https://twitter.com/GCollegeAUS/', 
	            'youtube'		=> 'https://www.youtube.com/user/QIBTam/', 
	            'flickr' 		=> '',
	            'website' 		=> 'https://www.griffith.edu.au/college',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }

	    // Istituto Marangoni ISC
    	$university_name = "Istituto Marangoni ISC";
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
	     	DB::table('university_metas')->insert([
	            'university_id' => $university->id, 
	            'about' 		=> "<p>Every year, over four thousand students representing 106 different nationalities meet at Istituto Marangoni to pursue one common dream: a career in fashion.</p><p>Istituto Marangoni International Study Centre provides a tailor-made university preparation programme for international students hoping to enter the fashion industry.</p><p>Foundation Programme</p><p>The foundation year is taught by highly experienced industry experts who are passionate about nurturing talent.</p><p>Once you complete our course, and achieve the required grades, you will have the opportunity to study a wide range of undergraduate degrees in the fields of fashion and design, in London, Paris, Milan and Florence.</p><p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to look at courses we are currently offering.</p>",

	            'campus' 		=> "",
	            
	            'facebook' 		=> 'https://www.facebook.com/GriffithCollegeAUS/', 
	            'twitter' 		=> 'https://twitter.com/marangoniisc', 
	            'youtube'		=> '', 
	            'flickr' 		=> '',
	            'website' 		=> '',
	            'phone' 		=> '+65 6333 1300',
	            'created_at' 	=> Carbon::now(),
	            'updated_at' 	=> Carbon::now()
	        ]);
	    }
    }
}
