<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h1 class="text-4xl font-bold">Wellcome to Blog Page!</h1>
    @foreach ( $posts as $post )
        <article class="py-5 px-2 shadow-2xl my-5 border-2 max-w-screen-lg">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="font-bold text-4xl my-2 p-2">{{ $post['title'] }}</h2>
            </a>
            <div class="p-2 text-2xl font-semibold ">
                <a href="#">{{ $post['author'] }} || 06/11/2024</a>
            </div>
            <p class="p-2 text-lg leading-relaxed font-light"> {{ Str::limit($post['body'], 100) }} </p>
            <a href="/posts/{{ $post['slug'] }}" class="p-2 text-lg text-sky-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>