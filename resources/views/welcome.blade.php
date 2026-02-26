

<x-navbar class="">

    <div class=" mr-48 mt-24 ml-48 flex items-center justify-center">
        <p class="text-center  font-serif text-3xl ">
            Stories, thoughts and
            reflection about building
        </p>
    </div>


    <div class="flex gap-2">
        @foreach($article as $ar)

            <x-bloc  >

                {{$ar->title}}

                <a class="underline" href="/index/{{{$ar->id}}}"> visit</a>
            </x-bloc>

        @endforeach
    </div>










</x-navbar>
