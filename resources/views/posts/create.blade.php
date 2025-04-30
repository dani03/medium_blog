<x-app-layout>


    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="p-8 space-y-4" enctype="multipart/form-data" action="{{ route('post.store') }}" method="post">
                    <!-- title -->
                    @csrf
                    <div>
                        <x-input-label for="title" :value="__('title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')"  autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>


                    <div>
                        <x-input-label for="category_id" :value="__('category')" />
                        <select id="category"
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'"
                            type="text" name="category_id" autofocus autocomplete="category">
                            <option value=""> select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>
                    <!-- image -->
                    <div>


                        <x-input-label for="image" :value="__('image')" />
                        <x-text-input id="image"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            type="file" name="image" :value="old('image')"  autofocus />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <!-- content Address -->
                    <div>
                        <x-input-label for="content" :value="__('content')" />
                        <x-text-inputarea id="content" class="block mt-1 w-full" type="text" rows="4"
                            cols="30" name="content" :value="old('content')"  autofocus autocomplete="content" />
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>


                    <x-primary-button class="">submit</x-primary-button>
                </form>
            </div>

            {{-- post --}}


        </div>
    </div>
</x-app-layout>
