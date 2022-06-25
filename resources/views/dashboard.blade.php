<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Football-pedia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <p>{{ __('Šī ir lapa par futbolu, precīzāk, par futbola komandām, spēlētājiem') }}</p>
    <p>{{ __('Lapa veidota kā informācijas krātuve, kur lietotāji var paaust savu viedokli, un uzzināt ko jaunu par futbolu!') }}</p>
    <p>              {{ __('Lapā ir izveidotas sadaļas - valsts, līga, komanda, spēlētājs') }}</p>
   <body class="antialiased">
            @include('partials/language_switcher')

                {{ __('Valodas maiņa!') }}
                <p>
                    <a  class="underline text-sm text-gray-600 hover:text-gray-900" href ="/country">    {{ __('Sākam darbību ar mājaslapu!') }}</a>
                </p>
            </div>
</body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
