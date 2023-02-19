<div>
    <div x-cloak x-data="addTaskModal" @open-add-task-modal.window="openModal($event.detail.userId)">
        <div x-show="open" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity"></div>
    
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div @click.outside="closeModal()" class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                        <div class="space-y-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Title</label>
                                <div class="mt-1">
                                  <input x-model="title" type="text" name="title" id="title" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                            <div>
                                <label for="comment" class="block text-sm font-medium text-gray-700">Description</label>
                                <div class="mt-1">
                                  <textarea x-model="description" rows="4" name="comment" id="comment" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                </div>
                            </div>
                            <div class="flex justify-end space-x-2">
                                <button @click="closeModal()" type="button" class="inline-flex items-center rounded-md border border-transparent bg-gray-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Cancel</button>
                                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create new task</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    <script>
    
        document.addEventListener('alpine:init', () => {
            Alpine.data('addTaskModal', () => ({
                open: false,
                userId: null,
                description: null,
                title: null,
    
                /**
                 * @param id id of user to add task
                 */
                openModal(id) {
                    this.open = true;
                    this.userId = id;
                },
                closeModal() {
                    this.open = false;
                    this.reset();
                },
                reset() {
                    this.title = null;
                    this.description = null;
                }
            }))
        });
    
    </script>
</div>
