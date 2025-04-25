@foreach ($categories as $category)
    <li class="me-2">
        <a href="#" class="inline-block px-4 py-3 text-dark rounded-lg" aria-current="page">{{ $category->name }}</a>
    </li>
@endforeach
