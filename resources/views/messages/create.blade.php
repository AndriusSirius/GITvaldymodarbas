<x-app-layout>
    <x-slot name="header">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                            <div class="mb-4">
                                <label class="text-xl text-gray-600">Pavadinimas <span
                                        class="text-red-500">*</span></label><br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title"
                                    value="" required>
                            </div>

                            <div class="mb-8">
                                <label class="text-xl text-gray-600">Tekstas <span
                                        class="text-red-500">*</span></label><br>
                                <textarea name="content" class="border-2 border-gray-500">

                                </textarea>
                            </div>

                            <div class="flex p-1">
                                <button name="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400"
                                    required>išsaugoti</button>
                            </div>

                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>
