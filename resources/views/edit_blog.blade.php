<x-navbar title="New ideas">




    <form class="bg-white text-black border" method="POST" action="/index/{{$article->id}}/edit">
        @csrf
        @method('PATCH')

        <div >
            <label>Title</label>
            <input value="{{$article->title}}" class="border"  type="text" name="titre">
        </div>



        <div class="mt-10">
            <button type="submit" class="block  rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>
        </div>
    </form>









</x-navbar>
