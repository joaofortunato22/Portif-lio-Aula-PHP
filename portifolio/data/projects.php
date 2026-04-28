<?php

// Evita erro se o arquivo for incluído mais de uma vez
if (!isset($projects)) {

    $projects = [
        [
            "title" => "Travelgram",
            "description" => "Rede social de viagens",
            "image" => "assets/img/projeto1.png",
            "techs" => ["PHP", "CSS", "JavaScript"]
        ],
        [
            "title" => "Tech News",
            "description" => "Portal de notícias",
            "image" => "assets/img/projeto2.png",
            "techs" => ["HTML", "CSS"]
        ],
        [
            "title" => "Página de Receita",
            "description" => "Site de receitas",
            "image" => "assets/img/projeto3.png",
            "techs" => ["PHP"]
        ],
        [
            "title" => "Refund",
            "description" => "Sistema de reembolso",
            "image" => "assets/img/projeto4.png",
            "techs" => ["PHP", "MySQL"]
        ]
    ];

}