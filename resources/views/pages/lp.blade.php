@extends('layouts.home')
@section('content')
    <div id="vue-section">
        <div class="flex flex-row h-4 bg-accent-500 sm:hidden"></div>
        <x-custom-grid :items="[
            [
                'view' => 'pages.page1.col1',
                'smOrder' => 1,
                'col' => 4,
                'bg' => '#F8F9FB',
            ],
            [
                'view' => 'pages.page1.col2',
                'smOrder' => 2,
                'col' => 4,
                'firstPage' => true,
                'bg' => '#F8F9FB',
            ],
            [
                'view' => 'pages.ligne.index',
                'smOrder' => 3,
                'col' => 8,
            ],
            [
                'view' => 'pages.page2.col1',
                'smOrder' => 5,
                'col' => 4,
            ],
            [
                'view' => 'pages.page2.col2',
                'smOrder' => 4,
                'col' => 4,
            ],
            [
                'view' => 'pages.page3.col1',
                'smOrder' => 6,
                'col' => 4,
            ],
            [
                'view' => 'pages.page3.col2',
                'smOrder' => 7,
                'col' => 4,
            ],
        ]" />

        <div id="avis-slider-container" class="sm:flex flex-col items-center py-8 bg-[#F8F9FB] lg:mt-32 sm:h-[601px]">
            <x-typography type="title" color="text-accent-700" class="lg:px-32 sm:text-center">Ce qu'en pensent nos candidats</x-typography>
            <avis-slider></avis-slider>
        </div>

        <div class="flex lg:px-64 bg-accent-500 justify-between py-8 lg:h-[343px] items-center sm:flex-col">
            <x-item :items="[
                ['icon' => 'file-word-o', 'texte' => 'Repartez directement avec vos résultats de test psychotechnique'],
                ['icon' => 'angellist', 'texte' => 'Entraînement en ligne pour garantir votre réussite'],
                ['icon' => 'empire', 'texte' => 'Centre enregistré, psychologues certifiés et à l\'écoute'],
                ['icon' => 'check-circle', 'texte' => 'Taux de réussite de 97.8%'],
            ]" />
        </div>

        <div class="flex flex-col lg:m-32 lg:m-16 sm:m-4 sm:px-4 shadow-2xl rounded-[30px] justify-between py-8 lg:px-16">
            <x-typography type="title" color="text-[#36578A]">Préparez votre test psychotechnique</x-typography>
            <div id='question-item-container' class="sm:flex sm:flex-col justify-center item-center">
                @php
                    $questionsData = [
                        [
                            'title' => "Qu'est-ce qu'un test psychotechnique ?",
                            'content' =>
                                'Un test psychotechnique est une évaluation des aptitudes cognitives et comportementales, souvent utilisée pour valider ou reprendre un permis de conduire.',
                        ],
                        [
                            'title' => 'Quels sont les documents nécessaires ?',
                            'content' =>
                                "Les documents incluent une pièce d'identité, votre courrier d'annulation de permis, et votre attestation d'inscription.",
                        ],
                        [
                            'title' => 'Combien de temps dure le test ?',
                            'content' =>
                                'Le test dure en moyenne 45 minutes, incluant des exercices et des discussions avec un psychologue agréé.',
                        ],
                    ];
                @endphp
                <question-item :items='@json($questionsData)'></question-item>
            </div>

        </div>
        <div class="w-full">
            <x-custom-grid :items="[
                [
                    'view' => 'pages.location.index',
                    'smOrder' => 8,
                    'col' => 8,
                    'bg' => '#F8F9FB',
                ],
                [
                    'view' => 'pages.footer',
                    'smOrder' => 9,
                    'col' => 8,
                    'bg' => '#e5e7ea',
                ],
            ]" />
        </div>
    </div>

@stop
