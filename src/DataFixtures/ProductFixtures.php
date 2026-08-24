<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach ($this->getProductsData() as $data) {
            $product = (new Product())
                ->setName($data['name'])
                ->setShortDescription($data['shortDescription'])
                ->setFullDescription($data['fullDescription'])
                ->setPrice($data['price'])
                ->setPicture($data['picture']);

            $manager->persist($product);
        }

        $manager->flush();
    }

    /**
     * @return array<int, array<string, string|float>>
     */
    private function getProductsData(): array
    {
        return [
            [
                'name' => 'Bougie parfumée lavande et patchouli',
                'shortDescription' => 'Une bougie naturelle à la lavande et au patchouli pour une atmosphère apaisante.',
                'fullDescription' => 'Cette bougie fabriquée à partir de cire végétale diffuse un parfum délicat de lavande et de patchouli. Idéale pour créer une ambiance relaxante à la maison, elle brûle proprement sans dégager de substances toxiques. Sa durée de combustion atteint 40 heures environ.',
                'price' => 18.90,
                'picture' => 'images/products/lavender-and-patchouli-candle.webp',
            ],
            [
                'name' => 'Disques démaquillants réutilisables',
                'shortDescription' => 'Des cotons démaquillants lavables et zéro déchet pour le visage.',
                'fullDescription' => 'Lot de 10 disques démaquillants en coton biologique, lavables et réutilisables. Ils remplacent avantageusement les cotons jetables tout en réduisant vos déchets au quotidien. Doux pour la peau et résistants aux multiples lavages, ils se glissent dans un filet de protection fourni.',
                'price' => 12.50,
                'picture' => 'images/products/makeup-remover-pads.webp',
            ],
            [
                'name' => 'Déodorant naturel à la pierre d’alun',
                'shortDescription' => 'Un déodorant efficace sans sels d’aluminium ni perturbateurs endocriniens.',
                'fullDescription' => 'Ce déodorant solide à la pierre d’alun neutralise les bactéries responsables des mauvaises odeurs sans bloquer la transpiration. Sa formule 100 % naturelle est sans alcool, sans parabène et respecte même les peaux sensibles. Il se présente dans un tube en carton recyclable.',
                'price' => 9.90,
                'picture' => 'images/products/natural-deodorant.webp',
            ],
            [
                'name' => 'Savon naturel solide au lait d’ânesse',
                'shortDescription' => 'Un savon surgras doux pour le visage et le corps.',
                'fullDescription' => 'Savon artisanal saponifié à froid à base de lait d’ânesse et d’huiles végétales biologiques. Riche en glycérine, il nettoie en douceur et nourrit la peau sans la dessécher. Il convient à tous les types de peaux, y compris les plus sensibles, et est emballé dans un papier kraft recyclé.',
                'price' => 7.20,
                'picture' => 'images/products/natural-soap.webp',
            ],
            [
                'name' => 'Kit d’hygiène recyclable',
                'shortDescription' => 'Un ensemble complet d’essentiels zéro déchet pour la salle de bain.',
                'fullDescription' => 'Ce kit regroupe les indispensables du zéro déchet : brosse à dents en bambou, savon naturel, shampoing solide et disques démaquillants. Tout est emballé dans une pochette en coton organique réutilisable. Une solution idéale pour réduire sa consommation de plastique au quotidien.',
                'price' => 24.90,
                'picture' => 'images/products/recyclable-hygiene-kit.webp',
            ],
            [
                'name' => 'Brosse à dents en bambou',
                'shortDescription' => 'Une brosse à dents écologique à manche en bambou compostable.',
                'fullDescription' => 'Cette brosse à dents au manche en bambou 100 % biodégradable est dotée de poils en nylon sans BPA. Elle permet de se brosser les dents efficacement tout en limitant les déchets plastiques. Lot de 2 unités, conditionné dans un emballage carton recyclable.',
                'price' => 4.50,
                'picture' => 'images/products/toothbrush.webp',
            ],
            [
                'name' => 'Verre tropical réutilisable',
                'shortDescription' => 'Un verre de shot en verre borosilicate soufflé à la main.',
                'fullDescription' => 'Ce verre de shooter au motif tropical est soufflé à la main en verre borosilicate résistant aux chocs thermiques. Il peut servir pour des shots, des dégustations ou des mignardises. Son design coloré apportera une touche estivale à vos apéritifs tout en évitant l’usage de gobelets jetables.',
                'price' => 6.80,
                'picture' => 'images/products/tropical-shot.webp',
            ],
            [
                'name' => 'Set de couverts en bois',
                'shortDescription' => 'Une vaisselle nomade en bois pour les repas en déplacement.',
                'fullDescription' => 'Ce set de couverts en bois de hêtre comprend une fourchette, un couteau, une cuillère et une paille accompagnée de son goupillon. Parfait pour les pique-niques et les déplacements, il se range dans une pochette en coton biologique. Une alternative durable aux couverts en plastique à usage unique.',
                'price' => 14.30,
                'picture' => 'images/products/wooden-cutlery-set.webp',
            ],
            [
                'name' => 'Gourde en bois',
                'shortDescription' => 'Une gourde isotherme en bois et inox pour transporter ses boissons.',
                'fullDescription' => 'Cette gourde au revêtement en bois et à la paroi en inox double paroi isotherme maintient vos boissons chaudes 12 heures et froides 24 heures. Son contenant de 500 ml est étanche et sans fuite, idéal pour le sport, le bureau ou les balades. Bouteille livrée avec une housse de transport en coton recyclé.',
                'price' => 29.90,
                'picture' => 'images/products/wooden-water-bottle.webp',
            ],
        ];
    }
}
