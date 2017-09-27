<div class="container">
    <h1 class="text-center">See courses by university</h1>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <h3>My frequently visited</h3>
            <a href="#">University 1</a>
            <a href="#">University 2</a>
            <a href="#">University 3</a>
            <?php
                $schools = App\Models\University::select('*')->orderBy('country_slug')->get();
                $s_cookie_count = 23;
                $s_count = $schools->count() + $s_cookie_count;
                $s_count_col = round($s_count / 4);
                $countries = App\Models\Country::all();

                $uk_school = App\Models\University::where('country_slug', '=', 'UK')->count();
                $au_school = App\Models\University::where('country_slug', '=', 'AU')->count();
                $us_school = App\Models\University::where('country_slug', '=', 'US')->count();
                $ca_school = App\Models\University::where('country_slug', '=', 'CA')->count();
                $ch_school = App\Models\University::where('country_slug', '=', 'CH')->count();
                $il_school = App\Models\University::where('country_slug', '=', 'IL')->count();
                $count = 0;
            ?>
            <h4>{!! App\Models\Country::where('slug', '=', 'UK')->first()->name !!}</h4>
            @foreach($schools as $school)
                <?php $count++;?>

                @if (($count + 5) % $s_count_col == 0)
                    </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                @endif
                <a href="{{ route( 'user.university.detail', $school->slug) }}">{{ $school->name }}</a>

                @if($count == $uk_school)
                    <h4>{{ App\Models\Country::where('slug', '=', 'AU')->first()->name }}</h4>
                @endif

                @if($count == $uk_school + $au_school)
                <h4>{{ App\Models\Country::where('slug', '=', 'US')->first()->name }}</h4>
                @endif

                @if($count == $uk_school + $au_school + $us_school)
                    <h4>{{ App\Models\Country::where('slug', '=', 'CA')->first()->name }}</h4>
                @endif

                @if($count == $uk_school + $au_school + $us_school + $ca_school)
                    <h4>{{ App\Models\Country::where('slug', '=', 'CH')->first()->name }}</h4>
                @endif

                @if($count == $uk_school + $au_school + $us_school + $ca_school + $ch_school)
                    <h4>{{ App\Models\Country::where('slug', '=', 'IL')->first()->name }}</h4>
                @endif

            @endforeach
        </div>
    </div>
</div>