<div x-cloak x-data class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6 rounded-lg shadow-sm">
  <div class="-ml-4 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
    <div class="ml-4 mt-4">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-gray-200">
              <span class="text-base font-medium leading-none uppercase text-gray-400 font-bold">{{ substr($user->name, 0, 2) }}</span>
          </span>
        </div>
        <div class="ml-4">
          <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $user->name }}</h3>
          <p class="text-sm text-gray-500">
            <span>{{ $user->email }}</span>
          </p>
        </div>
      </div>
    </div>
    <div class="ml-4 mt-4 flex flex-shrink-0">
      <button @click="$dispatch('open-add-task-modal', { userId: {{ $user->id }}})" type="button" class="relative inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create new task</button>
    </div>
  </div>
</div>