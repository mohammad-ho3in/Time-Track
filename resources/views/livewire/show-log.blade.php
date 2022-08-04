<div class="table-responsive">
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>نام</th>
                <th>آیکون شروع</th>
                <th>آیکون پایان</th>
                <th>کل تایم</th>
                <th>توضیحات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->title }}</td>
                <td>
                    <a href="task-start/{{ $log->id }}" class="btn btn-sm 
                        @if($log->start_time==null) bg-success
                        @elseif($log->start_time!=null) bg-danger
                        @endif"><i class="fa fa-play"></i></a>
                </td>
                <td>
                    <a href="task-stop/{{ $log->id }}" class="btn btn-sm 
                        @if($log->end_time==null) bg-success
                        @elseif ($log->end_time!=null) bg-danger
                        @endif "><i class="fa fa-stop"></i></a>
                </td>
                <td>
                    <span>{{ $log->count_time }}</span>
                </td>
                <td>{{ $log->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>