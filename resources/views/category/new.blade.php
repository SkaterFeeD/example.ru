<x-layout xmlns:x-slot="http://www.w3.org/1999/xhtml">
    <x-slot:title>
        Добавление категории
    </x-slot:title>

    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Название категории</label>
            <input class="form-text" id="name" name="name" value="">
        </div>
        <div class="form-control">
            <button class="btn btn-primary">Добавить данные</button>
        </div>
    </form>

</x-layout>
