<x-layout :title="$title">
    <div class="space-y-6">
        @foreach ($posts as $post)
        <article class="bg-gray-800 rounded-lg p-6 shadow-lg">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="text-2xl font-bold text-white mb-2">{{ $post['title'] }}</h2>
            </a>
            <div class="text-gray-400 text-sm mb-4">
                <a href="/authors/{{ $post->author->username }}" class="hover:text-white underline">{{ $post->author->name }}</a> | 1 January 2025
            </div>
            <p class="text-gray-300 mb-4 leading-relaxed">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="text-indigo-400 hover:text-indigo-300 font-medium">Read more &raquo;</a>
        </article>
        @endforeach
    </div>
</x-layout>