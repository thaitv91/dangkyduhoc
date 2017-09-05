<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table("career")->insert([
    		"name" => "Accountant",
    		"slug" => "accountant",
    		"description" => "<p>If you have a knack for numbers, a good eye for detail and thrive on creating financial order, you might find yourself making a professional statement as an accountant.</p><p>Accountants analyse financial positions, handle revenue streams and oversee all finance-related transactions for corporations. Generally, an accountant's work revolves around maintaining the financial health of organisations and helping to trim the financial fat for processes to ensure minimal inefficiency. </p><p>Almost all accountants have to contend with an annual surge of work during tax season when corporations and individuals have to file their taxes. You will need to be able to work under considerable pressure during this period with no compromise to the accuracy of your output .</p><p>See, the job entails balancing more than just books.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Aeronautical Engineer",
    		"slug" => "aeronautical-engineer",
    		"description" => "<p>Aeronautical engineering is the most complex and technically demanding engineering discipline. Aeronautical engineers are renowned for using the latest computational methods and most advanced cutting edge materials to develop their flying structures.</p><p>An aeronautical engineer's core expertise is in fluid dynamics - the modelling of particles in the air to determine its exact course (and impact) on a flying body. Even the tiniest of structures can cause turbulence which will significantly hinder the performance of their designs. As a result, aeronautical engineers are among the most analytical and detailed engineers around. </p><p>One can expect to spend plenty of time working with the latest software, wind tunnels and extremely precise measurement instruments. Making 600 tonne heaps of aluminium hurtle through the air at speeds of 1000 km/h requires pushing the laws of physics to the absolute limits. Fortunately for us, aeronautical engineers are up to the task</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Archaeologist",
    		"slug" => "archaeologist",
    		"description" => "<p>Archaeology is the study of human activity in the past, primarily through the recovery and analysis of the material culture and environmental data that they have left behind, which includes artefacts, architecture, biofacts and cultural landscapes. In Singapore, it is a niche discipline. Despite a lack of government support for archaeological work, many artefacts have been unearthed at sites around the island, with major findings for excavations at Fort Canning, Fort Tanjong Katong and Istana Kampong Glam.</p><p>As fieldwork is both expensive and destructive to the site, the bulk of archaeological study takes place in the laboratory. There, archaeologists analyse data, write reports, and interpret findings for the public. </p><p>An archaeologist’s curiosity about the past and the secrets held can make the profession a fascinating one, but the work can be tedious and exacting. It may take months just to examine thousands of tiny, nearly identical chipped stone axes!</p><p>Coursework valuable to a career as an archaeologist includes ancient history, geology, geography, English composition, and human physiology. </p><p>An interesting fact to note is that Singapore is one of the few countries in the world with no state archaeologist. As such, archaeologists here typically work in major research institutions, universities or museums. Corporate archaeologists may find work writing environmental impact theses.</p><p>This is the career path to take if you have a deep interest in how the past can shape our future and are keen on shedding more light upon cultures, history and society to achieve that goal.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Architect",
    		"slug" => "architect",
    		"description" => "<p>Architects work in the construction industry and are involved with designing new buildings, extensions or alterations to existing buildings, or advising on the restoration and conservation of old properties.</p><p>The career of an Architect usually starts off researching zoning, building codes, legal filings, draft plans, and build models at the side of a more experienced architect. As an Architect, you will work closely with your client to make sure that the designs match their needs, yet remain functional, safe and economical.</p><p>An Architect gets involved from the earliest stages of a project. This starts with developing ideas with the client, setting budgets, understanding the needs of the building and its occupants, and also measuring its impact to the environment. They will assist in site selection and work closely site with contractors, maintaining standards while making sure that the building is sustainable, functional, and safe.</p><p>A successful Architect is able to sell his idea or vision to the client – the better you are at communicating your vision will invariably contribute to your success as an Architect. Even after that, there will be constant revision and changes to your original plans. Thus, a successful architect needs talent, practical, interpersonal, and organizational skills, and most of all, patience.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Art Director",
    		"slug" => "art-director",
    		"description" => "<p>You might not be consciously aware of the fact, but chances are high that you're constantly being influenced by the work of art directors. From magazine covers, billboard advertisements on skincare to the packaging of your box of microwavable popcorn and so much more - all of it was likely conceptualised by art directors.</p><p>Art directors are the people responsible for designing print advertisements, out-of-home media material, and sometimes even artwork for moving visuals. They typically work in advertising agencies and are tasked with producing artistic concepts and artwork for their clients, ensuring that the clients’ marketing material is visually engaging and communicates a clear and evocative message to the intended audience.</p><p>Essentially, art directors translate marketing strategies into visuals that resonate with the target audience in a manner that embodies the branding of the product or company effectively, working alongside other members of the creative team, particularly copywriters.</p>As for education, most art directors hold a degree in art or a related field such as mass communication. However, relevant work experience and a strong portfolio is just as important as a university degree.</p><p>Consider becoming an art director if there’s art in your heart and you’re willing to put in long hours in an uncompromising environment that demands perfection and creative genius. You may have to work your way up from positions such as graphic designer or illustrator, but you’ll definitely be more well-rounded if you have experience of that nature to draw from.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Auditor",
    		"slug" => "auditor",
    		"description" => "<p>An auditor has the important task of making sure reports and systems are in place for corporations and governments to function more effectively by keep accounting and other pertinent corporate records up to date. They prepare, analyse, and verify financial documents for government bodies, business entities and individuals. However not all auditors deal exclusively with finance-related matters. They are sometimes required to verify that systems are working as they should be and and have the documentation. Auditors are usually responsible for identifying systemic inadequacies and sniffing out signs of misappropriation of funds, and providing solutions to correct corporate and government failings. </p><p>Due to the fact that part of an auditor's job is to fault or/and improve a system;

    		they will need a firm grasp of general accounting principles, which explains why a large number of auditors are licensed Certified Public Accountants (CPAs),
    		Public Accountants (PAs),
    		Registered Public Accountants (RPAs),
    		and Accounting Practitioners (APs).</p><p>Additionally, because large quantities of data is stored electronically, the auditor also has to be fairly well-versed in Information Technology to be able to ascertain the integrity of the audited entity.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Bioengineer",
    		"slug" => "bioengineer",
    		"description" => "<p>Bioengineering, also known as biomedical engineering, brings two closely related fields of interest together - the application of biological sciences to understand how animals and plants function;

    		and the application of engineering methods and technologies to design and develop new devices. </p><p>This includes the formulation of synthetic biomaterials, design of artificial tissues and organs, and the development of new drug delivery systems, among others.</p><p>The right education is not all an aspiring bioengineer needs. Soft skills are particularly important in the life sciences on top of expertise, because cooperation in this field is so critical. Many bioengineers conduct research along with physicians, chemists, and other scientists in hospitals, universities and research institutions. Those with advanced degrees or experience may teach in addition to doing research. Some work in hospitals where they help maintain and monitor complex medical systems while others work for companies that manufacture biomedical equipment.</p><p>Bioengineers can start off with a bachelor degree in any engineering field, but a masters degree in bioengineering, coupled with field experience, is required for serious research or academic work. They will need to constantly refresh their knowledge throughout their careers to keep up with new developments.</p><p>Asia is seeing rapid development in biomedical sciences, with Singapore as a leading bio-cluster. Singapore plays an important role in helping companies navigate Asia’s complexities and tap into the region’s markets, talent and intellectual properties. </p><p>Today, eight of the top ten pharmaceutical and all of the top ten medical technology companies have their regional headquarters here. As Singapore primes itself to become the “Biopolis of Asia”, the demand for bioengineers will continue to accelerate.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Biologist",
    		"slug" => "biologist",
    		"description" => "<p>Biologists study the origin, development, structure, and function of plant and animal life. Like medicine and agriculture, biology covers a broad area within the life sciences. In many cases, biologists are recognized according to the kind of organism that they study. For example, biologists who study animals are often known as zoologists. Biologists who specialize in plants are called botanists. Those who work with microscopic forms of plant and animal life, such as bacteria, fungi, and viruses, are known as microbiologists.</p><p>Working conditions for biologists vary widely from job to job. Most spend at least part of their time in laboratories, which are usually clean, well lighted, and well equipped. Many spend some time in offices and classrooms. Depending on their area of specialization, biologists are also likely to do some fieldwork to observe their subjects and collate data for analysis. Hence, the ability to gather, analyse and interpret data is important and present the findings coherently is important.</p><p>You can obtain an entry-level biologist positions with a bachelor’s degree and some intern experience to start your career in biology, but to work as a lead biologist on projects, you will need a Master’s degree or doctorate and several years of experience. You may work indoors and outdoors depending on the type of work, which may involve travelling to remote regions and hiking long distances while carrying field equipment. If the work requires spending time outdoors, it can be during any weather conditions.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Brand Manager",
    		"slug" => "brand-manager",
    		"description" => "<p>Having a good brand reputation is absolutely crucial to the ongoing success of any professional entity and it is the esteemed duty of brand managers to ensure that brands that they manage projects the right image and maintains that integrity consistently.</p><p>Essentially, brand managers are responsible for establishing and enhancing the brand equity of a company's line of products and overall image alongside a cross-functional team (including corporate communication, public relations, marketing, advertising, product development and sales) to implement integrated brand and corporate positioning strategies to elicit the most favourable audience and public reception possible.</p><p>Other critical undertakings of brand managers comprise conducting market analysis to assess demand for the organisation’s products and services, analysing sales figures to determine future product developments and business opportunities for the brand, crafting communication plans aimed at improving brand image, keeping the marketing and corporate communications departments abreast of new brand visions and ensuring that brand strategies are executed appropriately.</p><p>Consider this career path if you possess a knack for reputational management (most people should find you likable),
    		have outstanding communication, interpersonal and leadership skills, and have sharp business and marketing acumen.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Business Development Manager",
    		"slug" => "business-development-manager",
    		"description" => "<p>A Business Development Manager is a position that can be filled by individuals with experience as business planners or economists. It is the job of the Business Development Manager to develop additional business interests within the scope of the resources available to the company.</p><p>This could mean finding ways to increase revenue streams from new products and services, while optimizing income from existing lines through innovative marketing and quick reactions to the changing market environment.</p><p>The Business Development Manager must be agile and mobile in being a top notch salesman that understands his present product and its customer’s needs so that he may develop new strategies to maintain and extend that business. Concurrently, he may need to put on his “creative cap” in developing new markets, sourcing products and the respective customers to sell to.</p><p>While the Business Development Manager is tasked with a broad scope of responsibilities, he or she will have to work within the constraints set up by management. The Business Development Manager is concerned with the analytical preparation of potential growth opportunities for the senior management or board of directors. He will subsequently need their support in the implementation of his ideas.</p><p>The qualities needed for a successful Business Development Manager include: Excellent Interpersonal Skills, Sales Orientation, Public Relations, Leadership, Negotiation Skills, and Finance.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 0,
    		"on_the_move" => 1,
    		"formal_wear" => 1,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Chemical Engineer",
    		"slug" => "chemical-engineer",
    		"description" => "<p>Chemical Engineers are responsible from engineering microchips to food. They work in the chemical, fuel, aerospace, environmental, food, and pulp and paper industries, among many others, and are responsible for research and design to development, production, and technical sales. </p>Chemical Engineering is a job that requires problem-solving regarding practical aspects of things around us. As a Chemical Engineer, you are expected to answer the question “how” more than any other. They transform the chemist’s laboratory’s findings to make into real-world products that can be brought to market.</p><p>If a chemist invents a better fuel, a chemical engineer may be responsible in finding a way to mass-produce it and helping to bring it to market. The Chemical Engineer works with chemists, accountants, human resource personnel, and regulators to create efficient, safe and cost-effective methods of reproducing valuable items. The Chemical Engineer will be involved in planning, theoretical “modeling” of production processes, and analysis that takes place on computer or in preliminary reports. </p><p>Chemical engineers work in teams, mostly for large corporations. Engineers thrive on the intellectual challenge they get from their work. Good chemical engineers are always trying to refine manufacturing and processing systems, improve them, and make them safer and more efficient.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Chemist",
    		"slug" => "chemist",
    		"description" => "<p>Chemists use a diverse range of methods to investigate the chemical nature of substances and find new uses and applications for them. If you want to get paid to be creative while carefully producing something for the future, this is the career for you.</p><p>Chemists work closely with other experts, including chemical engineers, who plan the production and development of discoveries made by chemists;

    		sales teams, who put a marketing “spin” on their products;

    		and academic chemists, who share information at cutting-edge levels. They have a constant desire to search for the ability to manipulate matter and make more useful materials.</p><p>A Chemist builds on other’s findings, so they have to be well read. They would devour professional journals to keep abreast of the latest research findings as these new discoveries may have a direct impact (positive and negative) on their own particular work. </p><p>Chemists usually work in teams;

    		therefore their teamwork skills are \"essential\" to success in this field. Specific duties may include modeling, analysis, synthesis, research, fieldwork, and sales information management. With the multi-discipline skills that Chemists needs to master, many of them become entrepreneurs, research managers, and hazardous waste managers, as well as software and sales engineers.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Choreographer",
    		"slug" => "choreographer",
    		"description" => "<p>Choreographers create dance routines and performance sequences for dancers and other performers. They collaborate with producers, costume designers, musicians and artistic directors to develop ideas and convert the dance routines into a finished performance that suits the musical score.</p><p>They are responsible for auditioning dancers and performers, teaching dance moves, and scheduling conducting rehearsals in consultation with the producers. Naturally, they also look after the safety and welfare and the performers under their charge. The working hours are dependent on rehearsal schedules and performance show times, and can therefore be very irregular. There may even be a need to to tour overseas with the production team for major productions.</p><p>Choreographers usually have a degree in dance, and some specialise in choreography. Most begin to build their experience whilst working as dancers. As Singapore places more emphasis on the performing arts and culture, this is a sector that has much room for growth.</p><p>If you possess creativity and imagination in abundance, have an in-depth knowledge and expertise in dance, movement and music, boast good coaching skills, and work well in a big team, this could be your opportunity.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Civil Engineer",
    		"slug" => "civil-engineer",
    		"description" => "<p>Civil engineers are responsible for creating modern infrastructure - from roads, bridges and tunnels to skyscrapers and sewer systems.</p><p>These professionals are intimately involved in construction project management throught its three main phases;

    		preconstruction, implementation, and maintenance. </p><p>The preconstruction phase involves detailed planning on the part of the civil engineering team;

    		involving land surveyance, reviewing construction plans, assessing funding and needs, then making decisions pertaining to schedule, materials, and staffing.</p><p>The implementation stage is where the action begins. During this stage, civil engineers spend considerable time on-site to monitor progress and coordinate construction efforts. </p><p>This is followed by infrastructure maintenance (essentially post-construction quality testing),
    		during which the civil engineer performs stress tests, quality assessments, and provides maintenance support. </p><p>For centuries, civil engineers have toiled to redefine and enhance mobility and accessibility;

    		changing the way we live through the modification of our environment.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Commodities Broker",
    		"slug" => "commodities-broker",
    		"description" => "<p>Commodity brokers focus on investing and trading in physical commodities, which can include a wide range of entities - for example, coffee, wheat, sugar, cotton crude oil and metals.</p>Commodities brokers should have a strong grasp of economics, good financial sense and also understand the market within which they are trading/investing in.</p>As such, if you want to focus on oil, you will have to possess a keen understanding of the oil industry, and if you are interested in trading in livestock or cash crops such as coffee and cotton, you will have to have knowledge in agriculture and perhaps international trade as well as food systems.</p>These professionals often have degrees in business and/or economics, but some have other degrees, such as Agriculture and Forestry and Environmental Management.</p>If you have an interest in trading and resource management, consider becoming a commodities broker.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Copywriter",
    		"slug" => "copywriter",
    		"description" => "<p>Copywriters are responsible for the linguistic and semiotic content of advertisements, commercials and other forms of material that require text-based persuasion. They work across a variety of media and formats, making sense of advertising account briefs to produce advertorial content such as slogans, taglines as well as scripts and jingles for TV and/or radio commercials.</p><p>Advertising copywriters generally work in the creative department of an advertising or full-service agency alongside an art director. They rely on client briefs as a framework for the conceptualisation, development and production of effective and compelling advertising campaigns.</p><p>The business of advertising is a fast-paced one and copywriters need to be able to produce creative output within tight deadlines. You won’t be alone in the chaos though - you will find yourself in constant contact with media planners and buyers, and will work closely with the rest of the creative team (art directors, artists, illustrators, graphic animators, etc) in the course of developing advertising campaigns.</p><p>Copywriting is a highly creative job so besides a relevant degree, such as one in media, mass communication or advertising, you do need to have a way with words naturally. This position is best suited to people who have a talent for storytelling, both linguistically and through visuals.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Corporate Comms Manager",
    		"slug" => "corporate-comms-manager",
    		"description" => "<p>Corporate communications managers exist as the informational heartbeat and circulatory system of any organisation. They are responsible for conveying a corporate entity’s internal and external messages to employees, full range of external stakeholders, the press and members of the public.</p><p>Internally, corporate communications managers ensure that employees are aware of company’s corporate identity, culture and kept updated on new developments within and around the organisation. They disseminate executive notices, prepare presentations and internal memos for company-wide use and also in charge of developing branding strategies and providing employee training in communication.</p><p>Externally, these professionals represent the organisation they work for to stakeholders, interest groups as well as members of the press and public. Corporate communications managers may be tasked with the responsibility of being the organisation’s spokespeople, communicating carefully crafted messages through press releases/kits, interviews that enhance (or at least maintain) the company’s reputation as well as state the company’s position on issues of industry-related and public interest.</p><p>Most jobs of a corporate communications nature require a bachelor's degree, preferably in fields such as communications, media studies and public relations. Additional on-the-job experience is often a requirement for the advancement from an executive level position to a managerial one.</p><p>If you are a compelling and powerful communicator and possess exceptionally good interpersonal, leadership and organisational skills, give a career in corporate communications a shot!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Counsellor",
    		"slug" => "counsellor",
    		"description" => "<p>Within the field of social care and guidance, a counsellor works with clients to discuss their problem in a positive and unbiased way, help them explore their thoughts and feelings about certain experiences they may not normally share with others, steer them towards a deeper understanding of themselves and their concerns, and make choices for changes. </p><p>Counselling is a specialized field which involves building a therapeutic relationship with clients in difficulties and using specialized skills and strategies to help them. A counsellor does not give advice, but instead help clients to make their own choices. This could be done in different settings, to help different groups or individuals, such as in schools to help youths, and in rehabilitation centres to help people overcoming addiction problems. In order to cover the spectrum of clients’ needs, a counsellor have to be aware of other types of support and if necessary, liaise with other agencies and individuals, and refer clients to them, so as to help make changes based on the issues raised by clients. </p><p>In an increasingly fast-paced and competitive society in Singapore, more people are seeking professional assistance in the form of counselling. If you are sensitive towards people, have good listening and interpersonal skills and a high degree of self-awareness, do consider lending an ear to those in need.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Criminologist",
    		"slug" => "criminologist",
    		"description" => "<p>Criminology is the scientific study of the nature, extent, causes, and control of criminal behavior in both individuals and in society. It is an interdisciplinary field in the behavioral sciences, drawing especially upon the research of sociologists, psychologists and psychiatrists, and on writings in law. Though not holding the same perceived glamour and excitement of other jobs in criminal justice, a career as a criminologist is no less important.</p><p>The core function of a criminologist is to examine all aspects of crime and develop ways to prevent criminal behavior. Part of the job includes pouring over statistics and analysing trends and patterns to do with types of crimes as well as demographics and locations. </p><p>In the course of conducting research, they may interview criminals to learn more about their mindsets and motivations for committing crimes. They work closely with law enforcement partners, community leaders and policy makers to devise policies that reduce crime, and ensure that suspects and convicts are treated justly.</p><p>Currently, there is no degree programme for criminology in Singapore, but the Home Affairs Ministry (MHA) has announced that it plans to introduce an undergraduate degree programme in security studies and criminology starting this year. Criminologists are primarily employed by MHA or research institutions such as think-tanks and universities.</p><p>A career in criminology can allow you to positively influence public policy and help devise new strategies to fight and prevent crime. People with a talent for interpreting and explaining statistical data, who are academically-inclined, and who have a strong desire to help their communities will enjoy working as criminologists.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Curriculum Developer",
    		"slug" => "curriculum-developer",
    		"description" => "<p>Many individuals aspire to change lives through education and for most people, a career in the education sector is almost automatically associated with teaching. However, there are more job prospects within the field that are just as important;

    		one of which is curriculum development.</p><p>Whether in an academic or professional context, curriculum developers apply learning/education theory and specialised technical knowledge to create learning material and an educational experience for students with the aim of introducing new knowledge and skills to them. </p><p>So what will your work as a curriculum developer call for?</p><p>Developing and designing curricula is an interdisciplinary process, often involving education specialists, teachers, focus groups of current and potential students as well as peer reviewers. Curriculum developers typically begin by evaluating learner needs and styles, defining learning objectives and designing content material to suit a conceptualised learning environment. This will then be followed by the implementation of the actual teaching (through a teacher) and the assessment of curriculum effectiveness.</p><p>Curriculum and course designers normally work in offices, either within schools or professional environments, researching information and and liaising with subject matter experts, teachers/trainers and management.</p><p>Most employers will require curriculum developers to hold a bachelor’s degree (preferably in education) with a few years of experience in curriculum planning and/or teaching and the ability to keep up to date on trends within the education sector.</p><p>If you have excellent written, presentation, interpersonal and communication skills, are resourceful and analytical and are passionate about touching lives through education, curriculum development might be a suitable career path for you.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Dentist",
    		"slug" => "dentist",
    		"description" => "<p>A Dentist has among the most “hands on” job in the medical field. If you love working with your hands and getting paid handsomely for it, being a dentist will suit you perfectly.</p><p>A Dentist specializes in the care of teeth, gums, and the mouth. You need a keen eye for detail and manual dexterity with your hands around your patient’s mouth. The modern Dentists also deal with procedures that involve actual manipulation of the teeth or gums. Dentists have also evolved to provide cosmetic care that addresses society’s perception of hygiene and health.</p><p>If you are searching to further your skills as a Dentist, you may choose to specialize as a Endodontist dealing with the dental pulp, root and peri-radicular tissues, an Oral Surgeon that deals with the diagnosis, surgical and adjunctive treatment of diseases and injuries to the teeth, or an Orthodontist that deals with preventive and corrective procedures to reposition teeth.</p><p>The modern day Dentist has the option of being an independent operator and join most dental practices with a profit sharing fee structure as soon as they leave Dental school. All this means that a dentist can be financially independent while maintaining a healthy work life balance in relation to other medical professionals – like surgeons and doctors that have to do years of on the job training as housemen at hospitals.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Diagnostic Radiographer",
    		"slug" => "diagnostic-radiographer",
    		"description" => "<p>A Diagnostic Radiographer/Medical Imaging Technologist is a key member of the health care team. They are responsible for producing high quality medical images that assist medical specialists and practitioners to describe, diagnose, monitor and treat a patients injury or illness. Much of the medical equipment used to gain the images is highly technical and involves state of the art computerisation.</p><p>A Diagnostic Radiographer/Medical Imaging Technologist needs to have the scientific and technological background to understand and use the equipment within a modern Radiology department as well as compassion and strong interpersonal skills. They need to be able to demonstrate care and understanding and have a genuine interest in a patient's welfare. The Diagnostic Radiographer/Medical Imaging Technologist will also need to be able to explain to the patient the need for the preparation and post examination care as well as the procedure to be undertaken.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 0,
    		"on_the_move" => 0,
    		"formal_wear" => 1,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Digital Animation Artist",
    		"slug" => "digital-animation-artist",
    		"description" => "<p>Digital animation artists are artists who create digital images and use computer programmes to bring them to life by creating on-screen movement through the rapid sequencing of static frames.</p>In the highly digitised world, digital animation artists play important roles in various areas - from the entertainment industry to defence sector. However, most digital animation artists favour and find jobs in media and entertainment.</p>Much of the work produced by digital animation artists can be seen in films, computer/console games, websites and on websites. Specialisations include 2D animation, 3D modelling and animation, stop-frame animation, special effects animation and character animation.</p>Digital animation artist typically contribute to projects as members of a team, collaborating with creative directors, film producers, storyboard artists, game developers and video editors. </p>Most digital animation artists hold degrees in animation and digital art and will pick up tricks of the trade on the job.</p>If you’re artistic and have a passion for bringing digital art to life, consider a career in digital animation!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Doctor",
    		"slug" => "doctor",
    		"description" => "<p>A Doctor devotes his practice to assessing and treating general medical ailments. They typically practice in the neighbourhood setting and cares for the health of families living in that area. They diagnoses and treat a large variety of diseases and conditions but does have the option of referring certain conditions to a specialist for further investigation and management.</p><p>The Doctor is also known as a “family doctor”. The job scope of the Doctor is fairly diverse. You may see patients that bring their children in for swallowing a coin to more severe cases where you have to refer then to a hospital with the facilities that can properly treat them.</p><p>A Doctor may run specialist clinics for patients with specific conditions such as skin care. They increasingly work as part of a team alongside other healthcare professionals, including community health doctors, to discuss care options for patients and their families and help patients to take responsibility for their own health.</p><p>A Doctor needs to have very good bedside manners to be able to put patients at ease as well as to properly communicate their questions and instructions. Doctors are usually located within the communities they serve so it is very possible that they will form long-term relationships with patients and their families. This makes the job of a Doctor profoundly enriching.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Ecologist",
    		"slug" => "ecologist",
    		"description" => "<p>Ecologists are concerned primarily with ecosystems, the aggregation and distribution of organisms within as well as the varied relationships between these flora and fauna and their environment. Due to the broad nature of the job, ecologists normally opt to focus on a specialist area, such marine, desert, subterranean, to study and carve out a niche in.</p><p>Entry-level or junior ecologists typically engage in activities geared towards identifying, recording and monitoring species and their environments. Ecologists in senior positions have a much larger job scope;

    		their professional focus may expand to cover work of a management-centric or policy-based specification.</p><p>The precise duties of ecologists will depend on the nature of their employers and the job objectives. For example, you may work with urban planning authorities to perform environmental impact assessments on development projects or be tasked to curate and manage ecological data for research and archival.</p><p>Being an ecologist can be very gratifying as a career for someone who thrives on experiencing the great outdoors and enjoys observing and studying living organisms. The nature of the job means that your work environment changes relatively frequently, which is more stimulating than a regular desk job. However, ecologists typically do not rake in high salaries, so you’ll have to be sure you feel passionate about this job and its prospects.</p><p>If the desire to protect and preserve the planet comes is second nature to you, go forth and inhabit the world of ecology as an ecologist.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Economist",
    		"slug" => "economist",
    		"description" => "<p>Economists study how society distributes resources, such as land, labor, raw materials, and machinery, to produce goods and services. By amassing and studying such data and statistics and using their understanding of economic relationships to uncover trends, they then provide specialist advice based on the application of economic theory and knowledge to assess feasibility, produce forecasts of economic trends, determine the implications of their findings and make recommendations of ways to improve economic efficiency.</p><p>These professionals are employed by government agencies, economic consultancies, major companies, banks, financial institutions, utilities boards, higher education establishments and investment organisations. Since economics is a very broad field, they often specialise in more focused areas of interest, such as industrial productivity, taxes, farm policies, or international trade. They may develop hypotheses to explain problems such as unemployment or inflation. They often advise governments or businesses on ways to cope with economic problems. Economists usually study many forms of economic data in their work. Because economic activity is measured numerically, economists must be skilled in using statistics and mathematical analyses as well as economic theory. They often use computerised data in their work. </p><p>As an Economist, you often work alone, writing reports, preparing statistical charts, and using computers, but you are also an integral part of a research team. The ability to work under pressure of deadlines and tight schedules, which may require overtime, is a must, and routines are frequently interrupted by special requests for data and the need to attend conferences. Presenting results that are easily understood in a diplomatic and persuasive manner is an important part of the work in ensuring that arguments and outcomes will be readily accepted.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Electrical Engineer",
    		"slug" => "electrical-engineer",
    		"description" => "<p>Electrical Engineers design, implement, maintain, and improve all the electronics everyone uses everyday. They do this while focusing on economy, safety, reliability, quality and sustainability. If you love all things that encompass technology – this career’s for you.</p><p>Electrical Engineers may “father” projects from the concept and detail of the design through to implementation, testing and finally handover. That is not all as Electrical Engineers may be involved in the project’s maintenance programs. These projects may span different sectors;

    		for example, in the building industry Electrical Engineers may be involved in the electrical design of the lighting, heating, and ventilation systems.</p><p>The day-to-day activities of Electrical Engineers include studying technical manuals, reading articles and publications;

    			designing, testing, assembling devices, and writing reports to track on various projects. Needless to say, computer skills are important. This is second to interpersonal skills as there is a quite an amount of interpersonal communication required within projects.</p><p>To be successful in this career, you need to possess a firm grip of the technical knowledge involved. A good Electrical Engineer needs to project manage and multitask. They also need to have commercial awareness. Additional attributes, such as team leadership or management skills, are required as the Electrical Engineer’s career progresses.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Electronics Engineer",
    		"slug" => "electronics-engineer",
    		"description" => "<p>Electronics Engineering engages in the technology associated with electronic circuits and systems. It is a discipline that uses scientific knowledge of the behavior and effects of electrons to create components, devices, systems or equipment that uses electricity as part of its source of power. These components include capacitors, diodes, resistors and transistors. This may sound technical to some, while captivating to others.</p><p>Electronics Engineering touches on almost all areas of human activity with a diverse array of applications. They include acoustics, defence, medical instruments, mobile phones, nanotechnology, radio and satellite communication and robotics. Subfields of electronics engineering include control engineering, instrumentation, signal processing and telecommunications engineering.</p><p>Electronics Engineers work on a project from the initial brief for a concept;

    		through the design and development stage;

    		to the testing of one or more prototypes;

    		and through to final manufacture and implementation of a new product or system.</p><p>Some of the duties of an Electronic Engineer include: design new electronic systems, testing theoretical designs, creating user-friendly interfaces, and ensuring that a product will work with devices developed by others.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Environmental Manager",
    		"slug" => "environmental-manager",
    		"description" => "<p>Environmental Managers are responsible for ensuring the wellbeing of the environment, both natural and man-made, and the organisms, including humans, that inhabit those environments.</p>As part of the job, environmental managers are expected to conceptualise, implement and evaluate environmental policies and programmes that promote environmental balance and sustainable development.</p>Environmental managers may work for the government to develop policies and enforce regulations in the public sphere or within organisations to monitor and assess corporate activities so as to ensure organisational compliance with environmental legislation.</p>Most environmental managers hold at least a bachelor's degree in fields such as environmental science, environmental management, public policy, health sciences and bioscience and may undergo specific training to prepare them for their jobs.</p>If you’re passionate about environmental management and are keen on leaving a positive footprint on the planet, this might be the career for you!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Film Director",
    		"slug" => "film-director",
    		"description" => "<p>The director is the head of the production unit. He/she he is responsible for directing the actors, and for translating the teleplay into cinematic images in accordance with his/her vision. It usually begins upon receiving the script, although in some cases, the director may also be the scriptwriter. S/he takes charge of the overall look, sound and style of the feature film, and makes creative decisions that chart the direction for the rest of the crew.</p><p>That artistic vision will guide the work of the film crew as they search for suitable locations, hire the cast, design the sets and lighting and finally edit and dub the finished recording. The working hours on a shoot would often be long and irregular according to the demands of a production. Work locations and conditions vary depending on where the production is filmed.</p><p>There are many routes to becoming a director. Aspiring directors should possess substantial practical experience in the film industry, in-depth understanding of the production process, and a network of contacts within the industry. It is critical that you make short films to build your portfolio. </p><p>Becoming involved in theatre, student or community projects can also help demonstrate your creative abilities and aptitude in directing. A creative and sharp mind and the ability to manage the demands of the entire production and performance crew is imperative.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Financial Adviser",
    		"slug" => "financial-adviser",
    		"description" => "<p>Financial advisors offer advice to people and corporations regarding matters relating to investments, taxes and insurance decisions, assisting clients in managing their finances and investment portfolios.</p><p>In the past, the job of a financial advisor was centred around the buying and selling of securities (such as stocks and bonds) on behalf of their clients. However, modern day counterparts take a more holistic approach to helping their clients, requiring knowledge of budgeting, forecasting, taxation, asset allocation as well as the use of financial tools and strategy to help achieve their clients' financial goals.</p><p><p>The tools that a financial advisor may employ to help their clients achieve their goals include stocks, bonds, mutual funds, real estate investment trusts (REITs),
    		options, futures, notes, and insurance products. Therefore, a comprehensive understanding of these tools is crucial to being a credible financial adviser.</p>Additionally, a financial adviser has to be savvy enough to translate their clients' needs into customised financial plans that will fulfil those needs. This requires financial advisers to be analytical and intuitive, and be able to relate to their clients in a manner which encourages trust. Essentially, you'll need to be both financially and socially adept!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Financial Analyst",
    		"slug" => "financial-analyst",
    		"description" => "<p>“The devil is in the details”, and the Ghostbuster of the financial world to find out about the details of each deal is the Financial Analyst. The Financial Analyst sniffs out the good and bad deals in the World of mergers, acquisitions, and Finance. Unlike Academia, their calls will judged and accounted for by those that read their reports and put money into the deals they recommend.</p><p><p>Financial analysts gather information, assemble the data into spreadsheets, and write analysis and reports. In addition, they review all non-legal pertinent information about prospective deals. They examine the feasibility of a deal and prepare a plan of action based on their financial analysis. A Financial Analyst needs to be aware of the financial trends, latest news that will affect the markets, the markets movements, and industry profiles.</p><p>They will also needs to be creative in acquiring their information and data. Not all data are publicly available, an analyst will need to meet and greet their industry peers to get the “lowdown” on certain trends in the markets. In addition they will also need to visit certain businesses to get a “look and feel” of the industry of company they are researching on.</p><p>The job of the Financial Analyst involves long and arduous hours, but those that generate any form of success will inevitably move on to greater pastures or start out on their own with their following of clients.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Food & Beverage Manager",
    		"slug" => "food-beverage-manager",
    		"description" => "<p>A Food and Beverage Manager’s main responsibility is to manage the operation of the food and beverage function in a restaurant or hospitality-centric establishment such as a hotel. The job primarily involves marketing food and beverage products to maximise sales as well as working with the Food and Beverage Director and chef de cuisine to develop new menus and cuisine concepts.</p><p>Food and beverage managers may also be put in charge of overseeing budgets, maintaining sales targets, and purchasing stock and developing quality control guidelines. Additionally, food and beverage managers will take on the responsibility of training and monitoring F&B staff to meet high standards of service and customer care.</p><p>The position of food and beverage manager requires familiarity with licensing laws, hygiene regulations and other legal formalities to assist staff with health and safety compliance.</p><p>Typically, a degree in hospitality management and some relevant experience is required for the position and you might want to consider this career if you love dealing with food and people and have a keen desire to advance in the hospitality industry.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Food Scientist",
    		"slug" => "food-scientist",
    		"description" => "<p>Food scientists perform a critical role in developing and maintaining our food supply. They use their knowledge of chemistry, nutrition, and biology to develop methods of packaging, preserving, processing, and distributing the foods that we eat each day. Commonly working in product development, they lead teams of food science technicians who conduct research and experiments to learn more about food and nutrition. As a team, they are sometimes able to identify new food sources or develop ways for making processed foods safer and more healthy.</p><p>They may also concerned with producing enough food to feed the growing world population. Some food scientists are trying to find new sources of protein. The development of meat substitutes made from soybeans and other vegetation is one example of new solutions to the problem of food shortages. Although food scientists are mainly concerned with nutrition, they also pay attention to the flavor, appearance, and texture of processed foods.</p><p>Some food scientists work in quality control at food processing plants or inspectorate appointments with government agencies. They examine the foods that are produced and packaged, and make sure that they are free of contaminants and contain the correct mixture of ingredients. By inspecting the products, they ensure that consumers only receive products that meet the organisation's quality and safety standards.</p><p>If you are curious and innovative, want to use your knowledge to invent some quality food choices for people working towards following a healthy lifestyle, or even try to solve the global famine issues, no reason to chew on it!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Foreign Service Officer",
    		"slug" => "foreign-service-officer",
    		"description" => "<p>Foreign Service Officers (FSOs) are employed within the government to safeguard and advance Singapore's interests worldwide. They represent Singapore overseas as a Diplomat, and have a good grasp of world affairs and a firm understanding of Singapore's position.They may be stationed at some of over 40 Overseas Missions throughout their career.</p><p>There are two possible career tracks as FSO: (1) Political and Economic, and (2) Functional and Corporate Services.</p><p>FSOs (Political and Economic) represent Singapore in visits, meetings, conferences, and multilateral negotiations. They provide advice on developments concerning Singapore’s strategic interests, and work closely with other government agencies to develop domestic and foreign policies.</p><p>FSOs (Functional and Corporate Services) manage the daily operation and administration of the ministry and embassies. They provide consular assistance and help Singaporeans in distress. They also formulate and implement corporate policies within the ministry/embassies.</p><p>FSOs require keen networking skills to cultivate and maintain close ties with people at all levels, and must be ready to work in challenging foreign environments. If you are able to persuade and assert, and cultivate good interpersonal relations while keeping our interests at heart, and are prepared to defend Singapore's position on the global stage, this is your opportunity.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Game Designer",
    		"slug" => "game-designer",
    		"description" => "<p>The digital game industry is a thriving, highly dynamic and competitive multi-billion dollar international industry. The global game market alone is valued at an estimated US$15 billion, is more profitable than the US film industry and looks set to become the leading influence on the metamorphosis of popular culture.</p><p>In the formative years of game development, up until the 1980s, game designers were lead programmers rolled into one and usually worked solo on projects. However, as games took on more complex forms and computers became more powerful, the job of the game designer evolved into a distinct function, separate from that of the lead programmer. </p><p>In time, growing complexity demanded an exclusive emphasis on game design, making game designers ever more important to the process of game development.</p><p>With its ever-expanding nature, many governments have begun investing heavily in this rapidly developing sector to imbue and upgrade the skills of gaming technology professionals to ensure the industry continues to evolve and advance, which means that becoming a game designer is a very viable career option at this point in time and will likely be for the next decade.</p><p>However, even if creating and constructing virtual worlds is your passion, to succeed in this field, you will have to demonstrate acumen in design, psychology, have sound knowledge of history and the ability to tell captivating stories.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Geographer",
    		"slug" => "geographer",
    		"description" => "<p>Geographers examine the impact of geography on a particular field, such as climate, urbanisation and the economy.</p>These professionals generally fall into two major categories - physical geographers and human geographers. Physical geographers examine natural landscapes, climate, flora and fauna. Human geographers can specialise in the areas of environmental, social, economic, political, urban. </p>Most geographers hold a degree in Geography or Environmental Science. Additionally, specific coursework is required various specialties. For example, Political geographers should take political science and public policy while environmental geographers should take chemistry, biology and environmental studies.</p>If you have a passion for the study of nature and analysing the effects of human activity on the earth, consider a career as a Geographer.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Geologist",
    		"slug" => "geologist",
    		"description" => "<p>The work conducted by geologists revolves around analysing the Earth’s geological processes and understanding the history of the planet to better shed light upon how geological events of the past might exert influence on the present and future. </p><p>Essentially, geologists tend to focus their research, analysis and forecasting on three areas - earth materials, earth processes and earth history. </p><p>The degree of reliance humans have on natural resources is so great that there is a danger of depletion to an extent which would not only affect the planet’s equilibrium but also endanger human survival. Geologists spend much of their career examining and testing natural resources such oil, gas, metals, water and rocks to determine the health of the planet and aid in devising more effective and efficient alternatives to the use of these materials.</p><p>In terms of earth processes - such as floods, hurricanes and tectonic plate movement - the main reason geologists focus so much on this area is to generate trend analysis reports to more accurately forecast possible future occurrences of destructive earth processes. This information is useful in making sure important structures do not get built in disaster-prone regions and to help develop better disaster management technology and strategies.</p><p>Earth history is no less important - geologists study phenomenon such as climate cycles and past climates conditions to gain insight on the rising temperatures which have left people the world over highly concerned.</p><p>Geologists are hired to work in a myriad of settings. These include universities, environmental consulting agencies, natural resource companies, non-profit organisations. </p><p>While you might spend a considerable amount of time in offices and laboratories conducting experiments, doing calculations and writing reports, prepare to be involved in some fieldwork throughout the course of your career.</p><p>So, if you’re interested in all things Planet Earth, you may find yourself gravitating towards Geology as a career.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Guest Relations Manager",
    		"slug" => "guest-relations-manager",
    		"description" => "<p>Guest relations managers deal primarily with the task of ensuring that the customers of the establishment they represent are kept happy and have all their needs fulfilled. Guest relations as a function falls under the purview of public relations and is important for the reputational management of the establishment.</p><p>The main responsibilities of a guest relations manager is essentially to promote a positive image of the hospitality establishment and ensure guest satisfaction through interacting with guests/customers.</p><p>This encompasses greeting guests, providing them with useful information, anticipating and responding to their needs and desires, resolving problems and managing frontline staff members to ensure productivity and that the highest level of customer service is offered</p><p>Beyond the fundamentals, guest relations managers also regularly analyse customer feedback and assist in developing new guest relations strategies to improve customer loyalty and secure repeat patronage.</p><p>A guest relations manager is usually required to hold a degree in hospitality management and have some years of experience working in customer service positions.</p><p>If you’re the sort that can naturally make people feel at ease around you with your warm personality, great communication skills and keen awareness of what people need as well as have a passion for all things hospitality, make yourself at home by taking up guest relations as a career.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 0,
    		"smart_casual" => 0,
    		"on_the_move" => 1,
    		"formal_wear" => 1,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Historian",
    		"slug" => "historian",
    		"description" => "<p>So you’re the kind of person who regularly gets accused of bringing up the past;

    		someone who doesn’t live in the present and is unable to let bygones be bygones.</p><p>Hopefully, all this refers more to your obsession with History and eras of yonder than a psycho-emotional disposition that would send your friends running for the hills.</p><p>Historians are concerned with the ever-evolving, scrupulous narrative and research of past events from a socio-anthropological perspective and are often considered chronologers as a result of their research. Career historians typically work in universities and institutions of higher learning, museums, archival/research centres, government agencies and as consultants.</p><p>The job often involves meticulous investigation and analysis of competing ideas, facts and commonly-accepted assumptions to generate theories and narratives to account for what happened and why or how said event/phenomenon happened with the aid of other humanities disciplines;

    		including economics, sociology, politics, psychology, anthropology, philosophy and linguistics.</p><p>If the notion of studying and writing about the past for doing so is the best present you could give yourself, consider becoming a Historian.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Human Resource Consultant",
    		"slug" => "human-resource-consultant",
    		"description" => "<p>As corporations face constant changes, so do their need for human resources. A good Human Resource (HR) consultant is therefore always in demand. Human Resource Consultants are responsible for maximizing their client's performance in relation to human resources by introducing or marketing products or services to clients.</p><p>To achieve their goals, the HR Consultant may need to help their client’s on Human Capital, Mergers and Acquisitions, Communication, and Recruitment process needs.</p><p>Being a human resource consultant is not just about matching employers and employees, they are also expected to focus on ways to keep the current staff by recommending appropriate remuneration packages and methods to boost moral.</p><p>As this job entails a very wide spectrum of expertise that are integral to their clients success, a HR consultant needs to have the relevant experiences \"in the trenches\" -- actually developing and delivering HR services, programs, and practices to an organization. They must have a solid background in everything from operations to strategy and understand the workflow and how it integrates with the organization at-large. They must also be well versed in the local regulations and laws.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Human Resources Manager",
    		"slug" => "human-resources-manager",
    		"description" => "<p>Human resource managers are the guardians of people and productivity within organisations and are responsible for developing and implementing strategies and policies that benefit the company through the effective management of employees.</p><p>The aim of human resource professionals is to ensure that companies hire the best people for the positions available, establish and sustain a healthy company culture and environment, and provide staff members with opportunities for personal and professional development in a bid to enhance individual and organisational performance.</p><p>So, what can you expect yourself to be doing as a Human Resource Manager?</p><p>No matter which industry or organisation you decide to work for, your job will likely involve the development and implementation of policies relating to recruitment, payroll administration, corporate culture and working conditions, employee relations, conflict resolution, performance management and training. You will also be called upon to interpret and provide consultations on employment and corporate law and, on occasion, plan events for company personnel.</p><p>Most human resource managers have a bachelor’s degree (not necessarily in human resource management),
    		are certified human resource practitioners and have a few years of experience working in human resource at the executive level.</p><p>If you consider yourself a people-person, have very good communication and interpersonal skills, can work well in a corporate environment with personnel from all levels (entry level to higher management) to represent their interests and possess an analytical and creative mind for policy-setting, you could consider becoming a human resource professional.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Interior Designer",
    		"slug" => "interior-designer",
    		"description" => "<p>If you fancy yourself to have a keen sense of style and love furnishings, perhaps being an Interior Designer may suit you. An interior designer is involved in the design or renovation of internal spaces, including structural alterations, furnishings, fixtures and fittings, lighting and color schemes.</p><p>An Interior designer may work on commercial, leisure and residential properties, and oversees the project from beginning to end. As an Interior designer, your objective is to enhance the function, safety and aesthetics of interior spaces while taking into account how different colors, textures, furniture, lighting and space work together to meet occupants' or visitors' needs.</p><p>The interior designer is an engineer and an artist, and it takes a unique type of mind to handle both of those concepts well. Interior designers have to be good with more than color, fabric, and furniture;

    		interior designers must know materials, have budgeting skills, communicate well, and oversee the ordering, installation, and maintenance of all objects that define a space.</p><p>Having a keen sense of style and knowledge of design alone is not enough. To be a successful interior designer you have to be up to date with the current styles of furnishing, this means meeting suppliers and constantly looking at other people’s work to help your differentiate your available options. You also need to do a lot of public relations work to get yourself known so prepared to mingle around and pass out your business cards.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Journalist",
    		"slug" => "journalist",
    		"description" => "<p>The career Journalist may present their work on a multitude of platforms;

    		newspapers, magazine, television (broadcast),
    		or any of the online publications (including blogs). However, one thing will always remain the same – they will source, research, write and present quality work to a wide audience.</p><p>One of the most distinguishing features of being a Journalist is that they have to work against datelines while reporting quickly and accurately – usually in the highest standards upheld by their industry peers.</p><p>Journalists must maintain a point of view while remaining objective about their subject matter without being too involved to avoid biasness. Most Journalists work under the supervision of an editor who will assign specific topics for the journalist to research and wrote on. While journalists should have impeccable writing skills, their writing styles may be edited, so they cannot be too protective of that.</p><p>Long hours and a constant need to make deadlines are a major drawback of this profession. When there is a breaking story, a journalist has to drop everything to get the story and submit it by a dateline or else it becomes old news.</p><p>Despite the low starting pay and drawbacks, many journalists find the prospect of using their writing to inform a large audience a fair tradeoff to be allowed to do what they do.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Lawyer",
    		"slug" => "lawyer",
    		"description" => "<p>A lawyer’s job is to know the laws and regulations of a country very well, and help their clients protect their interests especially in times of disagreement. A country (or jurisdiction) has rules that ensures individuals and companies and even government itself behaves in an acceptable way. This governs all sorts of actions from murder to taking up a mortgage to evading taxes to death. There are different types of law that lawyers can specialize in, including corporate law, tax law and criminal law. </p><p>A lawyer spends most of their time understanding the client’s situation. This could mean finding out everything about the history, health and whereabouts of an alleged murderer, or understand how a bank wants to handle a mortgage payment when the owner misses his/her monthly payments. Of course, to understand how the law will apply, they have to spend a lot of time on research. Mostly understanding what laws are applicable, interpreting and also finding out how similar cases were dealt with historically (also known as precedence). </p><p>Lawyers prepare legal documents which carefully list out matters that need to be clarified, and scenarios that need to be worked out. Unfortunately, lawyers have a tendency to write in a legal tone which can be hard for the layman to comprehend.</p><p>Sometimes a client’s dispute requires a judge to determine the outcome.The lawyer will then attend trials to represent his or her client, and either defend the client against charges or prosecute the accused.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 1,
    		"smart_casual" => 0,
    		"on_the_move" => 0,
    		"formal_wear" => 1,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Logistics Manager",
    		"slug" => "logistics-manager",
    		"description" => "<p>Logistics managers, also known as supply chain managers, are in charge of overseeing the storage and distribution of physical goods. Their job entails them making sure that the right items are delivered to the correct location in good time and at an affordable cost, with the knowledge of warehousing and distribution, procurement, supply chain management and freight forwarding.</p>To perform their function effectively, logistics managers need to have an understanding of every aspect of the supply chain so they will be able to manage it efficiently;

    		liaising with manufacturers, distributors, retailers and consumers is part and parcel of the job. Also, dealing with legal, cultural and environmental issues is commonplace for a logistics manager.</p>Additionally, due to the advent of and development within the digital marketplace, logistics managers have to be well-versed in e-commerce technologies and IT systems to monitor stock quantities, electronic orders and delivery tracking, to name a few elements. </p>Logistics managers are typically expected to have a degree in Supply Chain Management, Logistics Management (or simply, Logistics),
    		Operations and Process Management.</p>If you’re intrigued by what goes on behind the scenes when you purchase items online or for a physical store and would like to be part of the logistics, operations and freight forwarding industry, perhaps consider a career in logistics management! </p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Management Consultant",
    		"slug" => "management-consultant",
    		"description" => "<p>Management consulting is a practice that involves external professionals (management consultants) analysing and improving the performance of companies (their clients) through strategy development, organisational restructuring, financial oversight, technology augmentation, human resource management and industry analysis – as well as the potential loss of personal time and a social life.</p><p>Despite the demanding and fast-paced nature of the job, management consulting is considered a prestigious career option by many graduates because of the intellectual challenges , monetary benefits and broad-spectrum experience the position offers.</p><p>A fresh graduate looking to pursue professional advancement in the realm of management consulting may stand better chances of success joining a consulting firm with existing clients and a favourable reputation to gain insight on the job before venturing out as an independent consultant.</p><p>Management consultants are very mobile and often spend large amounts of time in the offices of their clients. They are hired on a project-basis, for a specified period of time determined by their clients and work closely with the management and staff of their client companies across various departments to find solutions to problems which have negatively affected their clients’ business viability.</p><p>Depending on where your interests and expertise lie, you may want to sign on to a firm which provides a comprehensive range of services to its clients or one that specialises in certain functions (business development, communications, IT, finance, HR) or sectors (pharmaceuticals, education, charitable movements, legal services, media).</p><p>If you possess a supremely analytical mind, are well-informed and inquisitive, can work splendidly with others and on tight deadlines, have a compelling desire to succeed as well as friends who won’t mind you taking repeated rainchecks on scheduled social events ever so often because your hours are that ridiculously unpredictable, consider making a name for yourself in management consulting.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Manufacturing Engineer",
    		"slug" => "manufacturing-engineer",
    		"description" => "<p>Manufacturing engineers plan, design, set up, modify, optimise and monitor manufacturing processes to produce quality goods efficiently using the most cost-effective methods.</p>Manufacturing engineers are analytical and creative thinkers and also possess technical dexterity.</p>These professionals often find gainful employment in a variety of sectors including pharmaceuticals, food and beverage and a range of consumer goods, and often collaborate with engineers of other disciplines. Some manufacturing engineers go on to assume managerial roles in companies.</p>Most manufacturing engineers have a degree in manufacturing engineering, but others come from different educational backgrounds, such as Applied Manufacturing Science or Industrial and Product Development.</p>If you’re all about refining and streamlining your way through manufacturing processes to produce a product of superior quality, perhaps a career in Manufacturing Engineering will suit you.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Marine Engineer",
    		"slug" => "marine-engineer",
    		"description" => "<p>Marine engineers are responsible for the design, development, maintenance and repair of seafaring vessels and maritime installations such as passenger ships, cargo barges, warships and oil rigs, for example.</p>Work of this nature requires a high degree of teamwork and marine engineers often coordinate the activities of their team (which mostly comprise other engineers and technicians) and assume overarching responsibility for projects, ensuring that they are completed safely, on time and to specification.</p>Expectedly, marine engineers should hold a degree in engineering, preferable of the marine or mechanical disciplines, and have a good understanding of multiple branches of engineering and must be familiar with the use of cutting-edge design and measurement tools such as computer-aided design programmes.</p>If you’re interested in maritime structures and have a passion for engineering, this might be just the job for you!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Marine Scientist",
    		"slug" => "materials-scientist",
    		"description" => "<p>Whether naturally-occurring or man-made, everything in the environment around us is composed of chemicals and can be manipulated and enhanced to produce new and improved material for existing or novel applications.</p><p>This is essentially the domain of the materials scientist, whose job is to acquire new knowledge pertaining to chemicals and use that information and insight to improve life. For instance, chemical and materials research has led to the discovery and development drugs, cosmetics, synthetic fibres, composite metals, electronic components and a plethora of other products.</p><p>Applications of materials science have also benefited processes such as oil and petrochemical refining, improved the automotive and aerospace industries, and led to progress within agriculture, medicine and architecture, to name a few areas.</p><p>With all that said, what can you expect from a career in materials science?</p><p>Materials engineers are tasked with researching and overseeing the development of the specifications, design and production of materials to advance technologies and industries of a varied nature. Their core competency lies in understanding the properties and behaviours of different chemical substances, at every stage of the production process.</p><p>Working in a diverse range of industries, materials engineers combine or modify materials in different ways to improve the performance, durability and cost-effectiveness of processes and products.</p><p>Most materials scientists will typically hold a degree in materials engineering or materials science, although other engineering and science-based degrees are likely to be recognised as acceptable entry qualifications.</p><p>If you’re interested in the chemistry of materials and creative applications for existing and newly-developed products based on these materials, have an analytical mind and are meticulous, enjoy working in structured environments and can constantly keep abreast of developments and trends in the industries you work in, go for a career in materials science.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Materials Scientist",
    		"slug" => "materials-scientist",
    		"description" => "<p>Whether naturally-occurring or man-made, everything in the environment around us is composed of chemicals and can be manipulated and enhanced to produce new and improved material for existing or novel applications.</p><p>This is essentially the domain of the materials scientist, whose job is to acquire new knowledge pertaining to chemicals and use that information and insight to improve life. For instance, chemical and materials research has led to the discovery and development drugs, cosmetics, synthetic fibres, composite metals, electronic components and a plethora of other products.</p><p>Applications of materials science have also benefited processes such as oil and petrochemical refining, improved the automotive and aerospace industries, and led to progress within agriculture, medicine and architecture, to name a few areas.</p><p>With all that said, what can you expect from a career in materials science?</p><p>Materials engineers are tasked with researching and overseeing the development of the specifications, design and production of materials to advance technologies and industries of a varied nature. Their core competency lies in understanding the properties and behaviours of different chemical substances, at every stage of the production process.</p><p>Working in a diverse range of industries, materials engineers combine or modify materials in different ways to improve the performance, durability and cost-effectiveness of processes and products.</p><p>Most materials scientists will typically hold a degree in materials engineering or materials science, although other engineering and science-based degrees are likely to be recognised as acceptable entry qualifications.</p><p>If you’re interested in the chemistry of materials and creative applications for existing and newly-developed products based on these materials, have an analytical mind and are meticulous, enjoy working in structured environments and can constantly keep abreast of developments and trends in the industries you work in, go for a career in materials science.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Mathematician",
    		"slug" => "mathematician",
    		"description" => "<p>Though many people assume picture mathematicians scribbling complex problems on chalkboards, mathematicians can be found in numerous industries from business to science. Two main groups of mathematicians exist: theoretical, or pure, mathematicians who analyse or come up with new mathematical methods and applied mathematicians who teach or solve practical problems in fields such as economic, scientific, engineering, physics, and business. There are often overlaps between these two branches.</p><p>Mathematicians working in theoretical mathematics are concerned with expanding and clarifying mathematical theories and laws. They seek to increase basic knowledge about mathematical relationships and formulate new laws of mathematics. </p><p>Although the few mathematicians in theoretical research do not consider the practical uses of their findings, their work has been essential in many areas of science and engineering. For example, a new kind of geometry developed in the 1850s formed part of the basis for the theory of relativity, which in turn made the development of nuclear energy possible. Theoretical mathematicians are regularly involved in teaching within an academic institution as well.</p><p>Applied mathematicians solve specific problems or provide mathematical analyses and trends in such fields as physical science, social science, business, computer science, government, biology, and engineering using existing mathematical theories, computers and algorithms. They are likely to work within an interdisciplinary team involving engineers, economists, physicists and scientists.</p><p>If crunching numbers and problem-solving are your forte, count on a career in Mathematics.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Mechanical Engineer",
    		"slug" => "mechanical-engineer",
    		"description" => "<p>Mechanical Engineers provide solutions using Engineering Principles. They strive to provide efficient solutions to the development of processes and products. This may range from small component designs to extremely large plant, machinery or vehicles. Mechanical Engineers engage the principles of math and physics to help with the design of a product. These skills are used by multiple industries, adding to the excitement of mechanical engineering.</p><p>Mechanical Engineers may designs a range of products ranging from tiny measuring instruments to hugh aircraft carriers. Their objective is to improve our world with what they build. Anything that uses mechanical motion like medical devices to engines can be designed and built by them. They research and development new ways to make things work better.</p><p>Their usually work from a product’s conception to end starting at research and development to design and manufacture, through to installation and final commissioning. A Mechanical Engineer’s work may be specialized, such as robotics or automotive engines.</p><p>Most mechanical engineers are responsible for a single component of a very large system. This individual would work from established and desired requirements, with the goal to discover the most effective and efficient solution.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Media Account Manager",
    		"slug" => "media-account-manager",
    		"description" => "<p>A media account manager is central to maintaining a strong, open relationship between the agency which he/she represents and the client being serviced.</p><p>Media account managers usually work within advertising or multi-service firms, fulfilling the role of liaison between clients and the agency. They are responsible for managing communication between the client and other agency staff members for the purpose of coordinating advertising campaigns.</p><p>Additionally, these individuals work closely with their clients throughout the duration of campaigns, often communicating with them on a daily basis. They handle administrative work associated with campaigns, make pitches to clients and manage clients’ advertising budgets and is a position that can involve juggling up to four client accounts.</p><p>Most account managers hold a bachelor's degree in a communication-related field and/or three years of industry experience.</p><p>Account servicing/management is a typical entry point for people keen on a career in the advertising sector. Be warned though - it’s not exactly a walk in the park. The job calls for exceptionally good communication and interpersonal skills, negotiation aptitude, leadership presence and the ability to multitask and perform under</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Medical Lab Officer",
    		"slug" => "medical-lab-officer",
    		"description" => "<p>The laboratory office is the nut that keep all the screws in the lab tight. He is responsible for managing all aspect of the analysis of biologic and related materials in laboratory environment.</p><p>As a laboratory officer, you will direct and supervise laboratory services. To do that effectively, you will need to maintain records and reports on laboratory operations necessary to provide accountability of the work done. A laboratory officer will also need to perform lab work in one or more areas of biomedical laboratory disciplines including clinical chemistry, environmental and industrial hygiene, chemistry, toxicology, microbiology, hematology, coagulation, serology, immunology, blood banking, immunohematology and virology.</p><p>The work of the laboratory officer also includes the specialized task of developing and evaluating procedures, techniques, and equipment for updating the laboratory services, including data automation and reporting. You are ultimately responsible for correcting any analytic technical problems within the laboratory while maintaining surveillance of scientific literature and applying new or improved techniques and procedures.</p><p>It is the job of the laboratory officer to ensure equipment, apparatus, and other instruments are in correct operating condition and faulty equipment, instruments, and apparatus are repaired or replaced.</p>In short - the laboratory officer is the master of the ship. You will have the enviable task of maintaining the integrity of the lab and its results.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Medical Sales Representative",
    		"slug" => "medical-sales-representative",
    		"description" => "<p>Medical sales representatives are the main links between medical professionals and the pharmaceutical/medical companies which they are employed by. Their work involves developing strong strategic relationships with doctors, pharmacists, hospitals and other medical providers to raise awareness for, promote and sell their company's products, which include medicines, prescription drugs and medical equipment.</p><p>Typically, medical sales representatives specialise in a particular set of products or medical area. They may interact with clients on a one-to-one basis or engage management level personnel in group settings.</p><p>So then, what exactly might you have to do as a medical sales representative?</p><p>You will be expected to develop and execute a strategic business plan on behalf of your company, meet with and make presentations to medical professionals regularly, organise or participate in medical/pharmaceutical conferences, keep informed about clinical data supplied by the company you are working for, be able to analyse and interpret that information as well as monitor competitor activity and industry developments.</p><p>A bachelor’s degree is considered essential, although it need not be one in the field of medical or biomedical sciences. Due to the fact that so much of a medical sales representatives success is dependent on interpersonal and communication skills, most pharmaceutical/medical companies prioritise personality and interpersonal dexterity over a medical background.</p><p>To stand out from the competition (which in this industry is fierce and unyielding),
    		you will need to possess an entrepreneurial spirit and sales mastery, be extremely outgoing and likable, demonstrate superb interpersonal, communication, analytical and negotiation skills, be independent and resourceful, and have a keen interest in the medical and pharmaceutical industry.</p><p>If you think you have the winning formula for a career in medical sales, apply your aptitude to the position of medical sales representative.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Medical Social Worker",
    		"slug" => "medical-social-worker",
    		"description" => "<p>Medical Social workers assist patients and elderly to overcome any emotional, social or financial difficulties that arises from their illness or old age. They assess the mental, physical and financial situation of the patient and his family, and provide the appropriate counselling and care to these patients so that they can better cope with these difficulties.</p><p>For example, a patient who has just lost a limb due to amputation may be suffering from depression, or may find difficulty paying the medical bills. As a breadwinner, he may also be worried about his family's future finances. A Medical Social Worker can provide counselling to improve the mental state of the patient or refer him to a psychologist. The patient can be directed to the appropriate government organisation or welfare bodies for financial assistance. The Medical Social Worker can also help the patient and family members settle into their new lifestyle and routine, so that they can re-integrate into the society.</p><p>Medical social workers also work with other healthcare professionals to improve the physical and psychological treatment plans for patients, and promote shared responsibility among medical professionals towards patient care. In so doing, they help to achieve the best system of care for patients.</p><p>This is a profession of growing importance in our country, especially as we meet the challenges of an ageing population. If you have the compassion and commitment to aid the elderly and disabled, and have the ability to assist patients and their families in distress, join the healthcare industry as a medical social worker.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Medical Specialist",
    		"slug" => "medical-specialist",
    		"description" => "<p>The Medical Specialist is at the pinnacle of the medical profession. Medical Specialists complete medical school, then as physicians or surgeons they further their medical education in a specific specialty of medicine by completing a multiple year residency to become a medical specialist.</p><p>The Medical Specialist is defined by various axis;

    		they could be practice surgical or internal medicine or be aged-based such as pediatrics and geriatrics. Whichever the group, the specialist belongs to an elite breed of medical practitioners trained to know more on that than others on their specialization.</p><p>There are various Medical Specializations, for example, Neurology deals with the diagnosis and treatment of all categories of disease involving the central, peripheral, and autonomic nervous systems, including their coverings, blood vessels, and all effector tissue, such as muscle. The corresponding surgical specialty is neurosurgery. A neurologist is a physician specializing in neurology and trained to investigate, or diagnose and treat neurological disorders.</p><p>A Medical Specialist works really hard with long and perhaps working inhumane hours to know what they do. That is why they get paid handsomely. In America a survey conducted in 2009 found that median anesthesiology salary was $370,
    		000 a year, dermatology brings in $375,176 annually, and gastroenterology paid $405,000 a year on average.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Museum Curator",
    		"slug" => "museum-curator",
    		"description" => "<p>Museum curators source for exhibits from other museums and private collectors, either on loan or purchase, and care for the artefacts, works of art and valuable exhibits in museums. They take into consideration the knowledge and interests of museum visitors and develop themes based on the museum's objectives. They may also be required to give talks or conduct guided tours on the exhibitions. Very often, they leverage on multimedia technology to enhance exhibits as well.</p><p>An increasing part of curators' duties involve fundraising and promotion to increase awareness, which may include the writing and review of funding proposals, journal articles, publicity materials, and liaising with external organisations. Hence, good research and communication skills are mandatory.</p><p>As museum curators need specialised knowledge of artifacts and history, the entry requirement is typically an honours degree in a relevant discipline with related experience in a museum or gallery preferred. Those with no experience start off as assistant curators. If you fit the bill and have a strong interest in history and artifacts, this job is for you.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Music Composer",
    		"slug" => "music-composer",
    		"description" => "<p>It is said that music is a universal language and the language of the soul. Of course, that depends on what one would define as music. In fact, some have made it their life’s work to do just that through the composition of musical pieces.</p><p>Music composers write and arrange instrumental and vocal music for performance by orchestras, choirs, bands, and other musical groups, typically choosing to specialise in creating music of a selected genre, such as pop, classical, jazz or rock. Composers may decide to further their careers in different areas, writing for stage (orchestras, musicals, operas, plays),
    		film productions, television, commercials or album productions.</p><p>Music composers usually set foot on the scene as musicians and have proficiency in one or more instruments as well as firm knowledge foundation in music theory and performing styles. They must be skilled at properly writing sheet music and should be adept at using computer software to produce music tracks so musicians can understand and perform their compositions.</p><p>So, what kind of work would you be involved in as a music composer?</p><p>Creating music is a very creative process, and music composers often work independently and in solitude, which can make the process a rather lonely one at times. However, like any job with an artistic nature, positive outcomes are hugely rewarding and energising.</p><p>Typical activities music composers engage in include selecting the instruments and vocals required to achieve the aspirational quality of a composition, translating musical creations into musical notation, guiding musicians in their interpretation of the scores and working with directors and producers to compose pieces suitable for the type of performance/production.</p><p>Many music composers, besides having a background in music as musicians, have studied and hold degrees in music theory and/or music composition. Although not necessary for success in the field, formal education can provide better knowledge of melodies, structure and other techniques used in developing well-received compositions.</p><p>If your language is music and your heart is set on creating more of it for the world, pursuing a career in music composition might very well sound good to you.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Nature Conservationist",
    		"slug" => "nature-conservationist",
    		"description" => "<p>Nature conservationists (sometimes known as sustainable development officers or biodiversity officers) are professionals who manage, protect and improve the environment. This can range from forests, grassland, coastal regions, swamps and mountains to rivers and marine environments.</p>Collaborating with other professionals in related fields, such as urban planners, marine scientists and geographers, they create and promote policies that aid in preserving biodiversity and the environment as a whole. They also play a significant role in education, and often work with schools.</p>Most nature conservationists hold a degree in sustainable development, environmental science, environmental management, incorporating coursework in the the areas they wish to specialise in. </p>If you have an interest in sustainable development, resource management and nature preservation, this career might be for you!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Nurse",
    		"slug" => "nurse",
    		"description" => "<p>Florence Nightingale, the founder of modern nursing, once said, “I think one's feelings waste themselves in words;

    		they ought all to be distilled into actions which bring results.”</p><p>Nursing is indeed one vocation where actions, not words, matter. Nurses are the main point of contact for patients and their families, and play a vital role in teams of multidisciplinary professional and medical staff. They work with, amongst others, doctors, social workers and therapists, and attend to a patient's comfort and emotional well-being as well as their medical needs.</p><p>The primary duties of a nurse include: assessing patient health problems and needs, developing and implementing nursing care plans, and maintaining medical records, administering nursing care to ill, injured, convalescent, or disabled patients. They may also be required to advise patients on health maintenance and disease prevention or provide case management and education. Shift-work to provide 24-hour care is a common requirement.</p><p>Gaining the trust and confidence of each patient is also an important aspect of the job for nurses, especially as they have more contact with the patients than other members of the medical team. This extends to developing a good relationship with the patient’s relatives as well, particularly in cases of chronic illnesses where the patient may be returning regularly for treatment. Thus, social skills are of paramount importance to a nurse.</p><p>If you too think that actions speak louder than words and want to play a key role in caring for the ill and the injured, nursing is the prime career option for you.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Optician",
    		"slug" => "optician",
    		"description" => "<p>Opticians examine and test eyesight as well as dispense advice on and medication for matters of visual health. They also prescribe corrective eyewear to patients who have problems with their vision. </p>Additionally, opticians are trained to identify eye diseases such as glaucoma and corneal deterioration as well as general health conditions that affect eyesight such as diabetes and high cholesterol. </p>These professionals would have had formal and accredited training in Optometry at the degree level and typically go on to work in hospitals, clinics, eyewear ships or research institutes.</p>If you have an interest in ocular health and are inclined towards the medical and allied health sciences, consider becoming an opticians.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Optometrist",
    		"slug" => "optometrist",
    		"description" => "<p>Optometry is a healthcare profession concerned with the health of the eyes and related structures, as well as vision, visual systems, and vision information processing in people. </p><p>Optometrists are trained and licensed to provide primary vision care ranging from sight testing and correction to the diagnosis, treatment, and management of vision changes, which includes prescribing and dispensing corrective lenses and detecting certain eye abnormalities. They are not medical doctors and will refer patients to other healthcare practitioners (such as ophthalmologists) for further management if there are medical or surgical requirements.</p><p>In Singapore, one in two children aged twelve and above wear spectacles, while four in five adults are myopic. These alarming statistics have earned us the unofficial title of the “myopic capital” of the world. Optometrists in Singapore therefore stand at the forefront in the prevention and correction of myopia.</p><p>Currently, the recognised local qualifications for optometry are the diploma programmes offered by Ngee Ann Polytechnic or Singapore Polytechnic. Unfortunately, earning bachelor degrees in Optometry is slightly trickier - there are degree programmes conducted by the Singapore Optometric Association Academy, but other than that, no other degree programme is available locally, so going overseas is the most viable option for aspiring optometry students.</p><p>Optometrists in Singapore generally practise in hospitals and relevant government agencies, but may also opt for private practice.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Pharmacist",
    		"slug" => "pharmacist",
    		"description" => "<p>Pharmacists typically handle the regulation, dispensation and distribution of medicine to the general public and are responsible for preserving and enhancing public health by providing medical insight, advice and information as well as providing acceptable access to prescription drugs and medical devices.</p>The working environments of pharmacists vary - some work for large pharmacy chains and others are employed by private clinical practitioners or hospitals and health centres.</p>Due to the large degree of patient contact and nature of the job, pharmacists have to possess excellent communication and interpersonal skills, be extremely meticulous and detail-oriented and have good analytical abilities.</p>Most pharmacists have a degree in pharmacy or pharmaceutical science and professional accreditation.</p>If your interest lies in medical care and public health, and you like dealing with people, you might be keen on a career as a pharmacist.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Pharmacologist",
    		"slug" => "pharmacologist",
    		"description" => "<p>If you want a job that can contribute to saving lives now and in the future, being a Pharmacologist is right up your alley! Pharmacologists investigate how potential medicines interact with biological systems.</p><p>New diseases (Bird Flu, and SARS) are constantly cropping up while old ones (HIV) linger on. The job of a Pharmacologist is especially important as we keep playing “catch-up” in finding drugs to cure us. This, coupled with an aging population and a reliance of drugs has made the Pharmacologist a life saving superhero tucked away somewhere in the lab.</p><p>Pharmacologists aim to understand how drugs work so they can be used effectively and safely. They also conduct research to aid drug discovery and development. They do this by undertaking in vitro research (using cells or animal tissues) or in vivo research (using whole animals) to predict what effect the drug might have in humans.</p><p>Areas of specialty as a Pharmacologist include;

    		clinical pharmacology - carrying out work involving the effects of medicines on people within clinical trial studies;

    		neuropharmacology - studying the effect of chemicals on the nervous system;

    		and regulatory pharmacology.</p><p>Most pharmacologists work as researchers or in public policy, in universities, the burgeoning biotech industry and government agencies.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Photographer",
    		"slug" => "photographer",
    		"description" => "<p>Photographers create permanent visual images of a range of photographic subjects for an a variety of purposes. </p>A professional photographer typically adheres to a brief set by an employer or client. Photographic projects include those of wildlife, war, fashion, food and architecture, to name a few.</p>Most professional photographers specialise in one given area, such as advertising, nature or social photography and many are self-employed. Others work for employers and clients such as creative agencies, content publishers.</p>If you have a love for visual art and capturing moments on film, are open to new experiences and flexible hours, give photography a shot!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Photojournalist",
    		"slug" => "photojournalist",
    		"description" => "<p>Photojournalists take photographs to document news, current events and human interest stories. Their aim is to capture the most suitable images to best communicate messages and express ideas. Those photographs are published in magazines, newspapers, and on web-based platforms.</p>These professionals often specialise in a particular area, such as current events or entertainment or sports. The market is highly competitive and many establish themselves as freelances while others find employment as in-house photographers for large publications.</p>Photojournalists typically have formal training in photography, often through a degree programme in media, communications, visual arts or film studies.</p>You might want to consider becoming a press photographer if you have a passion for moving people through images, are open to new experiences and flexible hours and desire to be a part of the media industry.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Physical Education Teacher",
    		"slug" => "physical-education-teacher",
    		"description" => "<p>Teaching may be right up your alley, but having to be cooped up in a classroom with little exercise and physical activity might not be your idea of an inspiring environment;

    		in which case, you might fit the profile of a physical education teacher.</p><p>Physical education teachers are important figures in helping their students lead healthy lives, providing instruction in the areas of sports, recreational activities and lifestyle choices to aid them in developing physical fitness and physical dexterity as well as improve self-esteem and interpersonal skills.</p><p>So, what is the exact nature of the work will you be engaged in as a physical education teacher?</p><p>Regular duties of physical education teachers include planning and conducting lessons to match the physical education expectations of their students' ages and fitness levels. Curriculum will typically emphasise health, fitness, participation and cooperation to enhance physical, motor, cognitive, leadership and interpersonal skills. </p><p>As teachers who often form part of the formal education system, physical education instructors are usually required to have a degree in sports science, education (with physical education training and certification) or have experience as sports or fitness coaches.</p><p>If you thrive in active environments and have excellent physical fitness attributes, are outgoing and enthusiastic, enjoy working with young people, possess good interpersonal and communication skills and have a commitment to health, fitness and education, consider moving towards a career in physical education.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Physical Therapist",
    		"slug" => "physical-therapist",
    		"description" => "<p>As far as job descriptions go, touching lives and moving people takes on a different (if not literal) meaning for that of physical therapists.</p><p>Physical therapists assist patients with debilitating conditions such as back pain, arthritis, fractures, sports injuries, head injuries, strokes, and cerebral palsy. They provide therapeutic services to improve a patient’s mobility, alleviate pain, and help them cope with permanent physical disabilities and teach them to engage in exercises to improve their physical wellbeing.</p><p>So, what else can you expect to be doing as a physical therapist?</p><p>Common professional activities physical therapists are involved in include conducting physical evaluations (measuring patients’ balance and coordination, muscle strength and motor function) for patients so as to formulate a suitable treatment programme for recovery, using therapeutic equipment such as infrared lamps, ultrasound devices and whirlpool baths as well as techniques like massage to enhance muscle performance, providing consultation on physical therapy as part of a comprehensive healthcare team and writing progress reports.</p><p>Most physical therapists have a degree in either sports science (with a major in physical therapy) or a specialised degree in physical therapy. It is not unusual for physical therapists to be allowed to practice independently only when they have received a masters degree, due to the nature of the job.</p><p>Employment prospects are excellent;

    		These healthcare professionals can find employment in many environments, including hospitals, outpatient clinics, rehabilitation and extended care centres, schools, fitness clubs and sports training facilities.</p><p>If you’re compassionate and a passion for helping people, have good interpersonal and communication skills as well as an interest in human physiology, you might like to consider becoming a physical therapist.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Physicist",
    		"slug" => "physicist",
    		"description" => "<p>Physicists are scientists who investigate motion and gravity, the behavior of gases, the structure and behavior of matter, the generation and transfer of energy, and the interaction between matter and energy. They identify basic forces and laws of nature.</p><p>Theoretical physicists investigate these areas without thought to practical application, concerning themselves with concepts such as the nature of time and the origin of the universe. Other physicists apply their knowledge of physics to practical matters, such as the development of computers, transistors, laser beams, microwave appliances, communications satellites, and a wide variety of other devices. They solve problems in industry, medicine, defense, and other fields. Physics is a very broad science, so most physicists specialize in just one branch.</p><p>Most physicists are employed by research and development firms, colleges and universities, and the federal government. The majority of physics research is conducted in small and medium laboratories, though some branches of physics require the use of extremely large equipment like nuclear reactors and particle accelerators. In some cases, physicists are required to travel extensively to meet with clients or visit laboratories that have rare and valuable equipment that they need to conduct their research.</p><p>Regardless of the area that they work on, physicists spend a lot of their time working in an office environment where they analyze data, develop reports, and plan experiments. A doctoral degree with a concentration in physics is generally required for academic, research and development positions.</p><p>If the study of energy or matter to solve problems attracts you, gravitate into a career in Physics.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Planning & Development Surveyor",
    		"slug" => "planning-development-surveyor",
    		"description" => "<p>Planning and development surveyors evaluate land and property resources for effective usage and sustainable development and make recommendations for land and building development and conservation as well as site planning.</p>In doing so they take stock of the economic, social and environmental factors that affect development plans and have a strong understanding of the business-related benefits of property and land development.</p>Planning and development surveyors have a wide choice of employers to work for, ranging from planning consultants, developers, building contractors, regulatory authorities, government boards, to name a few.</p>Most planning and development surveyors have a degree in Surveying and Planning or the equivalent, and some hold degrees in Geography and Environmental Science.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Policy Analyst",
    		"slug" => "policy-analyst",
    		"description" => "<p>Policy analysts specialise in researching complex issues, crafting possible solutions, and recommending policy actions to the entities they work for and causes are associated with. Typically, people looking to explore policy analysis as a career prospect will join government agencies and statutory boards, non-profit organisations, think tanks, news outlets and financial institutions such as banks.</p><p>The job of a policy analyst involves examining existing policies and identifying aspects that call for improvements to be made to maximise the intended impact of the policies and learn more about the socio-political, economic and or cultural milieu surrounding the policies.</p><p>Some policy analysts go beyond policy examination to participate in policy development. These policy analysts not only assess existing policy but are involved in research designed to identify the problems that need to be corrected in future policies.</p><p>Employment as a policy analyst generally requires a degree, usually one that falls within the classification of the social sciences - such as public policy, political science or economics. However, there are policy analysts who hail from other academic backgrounds;

    		for instance, business, law or even engineering.</p><p>Further to the degree as a qualification, you need to have a passion for and real interest in public affairs and policy-related matters. Additionally, you should possess outstanding analytical and research skills along with a high proficiency in written and verbal modes of communication.</p>",
    			"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Process Engineer",
    		"slug" => "process-engineer",
    		"description" => "<p>In the age of excellence where the pursuit of efficiency and efficacy is relentless and uncompromising, individuals and organisations are constantly striving to improve and streamline processes to ensure operational success;

    		just the job for process engineers.</p><p>Process engineers typically fill positions within the fields of manufacturing and chemical engineering and their work revolves around the design and execution of processes with the assistance of computer-based tools. Chemical, biological, biochemical or physical in nature, the aforementioned process can have applications in numerous industries, including food, oil and petrochemical, medical and pharmaceutical as well as biotechnological industries.</p><p>So, what are the responsibilities of a process engineer?</p><p>The professional objective of process engineers is to develop and streamline industrial processes to enhance efficiency, improve productivity and maximise profitability, focussing primarily on process design and control.</p><p>Process engineers are therefore responsible for designing equipment, assessing tools and processes, installing and managing operations systems, researching trends and purchasing new technology for implementation and improving production functionality. </p><p>Qualifications-wise, candidates can enter the field with a bachelor's degree in disciplines such as chemical engineering, industrial engineering, systems engineering and mechanical engineering. You can advance to senior positions with experience and/or post-graduate degrees in operations management and business management.</p><p>If you are an analytical thinker, have impressive technical and communication skills and are highly proficient in computer technology, you might like to consider proceeding towards a career in process engineering.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Product Designer",
    		"slug" => "product-designer",
    		"description" => "<p>Product designers are responsible for creating a wide range of items, from cars and doorbells to kitchen sinks and nutcrackers.</p>The work of a product designer revolves around conceptualising, modelling, testing and producing product prototypes during the product development cycle. Product designers work on new products and also enhance existing ones using their understanding of technology, materials and manufacturing methods. </p>Typically, product designers will hold a degree in either Product Design or Industrial Design.</p>To succeed in this field, you should have a strong aesthetic sense, a keen eye for detail, be technologically-inclined, understand the properties of various materials and enjoy designing for form and function.</p>If you think you have artistic tendencies and an understanding of ergonomics, give a career in Product Design a shot.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Programmer",
    		"slug" => "programmer",
    		"description" => "<p>Behind every computer software or digital system we use are the minds who have created them. Functionality that is effective and interfaces that are intuitive have all been meticulously conceptualised, designed, tested and seamlessly put together by programmers to produce the software and systems that have become such a significant part of our lives in the digital era.</p><p>Programmers are actively involved in leading and writing logical sets of instructions that provide direction for computers to process information in a certain manner and are highly valued members of teams regardless of industry or organisation.</p><p>So, what can you expect from a career in programming?</p><p>Typically, the programmer’s work begins with the interpretation of a brief that identifies the end-goal of the program followed by planning and project mapping to aid in the envisioning the systematic flow of information before the actual programming commences. </p><p>Despite the job of a programmer widely considered to be that of a solo one, programmers are expected to work closely with other professionals such as computer software engineers, systems analysts, interface designers and management to produce a top-notch system or piece of software. However, when working on programming per se, it is common to work independently and during odd-hours.</p><p>Normally, computer programmers hold a bachelor’s degree in either Computer Science, Information Systems or Mathematics and be well-versed in the knowledge and application of major programming languages. That is not to say that people with other degrees will not be able to get into programming. If you have a high aptitude for programming, you might have the privilege of receiving on-the-job training.</p><p>If you’re highly analytical, have a logical mind, love solving puzzles and problems creatively, are able to get along fairly well with coworkers and enjoy crunching digital data, consider diving into the world of C++, Java, Python and PHP.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Psychologist",
    		"slug" => "psychologist",
    		"description" => "<p>A Psychologist studies people, specifically how they think, act, react and interact. They are concerned with all aspects of behavior and the thoughts, feelings and motivation underlying such behavior.</p><p>As a Psychologist you may choose to be either a Research Psychologist or an Applied Psychologist. A Research Psychologist contributes to the body of scientific research in which Psychology is based on. They will examine fundamental principles about human and animal behavior in the context of Psychology. Research helps to guide practicing psychologists about the most suitable ways of assisting people with their problems.</p><p>An Applied Psychologist works directly with adults, children, or groups. They may branch into various areas. Theses include being a:</p><p>Clinical Psychologists – usually working in a hospital or community setting with people with psychological health problems or with severe behavior in coping with life.</p><p>Counseling Psychologists - helping people to improve on their sense of well being, alleviate their distress, resolve their crises and increase their ability to solve problems and make decisions for themselves</p><p>Educational Psychologists – tackling problems encountered by young people in education related to learning difficulties and social or emotional problems.</p><p>Neuropsychologists – Exploring the relationships between brain systems and behavior</p><p>Social Psychologists – Examining how a person’s mental life and behavior is shaped by interactions with other people in a social environment</p><p>Almost all of these Applied Psychologist fields require a basic degree majoring in Psychology followed by a Post Graduate Degree.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Public Relations Manager",
    		"slug" => "public-relations-manager",
    		"description" => "<p>The primary job of the Public Relations Manager is to be the face and voice of the company that he/she represents. The Public Relations Manager plays an important role in maintaining a positive image of a company. He is the spokesperson of his organization that communicates its policies to the stakeholders, clients, and general public.</p><p>The channels that a Public Relations Manager uses to disseminate that information extends to all forms of media ranging from Press Releases, Brochures, Printed Handouts, to Blogs and even Tweets. Needless to say, the Public Relations Manager must be well versed in communication and communications tools.</p><p>This is also not a job for the introverted, along with understanding the traditional and nontraditional media channels to dispense the information, a Public Relations Manager needs to be a people person, sometimes maintaining close and cordial relationships with the media or customers.</p><p>In addition to managing the company's publicity strategies, the manager also evaluates the advertising and promotional programs and ensures that it is compatible with the target audience. Not only does he supervise the efforts of his own team in maintaining the company's corporate image and identity, a public relations manager may also be required to draft speeches of the company's top executives for public meetings.</p><p>An individual usually starts their Public Relations career as a trainee. Through years of experience and on-the-job training, one might qualify to the post of Public Relations Manager.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "QC Chemist",
    		"slug" => "qc-chemist",
    		"description" => "<p>Quality Control chemists employ and understanding of chemistry to test and measure materials, generally in a manufacturing or pharmaceutical field. </p>Often collaborating with others as part of a team, QC Chemists ensure that experiments are completed within the limits of standard operating protocols and good clinical/laboratory practices.</p>QC chemists prepare and assess samples of a product during the course of its production with the goal of determining if the substance meets the standards or requirements of the project. Essentially, their role is to preserve workplace, product and process safety.</p>QC Chemists usually need to have a bachelor's degree in Chemistry or related disciplines such as Biology and Biochemistry. </p>If you are a stickler for quality control and assurance, have a passion for Chemistry and related fields, you might want to consider becoming a QC Chemist.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Quality Engineer",
    		"slug" => "quality-engineer",
    		"description" => "<p>Given that such a large quantity of what goes into the food we eat, products with use and places we live and work in is mass produced with an significant emphasis placed on profit-margins, sticklers for high safety and quality standards will be glad to know that there are professionals dedicated to maintaining and improving the quality of materials and ingredients of any given product.</p><p>These professionals, known as quality engineers, may additionally examine the factors contributing to poor product sales due to deficient quality and manage quality-related matters involving customers and suppliers. Due to the importance of their job function, they provide, quality engineers are in high demand and are often hired by companies that manufacture goods to oversee their products.</p><p>So, what can you expect to handle as a quality engineer?</p><p>Quality engineers are in charge of quality system maintenance and identifying improper quality control practices based on the metrics they have determined and inspecting systems and processes for problems. Quality engineers often work alongside design engineers and quality technicians to evaluate potential areas of concern and rectify them. They also support quality inspectors to make sure that processes and products comply with regulations and may conduct training for company staff to ensure that key personnel are aware of quality-related issues.</p><p>Most quality engineers have a degree in quality engineering (also known as quality assurance engineering) or an engineering degree in another field and have professional certification in quality assurance management or six sigma or total quality management.</p><p>If you feel passionate about upholding quality standards in products and services, have a keen eye for detail, are analytical, meticulous and possess high technical skills and an inclination towards engineering and problem-solving, your calling might just be that of quality engineering.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Radio Producer-Presenter",
    		"slug" => "radio-producer-presenter",
    		"description" => "<p>Radio producer-presenters are in charge of managing the content of audio programmes broadcast via radio, the internet and other mobile mediums and are also the personality and voice behind the microphone. </p>Involved in the entire production and broadcasting process, radio producer-presenters are essentially a radio producer and broadcast presenter rolled into one.</p>From generating ideas, recording voice-overs and teasers and going live on-air to monitoring the programme ratings post-broadcast, radio producer-presenters have a lot to oversee. In the course of their jobs, they will collaborate with production assistants, station managers, executive producers, marketing communication personnel, engineers and technical staff.</p>Radio producer-presenters typically hold degrees (or diplomas) in media studies, mass communication or film and sound engineering, and may work in private or public broadcasting organisations.</p>If producing radio programmes and going on air to present those shows sounds good to you, consider becoming a radio producer-presenter!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Sales & Marketing Manager",
    		"slug" => "sales-marketing-manager",
    		"description" => "<p>If you are fairly outgoing and think you have a knack for business but want to find a job to dip your beak and try it out before diving into your first business venture. Perhaps working as a Sales and Marketing Manager is an ideal way to start.</p>?!?! :(</p><p>A Sales and Marketing Manager accomplishes business development activities by researching and developing marketing opportunities and plans;

    		implementing sales plans, and managing staff.</p><p>As the name suggests, the job encompasses a broad scope. You will be expected to achieve marketing and sales objectives by developing and implementing marketing and sales plans. You will plan, execute, and fine tune all aspects of the job, macro-planning and sometime micro-managing.</p><p>Sales and Marketing Manager advise sales representatives on ways to improve their sales performance. In large multiproduct organizations, they oversee regional and local sales managers and their staffs.</p><p>Sales and Marketing Managers also stay in contact with dealers and distributors. They analyze sales statistics that their staff gathers, both to determine the sales potential and inventory requirements of products and stores and to monitor customers' preferences.</p><p>This is a big job, and accomplishing it well will not only win you favor with your employers, but also give you a mastery of the product line and markets in which you operate – making you a value to other companies in similar businesses.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 0,
    		"smart_casual" => 0,
    		"on_the_move" => 1,
    		"formal_wear" => 1,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Social Worker",
    		"slug" => "social-worker",
    		"description" => "<p>Social workers are trained professionals who care about people, who want to make lives better and relieve suffering.</p><p>They do this by helping others overcome social problems such as poverty, relationship problems, domestic violence, crime, and drug abuse. They also work to prevent social problems from arising. Social Workers also develop and promote preventive measure and services to address societal issues.</p><p>Working at different levels with a diverse clientele. Their work could be developmental, preventive and also remedial. Clients range from individuals, families, groups and larger communities of society. As a Social Worker you will come into direct contact with a vast cross-section of society – either as individuals, families or groups.</p><p>Social Workers are found in a variety of work settings. They will be involved in case management, working with individuals and families in Family Service Centres, Community Development Centres, Prisons and other Corrective and Rehabilitation agencies, Hospitals, Hospices and other health agencies.</p><p>Social Workers should be sensitive and have a genuine interest in helping or working with others, have a firm belief in the worth of human beings and hold a deep respect for all people.</p>A Social Work career begins with a Bachelors degree in Social Work. Post Graduate, Masters and Doctorate degrees provide a pathway for further professional development.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Sociologist",
    		"slug" => "sociologist",
    		"description" => "<p>Sociologists study human society and social behavior by examining the groups and social institutions that people form, as well as various social, religious, political, and business organisations. The focus of study generally include the behavior and interaction of groups, tracing of their origins and growth, and analysing the influence of group activities on individual members.</p><p>While some entry-level sociology jobs are available to those with a bachelor's degree, most positions require a master's degree or a doctorate. Sociologists need to be well-versed in statistical analysis, survey methods and interview techniques. Since many sociologists research new aspects of society, much of their education involves how to gather, analyse and interpret data. </p><p>Sociologists need to have good written and oral communications skills, as much of their work centres on reporting their findings to others. A high level of intellectual curiosity and creativity is also helpful, especially when determining what subjects to study and how to structure an experiment. The ability to apply logical thinking to highly complex areas is also needed.</p><p>Most sociologists work a standard hours in an office or indoor setting, individually or as part of a team of researchers and other social scientists. However, stress associated with the pressure to publish and produce results is not uncommon. Those employed by universities often enjoy flexible schedules and can divide their time between research, teaching and consulting.</p><p>If the study of human and societal behaviour interests you, this is the job for you!</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Sound Engineer (Film)",
    		"slug" => "sound-engineer-film",
    		"description" => "<p>Sound engineers, also called audio engineers, who work in the film industry are the skilled professionals who make movies and television shows sound amazing. They use technical equipment and good aural knowledge to record sound, amplify voices, generate environmental ambiance, and edit recordings.</p><p>For larger operations such as film productions, sound engineers are usually required to work within sound teams. The job of a sound team is essentially to follow or interpret the instructions of the director, producer, sound designer or sound supervisor. Sound engineers' roles are split into two categories: (1) production stage, where the recording of all sound is done on set or on location, and (2) post-production stage, when they handle the addition, balancing, mixing, editing and enhancing of recorded audio.</p><p>Generally, sound engineers who work on the production side are responsible for checking and preparing all the sound equipment for shoots, carrying out additional practical tasks to minimise unwanted sounds on set, evaluating the acoustics of a particular location, and positioning recording equipment properly. Furthermore, they will tweak sound levels and monitor audio signals during filming.</p><p>In post-production, they work in the studio and focus their efforts on responsibilities such as mixing, editing and manipulating the sounds which have been recorded during the production process. They may also add in special sound effects and re-record parts to make them as effective as possible.</p><p>Sound engineers need technical ability and a detailed knowledge of the science of sound. A degree in a field such as sound technology, sound engineering, physics, electrical engineering, film studies, mass communications or media production is highly valuable. A portfolio of work that demonstrates your talent and experience is also often essential.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Special Education Teacher",
    		"slug" => "special-education-teacher",
    		"description" => "<p>“Give a man a fish and you feed him for a day. Teach a man to fish and you feed him for a lifetime”. This is especially true for children with special needs as they require to learn the life skills that can enable their lives. A Special Education Teacher is tasked with the education of students with special needs in a way that addresses each student’s individual differences and needs.</p><p>As a Special Education Teacher you will come across children with special needs like: Downs syndrome, autism, learning disabilities, communication challenges, emotional and behavioral disorders, physical disabilities, and developmental disorders. You will need to use different approaches, technology, and a specifically adapted teaching area to provide for students with special needs. Also, each student will have different disabilities, so you will need to be especially mindful of their strengths and weaknesses.</p><p>The Special Education Teacher requires patience and a tremendous desire to work with children who have very special needs. You have to manage all of the activities in the classroom while effectively delivering your curriculum. With its many challenges, Special Education Teachers will find this a particularly rewarding career.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Speech Therapist",
    		"slug" => "speech-therapist",
    		"description" => "<p>Speech therapists, also known as speech-language pathologists, are healthcare professionals who assess and treat speech, language and communication problems in people of all ages to enable them to speak to the best of their ability. They may also work with people who have eating and swallowing problems.</p><p>Communication includes speaking, listening, reading, writing, signing and gesturing. Language acquisition problems affect some seven percent of the population worldwide, and can lead to life-long under-achievement as well as behavioural and emotional disturbance. Hence, the speech therapist plays a significant role in the well-being of people suffering from communication disabilities.</p><p>To become a speech therapist, you need at least a Bachelor's degree in speech pathology, which is unavailable locally. However, NUS's Division of Graduate Medical Studies does offer a Master's programme in speech pathology.</p><p>As independent practitioners, speech therapists can elect to work in hospitals, rehabilitation centres, specialist centres, or community healthcare centres. Career opportunities are also available in research facilities, educational institutions and healthcare management sectors.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Stage Director",
    		"slug" => "stage-director",
    		"description" => "<p>If you have a flair for the artistic and want to move up the organisational chart to manage the creation process, you may want to consider the job of an Artistic Director. </p><p>Artistic Directors are the bolt that holds together an artistic organisation. As an Artistic Director, you will have overarching artistic control of the theatre's production choices, directorial choices, and overall artistic vision. Your responsibilities can include choosing the material staged, the hiring of creative/production personnel (such as directors),
    		and other theatre management tasks. You may also be required to put your finger on directing productions.</p><p>You will work closely with the general manager of the theatre, and contribute the artistic evaluation of projects and productions to be included in promotional, funding, and press materials.</p><p>An artistic director also functions as a resource for the directors who are working to mount productions at the theatre and can provide support, counsel, and/or artistic input where requested.</p><p>You are the beginning and the end of everything within the art organization. Artistic directors are frequently regarded as the artistic representatives of theatre companies and are often required to speak about their theatre to the press.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Systems Analyst",
    		"slug" => "systems-analyst",
    		"description" => "<p>If computers were your world, then being a Systems Analyst would be the equivalent of a city planner, architect, and maintenance department combined in one. A System Analyst coordinates the construction, maintenance, and growth of an organization’s computer systems.</p><p>Their work brings them together with all departments within the organization to understand their individual IT needs, then propose the technical direction in which the company should proceed. Systems analysts must rapidly become experts in the company’s and each department’s functions and learn how to use IT systems to satisfy their needs. Thus, flexibility, strong interpersonal skills, and a friendly disposition are highly valued traits in this industry.</p><p>The job may look simple, but in reality is fraught with challenges. IT requirements of departments may change very rapidly as technology progresses. This is made more challenging by the need to ensure that legacy systems are able to work with new ones being introduced. Furthermore, Systems Analyst will be the first to learn of systems crashes and missing data, and are expected to resolve them in the shortest time possible. The demands of the job are great and those without strong technical skills find themselves quickly outpaced by the expertise their job demands.</p><p>However, for those who can make the most of limited resources and listen carefully for the distinction between what people want and what people need from their computer systems, a Systems Analyst is an excellent profession.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Systems Programmer",
    		"slug" => "systems-programmer",
    		"description" => "<p>A systems programmer works on the internal operations of computers. They write code that tells a computer how to interact with its hardware and its applications. These codes tell a computer how to accomplish a specific task, such as word processing or spreadsheet calculation.</p><p>The systems programmer works within the framework set out by systems analysts. He then has to employ existing systems or incorporate new technologies to reach those objectives. For example he may be told to write a new piece of code that integrates with an old code for the program to work with a new piece of hardware.</p><p>The System Programmer is like a hit-man - handed a technical specifications to a piece of hardware, and told to write a code that takes only a few hours to do - then they might be moved to a different project, working on code inherited from previous projects.</p><p>The work that a System Programmer does is highly complex and technical in nature. Besides a clear mastery of the programming language, they need to proficient in mathematics and possess a keen sense of logic. This is because each piece of code - while achieving an objective - can be unique and thus written in a totally different way. People in the industry will tell you a good piece of code is like a masterpiece that makes them marvel at in in awe.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Teacher",
    		"slug" => "teacher",
    		"description" => "<p>Teachers are more than everyday working professionals;

    		teachers are role models to students across the world. Being a teacher is often a rewarding and invaluable experience.</p><p>Whether in a primary school or inside a junior college classroom, there are certain aspects of teaching that can be expected. Responsibilities vary depending on the age group and whether the school is a public or a private institution, but all teachers must have classroom management skills to handle the disciplinary issues that will occur.</p><p>As a teacher, you will also have to follow a curriculum set out by the school administrators. Some curricula may be stricter than others, but all ensure that the student reaches certain goals by the end of the journey. A strict curriculum and weeks of lesson plans can be intimidating, but good teachers know that they have to think on their feet in order to address every student's needs and learning abilities. Making the material fun and meaningful for the students means they'll retain more — and that makes you a better teacher.</p><p>Teaching also means you will not work alongside your colleagues as often as other professions would allow, so it is important to make any time with colleagues count. The job may be harder than it looks, but the chance to help students and make an impact in their lives is an experience that you will never forget.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Translator / Interpreter",
    		"slug" => "translator-interpreter",
    		"description" => "<p>With about 7000 languages in existence worldwide, it’s no surprise that verbal and written communication across all people and cultures can be a rather tricky and complex affair. In the absence of a universal language, translators and interpreters have become catalysts of comprehension, helping to bridge language-based divides with their linguistic skills and knowledge.</p><p>Interpreters work with spoken language, as well as sign language, while the domain of translator is the written word. In order to decipher and convert information from one language (the source) to another (the target),
    		these professionals have to tap on their language proficiency, knowledge of the source and target cultures as well as contextual awareness.</p><p>So, what is a job in translating or interpreting likely to involve?</p><p>Typical translation/interpretation-related activities include the actual language conversion work, meeting and liaising with clients, conducting research (on, for example, legal, technical and scientific phraseology to find the most accurate translations),
    		consulting experts for specialist information, proofreading and copywriting and networking for potential business opportunities. </p><p>Most translators and interpreters should ideally hold a bachelors degree, have specialised formal training in translating and/or interpreting and be fluent in two or more languages. Some experience in the field within which you intend to work - law, entertainment, politics, finance) would be an additional advantage.</p><p>If you’re gifted in languages, have an appreciation for global cultures, are knowledgeable about the industry you wish to pursue a career in, can work independently, can demonstrate resourcefulness and sociability, consider becoming a translator and/or interpreter.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Urban Planner",
    		"slug" => "urban-planner",
    		"description" => "<p>Urban planning is a technical and political process that has much to do with the control of the use of land as well as design of the urban environment, including transportation networks, to guide and ensure the orderly development of settlements.</p><p>As such, the primary role of an urban planner is to develop both long and short-term plans for the use of land to ensure the growth and/or revitalisation of communities that live on those plots of land. </p><p>This is especially relevant for land-scarce Singapore, where land use has to be constantly optimised and de-conflicted to support a fast-growing population.</p><p>In a bid to cope with population growth, urban planners need to compile information on physical, economic, social, legal, political, cultural and environmental factors which affect land use and work out the cost-benefit analysis. </p><p>They will also perform surveys and site inspections for land under consideration for development., working closely with professionals in related fields like surveyors, architects, engineers, environmentalists, property developers and transport authorities to ensure that the utility of the land is maximised for the communities.</p><p>Urban planners come from varied backgrounds, but the key to being successful in this job lies in constantly rejuvenating oneself with the latest trends and developments in the country. Typically, an urban planner has a degree in Urban Planning and Design/ Architecture/ Civil Engineering or a diploma in Environmental Design. The chief employer of urban planners in Singapore is the Urban Redevelopment Authority.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Veterinarian",
    		"slug" => "veterinarian",
    		"description" => "<p>Veterinarians, or doctors of veterinary medicine, diagnose and treat illnesses and injuries of animals, including pets, livestock, and zoo and laboratory animals. They examine the animals to determine the nature of disease or injury and treat the animals surgically or medically, and inoculate animals against preventable diseases and disorders. They also advise animal owners about sanitary measures, feeding and nutrition, and general care to promote the health of animals. Other aspects of the veterinarian include research, teaching, production of commercial products, and prevention and control of communicable animal diseases.</p><p>As a veterinarian, you will likely work in private or clinical practice with long hours in a noisy indoor environment, and be ready to respond to emergencies. Sometimes, you will have to deal with emotional or demanding pet owners, hence, good communication skills are important. When working with animals that are frightened or in pain, you also risk being bitten, kicked, or scratched. You may also be required to make house visits if the animal is too sick or injured to be safely brought to the clinic. If you are in large-animal practice, you will likely to be assigned to work at the zoo.</p><p>Veterinarians working in nonclinical areas, such as public health and research, have working conditions similar to those of other professionals in those lines of work. These veterinarians enjoy offices or laboratories and spend much of their time dealing with people rather than animals.</p><p>If you care passionately for animal welfare and well-being and are not afraid of them or medical procedures, do consider a career in veterinary medicine.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 0,
    		"variable_pay" => 1,
    		"desk_bound" => 0,
    		"smart_casual" => 1,
    		"on_the_move" => 1,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Web & Multimedia Developer",
    		"slug" => "web-multimedia-developer",
    		"description" => "<p>With the proliferation of the web these days, everybody wants to put up something on the Internet. The Web and Multimedia Developer is a new breed of programmers, graphic designers and typesetters, whose medium is the World Wide Web, and their audience is everyone on the Web.</p><p>The Web and Multimedia Developer is generally accountable for the functionality of the final Website whether it is viewed in a browser or an App. They have to work all of the information and requirement provided by the client into a functional, intriguing, user-friendly design that has the “wow” factor and keeps users coming back to the site.</p><p>As a Web & Multimedia Developer you need to have varied and numerous technical skills. Some of these aspects include understanding how programming languages such as HTML (the language that web sites are written in),
    		javascript and PHP works, database management and graphic design. Blend all these skills into making a web page that seamlessly access user’s requests, updates information and graphics, and plays well with relaying information to and from servers, while working on simultaneous platforms (OSX, Windows) and browsers (Safari, Firefox, Explorer) and you can see it a mighty challenging job. Oh and let’s not forget, it has to look really nice too.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);

    	DB::table("career")->insert([
    		"name" => "Welfare Officer",
    		"slug" => "welfare-officer",
    		"description" => "<p>Welfare officers assist social workers, counsellors and other caregivers and healthcare professionals in rehabilitation, care and counselling of clients staying at residential homes for children, juvenile offenders, the elderly, or hospices.</p><p>They organise and facilitate meaningful activities for the residents and carry out basic health care procedures based on residents’ needs. They handle incidents and complaints from clients, manage conflict and provide mediation. They also ensure the rules and regulations of the homes and safety practices are complied with, and oversee disciplinary measures where needed. Other duties include the maintenance of a clean, safe and comfortable environment for the residents, checking the security of the compound and residents, and performing escort and operational support as necessary.</p><p>Good people-managements skills and the ability to work well in a team are essential for welfare workers as they have to manage the residents day-to-day needs while coordinating with the various healthcare professionals and caregivers to provide the best care for them.</p>",
    		"regular_hours" => 1,
    		"fixed_pay" => 1,
    		"variable_pay" => 0,
    		"desk_bound" => 1,
    		"smart_casual" => 1,
    		"on_the_move" => 0,
    		"formal_wear" => 0,
    		"created_at" => Carbon::now(),
    		"updated_at" => Carbon::now(),
    		]);


    }
 }
