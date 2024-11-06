<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h1 class="text-4xl font-bold">Wellcome to Blog Page!</h1>
        <article class="py-5 px-2 shadow-lg my-5 max-w-screen-lg">
                <h2 class="font-bold text-4xl my-2 p-2">{{ $post['title'] }}</h2>
            <div class="p-2 text-2xl font-semibold ">
                <a href="#">{{ $post['author'] }} || 06/11/2024</a>
            </div>
            <p class="p-2 text-lg leading-relaxed font-light">{{ $post['body'] }}</p>
            <a href="/posts" class="p-2 text-lg text-sky-500 hover:underline"> &laquo Back to Main Blog ;</a>
        </article>
</x-layout>