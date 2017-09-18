@extends("layouts/app")

@section("scripts")
@endsection
@section("content")
<div class="title-page">
	<div class="container"><h1>ACCOUNTING &amp; FINANCE</h1></div>
</div>

<div class="container">
	<div class="header-page">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-header">Aston University</h2>
				<p class="sub-title">United Kingdom</p>
			</div>
			<div class="col-lg-8">
				<ul class="link-neo smoothScroll">
					<li class="hidden-xs">
						<div class="neo">
							<span class="icon"><i class="fa fa fa-flask" aria-hidden="true"></i></span><br/>
							Accredited Pharmacy
						</div>
					</li>
					<li>
						<div class="neo">
							<span class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span><br/>
							TEF Gold Award
						<div class="neo">
					</li>
					<li class="hidden-xs">
						<div class="neo">
							<span class="icon"><i class="fa fa-certificate" aria-hidden="true"></i></span><br/>
							Triple Crown Accredited
						<div class="neo">
					</li>
					<li>
						<a href="#apply-online" class="neo link-scroll">
							<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span><br/>
							Apply Online
						</a>
					</li>
					<li>
						<a href="#scholarships" class="neo link-scroll">
							<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span><br/>
							Scholarships 
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div><!-- /.header-page -->

	<div class="uni-info">
		<div class="img">
			<div class="slider" id="slider-img-uni">
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
			</div>
		</div>
		<div class="info">
			<h3>Information</h3>
			<div class="item">
				<div class="lbl">Year <br/>Founded</div>
				<div class="right">1966</div>
			</div>

			<div class="item">
				<div class="lbl">Student<br/> Population</div>
				<div class="right">15000</div>
			</div>

			<div class="item">
				<div class="lbl">Staff<br/> Population</div>
				<div class="right">681</div>
			</div>

			<div class="item">
				<div class="lbl">Male to Female<br/> Ratio</div>
				<div class="right">52 : 48</div>
			</div>

			<div class="item">
				<div class="lbl">International<br/> Students</div>
				<div class="right">32%</div>
			</div>

			<div class="item">
				<div class="lbl">Local<br/> Hotline</div>
				<div class="right">+65 6333 1300</div>
			</div>
		</div><!-- /.info -->
	</div><!-- /.uni-info -->

	<div class="breadcrumb-page smoothScroll hidden-sm hidden-xs">
		<ul class="list">
			<li><a href="#about-us" class="link-scroll">About us</a></li>            
			<li><a href="#apply-online" class="link-scroll">Courses</a></li>            
			<li><a href="#rankings" class="link-scroll">Rankings</a></li>           
			<li><a href="#scholarships" class="link-scroll">Scholarships</a></li>            
			<li><a href="#campuses" class="link-scroll">Campuses</a></li>            
			<li><a href="#ask-us-a-question" class="link-scroll">Ask us a question</a></li>            
			<li>+65 6333 1300</li>
		</ul>

		<div class="social">
	      <a href="#"><i class="sprite-facebook"></i></a>
	      <a href="#"><i class="sprite-google-plus"></i></a>
	      <a href="#"><i class="sprite-twitter"></i></a>
	      <a href="#"><i class="sprite-youtube"></i></a>
	   </div><!-- /.social -->
	</div><!-- /.breadcrumb-page -->

	<div class="row">
		<div class="col-md-6">
			<div class="box about" id="about-us">
				<h4 class="title-box">About the University</h4>
				<div class="description">
					<p>Founded in 1895 and a University since 1966, Aston is a research-intensive university known for its world-class teaching quality and strong links to industry, government and commerce.</p>
					<p>Ranked 27 out of 124 UK universities by the Complete University Guide 2014 and 30 out of 119 universities by the Guardian University Guide 2014, Aston University has cemented its place among Britain’s elite higher education institutions. A leading university for graduate employment success for over 25 years, Aston University has consistently outdone eminent institutions such as Oxford University in this area.</p>
					<p>Subject strengths: Business and Management, subjects allied to Medicine, Pharmacy and Pharmacology, Psychology, Biological Sciences, Mechanical Engineering, Modern Languages.</p>
					<p>Contact our Singapore representative at +65 6333 1300 for all university related enquiries or scroll down to apply for courses we are currently offering.</p>
				</div>
			</div><!-- /.about -->
		</div><!-- /.col-md-6 -->

		<div class="col-md-6">
			<div class="box our-campuses" id="campuses">
				<h4 class="title-box">Our campuses</h4>
				<div class="description">
					<p>Aston University is located in the centre of the vibrant city of Birmingham on a self-contained green campus with all academic, accommodation and social facilities located on-site.</p>
					<p>Students have easy access to excellent nightlife, culture, sport, shopping and work - the campus is a five-minute walk from the main shopping and social areas of the city and a fifteen-minute walk from Birmingham New Street station (a national rail hub).</p>
				</div>

				<div class="tags">
					<a href="#"><i class="fa fa-mobile"></i> Cửa hàng tiện lợi</a>
					<a href="#"><i class="fa fa-credit-card"></i> Ngân hàng</a>
					<a href="#"><i class="fa fa-coffee"></i> Quán cà phê</a>
					<a href="#"><i class="fa fa-cutlery"></i> Nhà hàng</a>
					<a href="#"><i class="fa fa-mobile"></i> Mua sắm</a>
					<a href="#"><i class="fa fa-tree"></i> Công viên</a>
					<a href="#"><i class="fa fa-medkit"></i> Tiệm thuốc</a>
					<a href="#"><i class="fa fa-bus"></i> Trạm dừng xe buýt</a>
					<a href="#"><i class="fa fa-"></i> Sân bay</a>
				</div><!-- /.tags -->
			</div><!-- /.our-campuses -->
		</div><!-- /.col-md-6 -->
	</div>

	<div class="map-uni">
		<img src="/img/map-uni.jpg" alt="">
	</div><!-- /.map-uni -->

	<div class="row">
		<div class="col-md-6">
			<div class="box-ranking left" id="rankings">
				<h4 class="title-box">Rankings</h4>
				<div class="item">
					<div class="number"><span>3</span>rd<br/>Optometry</div>
					<div class="lbl">CUG Ophthalmics<br/>United Kingdom</div>
				</div>

				<div class="item">
					<div class="number"><span>12</span>th<br/>Business Studies</div>
					<div class="lbl">CUG Marketing<br/>United Kingdom</div>
				</div>

				<div class="item">
					<div class="number"><span>13</span>th<br/>Pharmacology &amp;Pharmacy</div>
					<div class="lbl">CUG Pharmacology &amp; Pharmacy<br/>United Kingdom</div>
				</div>

				<div class="item">
					<div class="number"><span>15</span>th<br/>Logistics</div>
					<div class="lbl">QS Business &amp; Management<br/>United Kingdom</div>
				</div>

				<div class="item">
					<div class="number"><span>19</span>th<br/>Linguistics</div>
					<div class="lbl">QS Linguistics <br/>United Kingdom</div>
				</div>

				<div class="item">
					<div class="number"><span>20</span>th<br/>Social Work &amp; Policy</div>
					<div class="lbl">CUG Social Policy<br/>United Kingdom</div>
				</div>

				<div class="item">
					<div class="number"><span>25</span>th<br/>Chemical Engineering</div>
					<div class="lbl">CUG Chemical Engineering<br/>United Kingdom</div>
				</div>

				<div class="item">
					<div class="number"><span>37</span>th<br/>English and Literature</div>
					<div class="lbl">QS English Language &amp; Literature<br/>United Kingdom</div>
				</div>

				<div class="item">
					<div class="number"><span>38</span>th<br/>Computer Science</div>
					<div class="lbl">QS Computer Science<br/>United Kingdom</div>
				</div>
			</div><!-- /.box-ranking -->
		</div><!-- /.col-md-6 -->

		<div class="col-md-6">
			<div class="box-ranking right" id="scholarships">
				<h4 class="title-box">Scholarships</h4>
				<div class="item">
					<div class="number">PhD Studentship</div>
					<div class="lbl">Up to £30000 for tuition and living<br/>3 available</div>
				</div>

				<div class="item">
					<div class="number">British Council IELTS Prize 2017</div>
					<div class="lbl">Up to $12000 for tuition<br/>6 available</div>
				</div>

				<div class="item">
					<div class="number">Postgraduate Research Schilarship</div>
					<div class="lbl">£7000 for tuition<br/>10 available</div>
				</div>

				<div class="item">
					<div class="number">Aston University 50th Anniversary<br/>Taught Postgraduate Scholarship</div>
					<div class="lbl">Up to £5000 for tuition<br/>More than 50 available</div>
				</div>

				<div class="item">
					<div class="number">Aston Business Schoold Scholarship<br/>Award Scheme 2016</div>
					<div class="lbl">£1000 for tuition<br/>Limited quantity</div>
				</div>

				<div class="item">
					<div class="number">MBA Scholarship 2015/2016</div>
					<div class="lbl">Up to £6000 for tuition<br/>Limited quantity</div>
				</div>

				<div class="item">
					<div class="number">British Chevening Scholarships</div>
					<div class="lbl">100% for tuition and living expenses<br/>Limited quantity</div>
				</div>

				<div class="item">
					<div class="number">UNESCO Fellowship Programmes</div>
					<div class="lbl">Up to 100% for tuition and living expenses<br/>Limited quantity</div>
				</div>

				<div class="item">
					<div class="number">Aston Alumni Bursaries</div>
					<div class="lbl">20% for tuition<br/>Unlimited quantity</div>
				</div>
			</div><!-- /.box-ranking -->
		</div><!-- /.col-md-6 -->
	</div>

	<div class="undergraduate-courses" id="apply-online">
		<h4 class="title-box">Undergraduate courses</h4>
		<div class="tags">
			<span class="tag"><input type="checkbox" id="checkbox-1"><label for="checkbox-1">Accounting &amp; Finance</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-2"><label for="checkbox-2">Bioengineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-3"><label for="checkbox-3">Biological Science</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-4"><label for="checkbox-4">Business Studies</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-5"><label for="checkbox-5">Chemical Engineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-6"><label for="checkbox-6">Chemistry Civil</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-8"><label for="checkbox-7">Engineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-9"><label for="checkbox-8">Computer</label></span>

			<span class="tag"><input type="checkbox" id="checkbox-10"><label for="checkbox-10">Accounting &amp; Finance</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-11"><label for="checkbox-11">Bioengineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-12"><label for="checkbox-12">Biological Science</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-13"><label for="checkbox-13">Business Studies</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-14"><label for="checkbox-14">Chemical Engineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-15"><label for="checkbox-15">Chemistry Civil</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-16"><label for="checkbox-16">Engineering</label></span>
			<span class="tag"><input type="checkbox" id="checkbox-17"><label for="checkbox-17">Computer</label></span>
		</div><!-- /.tags -->
	</div><!-- /.undergraduate-courses -->

	<div class="filter-result">
		<h4 class="title-box">Accounting &amp; Finance</h4>
		<div class="list-courses">
			<div class="row item">
				<div class="col-lg-5 col-md-4 col-sm-7 col-xs-12">
					<div class="uni-name">
						<a class="course_name" href="#">Accounting and Finance</a>
						<div class="classification">BSc (Hons)</div>
						<div class="visible-sm visible-xs">
                        <span class="inline-block-sm margin-right10-sm">S$22.7K / year</span>
                        <span class="inline-block-sm margin-right10-sm">3 years</span>
                        <span class="inline-block-sm">BBB</span>
                  </div>
					</div><!-- /.uni-name -->
				</div>

				<div class="course-stats col-lg-7 col-md-8 col-sm-5 col-xs-12">
					<div class="pull-right">
						<div class="cell hidden-sm hidden-xs">
							<span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Tuition fees excluding living expenses">S$22.7K</span>
							<span class="sub-tip display-block">per year</span>
						</div>

						<div class="cell hidden-sm hidden-xs">
                     <span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">3</span>
                     <span class="sub-tip display-block">years</span>
                  </div>

                  <div class="cell hidden-sm hidden-xs">
                     <span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">	
                     	BBB
                     </span>
                     <span class="sub-tip display-block">grade</span>
                  </div>

                  <div class="cell hidden-sm hidden-xs course-progression">
			                <div class="see-pathways tip" title="" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Can't meet the minimum grades? Click to see available pathways to progress into Bangor University.">
			                    <i class="fa fa-arrow-up"></i>
			                    <span class="sub-tip display-block">5 pathways</span>
			                </div>
			        </div>

			        <div class="cell_1">
                     <div class="compare" title="Add to compare">
                         <div class="compare-btn">
                             <input id="compare_1" data-courseid="1" type="checkbox" class="compare-btn compareCheckbox">
                             <label for="compare_1" class="compare-label  btn btn-green">Compare <i class="fa fa-check"></i></label>
                         </div>
                     </div>
                 </div>

                    <div class="cell_1">
                           <div id="apply_1425" class="btn btn-green apply-btn" onclick="javascript:apply('1');">
                                APPLY
                           </div>
                           <div id="selected_1425" class="btn btn-green apply-add-btn hide" onclick="javascript:unselect('1');" title="Remove from university application?">
                                ADDED  <i class="fa fa-check"></i>
                           </div>
                    </div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="" class="arrow-box">
						<div class="tree">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                         <div class="info">
                             <h1>Pathway programmes available</h1>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                         <div class="info">
                             <a class="whichroute"><i class="fa fa-question-circle" aria-hidden="true"></i> Which pathway should I choose?</a>
                             <div id="faq-list" class="martop10">
                                 <ul>
                                     <li>
                                         <a href="/guide/pathways-to-university-what-is-foundation-program" target="_blank">What is Foundation Program?</a>
                                     </li>
                                     <li>
                                         <a href="/guide/pathways-to-university-what-is-diploma" target="_blank">What is Diploma?</a>
                                     </li>
                                     <li>
                                         <a class="openchat gtt-chat">Ask an education consultant</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>

                     <div id="diagram" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     	svg
                     </div>
						</div>
					</div><!-- /.arrow_box -->
				</div>
			</div><!-- /.item -->

			<div class="row item">
				<div class="col-lg-5 col-md-4 col-sm-7 col-xs-12">
					<div class="uni-name">
						<a class="course_name" href="#">Accounting and Finance</a>
						<div class="classification">BSc (Hons)</div>
						<div class="visible-sm visible-xs">
                     <span class="inline-block-sm margin-right10-sm">S$22.7K / year</span>
                     <span class="inline-block-sm margin-right10-sm">3 years</span>
                     <span class="inline-block-sm">BBB</span>
               </div>
					</div><!-- /.uni-name -->
				</div>

				<div class="course-stats col-lg-7 col-md-8 col-sm-5 col-xs-12">
					<div class="pull-right">
						<div class="cell hidden-sm hidden-xs">
							<span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Tuition fees excluding living expenses">S$22.7K</span>
							<span class="sub-tip display-block">per year</span>
						</div>

						<div class="cell hidden-sm hidden-xs">
                     <span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">3</span>
                     <span class="sub-tip display-block">years</span>
                  </div>

                  <div class="cell hidden-sm hidden-xs">
                     <span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">	
                     	BBB
                     </span>
                     <span class="sub-tip display-block">grade</span>
                  </div>

                  <div class="cell hidden-sm hidden-xs course-progression">
			                <div class="see-pathways tip" title="" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Can't meet the minimum grades? Click to see available pathways to progress into Bangor University.">
			                    <i class="fa fa-arrow-up"></i>
			                    <span class="sub-tip display-block">5 pathways</span>
			                </div>
			        </div>

			        <div class="cell_1">
                     <div class="compare" title="Add to compare">
                         <div class="compare-btn">
                             <input id="compare_2" data-courseid="1" type="checkbox" class="compare-btn compareCheckbox">
                             <label for="compare_2" class="compare-label  btn btn-green">Compare <i class="fa fa-check"></i></label>
                         </div>
                     </div>
                 </div>

                    <div class="cell_1">
                           <div id="apply_2" class="btn btn-green apply-btn" onclick="javascript:apply('2');">
                                APPLY
                           </div>
                           <div id="selected_1425" class="btn btn-green apply-add-btn hide" onclick="javascript:unselect('2');" title="Remove from university application?">
                                ADDED  <i class="fa fa-check"></i>
                           </div>
                    </div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="" class="arrow-box">
						<div class="tree">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                         <div class="info">
                             <h1>Pathway programmes available</h1>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                         <div class="info">
                             <a class="whichroute"><i class="fa fa-question-circle" aria-hidden="true"></i> Which pathway should I choose?</a>
                             <div id="faq-list" class="martop10">
                                 <ul>
                                     <li>
                                         <a href="/guide/pathways-to-university-what-is-foundation-program" target="_blank">What is Foundation Program?</a>
                                     </li>
                                     <li>
                                         <a href="/guide/pathways-to-university-what-is-diploma" target="_blank">What is Diploma?</a>
                                     </li>
                                     <li>
                                         <a class="openchat gtt-chat">Ask an education consultant</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>

                     <div id="diagram" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     	svg
                     </div>
						</div>
					</div><!-- /.arrow_box -->
				</div>
			</div><!-- /.item -->
		</div><!-- /.list-courses -->
	</div><!-- /.filter-result -->
</div>


<div class="container">
	<div class="contact-home" id="ask-us-a-question">
		<div class="row">
			<div class="col-md-3 col-sm-6 col">
				<div class="university-guide">
					<h3 class="title">UNIVERSITY GUIDE</h3>
					<ul>
						<li>Choosing a university
						<li>Applying to university</li>
						<li>Accepting your offer</li>
						<li>Finances &amp; Scholarships</li>
						<li>Flight &amp; Accomodation</li>
						<li>Student visa</li>
					</ul>
				</div><!-- /.university-guide -->
			</div>

			<div class="col-md-4 col-sm-6 col">
				<div class="form-contact">
					<h3 class="title">HAVE US CONTACT YOU</h3>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Name">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Email">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="WhatsApp">
					</div>
					<div class="form-group">
						<textarea class="form-control">Your questions for our education consultans</textarea>
					</div>
					<div class="bottom"><button class="btn btn-green btn-block">Contact me</button></div>
				</div><!-- /.form-contact -->
			</div>

			<div class="col-md-5 col-sm-12 col">
				<div class="maps">
					<h3 class="title">MEET US</h3>
					<div class="img">
						<img src="/img/map.jpg" alt="">
					</div>
					<div class="info">
						<p>Monday to Friday: <strong>10am - 8pm</strong></p>
						<p>Saturday: <strong>10am - 1pm</strong></p>
					</div>
				</div><!-- /.maps -->
			</div>
		</div>
	</div><!-- /.contact-home -->
</div>
@endsection