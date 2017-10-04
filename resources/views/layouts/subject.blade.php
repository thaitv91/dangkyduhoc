<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <h3>My frequently visited</h3>
        <a href="#">subject 1</a>
        <a href="#">subject 2</a>
        <a href="#">subject 3</a>
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