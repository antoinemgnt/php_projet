<?php
$produits = [
    "cigarette"=>12,
    "Magazine"=>3,
    "Ticket a gratter"=>10,
    "Bonbon"=>0.5
];
$produitsT = array_sum($produits);
echo "Le prix total des produits est de $produitsT €";