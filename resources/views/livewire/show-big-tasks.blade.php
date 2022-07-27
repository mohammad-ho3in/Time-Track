<div class="table-responsive height17rem">
    
    <table class="table table-sm table-striped text-center">
        <thead>
            <tr>
                <th>کارها</th>
                <th>وضعیت</th>
                <th>زمان کل</th>
                <th>توضیحات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bigTasks as $bigTask)
            <tr>
                <td>{{ $bigTask->task_name }}</td>
                <th>
                    <input wire:click='changeStatus({{ $bigTask->id }},{{$bigTask->status}})' type="checkbox" name="status"
                    @if($bigTask->status==1) {{ 'checked' }} @else {{ 'unchecked' }} @endif>
                </th>
                <th>{{ $bigTask->full_time }}</th>
                <th>{{ $bigTask->description }}</th>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
</div>