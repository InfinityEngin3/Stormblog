<main class="flex justify-center pt-6">
    <div class="w-5xl">

        @if (isset($page_title))
        <header class="page-title text-lg font-semibold pb-6">
                <h1>
                    {{ $page_title }}
                    @if(isset($page_subtitle))
                        <span class="text-cyan-600">{{$page_subtitle}}</span>
                    @endif
                </h1>
            </header>
        @endif

        @foreach($page_module as $module)
            @include('modules::'.$module)
        @endforeach
    </div>
</main>