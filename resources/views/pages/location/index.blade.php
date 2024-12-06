<div class="flex flex-col w-full py-16 lg:px-32 sm:px-8">
    <x-typography type="title" color="text-accent-500">Réservez votre test proche de chez vous</x-typography>
    <x-typography type="subtitle" color="text-accent-500" class="mb-16">En seulement 3 étapes</x-typography>
    <div class="w-full">
        <x-location-search name="search_location" placeholder="Saisir une ville" />
    </div>
    <div
        class="flex flex-row w-full pl-32 pr-8 py-8 gap-8 items-center bg-[#E9E9E9] shadow-md rounded-md mt-4 sm:hidden">
        <div class="flex flex-row w-full  justify-between gap-8">
            @php
                $data = [
                    [
                        'title' => 'Mois',
                        'options' => [
                            'Janvier',
                            'Février',
                            'Mars',
                            'Avril',
                            'Mai',
                            'Juin',
                            'Juillet',
                            'Aout',
                            'Septembre',
                            'Octobre',
                            'Novembre',
                            'Décembre',
                        ],
                    ],
                    [
                        'title' => 'Jours',
                        'options' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                    ],
                    [
                        'title' => 'Demi-journée',
                        'options' => ['Matin', 'Après-midi'],
                    ],
                ];
            @endphp

            @foreach ($data as $selectOption)
                <x-select-input :options="$selectOption" class="my-custom-class" />
            @endforeach

            <div class="flex flex-col text-center">
                <button type="submit" class="w-[287px] sm:!h-[39px] !h-[52px] bg-[#434343] rounded-md opacity-100">
                    <x-typography type="button3">FILTRER</x-typography>
                </button>
                <a><x-typography type="link">Réinitialiser les filtres</x-typography></a>
            </div>
        </div>
    </div>
    <div class="lg:hidden flex flex-col w-full">
        <button class="bg-[#E9E9E9] w-full h-[70px] rounded-md mt-8">
            <x-typography type="body">Filtrer</x-typography>
        </button>
        <div class="flex flex-row items-center mt-8 rounded-md h-[150px] bg-white shadow-lg sm:h-[72px]">
            <div class="bg-[#36578a] flex-1 flex flex-col items-center justify-center text-white h-full rounded-l-md">
                <x-typography type="small" class="text-white">Le plus rapide</x-typography>
                <x-typography type="price" class="text-white">120€</x-typography>
            </div>
            <div class="flex-1 flex flex-col items-center justify-center border-r h-full">
                <x-typography type="small">Le moins cher</x-typography>
                <x-typography type="price">77€</x-typography>
            </div>
            <div class="flex-1 flex flex-col items-center justify-center h-full rounded-r-md">
                <x-typography type="small">Forte demande</x-typography>
                <x-typography type="price">77€</x-typography>
            </div>
        </div>
    </div>
    <div class="w-full">
        @php
            $data = [
                'jours' => 'Lundi',
                'date' => '04 Novembre 2024',
                'address' => '50 avenue d\'Essômes, 02400',
                'details' => '02 Châteua-Thierry',
                'price' => 77,
                'promo' => 120,
                'place' => 3,
            ];
        @endphp

        <div class="grid grid-cols-12 w-full mt-16 my-2 sm:flex sm:flex-col">
            <div class="col-span-8">
                @for ($i = 0; $i < 9; $i++)
                    <x-reservation-item :item="$data" />
                @endfor
            </div>
            <div class="sm:flex sm:flex-row lg:col-span-4 sm:items-center sm:justify-center lg:ml-16">
                <div
                    class="lg:flex flex-row lg:flex-col w-full max-w-screen-lg mx-auto sm:items-center sm:justify-center">
                    <div class="flex flex-col w-full text-center bg-white shadow-md rounded-lg">
                        <div class="flex bg-[#36578A] text-white h-[52px] justify-center items-center rounded-t-lg">
                            Les tests par ville à Aisne (02)
                        </div>
                        <div class="flex flex-row flex-wrap items-center mt-3">
                            <div
                                class="flex bg-[#F8F9FB] w-full sm:w-auto h-[45px] rounded-lg shadow-md m-2 justify-center items-center">
                                Château-Thierry
                            </div>
                            <div
                                class="flex bg-[#F8F9FB] w-full sm:w-auto h-[45px] rounded-lg shadow-md m-2 justify-center items-center">
                                Saint-Quentin
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-row w-full bg-white justify-between items-center mt-4 px-8 shadow-md rounded-lg">
                        <i class="fa fa-chevron-left text-[#434343]"></i>
                        <div class="flex flex-col justify-center items-center">
                            <i class="fa fa-check-circle-o text-green-700 text-2xl"></i>
                            <div class="font-title font-normal text-[35px] leading-[42px] text-[#000000] opacity-100">
                                97.7%</div>
                            <div
                                class="font-body font-normal text-[20px] leading-[27px] text-[#000000] opacity-100 text-center">
                                Taux de réussite <br />à nos tests psychotechniques
                            </div>
                        </div>
                        <i class="fa fa-chevron-right text-[#434343]"></i>
                    </div>
                    <x-note />
                    <div class="mt-4 w-full shadow-md rounded-lg">
                        <img src="https://fakeimg.pl/1000x800/?retina=1&text=こんにちは&font=noto"
                            class="w-full h-auto shadow-md rounded-lg">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
