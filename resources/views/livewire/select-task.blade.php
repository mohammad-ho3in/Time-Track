<div class="mb-3 col-12">
    <label for="taskName" class="form-label">عنوان کار</label>
    <select wire:click='getTasks()' class="form-select form-select-sm" aria-label="Default select example" name="big_task_id">
      <option value="{{ NULL }}" selected>ندارد</option>
      @foreach ($tasks as $task)
        <option value="{{ $task->id }}">{{ $task->task_name }}</option>
      @endforeach
    </select>
</div>