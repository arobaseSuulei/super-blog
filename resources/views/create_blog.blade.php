<x-navbar title="New ideas">




    <form class="bg-white text-black border" method="POST" action="/create">
        @csrf

        <div >
            <label>Title</label>
            <input class="border"  type="text" name="title">
        </div>

        <div >
            <label>Cover URL</label>
            <input class="border" type="text" name="cover">
        </div>

        <div >
            <label>Content</label>
            <textarea class="border" name="content"></textarea>
        </div>

        <div >
            <label>Image URL</label>
            <input class="border" type="text" name="image">
        </div>

        <div class="mt-10">
            <button type="submit" class="block  rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add</button>
        </div>
    </form>









</x-navbar>
