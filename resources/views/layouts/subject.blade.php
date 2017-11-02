<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <h3>My frequently visited</h3>
        @php 
        $frequent_visited_subject_ids = Cookie::get('frequent_visited_subject_ids',json_encode([]));
        @endphp
        @foreach (json_decode($frequent_visited_subject_ids) as $value)
        @php 
        $frequent_visited_subject = App\Models\Subject::where('id', $value)->get(['name', 'slug'])->first(); 
        @endphp
        <a href="{{ route('user.subject.detail', $frequent_visited_subject->slug) }}">{{ $frequent_visited_subject->name }}</a>
        @endforeach
        <div class="recent-uni-spacer"></div>
        <?php
        $subjects = App\Models\Subject::all();
        $count = $subjects->count() + 5;
        $one_col = round($count /4) + 1;
        $i = 0;
        ?>
        @foreach($subjects as $subject)
            <?php $i++; ?>
            @if( $i <= $one_col - 5)
                <a href="{{ route('user.subject.detail', $subject->slug) }}">{{ $subject->name }}</a>
            @endif

            @if( $i == $one_col - 5)
    </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        @endif

        @if($i > $one_col - 5 && $i <= (2 * $one_col) - 5)
            <a href="{{ route('user.subject.detail', $subject->slug) }}">{{ $subject->name }}</a>
        @endif

        @if( $i == (2 * $one_col) - 5)
    </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        @endif

        @if($i > (2 * $one_col) - 5 && $i <= (3 * $one_col) - 5)
            <a href="{{ route('user.subject.detail', $subject->slug) }}">{{ $subject->name }}</a>
        @endif
        @if( $i == (3 *$one_col) - 5)
    </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        @endif
        @if($i > (3 * $one_col) - 5 && $i <= $count)
            <a href="{{ route('user.subject.detail', $subject->slug) }}">{{ $subject->name }}</a>
        @endif

        @endforeach
    </div>
</div>