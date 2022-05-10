<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="temporaire EST_DU_TYPE NOMBRE" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2defaut="" F2etat="inactif" F2para="" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param maxBoucle="500000" epaisseurPoint="2" nbDecimales="8" epaisseurLigne="2" totalAffichages="1000" arrondiAuto="vrai" totalBoucles="5000000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#temporaire" algoitem="temporaire EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#valeur1" algoitem="valeur1 EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#valeur2" algoitem="valeur2 EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Veuillez saisir un premier nombre : #0" algoitem="AFFICHER &quot;Veuillez saisir un premier nombre : &quot;"/>
        <item code="2#valeur1#pasliste" algoitem="LIRE valeur1"/>
        <item code="4#Veuillez saisir un deuxième nombre : #0" algoitem="AFFICHER &quot;Veuillez saisir un deuxième nombre : &quot;"/>
        <item code="2#valeur2#pasliste" algoitem="LIRE valeur2"/>
        <item code="4#La première valeur est : #0" algoitem="AFFICHER &quot;La première valeur est : &quot;"/>
        <item code="3#valeur1#1#pasliste" algoitem="AFFICHER valeur1"/>
        <item code="4#La deuxième valeur est : #0" algoitem="AFFICHER &quot;La deuxième valeur est : &quot;"/>
        <item code="3#valeur2#1#pasliste" algoitem="AFFICHER valeur2"/>
        <item code="5#temporaire#valeur2#pasliste" algoitem="temporaire PREND_LA_VALEUR valeur2"/>
        <item code="5#valeur2#valeur1#pasliste" algoitem="valeur2 PREND_LA_VALEUR valeur1"/>
        <item code="5#valeur1#temporaire#pasliste" algoitem="valeur1 PREND_LA_VALEUR temporaire"/>
        <item code="4#La nouvelle première valeur est : #0" algoitem="AFFICHER &quot;La nouvelle première valeur est : &quot;"/>
        <item code="3#valeur1#1#pasliste" algoitem="AFFICHER valeur1"/>
        <item code="4#La nouvelle deuxième valeur est : #0" algoitem="AFFICHER &quot;La nouvelle deuxième valeur est : &quot;"/>
        <item code="3#valeur2#0#pasliste" algoitem="AFFICHER valeur2"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
