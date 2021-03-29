@include('head')
<section class="container border-2 bg-gray-200 rounded m-5">
    <h1 class="text-lg text-black font-bold mt-5 mb-5">
        Rašyti naują žinute.
    </h1>
    <form method="POST" action="create_message">

        @csrf

        <div>
            <div class="flex flex-col mb-3">
                <label for="name">Pavadinimas</label>
                <input name="title" type="text" id="name"
                    autocomplete="off">
            </div>
            <div class="flex flex-col mb-3">
                <label for="email">Tekstas</label>
                <input name="content" type="text" id="name"
                    autocomplete="off">
            </div>
        </div>
        <div class="w-full pt-3">
            <a href="{{ route('create_message') }}"></a>
            <button type="submit"
                class="border-2 rounded border-blue-700 px-6 font-bold uppercase">
                Pridėti
            </button>
        </div>
    </form>
</section>
