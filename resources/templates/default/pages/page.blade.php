<main class="flex justify-center pt-6">
    <div class="w-5xl">
        @foreach($page_module as $module)
            @include('modules::'.$module)
        @endforeach
    </div>
</main>