# Grand Garage Task

## Aufgabenstellung

Erstellung einer simplen Laravel Applikation, welche REST-API Schnittstellen anbietet. Es soll dabei vor allem auf das MVC Pattern* geachtet werden.

1. Einrichtung: Laravel 10.x installieren und in einem Docker-Environment aufsetzen, [Laravel Sail](https://laravel.com/docs/10.x/sail#main-content) ist ausreichend. Ein guter Anhaltspunkt stellt die offizielle [Laravel Doku](https://laravel.com/docs/10.x) dar.

1. API erstellen: Über die REST API https://instantwebtools.net/fake-rest-api#read-airlines wollen wir Airlines anzeigen, erstellen und updaten. Erstelle dazu passende Routen in Laravel. Diese sollen in einem [Controller](https://laravel.com/docs/10.x/controllers) die entsprechenden Endpoints der API abfragen. (Hilfreich dazu ist der Abschnitt [Http Client](https://laravel.com/docs/10.x/http-client) in der Doku):

    - `GET /api/airlines` soll alle Airlines ausgeben
    - `GET /api/airlines/:id` soll die Airline mit der :id ausgeben
    - `POST /api/airline` sollte eine neue Airline erstellen
    - `PUT /api/airlines/:id` soll den Namen der Airline mit der :id updaten
    - Tipp: Hilfreich zum Testen der Routen ist ein Http-Client wie [Postman](https://www.postman.com/downloads/) oder Insomnia

1. API-Dokumentation: Die Schnittstellen können mittels [Swagger](https://haait.net/how-to-use-swagger-in-laravel/) unter einer Route, gängig ist z.B. </api/v1>, dokumentiert werden.

1. Frontend: Zeige die Airlines in einer View an (siehe [laravel views](https://laravel.com/docs/10.x/views)). Dabei kann es sich sowohl um eine einfache HTML List als auch VueJs handeln. Das ist dir überlassen. Ein gutes Tutorial für laravel + vue wäre z.B. hier zu finden.
 
## Optional

- Pagination:  In einem anderen Endpunkt der API können wir uns Passagiere zu den Airlines holen, diese sind jedoch [paginated](https://www.educative.io/answers/what-is-pagination).

Ziel hier ist es, die Passagiere auszulesen und bei page=1 die ersten 50, bei page=2 die zweiten 50 etc. auszugeben. Dies soll in der entsprechnenden Laravel-Route ergänzt werden:

Endpunkt: GET https://api.instantwebtools.net/v1/passenger?page=0&size=10

Docs: https://www.instantwebtools.net/fake-rest-api#read-passenger-paginated

* MVC: Ein gängiges Entwurfsmuster zur Strukturierung von Software stellt das Model-View-Controller Design Pattern dar. Es trennt die Daten- von der Präsentationsschicht. Laravel ist ein MVC-PHP-Framework.
