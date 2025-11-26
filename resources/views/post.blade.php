<x-layout :title="$title">
    <div class="space-y-6">
        <article class="bg-gray-800 rounded-lg p-6 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-2">{{ $post['title'] }}</h2>
            <div class="text-gray-400 text-sm mb-4">
                <a href="#" class="hover:text-white">{{ $post['author'] }}</a> | 1 January 2025
            </div>
            <p class="text-gray-300 mb-4 leading-relaxed">{{ $post['body'] }}</p>
            <a href="/posts" class="text-indigo-400 hover:text-indigo-300 font-medium">&laquo; Back to all posts.</a>
        </article>
    </div>
</x-layout>