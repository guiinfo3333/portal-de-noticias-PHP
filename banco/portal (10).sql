-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jan-2019 às 19:09
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--
create database portal;
use portal;
-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadm` int(45) NOT NULL AUTO_INCREMENT,
  `nomeadm` varchar(45) DEFAULT NULL,
  `emailadm` varchar(65) DEFAULT NULL,
  `senhaadm` varchar(30) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `loginadm` varchar(45) DEFAULT NULL,
  `fotoadm` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idadm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=147 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`idadm`, `nomeadm`, `emailadm`, `senhaadm`, `sexo`, `loginadm`, `fotoadm`) VALUES
(141, 'powerrange', 'powerrange', 'powerrange', 'powerrange', 'powerrange', 'power.png'),
(142, 'antonio guilherme', 'antonioguilhermetuf@gmail.com', '12345', 'masculino', 'antant@', NULL),
(143, 'carinha', 'cara@gmail.com', '222', 'masculino', 'cara', '5c2d74cbb638d.jpg'),
(145, 'Diogo', 'fio@gmail.com', '222', 'on', 'diogo', '5c2d782639ab4.jpg'),
(146, 'site', 'site', 'site', 'feminino', 'site', '5c2d785fa5d45.PNG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(45) NOT NULL AUTO_INCREMENT,
  `corpocomentario` varchar(1000) DEFAULT NULL,
  `idusuario` int(45) DEFAULT NULL,
  `datacomentario` date DEFAULT NULL,
  `idnoticia` int(45) DEFAULT NULL,
  `validado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idcomentario`),
  KEY `idusuario_idx` (`idusuario`),
  KEY `idnoticia_idx` (`idnoticia`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `corpocomentario`, `idusuario`, `datacomentario`, `idnoticia`, `validado`) VALUES
(1, 'a melhor é a do palmeiras', 39, '2018-12-26', 7, 1),
(2, 'a melhor é a do Ceará', 49, '2018-12-26', 7, 1),
(3, 'a melhor é do ferroviario', 49, '2018-12-26', 7, 1),
(4, 'perdeu perdeu ja é do ceara', 48, '2018-12-29', 9, 1),
(5, 'ele vai é pro ferrao', 39, '2018-12-29', 9, 1),
(17, 'mgmf,mfg', 47, '2018-12-30', 7, 1),
(18, 'mrlfg', 39, '2018-12-23', 8, 1),
(21, 'vem pro creusa', 45, '2018-12-30', 9, 1),
(22, 'otima noticia futebol bugadow', 45, '2018-12-30', 9, 1),
(23, 'oi oi', 45, '2018-12-30', 9, 1),
(24, 'Pra quem desacreditava ein', 45, '2018-12-30', 6, 1),
(32, 'a melhor e a do ceara', 45, '2018-12-30', 7, 1),
(33, 'COMENTARIO', 45, '2018-12-30', 9, 1),
(48, 'validada valida', 45, '2018-12-30', 9, 0),
(49, 'veme', 45, '2018-12-30', 9, 0),
(50, 'ola', 45, '2018-12-30', 9, 0),
(51, 'branca', 45, '2018-12-30', 9, 0),
(52, 'vai pro campinense seu perna de pau', 45, '2018-12-30', 9, 0),
(53, 'teu amor', 45, '2018-12-30', 9, 0),
(54, 'ahahahahah', 45, '2018-12-30', 9, 0),
(55, 'mmxmxmcc,', 48, '2019-01-01', 9, 1),
(56, 'mmxmxmcc,', 48, '2019-01-01', 9, 1),
(57, 'a melhor camisa para o melhor time do brasil', 39, '2018-12-30', 10, 1),
(59, 'a melhor camisa e a do ceara,sinto muito', 45, '2018-12-30', 10, 1),
(60, 'ei Antonio Guilherme vai estudar', 45, '2018-12-30', 10, 1),
(61, 'xx', 48, '2018-12-30', 10, 1),
(62, 'sai dessa', 48, '2018-12-30', 10, 0),
(63, 'n', 48, '2018-12-30', 10, 0),
(64, 'ccc', 48, '2018-12-30', 10, 0),
(65, 'nascimenot', 48, '2018-12-30', 10, 0),
(66, 'hoje', 39, '2018-12-30', 10, 0),
(67, 'a', 48, '2018-12-30', 10, 0),
(68, 'cc', 48, '2018-12-30', 10, 0),
(69, 'nnmmj', 48, '2018-12-30', 10, 0),
(70, 'nnmmooii', 48, '2018-12-30', 10, 0),
(71, 'se', 39, '2018-12-30', 10, 0),
(72, 'melhor e a do gremio', 50, '2018-12-30', 10, 0),
(73, 'deixe', 45, '2018-12-30', 10, 0),
(74, 'deixe seu comentario', 48, '2018-12-30', 10, 0),
(75, 'e nos galera', 39, '2018-12-30', 10, 0),
(76, 'o loko meu', 45, '2018-12-30', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ler`
--

CREATE TABLE IF NOT EXISTS `ler` (
  `idler` int(100) NOT NULL AUTO_INCREMENT,
  `idnoticia` int(15) NOT NULL,
  `idusuario` int(25) NOT NULL,
  PRIMARY KEY (`idler`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `ler`
--

INSERT INTO `ler` (`idler`, `idnoticia`, `idusuario`) VALUES
(1, 10, 45),
(2, 10, 48),
(3, 6, 48),
(4, 10, 46);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `idnoticia` int(15) NOT NULL AUTO_INCREMENT,
  `datapubli` date DEFAULT NULL,
  `autornoticia` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `fontenoticia` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `viewsnoticia` int(35) NOT NULL,
  `imagem` varchar(35) CHARACTER SET latin1 DEFAULT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `subtitulo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `corpo` varchar(2000) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idnoticia`),
  FULLTEXT KEY `titulo` (`titulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`idnoticia`, `datapubli`, `autornoticia`, `fontenoticia`, `viewsnoticia`, `imagem`, `titulo`, `subtitulo`, `corpo`) VALUES
(1, '2018-12-14', 'G1 em um minuto', 'internet', 76, '5c1421e72eb28.jpg', 'Atlético vence Juniors Barranquilha ', 'e é campeão', 'Emprestado pelo Palmeiras ao FuracÃ£o para a temporada 2018, Raphael Veiga fechou o ano com a conquista da Copa Sul-Americana, Ãºnico tÃ­tulo intercontinental do Brasil na temporada. Nesta sexta-feira, o meia, que retornarÃ¡ ao VerdÃ£o, publicou uma mensagem de despedida Ã  equipe paranaense.\n\nâ€œQuero agradecer a todos do AtlÃ©tico-PR pelo ano de 2018! Atletas, comissÃ£o tÃ©cnica e diretoria que me receberam muito bem. Me deram confianÃ§a e oportunidade. Saio daqui com a sensaÃ§Ã£o de missÃ£o cumpridaâ€, publicou o meio-campista'),
(2, '2018-12-14', 'antonio Guilherme', 'G1 em um minuto', 0, '5c1429e828687.jpg', 'Palmeiras decampeao do brasil', 'com 20 rodadas invicto', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(3, '2018-12-14', 'antonio Guilherme', 'G1 em um minuto', 0, '5c142e0cf0b53.jpg', 'River vence boca e conquista a Libertadores', 'agora se preparara para o mundial', 'tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt'),
(4, '2018-12-14', 'Ceara Noticias', 'basquete', 0, '5c1455dfa482a.png', 'Rogerio Ceni permanece no leao do Pici', 'querem conquistar a libertadores', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(5, '2018-12-14', 'antonio Guilherme', 'G1 em um minuto', 0, '5c145747c766a.png', 'Ceara diz que vai tentar conquistar o mundial em 2019', 'e quer da uma goleada no real Madri', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(6, '2018-12-16', 'antonio Guilherme', 'G1 em um minuto', 51, '5c16ff3c876c9.jpeg', 'info 2 vence duas seguidas e avança para as finais', 'Com grande exibicao', 'Depois de passar mais de um ano esperando.Novamente a torcida do gigante azul sorriu novamente .Com a contrataÃ§Ã£o de Diogo o ceifador de canelas o time permanece invicto depois de ganhar os dois primeiros jogos no inter-classe da Escola Dona Creusa do Carmo Rocha neste Ãºltimo SÃ¡bado.\r\nCom gols de Adryo Rodriguez , Ryan Lucas e AntÃ´nio Breno, o time embarca nesta segunda feira para Fortaleza,para quinta-feira dia 20 de dezembro de 2018 na Avenida Sargento HermÃ­nio , conseguir a vaga para a tao espera final.\r\n   Na outra semifinal ADM2 enfrenta ADM3 e logo saberemos o novo campeÃ£o do Interclasse da Escola Dona Creusa do Carmo Rocha.'),
(7, '2018-12-24', 'Rafael Leonan', 'goal.com', 71, '5c204d1ee815f.png', 'Camisa do Corinthians foi apontada como a segunda mais bonita do mundo', 'enquanto a do Palmeiras entra na lista das mais feias', '     Site especializado em material esportivo levantou os mantos que mais chamaram a atenÃ§Ã£o em 2019\r\nDefinitivamente a temporada 2018 foi de emoÃ§Ãµes distintas para Corinthians e Palmeiras. Se dentro das quatro linhas o VerdÃ£o brilhou e foi coroado com o tÃ­tulo do BrasileirÃ£o, o TimÃ£o amargou um ano de incertezas e atÃ© um certo desconforto com a proximidade da zona do rebaixamento. PorÃ©m, quando o assunto Ã© moda, certamente o alvinegro obteve muito mais Ãªxito do que seu rival. \r\n\r\nDe acordo com o site especializado em uniformes esportivos, Footy Headlines, a camisa corintiana que homeageia o ex-piloto Ayrton Senna foi a segunda mais bela do ano, ficando atrÃ¡s apenas da utilizada pela NigÃ©ria na Copa do Mundo da RÃºssia. \r\nPor outro lado, a versÃ£o criada pela Adidas para o Palmeiras foi apontada com uma das mais feias, conquistando o nada honroso 12Âº lugar mundial. Mesclando um visual inspirado no estilo retrÃ´ anos 90 com linhas camufladas, o manto, apesar de ter entrado para a histÃ³ria como a do tÃ­tulo nacional, ficou longe se ter caido no gosto inclusive dos torcedores do VerdÃ£o. '),
(8, '2018-12-27', ' Eduardo Moura', 'G1 em um minuto', 0, '5c24eb7fc3a76.jpg', 'Grêmio recebe proposta de clube Árabe pelo goleiro Marcelo Grohe', 'Camisa 1 tem contrato atÃ© o final de 2020 e 100% dos direitos econÃ´micos pertencentes ao clube gaÃ', 'O goleiro Marcelo Grohe virou alvo de um clube Ã¡rabe no mercado de transferÃªncias. O camisa 1 do GrÃªmio recebeu uma proposta de uma equipe do Oriente MÃ©dio, ainda nÃ£o revelada. Os dirigentes gaÃºchos analisam os valores oferecidos.\r\nA informaÃ§Ã£o foi divulgada pela RÃ¡dio Gre-Nal e confirmada pelo GloboEsporte.com. Os valores e termos da oferta sÃ£o mantidos em sigilo. Grohe Ã© um dos principais lÃ­deres dentro do elenco do GrÃªmio, ao lado de Maicon e Geromel. Seu contrato vai atÃ© o fim de 2020 e 100% de seus direitos econÃ´micos pertencem ao clube gaÃºcho.\r\nTitular do gol gremista, Grohe terminou a temporada sem jogar por conta de fratura nas costelas e de uma lesÃ£o no punho direito, ambas sofridas na semifinal da Libertadores, contra o River Plate, na Arena. O goleiro abriu mÃ£o de uma viagem planejada nas fÃ©rias para realizar o tratamento e estar Ã  disposiÃ§Ã£o na volta da prÃ©-temporada.\r\n\r\nPara a posiÃ§Ã£o, o GrÃªmio liberou recentemente Bruno Grassi, terceiro goleiro. ApÃ³s a rescisÃ£o, o jogador acertou com o CriciÃºma. Paulo Victor Ã© o reserva imediato de Grohe e ampliou o contrato por mais uma temporada, atÃ© o fim de 2020, apÃ³s atingir o nÃºmero mÃ­nimo de partidas em 2018.\r\n\r\nAtÃ© o momento, o GrÃªmio jÃ¡ acertou as saÃ­das de Ramiro para o Corinthians e Bressan para o FC Dallas, dos Estados Unidos, e nÃ£o renovou contratos com Douglas e CÃ­cero. Luan esteve na mira do Cruzeiro para uma troca por Thiago Neves, enquanto Kannemann Ã© alvo de Boca Juniors e Independiente, embora o GrÃªmio trate o zagueiro como "inegociÃ¡vel".\r\n\r\n'),
(9, '2018-12-27', 'Thaís Jorge', 'globo esporte', 0, '5c262c4357ad0.jpg', 'Empresário de Rafael Sóbis garante que Ceará fez proposta melhor que o Goiás', 'Presidente do CearÃ¡, Robinson de Castro, prefere nÃ£o comentar proposta', 'O atacante Rafael SÃ³bis estÃ¡ na mira do CearÃ¡. Quem garante Ã© o empresÃ¡rio do atleta, Jorge Machado. Segundo Jorge, o VovÃ´ fez uma proposta melhor que o GoiÃ¡s pelo jogador, que vai rescindir com o Cruzeiro. Ainda de acordo com o empresÃ¡rio, SÃ³bis pode ter como destino o Internacional.\n\n- CearÃ¡ Ã© o clube que mais estÃ¡ forte. Financeiramente (melhor que o GoiÃ¡s), mas a gente estÃ¡ estudando e aguardando - afirmou Jorge Machado.\n\nEm entrevista Ã  RÃ¡dio Bandeirantes de GoiÃ¢nia, Jorge Machado afirmou que, se o Inter confirmar o interesse, a preferÃªncia serÃ¡ dos gaÃºchos, pela histÃ³ria que o atleta tem com o clube. O presidente do CearÃ¡, Robinson de Castro, preferiu nÃ£o comentar proposta.\n\n- Se o Internacional de fato quiser o SÃ³bis, caem todas as possibilidades. O Inter (nÃ£o me procurou). Se o Inter entrar mesmo nessa negociaÃ§Ã£o, jÃ¡ Ã© a vida dele. Ã‰ onde ele jogou, tem uma tatuagem no peito dele com o sÃ­mbolo do Colorado.\n\nSobre o atacante\n\nO Inter tem a seu favor a torcida do atacante, colorado declarado. Com a camisa do Inter, Sobis foi protagonista dos tÃ­tulos da Libertadores em 2006 e 2010. Revelado no Beira-Rio, o jogador deu os primeiros passos no clube em 2004. No ano seguinte, jÃ¡ assumiu o protagonismo, na campanha que culminou com o vice-campeonato do BrasileirÃ£o. Em 2006, viveu o Ã¡pice, ao marcar os dois gols na vitÃ³ria por 2 a 1 sobre o SÃ£o Paulo, no Morumbi, no primeiro jogo da final da Libertadores.\n\nDepois do tÃ­tulo, deixou o clube para rumar ao BÃ©tis, da Espanha. Voltou ao Colorado em 2010 para, mais uma vez, levantar o torneio continental. E, novamente, com gol em decisÃ£o, na vitÃ³ria por 3 a 2 sobre o Chivas no Beira-Rio. Em 2011, saiu para defender o Fluminense. No total das duas passagens, soma 169 partidas, com 48 gols marcados'),
(10, '2019-01-01', 'departamento de comunicação', 'Departamento de Comunicação do Palmeiras', 3, '5c2b7dff70565.jpg', 'PUMA apresenta a nova coleção do Palmeiras para a temporada 2019', 'CAMPEÃO DO BRASIL', ' nova camisa HOME Palmeiras 2019, ressalta o verde tradicional das antigas camisas do Palmeiras, com escudo bordado e estrela vermelha em referÃªncia ao tÃ­tulo mundial de 1951, gola careca destacada na cor branca e manga curta com detalhe da bandeira italiana, homenageando a origem do clube. O corte da camisa Ã© reto e o tecido conta com a tecnologia DRY CELL da PUMA, que absorve a umidade para facilitar a respiraÃ§Ã£o da pele, mantendo o suor afastado do corpo e uma sensaÃ§Ã£o mais confortÃ¡vel ao torcedor. A camisa HOME rÃ©plica de torcedor estarÃ¡ disponÃ­vel por R$ 249,90 do tamanho P ao 3GG adulto; do 8 ao 16 infantil por R$229,90; do PP ao GG na versÃ£o feminina feminino por R$229,90. O Baby Kit estarÃ¡ disponÃ­vel nos tamanhos 2, 4 e 6 por R$249,90.\nJÃ¡ a nova camisa AWAY Palmeiras 2019, traz a tradicional cor branca com faixa em grafismo verde nos ombros e gola V com detalhe da bandeira italiana nas costas. O corte da camisa Ã© reto e tecido tambÃ©m com a tecnologia DRY CELL da PUMA. A camisa AWAY rÃ©plica de torcedor estarÃ¡ disponÃ­vel por R$ 249,90 do tamanho P ao 3GG adulto; do 8 ao 16 infantil por R$229,90; do PP ao GG na versÃ£o feminina feminino por R$229,90.\n\nOs uniformes e a coleÃ§Ã£o casual completa, com mais de 40 itens, como camisetas de algodÃ£o, jaquetas, shorts, bonÃ©s e acessÃ³rios, estarÃ£o disponÃ­veis a partir dessa quinta (3) em PUMA.com e na PalmeirasStore.com Ã s 12 horas. No prÃ³ximo sÃ¡bado (5), os produtos ficam disponÃ­veis para compra nas lojas fÃ­sicas da PUMA, lojas oficiais do Palmeiras e na Centauro do Shopping Eldorado. E em todo o mercado a partir do dia 7 de janeiro. As novas camisas tambÃ©m estarÃ£o disponÃ­veis para venda na Argentina, Chile, Estados Unidos, Paraguai e alguns paÃ­ses da Europa a partir de 7 de janeiro.\n\nTodos os produtos originais da PUMA possuem selo hologrÃ¡fico com distintivo do clube na etiqueta, que garantem a qualidade e originalidade do produto.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariocomum`
--

CREATE TABLE IF NOT EXISTS `usuariocomum` (
  `idusuario` int(25) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(50) DEFAULT NULL,
  `senha_usuario` int(50) DEFAULT NULL,
  `email_usuario` varchar(50) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `fotousu` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Extraindo dados da tabela `usuariocomum`
--

INSERT INTO `usuariocomum` (`idusuario`, `nome_usuario`, `senha_usuario`, `email_usuario`, `sexo`, `fotousu`) VALUES
(39, 'antonio guilherme', 222, 'antonioguilhermetuf@hotmail.com', 'masculino', ''),
(45, 'Tiago Maciel', 222, 'tiagomaciel@gmail.com', 'masculino', 'tiago.png'),
(46, 'Diogo Souza', 222, 'diogo@gmail. com', 'masculino', NULL),
(47, 'Rafael Leonan', 222, 'rafarafa@gmai.com', 'masculino', NULL),
(48, 'Thalita', 222, 'talita@gmail.com', 'feminino', NULL),
(49, 'Larissa', 222, 'larissa@gmail.com', 'feminino', NULL),
(50, 'Luana Kelly', 222, 'luanakely@gmail.com', 'feminino', 'luana.jpg');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `idnoticia` FOREIGN KEY (`idnoticia`) REFERENCES `noticia` (`idnoticia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuariocomum` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
