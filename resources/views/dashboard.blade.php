<x-app-layout>


    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <ul
                        class="flex flex-wrap justify-center text-sm font-medium text-center text-gray-500 dark:text-gray-400">

                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active"
                                aria-current="page">all</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="me-2">
                                <a href="#" class="inline-block px-4 py-3 text-dark rounded-lg"
                                    aria-current="page">{{ $category->name }}</a>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>

            {{-- post --}}

            <div class="text-gray-900  mt-8">
                <div class="p-6 ">


                    <ul
                        class="flex flex-wrap justify-center text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        @forelse ($posts as $post)
                            <x-post-item :post="$post" ></x-post-item>

                            {{ $posts->onEachSide(3)->links() }}
                        @empty
                            <div> no post found (aucun post )</div>
                        @endforelse



                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
