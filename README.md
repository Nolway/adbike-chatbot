# adbike-chatbot
Chatbot de recommandation de motos

# Route

La route API pour la recommandation de 2 roues est la suivante: *http://54.37.153.173?action=search-bike*
La route prend en paramètre JSON les champs suivants:
* licence : (A2, A, A1)
* two_wheels_type : (Scooter, Moto)
* bike_type : (roadster, trail)
* cylinder: number
* brand : (Yamaha, Honda, Kawasaki, KTM, BMW)
* budget: number,

# Retour

L'API retourne en JSON un tableau nommé *messages* qui contient la liste des noms des 2 roues séléctionnés
exemple :

```
{
    "messages": [
        {
            "text": "FORZA 125 : 5099€"
        },
        {
            "text": "PCX 125 : 3099€"
        }
    ]
}
```
