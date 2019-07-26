-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 03:59 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proba`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinacija`
--

CREATE TABLE `destinacija` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `br_posetilaca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinacija`
--

INSERT INTO `destinacija` (`id`, `ime`, `opis`, `br_posetilaca`) VALUES
(1, 'Barselona', 'Barselona je drugi po naseljenosti grad u Spaniji i prestonica autonomne pokrajine Katalonija. Sama Barselona broji oko 1,6 miliona stanovnika, a sa okolnim oblastima ima ukupno 3 miliona stanovnika.\r\n\r\nBarselona je najveca metropola na Sredozemnom moru, nalazi se na obali izmedju reka Ljobrega i Besos, a na zapadu je ogranicena planinskim vencem Sera de Kolserola. Ona je danas vodece svetsko turisticko, ekonomsko, kulturno i modno odrediste.\r\n\r\nBarselona se nalazi na severoistocnoj obali Pirinejskog poluostrva na Sredozemnom moru. U gradu vlada mediteranska klima, sto znaci da su zime blage i vlazne, a leta topla i suva.\r\n\r\nIme Barselona najverovatnije potice od drevne iberske reci Barkeno, koja je pronadjena urezana na jednom drevnom iberskom novcicu. Prema nekim izvorima, grad je dobio ime po kartaginjanskom generalu Halmikaru Barsi za kog se veruje da je osnovao grad u 3. veku pre nove ere.\r\n\r\n\r\nPrvi ljudi u Barseloni su se pojavili negde pre 7.000 godina, a prva naselja negde u 16. veku pre nove ere. Smatra se da je grad Barselona osnovao kartaginjanski general Barsa, Hanibalov otac. Kasnije su Rimljani zauzeli grad i pretvorili ga u vojno utvrdjenje pod nazivom Faventija.\r\n\r\nGrad su u 5. veku osvojili Vizigoti, zatim u 8. veku Arapi, a posle njih Luj I Pobozni, sin Karla Velikog. Tada je Barselona postala grofovija. Ona se 1137. godine ujedinila sa Aragonom, a period posle toga je poznat kao pad Barselone. Ona je u 17. veku bila centar katalonijskog separatizma i katalonijskog revolta protiv spanskog kralja Filipa IV.\r\n\r\nDo uspona Barselone je doslo tek nakon gradjanskog rata i imigracije stanovnistva iz siromasnijih delova Spanije, sto je dovelo do ubrzane urbanizacije. Grad je postao narocito popularan nakon letnjih Olimpijskih igara u Barseloni 1992. godine.\r\n\r\n\r\n\r\n\r\n\r\n', 9000000),
(2, 'Valensija', 'Valensija je prestonica autonomne zajednice Valensija i treci po velicini grad u Spaniji posle Madrida i Barselone. Luka Valensije je peta najzauzetija luka u Evropi i najzauzetija luka na Sredozemnom moru.\r\n\r\n\r\nGrad se prvobitno zvao Valentija, sto na latinskom znaci snaga ili junastvo.\r\n\r\nGrad je osnovan kao rimska kolonija 138. godine pre nove ere. Nalazi se na obali reke Turije na istocnoj obali Pirinejskog poluostrva. Istorijski centar ovog grada je jedan od najvecih u Spaniji sa cak 169 hektara. Upravo zbog drevnih spomenika i prelepih pogleda je ovaj grad veoma popularna turisticka destinacija u Spaniji.\r\n\r\nGrad je razoren 75. godine pre nove ere ali je nakon 50 godina ponovo obnovljen. U 8. veku nove ere, grad je pao u ruke muslimana i postao poznat kao Balansija. Grad se od tada samo razvijao i rastao, a ponovo je pao u ruke hriscana tek 1092. godine. Hriscani i muslimani su se od tada u nekoliko navrata borili oko prevlasti nad ovim gradom, a polovinom 14. veka je kuga pokosila grad.\r\n\r\nIz Valensije su u 17. veku proterani svi Jevreji i muslimani, a grad je pao u ruke Burbona. Valensija je svoj pravi uspon dozivela tek u 20. veku kada je i postala treci najnaseljeniji grad u Spaniji.\r\n\r\nTrgovi Valensije su prepuni zivota, a crkve poseduju neverovatne kupole koje ce vam oduzeti dah. Spomenici i arhitektura Valensije ce vas bez sumnje oduseviti.\r\n\r\nNajpoznatija gradjevina Valensije je La Lonja de Seda, gotska gradjevina iz 15. veka koja je napravljena posebno za razmenu svile. Ovo je jedan od najboljih primera gotske civilne arhitekture u Evropi, a fasada je bogato ukrasena hodnicima, dekorativnim prozorima i grotesknim ukrasima. Turisti se mogu popeti na vrh tornja odakle se pruza zapanjujuć pogled.\r\n\r\n\r\n\r\n', 8000000),
(5, 'Firenca', 'Firenca je prestonica italijanske regije Toskana i najnaseljeniji grad u toj regiji sa oko 380.000 stanovnika.\r\n\r\nIstorija Firence je veoma bogata. Firenca se smatra jednim od najbogatijih gradova srednjevekovne Evrope, a mnogi veruju da je ona kolevka renesanse, te je tako dobila nadimak Atina srednjeg veka.\r\n\r\n\r\nNaselje su formirali Etruscani 200. godine pre nove ere, a gradu je ime Firenca (Florencija) dao Julije Cezar 59. godine pre nove ere, mada se prvobitno zvao Fluencija (zato sto se nalazi izmedju dve reke)\r\n\r\nFirenca je bila jedan od politicki, ekonomski i kulturoloski najvaznijih gradova u Evropi od 14. do 16. veka, a takodje je i kolevka italijanske renesanse. Krajem srednjeg veka, Firenca je finansirala razvoj industrije u gotovo citavoj Evropi od Velike Britanije, Belgije, Francuske, pa sve do Madjarske.\r\nFirenca je rodno mesto Lorenca de Medicija, clana jedne od najvaznijih italijanskih plemickih porodica. Cak dva clana ove porodice su imala priliku da postanu papa u 16. veku.\r\n\r\nGrad se za vreme Drugog svetskog rata nalazio pod nemackom okupacijom, prilikom koje su unistene brojne drevne gradjevine koje su kasnije delimicno restaurirane. Jedina gradjevina koja je igrom slucaja ostala netaknuta jeste cuveni most Ponte Vekio.\r\n\r\n\r\nFirenca je puna renesansnih spomenika, crkava i gradjevina, a najpoznatija atrakcija Firence je cuvena katedrala Santa Marija del Fjore, poznata jos i kao Duomo. Kupola ove katedrale je i dan-danas najveca kupola sagradjena od cigala na svetu. Istorijski centar Firence je 1982. godine dospeo pod zastitu UNESKO-a. U centru se jos uvek nalaze srednjevekovni zidovi koji su sagradjeni u 14. veku radi odbrane grada.\r\n\r\n\r\n\r\nRead more http://edukacija.rs/putovanja/italija/firenca\r\n\r\n\r\n', 8500000);

-- --------------------------------------------------------

--
-- Table structure for table `klijent`
--

CREATE TABLE `klijent` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sifra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klijent`
--

INSERT INTO `klijent` (`username`, `email`, `sifra`) VALUES
('maki85', 'jev@gmail.com', '5740502'),
('maki995', 'mamma@.sk', '57405050'),
('marina', 'mamma@.sk', '5740505');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinacija`
--
ALTER TABLE `destinacija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klijent`
--
ALTER TABLE `klijent`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinacija`
--
ALTER TABLE `destinacija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
