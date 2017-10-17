@extends("layouts/app")

@section("content")


<div class="compare-page compare-div page" id="page_compare">
	<div class="compare-div sortablediv ui-sortable">
		<div class="compare-col compare-col-borderless ui-sortable-handle">
            <div class="col-lg-12 feature-row .feature-row-top first-col">
                <div class="feature feature1" data-rowno="1" style="height: 276px;">
                    <button class="btn copybtn">Copy URL</button>
                    <button class="btn clearbtn">Clear all</button>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature9 pad" data-rowno="9" style="height: 134px;">
                    <span>Minimum Grade</span>
                </div>
            </div>

            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature11 pad" data-rowno="11" style="height: 51px;">
                    <span>Duration</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col martop30 marbot10px">
                <div class="feature feature21" data-rowno="21" style="height: 120px;">
                    <span>Yearly Expenses</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature3" data-rowno="3" style="height: 21px;">
                    <span>Living Expenses</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature2" data-rowno="2" style="height: 21px;">
                    <span>Tuition Fee</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature13 feature-normalheight pad" data-rowno="13" style="height: 204px;">
                    <span>Rankings</span>
                </div>
            </div>

            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature14" data-rowno="14" style="height: 21px;">
                    <span>Founded</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature16" data-rowno="16" style="height: 21px;">
                    <span>Students</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature16" data-rowno="20" style="height: 21px;">
                    <span>Staff</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature17" data-rowno="17" style="height: 21px;">
                    <span>Male : Female</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature18" data-rowno="18" style="height: 21px;">
                    <span>Intl Students</span>
                </div>
            </div>
            <div class="clearBoth"></div>
      </div><!-- /.compare-col -->

      <div class="compare-col content-col ui-sortable-handle" data-courseid="1" data-priority="1" id="compareDiv_1">
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row feature-row-top relative">
				<div class="feature feature1" data-rowno="1" style="height: 276px;">
					<div class="row marbot10px">
						<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
							<a class="compare-remove text-center" data-parentid="1517" title="Remove from compare"><i class="fa fa-times"></i></a>
						</div>
						<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 text-center">
							<a href="/university/bangor-university"><img class="tip" data-original-title="View more information on Bangor University" src="https://therightustorage.blob.core.windows.net/assets/University/B078_bangor_logo.jpg" title=""></a>
						</div>
						<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 text-center">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
									<a class="tip" data-original-title="The Management with Accounting degree allows you to develop the vital skills needed to manage finance, people and information, while gaining a specialised body of knowledge in accounting. This programme is accredited by the ACCA (the Association of Chartered Certified Accountants), the global body for professional accountants." data-placement="bottom" href="/course/bangor-university-management-with-accounting-bsc-hons-n2nk" title="">
									<h2>Management with Accounting</h2></a> <span class="course-code">BSc (Hons)</span>
								</div>
								<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 uniname text-center">
									<a href="/university/bangor-university">Bangor University</a>
								</div>
								<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 uniname text-center">
									United Kingdom
								</div>
							</div>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row text-center relative">
				<div class="feature feature9 pad" data-rowno="9" style="height: 134px;">
					<div title="Click to toggle between qualifications" data-bordersize="5" data-animationstep="0" data-dimension="100" data-text="CCC" data-info="A Level" data-fontsize="20" data-percent="50" data-fgcolor="#1785BB" data-bgcolor="#eee" class="circliful gradetype"></div>				
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row text-center relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature11 pad" data-rowno="11" style="height: 51px;">
					<span class="right">3 years</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row text-center relative" style="background-color: rgb(255, 255, 255);">
				<div class=" feature feature21 padtop20 padbot20px" data-rowno="21" style="height: 160px;">
					<div class="chart">
						<div class="fee" data-value="22.7" data-title="Tuition fee" data-prefix="S$" data-postfix="K"></div>
						<div class="living-expenses" data-value="14.8" data-title="Living expenses" data-prefix="S$" data-postfix="K"></div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature3 text-center" data-rowno="3" id="livingexpenses" style="height: 21px;">
					<span class="chart-item living margin-left5">S$14.8K</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature2 text-center" data-rowno="2" id="tutionfees" style="height: 21px;">
					<span class="chart-item tuition margin-left5">S$22.7K</span>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature13 feature-normalheight pad" data-rowno="13" style="height: 204px;">
					<div class="details compare-section">
						<div class="info_box clearfix">
							<div class="info_box_item clearfix">
								<span class="left rank-name">Finance<br>
								<span class="display-inline smaller" id="country">UK</span> <span class="display-inline smaller" title="Academic Ranking of World Universities 2017 ">/ ARWU</span></span> <span class="right course-rank" id="course-rank">11<sup>TH</sup></span>
							</div>
							<div class="info_box_item clearfix">
								<span class="left rank-name">Accounting &amp; Finance<br>
								<span class="display-inline smaller" id="country">UK</span> <span class="display-inline smaller" title="Complete University Guide 2018 ">/ CUG</span></span> <span class="right course-rank" id="course-rank">39<sup>TH</sup></span>
							</div>
							<div class="info_box_item clearfix">
								<span class="left rank-name">Marketing<br>
								<span class="display-inline smaller" id="country">UK</span> <span class="display-inline smaller" title="Complete University Guide 2018 ">/ CUG</span></span> <span class="right course-rank" id="course-rank">41<sup>ST</sup></span>
							</div>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature14 text-center" data-rowno="14" style="height: 21px;">
					<span>1884</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature16 text-center" data-rowno="16" style="height: 21px;">
					<span>9162</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature16 text-center" data-rowno="20" style="height: 21px;">
					<span>355</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature17 text-center" data-rowno="17" style="height: 21px;">
					<span>43 : 57</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature18 text-center" data-rowno="18" style="height: 21px;">
					<span>21%</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row feature-row-apply relative">
				<div class="feature feature15 feature-apply" style="height: 41px;">
					<div class="course-apply-button btn btn-blue btn-block" id="apply_1517" onclick="javascript:apply('1517');" title="Add to my university application">
						APPLY
					</div>
					<div class="course-selected-button btn btn-blue btn-block hide" id="selected_1517" onclick="javascript:unselect('1517');" title="Remove from application?">
						ADDED
					</div>
				</div>
			</div>
		</div><!-- /.compare-col -->

		<div class="compare-col content-col ui-sortable-handle" data-courseid="2" data-priority="2" id="compareDiv_2">
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row feature-row-top relative">
				<div class="feature feature1" data-rowno="1" style="height: 276px;">
					<div class="row marbot10px">
						<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
							<a class="compare-remove text-center" data-parentid="1517" title="Remove from compare"><i class="fa fa-times"></i></a>
						</div>
						<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 text-center">
							<a href="/university/bangor-university"><img class="tip" data-original-title="View more information on Bangor University" src="https://therightustorage.blob.core.windows.net/assets/University/B078_bangor_logo.jpg" title=""></a>
						</div>
						<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 text-center">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
									<a class="tip" data-original-title="The Management with Accounting degree allows you to develop the vital skills needed to manage finance, people and information, while gaining a specialised body of knowledge in accounting. This programme is accredited by the ACCA (the Association of Chartered Certified Accountants), the global body for professional accountants." data-placement="bottom" href="/course/bangor-university-management-with-accounting-bsc-hons-n2nk" title="">
									<h2>Management with Accounting</h2></a> <span class="course-code">BSc (Hons)</span>
								</div>
								<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 uniname text-center">
									<a href="/university/bangor-university">Bangor University</a>
								</div>
								<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 uniname text-center">
									United Kingdom
								</div>
							</div>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row text-center relative">
				<div class="feature feature9 pad" data-rowno="9" style="height: 134px;">
					<div title="Click to toggle between qualifications" data-bordersize="5" data-animationstep="0" data-dimension="100" data-text="DDD" data-info="B Level" data-fontsize="20" data-percent="50" data-fgcolor="#1785BB" data-bgcolor="#eee" class="circliful gradetype"></div>				
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row text-center relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature11 pad" data-rowno="11" style="height: 51px;">
					<span class="right">3 years</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row text-center relative" style="background-color: rgb(255, 255, 255);">
				<div class=" feature feature21 padtop20 padbot20px" data-rowno="21" style="height: 160px;">
					<div class="chart">
						<div class="fee" data-value="28.8" data-title="Tuition fee" data-prefix="S$" data-postfix="K"></div>
						<div class="living-expenses" data-value="10" data-title="Living expenses" data-prefix="S$" data-postfix="K"></div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature3 text-center" data-rowno="3" id="livingexpenses" style="height: 21px;">
					<span class="chart-item living margin-left5">S$10K</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature2 text-center" data-rowno="2" id="tutionfees" style="height: 21px;">
					<span class="chart-item tuition margin-left5">S$28.8K</span>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature13 feature-normalheight pad" data-rowno="13" style="height: 204px;">
					<div class="details compare-section">
						<div class="info_box clearfix">
							<div class="info_box_item clearfix">
								<span class="left rank-name">Finance<br>
								<span class="display-inline smaller" id="country">UK</span> <span class="display-inline smaller" title="Academic Ranking of World Universities 2017 ">/ ARWU</span></span> <span class="right course-rank" id="course-rank">11<sup>TH</sup></span>
							</div>
							<div class="info_box_item clearfix">
								<span class="left rank-name">Accounting &amp; Finance<br>
								<span class="display-inline smaller" id="country">UK</span> <span class="display-inline smaller" title="Complete University Guide 2018 ">/ CUG</span></span> <span class="right course-rank" id="course-rank">39<sup>TH</sup></span>
							</div>
							<div class="info_box_item clearfix">
								<span class="left rank-name">Marketing<br>
								<span class="display-inline smaller" id="country">UK</span> <span class="display-inline smaller" title="Complete University Guide 2018 ">/ CUG</span></span> <span class="right course-rank" id="course-rank">41<sup>ST</sup></span>
							</div>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature14 text-center" data-rowno="14" style="height: 21px;">
					<span>1884</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature16 text-center" data-rowno="16" style="height: 21px;">
					<span>9162</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature16 text-center" data-rowno="20" style="height: 21px;">
					<span>355</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature17 text-center" data-rowno="17" style="height: 21px;">
					<span>43 : 57</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature18 text-center" data-rowno="18" style="height: 21px;">
					<span>21%</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row feature-row-apply relative">
				<div class="feature feature15 feature-apply" style="height: 41px;">
					<div class="course-apply-button btn btn-blue btn-block" id="apply_1517" onclick="javascript:apply('1517');" title="Add to my university application">
						APPLY
					</div>
					<div class="course-selected-button btn btn-blue btn-block hide" id="selected_1517" onclick="javascript:unselect('1517');" title="Remove from application?">
						ADDED
					</div>
				</div>
			</div>
		</div><!-- /.compare-col -->
	</div><!-- /.compare-div -->
</div><!-- /#page_compare -->




@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}
<script type="text/javascript">

</script>
@endsection
