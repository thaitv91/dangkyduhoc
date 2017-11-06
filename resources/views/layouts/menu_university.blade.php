<div class="container">
    <h1 class="text-center">See courses by university</h1>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <h3>My frequently visited</h3>
            <?php 
            $frequent_visited_university_ids = Cookie::get('frequent_visited_university_ids',json_encode([]));
            ?>
            @foreach (json_decode($frequent_visited_university_ids) as $value)
            @php 
            $frequent_visited_university = App\Models\University::where('id', $value)->get(['name', 'slug'])->first(); 
            @endphp
            <a href="{{ route('user.university.detail', $frequent_visited_university->slug) }}">{{ $frequent_visited_university->name }}</a>
            @endforeach
            <?php
                $menu_first = \App\Models\MenuUniversity::where('column', '=', 1)
                    ->orderBy('weight')
                    ->get();
            ?>

            @foreach($menu_first as $menu)
                @if ($menu->type == 'country' )
                    <h4>{{ $menu->title }}</h4>
                @else
                    <a href="/university/{{ $menu->link }}">{{ $menu->title }}</a>
                @endif
            @endforeach
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <?php
            $menu_second = \App\Models\MenuUniversity::where('column', '=', 2)
                ->orderBy('weight')
                ->get();
            ?>

            @foreach($menu_second as $menu)
                @if ($menu->type == 'country' )
                    <h4>{{ $menu->title }}</h4>
                @else
                    <a href="/university/{{ $menu->link }}">{{ $menu->title }}</a>
                @endif
            @endforeach
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

            <?php
            $menu_third = \App\Models\MenuUniversity::where('column', '=', 3)
                ->orderBy('weight')
                ->get();
            ?>

            @foreach($menu_third as $menu)
                @if ($menu->type == 'country' )
                    <h4>{{ $menu->title }}</h4>
                @else
                    <a href="/university/{{ $menu->link }}">{{ $menu->title }}</a>
                @endif
            @endforeach
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <?php
            $menu_four = \App\Models\MenuUniversity::where('column', '=', 4)
                ->orderBy('weight')
                ->get();
            ?>

            @foreach($menu_four as $menu)
                @if ($menu->type == 'country' )
                    <h4>{{ $menu->title }}</h4>
                @else
                    <a href="/university/{{ $menu->link }}">{{ $menu->title }}</a>
                @endif
            @endforeach
        </div>
    </div>
</div>