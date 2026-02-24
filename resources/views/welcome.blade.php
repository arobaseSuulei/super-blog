<x-navbar class="">

    <div class=" mr-48 mt-24 ml-48 flex items-center justify-center">
        <p class="text-center  font-serif text-3xl ">
            Stories, thoughts and
            reflection about building
        </p>
    </div>


    <x-bloc >


        <p class="text-red-600">heyyyy</p>

        @foreach($article as $ar)
            <li class="text-white">{{$ar->title}}</li>

        @endforeach




    </x-bloc>









</x-navbar>
