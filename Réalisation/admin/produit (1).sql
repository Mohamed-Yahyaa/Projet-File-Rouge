-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 10 avr. 2022 à 19:14
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `prix` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `quantite_stock` int(255) NOT NULL,
  `date_d'expiration` date NOT NULL,
  `categorie_produit` int(11) DEFAULT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `prix`, `description`, `quantite_stock`, `date_d'expiration`, `categorie_produit`, `photo`) VALUES
(1, 'Physicians Formula Murumuru Butter Blush Beachy Peach', '99', 'About this item\r\nAn ultra-luxurious blush, infused with Murumuru Butter to deliver a radiant Brazilian goddess glow! Incredibly creamy and soft texture combines the best features of a powder and cream blush, to deliver a lit-from-within tropical glow unli', 300, '2022-04-07', 1, 'Physicians Formula Butter Believe It! Blush Pink Sands.jpg'),
(2, 'Baby Cheeks Blush Stick', '710', 'A multi-purpose cream blush stick that can also be used on lips and eyes.\r\nGood for all skin types including dry, mature, sensitive, blemish-prone, combination and normal.\r\nFormulated with a triple botanical blend of ayurvedic oils, this creamy color melt', 100, '0000-00-00', 1, 'Baby Cheeks Blush Stick.jpg'),
(3, 'Amazonian Clay Blush', '150', 'Soft & silky powder for a just-pinched flush\r\nPowered by Amazonian clay for 12-hr wear\r\nTrue-color mineral pigments, so no mid-day fade\r\nBlends seamlessly ーno harsh lines or chalky build-up\r\nPretty packaging all dressed up in roses', 200, '0000-00-00', 1, 'Amazonian Clay Blush.jpg'),
(4, 'Artistique Blush', '280', 'It can also be used to modify the face shape,e s highlights, eye shadows, shadows, and multiple uses in one box.\r\nIt is made with a lightweight formula that blends seamlessly and is soft and kind on the skin.\r\nWaterproof.Long-lasting and Smudge proof.This', 50, '0000-00-00', 1, 'Artistique Blush.png'),
(5, 'Blush Trio', '300', 'Color	Peachy Love\r\nBrand	Anastasia Beverly Hills\r\nFinish Type	Matte\r\nItem Weight	0.1 Pounds\r\nItem Dimensions LxWxH	3.3 x 1 x 2.9 inches', 0, '0000-00-00', 1, 'Blush Trio.jpg'),
(6, 'Joues Contraste Powder Blush', '720', 'Chanel - Cheek - Powder Blush\r\n4g/0.14oz\r\nCategory : Make Up\r\nAroma of elegance\r\nMakes a great gift for someone special', 0, '0000-00-00', 1, 'Joues Contraste Powder Blush.png'),
(7, 'Orgasm Blush', '300', 'Product Type:Beauty\r\nItem Package Dimension:1.701 cm L X5.892 cm W X7.493 cm H\r\nItem Package Quantity:1\r\nCountry Of Origin: United States', 0, '0000-00-00', 1, 'Orgasm Blush.png'),
(9, 'Skin Fetish  Divine Powder Blush', '60', 'This pigmented illuminating blush blends evenly and beautifully to give skin a natural glow and is available in several shades that complement an array of skin tones\r\nEnriched with vitamin C, antioxidants and botanical conditioners for healthy skin, the b', 0, '0000-00-00', 1, 'Skin Fetish  Divine Powder Blush.png'),
(10, 'Absolue Revitalizing Anti-Aging Eye Cream', '980', 'Lancome Absolue Revitalizing Eye Cream,\r\n0.7 oz./ 20 mL\r\n', 0, '0000-00-00', 2, 'Absolue Revitalizing Anti-Aging Eye Cream.jpg'),
(11, 'Clear Proof Deep-Cleansing Charcoal Mask', '240', 'Activated charcoal acts like a magnet to unclog pores.\r\nFormula is clinically shown to instantly absorb excess oil and reduce shine.\r\n79% of men and women agreed: “Skin looks clearer” after use.\r\nExtracts of rosemary and peppermint deliver a fresh scent t', 0, '0000-00-00', 2, 'Clear Proof Deep-Cleansing Charcoal Mask.png'),
(12, 'Daily Facial Cleanser', '130', 'Gentle enough for everyday use: mild and non irritating formula is perfect for normal to oily skin and is suitable for even the most sensitive skin\r\nClinically proven to deep clean skin: cleanses without leaving skin feeling dry.Paraben free\r\nSkin feels r', 0, '0000-00-00', 2, 'Daily Facial Cleanser.jpg'),
(13, 'DermalQuench Liquid Lift + Retinol Advanced Resurfacing Treatment', '190', 'ANTI-WRINKLE SERUM TREATMENT: Visibly reduce the signs of aging skin. This potent formula with antioxidants powered by Roc Retinol is clinically proven to deliver smoother, firmer, more radiant-looking skin & help reduce appearance of deep wrinkles. Gentl', 0, '0000-00-00', 2, 'DermalQuench Liquid Lift + Retinol Advanced Resurfacing Treatment.jpg'),
(14, 'Dramatically Different Moisturizing Lotion', '240', 'Skincare\r\nClinique - Day Care', 0, '0000-00-00', 2, 'Dramatically Different Moisturizing Lotion.png'),
(15, 'Exfoliating Polish', '740', 'PLEASE NOTE: When you receive your product, you may find two dates labeled on the product, an EXP date and MFG date. The manufacturing date (MFG) printed on the product is the date that the product was produced in compliance with Good Manufacturing (GMP) ', 0, '0000-00-00', 2, 'Exfoliating Polish.jpg'),
(16, 'LiftActiv Sunscreen Peptide-C Face Moisturizer with SPF 30', '130', 'Revitalift Triple Power Broad Spectrum SPF 30 Sunscreen is a daily face moisturizer to visibly reduce wrinkles, firm and brighten skin in 1 week\r\nFormulated with 3 of the top derm-recommended ingredients - Pro-Retinol, Hyaluronic Acid and Vitamin C\r\nAfter', 0, '0000-00-00', 2, 'LiftActiv Sunscreen Peptide-C Face Moisturizer with SPF 30.jpg'),
(17, 'Regenerist Micro-Sculpting Cream', '300', 'SUPER CHARGED FACE CREAM: Daily fragrance-free face moisturizer deeply hydrates to visibly firm skin for a lifted look\r\nFRAGRANCE-FREE MAXIMIZED MOISTURE: Hydrating formula that will seamlessly blend to strengthen skin\'s moisture barrier for bouncy, firm ', 0, '0000-00-00', 2, 'Regenerist Micro-Sculpting Cream.jpg'),
(18, 'Bio Renew Argan Oil & Aloe Repair Hair Oil Mist', '90', 'Repair: hydrating hair oil Mist, smooths, detangles and helps fight frizz\r\nSustainable sourced Aloe: formula is infused with hand-picked sustainably sourced Aloe\r\nGreat for: repair, light moisture, light hydration, detangle, detangling, frizz control\r\nRea', 0, '0000-00-00', 3, 'Bio Renew Argan Oil & Aloe Repair Hair Oil Mist.jpg'),
(19, 'Curl Define Pre-Wash Hair Treatment', '160', 'This hair treatment for curly and coily hair is a hair mask with 8 Benefits in 1 use: detangles, nourishes, reduces breakage, moisturizes, defines, hydrates, softens, and elongates\r\nDeep conditioning hair treatment for curly and coily hair made with our e', 0, '0000-00-00', 3, 'Curl Define Pre-Wash Hair Treatment.png'),
(20, 'Elvive 8 Second Wonder Water', '240', 'Try Elvive 8 second wonder water by L\'Oreal Paris, This rinse out lamellar moisturizing hair treatment transforms hair in 8 seconds for silkier, shinier, healthier looking hair\r\nBreakthrough hair treatment that visibly transforms hair from the first use, ', 0, '0000-00-00', 3, 'Elvive 8 Second Wonder Water.jpg'),
(21, 'Frizz Ease Moisture Barrier Firm Hold Hairspray', '130', 'FRIZZ-FREE STYLING - Moisture Barrier Hairspray protects from heat, and helps to block out weather-induced frizz to keep hair straight and resistant to humidity.\r\nHAIR STRAIGHTENER SPRAY - Hair styling spray keeps hair straight and frizz-resistant with a ', 0, '0000-00-00', 3, 'Frizz Ease Moisture Barrier Firm Hold Hairspray.png'),
(22, 'Gold Series Hair Repair Combing Creme', '90', 'BIOTIN AND KUKUI NUT FORMULA Detangles & Protects\r\nFREE OF HARMFUL INGREDIENTS sulfate free, paraben free\r\nTHOUGHTFULLY DEVELOPED The gold standard in moisture, developed by Black PhDs and scientists, perfected by Black hair stylists\r\nSTYLIST TIP: When de', 0, '0000-00-00', 3, 'Gold Series Hair Repair Combing Creme.jpg'),
(23, 'Legendary Olive Replenishing Shampoo', '100', 'Replenishing shampoo renews softness, shine & suppleness.\r\nSilicone-free\r\nNo weigh down', 0, '0000-00-00', 3, 'Legendary Olive Replenishing Shampoo.jpg'),
(24, 'Nutritive Solutions Daily Moisture Shampoo', '70', 'Moisturizing shampoo that nourishes to make hair softer and 5x smoother when using system vs. non-conditioning shampoo\r\nHelps to protect normal hair from daily wear and tear\r\nLeaves you with that manageable silk hair feeling every day\r\nShampoo and conditi', 0, '0000-00-00', 3, 'Nutritive Solutions Daily Moisture Shampoo.jpg'),
(25, 'Professionals Shea Butter and Coconut Oil Curl Defining Cream', '50', 'CANTU FOR NATURAL HAIR MOISTURIZING CURL ACTIVATOR CREAM smoothens and enhances natural curl pattern revealing frizz-free volume and is great for a quick wash-and-go.\r\nREDUCE FRIZZ: Activates curls revealing frizz-free, bouncy curls.\r\nADDS VOLUME: Deliver', 0, '0000-00-00', 3, 'Professionals Shea Butter and Coconut Oil Curl Defining Cream.jpg'),
(26, 'Royal Oils Curly Hair Product Nighttime Scalp Tonic Lotion', '100', 'Peppermint and hemp oil formula refreshes your scalp and hair to give you extra time in your protective style\r\nSulfate free, Paraben free\r\nExpertly designed scalp relief for natural, relaxed, curly and coily crowns\r\nSoothing peppermint and hemp oil scent', 0, '0000-00-00', 3, 'Royal Oils Curly Hair Product Nighttime Scalp Tonic Lotion.jpg'),
(27, 'Audacious Lipstick in Charlotte', '330', 'Pamper your lips with this creamy and luscious formula\r\nIt helps re-shape and replenish the lips intensely\r\nIt provides hydration and perfectly designed lip contour', 0, '0000-00-00', 4, 'Audacious Lipstick in Charlotte.jpg'),
(28, 'Color Sensational Lipstick in Nude Lust', '50', 'Creamy Hydrating Lipstick: This rich, creamy lipstick formula with Shea Butter leaves behind a sensuous feeling and creamy finish for smooth, supple lips, with no feathering or bleeding\r\nSmooth And Supple: Featuring pure color pigment, this lipstick is no', 0, '0000-00-00', 4, 'Color Sensational Lipstick in Nude Lust.jpg'),
(29, 'Gel Semi-Matte Lipstick in Bashful You', '170', '★Ultimatte Lipstick:Our matte lipstick set provide a true matte finish,enrich with Vitamin E, Plant-Derived Squalane, Phytosterols, Simmondsia Chinensis Seed Oil, Limnanthes Alba Seed Oil,maintaining full coverage delivers ultra-saturated lip shade.\r\n★Smo', 0, '0000-00-00', 4, 'Gel Semi-Matte Lipstick in Bashful You.png'),
(30, 'Gen Nude Matte Liquid Lipcolor in Boss', '160', 'Long-wearing, cream-to-matte liquid lipstick with a lightweight, no-tack texture\r\nFull coverage pigments are suspended in a silky formula that glides over lips effortlessly, then dries to a long-wearing, natural matte finish\r\nFormulated with moisturizing ', 0, '0000-00-00', 4, 'Gen Nude Matte Liquid Lipcolor in Boss.png'),
(31, 'Hydragloss High-Pigment Lip Gel', '20', '\r\nBrand	Smith & Cult\r\nItem Form	Gel\r\nFinish Type	Glossy\r\nProduct Benefits	Creates a soft, nourished lip. Keeps color in place all day & feels surprisingly lightweight\r\nItem Weight	12.8 Ounces', 0, '0000-00-00', 4, 'Hydragloss High-Pigment Lip Gel.jpg'),
(32, 'Liquid Suede Cream Lipstick in Kitten Heels', '60', 'Matte Liquid Lipstick: Doll your lips in high impact color with NYX Professional Makeup Liquid Suede Cream Lipstick; A striking long wearing matte finish is just a swipe away with this plush liquid lipstick\r\nLong Lasting Creamy Color: Available in bold sh', 0, '0000-00-00', 4, 'Liquid Suede Cream Lipstick in Kitten Heels.jpg'),
(33, 'Luxe Matte Lipstick in Nude Reality', '40', 'Colour Riche Lipcolor: Indulge in richness beyond compare with our most luxuriously rich color and hydration; Colour Riche Lipstick is enriched with nourishing ingredients like Omega 3, Vitamin E, and Argan Oil to soften lipsGorgeous Hydrating Lip Color', 0, '0000-00-00', 4, 'Luxe Matte Lipstick in Nude Reality.jpg'),
(34, 'Moodstruck Epic 4D Mascara', '400', 'Go ahead and toss your falsies, because this one-step wonder just made an entrance. MOODSTRUCK EPIC 4D one‑step fiber mascara combines Y‑shaped fibers and a specially engineered two-sided brush to interlock fibers for lash volume, length, and lift like yo', 0, '0000-00-00', 4, 'Moodstruck Epic 4D Mascara.jpg'),
(35, 'Nudiversal Lip Duo in Shade 11  Istanbul', '40', 'ALL-DAY WEAR: Natural-looking nude lip color that lasts for up to 24 hours\r\nEASY TWO-STEP PROCESS: For long-lasting coverage, apply color before locking it in with the shiny topcoat\r\nMOISTURIZING FORMULA: The nourishing formula contains sunflower seed oil', 0, '0000-00-00', 4, 'Nudiversal Lip Duo in Shade 11  Istanbul.jpg'),
(36, 'MANYO FACTORY Galactomy Essence Cream, Niacinamide Korean Skin care 1.69fl oz (50ml)', '300', '🌸 made of 99.73% natural organic ingredients including the Galactomyces extract and Niacinamide\r\n🌸 Moisturizing, soothing, glowing, and firming\r\n🌸 Zero silicon oil & smooth cream formula tightly and smoothly absorbs into skin\r\n🌸 It effortlessly blends int', 10, '0000-00-00', 3, 'ezgif.com-gif-maker.png'),
(37, 'Acne Clearing Toner', '100', 'Contains 1 - 8 ounce botttle of wild crop, certified organic witch hazel toner, fragrance free\r\nOur first ingredient is Certified Organic Witch Hazel - wild harvested to capture the vital plant essence and distilled to preserve its natural potency – not d', 0, '0000-00-00', 5, 'Acne Clearing Toner.jpg'),
(38, 'Blemish Balm Moisturizer', '120', 'Replenishing Post-pimple Cream – Rescue Balm is the post-blemish essential. As soon as you’ve popped a zit or removed your pimple patch, dab on Rescue Balm to instantly improve your skin’s texture and appearance\r\nThe Hero Difference – The brand that broug', 0, '0000-00-00', 5, 'Blemish Balm Moisturizer.jpg'),
(39, 'C15 Super Booster', '500', 'DIMINISH LARGE PORES: Tighten & refine the look of stretched, sagging pores caused by age or sun damage.\r\nIMPROVE SKIN TONE: Vitamin C & licorice root visibly brighten skin and improve blotchy tone, discolorations and uneven skin tone\r\nMINIMIZE HARD, CLOG', 0, '0000-00-00', 5, 'C15 Super Booster.jpg'),
(40, 'CeraVe Hydrating Facial Cleanser', '150', '[ DAILY FACE WASH ] Gentle cleansing lotion with hyaluronic acid, ceramides, and glycerin to help hydrate skin without stripping moisture. Removes face makeup, dirt, and excess oil, provides 24-hour hydration and leaves a moisturized, non-greasy feel.\r\n[ ', 0, '0000-00-00', 5, 'CeraVe Hydrating Facial Cleanser.jpg'),
(41, 'Natural-Cosmetic-cream-product', '720', 'BRIGHTEN and CLARIFY SKIN - Our revival serum, a hydrating and lifting serum with aminos, contains anti-aging benefits to promote rejuvenation and help your skin feel lifted, firm, and younger.\r\nWITH VITAMINS AND MINERALS - Moisturizing and revitalizing, ', 0, '0000-00-00', 5, 'Natural-Cosmetic-cream-product-ad-Clipart-PNG.png'),
(42, 'Phloretin CF', '180', 'The Ultimate Skin Revitalizing Set: Vitamin C brightens in the AM; Retinol renews while you sleep; Hyaluronic acid is the perfect day or night solution to lock in moisture to reduce appearance of fine lines\r\nVitamin C is your wake up cure with powerful an', 0, '0000-00-00', 5, 'Phloretin CF.jpg'),
(43, 'Purifying Toner', '70', 'Gentle Face Toner: Alcohol-free and formulated to soothe, tone, hydrate, and balance the pH level of skin; This face toner helps reduce the look of pores, balance oily skin, and maintain the skin\'s moisture barrier\r\n98 Percent Natural Origin Ingredients: ', 0, '0000-00-00', 5, 'Purifying Toner.jpg'),
(44, 'Rose & Hyaluronic Acid Deep Hydration Toner', '240', 'True Beauty Rest – Wake to the skin of your dreams with your Noacier Overnight Collagen Mask. Your innovative, potent formula helps firm, tone, and hydrate your complexion from the inside out as you sleep.\r\nTurn Back Time – Promote seamless skin with hydr', 0, '0000-00-00', 5, 'Rose & Hyaluronic Acid Deep Hydration Toner.jpg'),
(45, 'Squalane + Phyto-Retinol Serum', '680', 'Biossance Squalane + Copper Peptide Rapid Plumping Serum. Get immediate and lasting hydration powered by our proprietary Rapid Plumping Complex that floods skin with 3 super-hydrators for supreme moisture.\r\nBounce in a Bottle. The non-sticky, silky blue e', 0, '0000-00-00', 5, 'Squalane + Phyto-Retinol Serum.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `categorie` (`categorie_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`categorie_produit`) REFERENCES `categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
