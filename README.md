Platforma pe care am ales sa o dezvolt este dupa parerea mea dupa modelul platformei deja existente numita Vinted.
1. Sectiunea de explore, login si register:
   -bara de navigare: prezente optiunile: Login, Register, Shop si Explore. Partea de nume si logout apare doar cand un client este conectat. De asemenea am vrut ca si artea de shop sa apara la fel doar daca un client este conectat, iar daca nu sa fie vizibile paginile principale, de login si de register, dar am ajuns sa comentez partea asta de giest si auth;
   -sectiunea din stanga: o semi bara de navigatie, pusa mai mult pentru efectul vizual, dat am facut functionale sectiunile de Home care te trimite la pagina principala si cea de Terms;
   -sectiunea din mijloc: sunt prezente review-urile, folosind paginare. In interiorul unui Review avem optiunile de Delete care sterge comentariul, View care afiseaza comentariul selectat si Edit unde se poate edita continutul review-ului. De asemenea se pot introduce comentarii multiple la un review(hasMany). Acestea au fost generate cu Faker
   -sectiunea din dreapta: Search(bazat pe introducerea unui cuvant cheie) permite sa cauti review uri care contin anumite cuvinte. Sectiunea de Who to follow este pusa pentru aspectul vizual, nu am reusit sa o mai implementez.

2.Sectiunea de Shop: Aici apar listate cateva produse pe care poti sa le adaugi in cos. Cu search se poate introduce numele unui produs si il/le afiseaza. Am incercat sa implementez si niste tag-uri, folosind relatia many-to-many (modelul Product belongsToMany, iar Tags hasMany), dar am ajuns sa comentez partea asta.

3.Probleme intampinate: 
    -cand doresc sa accesez un form chiar daca am pus @csrf sau echivalentul sau cu input(<input type="hidden" name="_token" value="{{csrf_token()}}"/>) imi da 419 page expired si in cod nu am reusit sa gasesc cauza problemei, de aceea ma gandesc ca poate e o eroare de la serverul local.
    -la produse nu imi afiseaza imaginea cum trebuie: am creat un subfolder numit product_images in storage\app\public si le am incarcat cu storage_path(). Am incercat si cu asset() dar nici asa nu mi le arata.
