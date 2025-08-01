<div id="task-{{ $task->id }}" class="bg-gray-200 p-2 shadow rounded overflow-hidden">
    <div class="flex justify-between items-center ">
        <div class="flex gap-x-2 items-center">
            <x-ui.input
                name="title_{{ $task->id }}"
                :placeholder="__('Task Title')"
                :field_validates_controller="'TaskController'"
                :field_validates_key="$task->id"
            />
            <x-ui.input
                name="due_date_{{ $task->id }}"
                type="date"
                :placeholder="__('Due Date')"
                :field_validates_controller="'TaskController'"
                :field_validates_key="$task->id"
            />
        </div>
        <div class="flex gap-x-2 items-center">
            <button
                title="update"
                data-on-click="{{ datastar()->patch(route('tasks.update', ['task' => $task->id])) }}"
            >
                <svg class="w-6 h-6 text-green-800 cursor-pointer hover:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                </svg>


            </button>
            <button
                title="cancel"
                data-on-click="{{ datastar()->post(route('tasks.getItem', ['task' => $task->id])) }}"
            >
                <svg class="w-6 h-6 text-red-800 cursor-pointer hover:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z" clip-rule="evenodd"/>
                </svg>

            </button>
        </div>
    </div>
</div>
