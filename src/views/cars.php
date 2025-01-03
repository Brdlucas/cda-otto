<?php
// Données JSON des véhicules
$categorieVoitures = json_decode(file_get_contents(__DIR__ . '/../data/cars.json'), true);
?>

<main>
    <div class="h-full flex justify-end p-5">
        <select name="filtrer" id="filtrer" class="border-2 border-black">
            <option value="">filtrer</option>
            <option value="suv">suv</option>
            <option value="citroen">citroen</option>
            <option value="sportive">sportive</option>
        </select>
    </div>

    <section class="bg-gray-100 h-fit p-5 grid md:grid-cols-4 gap-4 sm:grid-cols-3 max-sm:grid-cols-1 ">
        <?php foreach ($categorieVoitures as $categorie => $voitures): ?>
        <?php foreach ($voitures as $voiture): ?>
        <div class="bg-blue-200 max-w-64 text-white text-left h-80 relative bg-cover-cars flex self-center"">
        <div
                class=" absolute w-full h-full align-text-bottom left-0 cursor-pointer hover:bg-gradient-to-b
            hover:to-black hover:from-transparent bottom-0">
            <div class="bottom-0 absolute p-3 text-white">
                <h3><?= $voiture['nom'] ?></h3>
                <p><?= $voiture['nombre_de_portes'] ?> portes</p>
                <p><?= $voiture['energie_du_moteur'] ?></p>
                <p><?= $voiture['prix'] ?>€ /jour</p>
            </div>
        </div>
        </div>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </section>
</main>