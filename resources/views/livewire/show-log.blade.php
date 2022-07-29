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
                        @if($taskStatus=='end' || $taskStatus=='stop') bg-danger 
                        @elseif ($taskStatus=='start') bg-success 
                        @endif text-white rounded-bottom fa fa-play"></a>
                </td>
                <td>
                    <a href="task-stop/{{ $log->id }}" class="btn btn-sm 
                        @if($taskStatus=='end' || $taskStatus=='stop') bg-success 
                        @else bg-danger
                        @endif text-white rounded-bottom fa fa-stop"></a>
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