#!/bin/bash
COUNT=1

IFS="
"

for i in $(echo "Tyrion Lannister
  Jaime Lannister
  Cersei Lannister
  Daenerys Targaryen
  Jon Snow
  Sansa Stark
  Arya Stark
  Davos Seaworth
  Missandei
  Theon Greyjoy
  Samwell Tarly
  Bran Stark
  Brienne of Tarth
  Varys
  Sandor "The Hound" Clegane
  Bronn
  Tormund Giantsbane
  Gendry
  Grey Worm
  Jorah Mormont
  Gilly
  Melisandre
  Beric Dondarrion
  Eddison Tollett
  Podrick Payne
  Yohn Royce
  Lyanna Mormont
  Alys Karstark
  Maester Wolkan
  Ned Umber
  Qhono
  Night King
  Euron Greyjoy
  Qyburn
  Yara Greyjoy
  Gregor Clegane The Mountain
  Harry Strickland
  Robin Arryn"); do echo "array("; echo "    'id' => $COUNT,"; echo "    'name' => '$i',"; echo "    'dead_on' => NULL"; echo "),"; let COUNT=$COUNT+1; done

