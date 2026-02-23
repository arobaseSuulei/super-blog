<x-navbar title="New ideas">




    <form name="title" method="POST" action="/add_title" class="mt-10">

        @csrf
        <div class="sm:col-span-2">
            <label for="title" class="block text-sm/6 font-semibold ">Title</label>
            <div class="mt-2.5 border rounded-2xl">
                <textarea id="idea" name="idea" rows="4" class="block w-full rounded-md  px-3.5 py-2 text-base  outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"></textarea>
            </div>
        </div>

        <div class="mt-10">
            <button type="submit" class="block  rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add</button>
        </div>


    </form>


    <form name="cover" method="POST" action="/add_cover" class="mt-10">

        @csrf
        <div class="sm:col-span-2">
            <label for="cover url" class="block text-sm/6 font-semibold ">Cover url</label>
            <div class="mt-2.5 border rounded-2xl">
                <textarea id="idea" name="idea" rows="4" class="block w-full rounded-md  px-3.5 py-2 text-base  outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"></textarea>
            </div>
        </div>

        <div class="mt-10">
            <button type="submit" class="block  rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add</button>
        </div>


    </form>



    <form name="content" method="POST" action="/add_content" class="mt-10">

        @csrf
        <div class="sm:col-span-2">
            <label for="content" class="block text-sm/6 font-semibold ">Content</label>
            <div class="mt-2.5 border rounded-2xl">
                <textarea id="idea" name="idea" rows="4" class="block w-full rounded-md  px-3.5 py-2 text-base  outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"></textarea>
            </div>
        </div>

        <div class="mt-10">
            <button type="submit" class="block  rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add</button>
        </div>


    </form>

    <form name="content" method="POST" action="/add_image" class="mt-10">

        @csrf
        <div class="sm:col-span-2">
            <label for="image url" class="block text-sm/6 font-semibold ">Image url</label>
            <div class="mt-2.5 border rounded-2xl">
                <textarea id="idea" name="idea" rows="4" class="block w-full rounded-md  px-3.5 py-2 text-base  outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"></textarea>
            </div>
        </div>

        <div class="mt-10">
            <button type="submit" class="block  rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add</button>
        </div>


    </form>













</x-navbar>
