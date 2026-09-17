<?php
// 1. BASE DE DADOS SIMULADA (Array Multidimensional)
// Em um cenário real, estes dados viriam de uma consulta SQL por exemplo.

$feedNoticias = [
    [
        "id" => 1,
        "autor" => "Prof. Marcelo Formico",
        "tempo" => "Há 10 minutos",
        "conteudo" => "Bem-vindos à aula de integração PHP e HTML! Hoje vamos ver como o backend dá vida à interface de usuário. Alguém já testou o Bootstrap 5?",
        "curtidas" => 45,
        "comentarios" => 12,
        "destaque" => true
    ],
    [
        "id" => 2,
        "autor" => "Aline Engenharia",
        "tempo" => "Há 2 horas",
        "conteudo" => "Finalmente consegui entender a diferença entre o método GET e POST. O projeto integrador está ganhando forma!",
        "curtidas" => 22,
        "comentarios" => 3,
        "destaque" => false
    ],
    [
        "id" => 3,
        "autor" => "Sistema UNIFIO",
        "tempo" => "Há 5 horas",
        "conteudo" => "Lembrete: A entrega da Sprint 1 do Projeto Integrador encerra nesta sexta-feira. Não esqueçam de realizar o commit no GitHub.",
        "curtidas" => 120,
        "comentarios" => 45,
        "destaque" => true
    ],
    [
        "id" => 4,
        "autor" => "Fernando TI",
        "tempo" => "Há 1 dia",
        "conteudo" => "Dica do dia: Sempre utilizem o htmlspecialchars() ao imprimir dados que vieram do usuário para evitar ataques XSS na aplicação.",
        "curtidas" => 89,
        "comentarios" => 7,
        "destaque" => false
    ]
];

// Simulando dados para a barra lateral direita
$trendingTopics = ["#PHP8", "#Bootstrap5", "#EngenhariaDeSoftware", "#UNIFIO", "#Frontend"];

?>