<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER aire" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2defaut="" F2lignes="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalBoucles="5000000" arrondiAuto="vrai" epaisseurPoint="2" totalAffichages="1000" nbDecimales="8" epaisseurLigne="2" maxBoucle="500000"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="R EST_DU_TYPE NOMBRE" code="1#NOMBRE#R"/>
        <item algoitem="aire EST_DU_TYPE NOMBRE" code="1#NOMBRE#aire"/>
        <item algoitem="volume EST_DU_TYPE NOMBRE" code="1#NOMBRE#volume"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Veuillez saisir le rayon de la sphère &quot;" code="4#Veuillez saisir le rayon de la sphère #0"/>
        <item algoitem="LIRE R" code="2#R#pasliste"/>
        <item algoitem="aire PREND_LA_VALEUR 4*Math.PI*pow(R,2)" code="5#aire#4*Math.PI*pow(R,2)#pasliste"/>
        <item algoitem="AFFICHER &quot;L'aire de la sphère est : &quot;" code="4#L'aire de la sphère est : #0"/>
        <item algoitem="AFFICHER aire" code="3#aire#1#pasliste"/>
        <item algoitem="volume PREND_LA_VALEUR 4/3*Math.PI*pow(R,3)" code="5#volume#4/3*Math.PI*pow(R,3)#pasliste"/>
        <item algoitem="AFFICHER &quot;Le volume de la sphère est : &quot;" code="4#Le volume de la sphère est : #0"/>
        <item algoitem="AFFICHER volume" code="3#volume#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
