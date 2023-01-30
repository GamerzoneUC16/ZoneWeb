USE 'gamerzonedb';

CREATE TABLE tbprodutos
'id_produto' int(11) NOT NULL,
'id_tipo_produto' int(11) NOT NULL,
'descri_produto' varchar(100) NOT NULL,
'resumo_produto' varchar(1000) DEFAULT NULL,
'valor_produto' decimal(9,2) DEFAULT NULL,
'imagem_produto' varchar(50) DEFAULT NULL,
'destaque_produto' enum('Sim','Não') NOT NULL, 


INSERT INTO 'tbprodutos' ('id_produto', 'id_tipo_produto', 'descri_produto', 'resumo_produto', 'valor_produto', 'imagem_produto', 'destaque_produto') VALUES

(1,1, 'Processador AMD Ryzen 7 5700G 3.8GHz', 'O Ryzen 7 5700G conta com 8 núcleos incríveis para quem quer apenas jogar. Os processadores AMD Ryzen série 5000 capacitam a próxima geração de jogos exigentes, proporcionando experiências imersivas únicas e dominando qualquer tarefa multithread como 3D e renderização de vídeo e compilação de software.', 1449.00,'processadoramd7.jpg','Sim'),
(2,1, 'Processador Intel Core i9 11900KF 3.5GHz','PROCESSADOR INTEL CORE i9 11900KF 3.5GHz (5.3GHz Turbo), 11ª Geração, 8-Cores 16-Threads. Atuando em uma harmonia sem precedentes, o novo núcleo e arquiteturas gráficas, desempenho inteligente baseado em IA e a melhor conectividade sem fio e com fio da categoria, os processadores Intel® Core™ da 11ª Geração elevam o desempenho de notebooks e desktops a novos patamares. *Não acompanha Cooler.',2699.00,'processadori9.jpg','Não'),
(3,1, 'Processador Intel Core i5 10400, 2.90GHz','PROCESSADOR INTEL CORE I5 10400, 2.90GHz, (4.30GHz Turbo) 12MB, 10ª GERAÇÃO LGA 1200. Os novos processadores Intel® Core™ da 10ª geração oferecem atualizações de desempenho incríveis para melhorar a produtividade e proporcionar entretenimento surpreendente.', 999.00,'processadori5.jpg','Sim'),
(4,2, 'Mouse Gamer Redragon Pegasus M705, 7200 DPI, 6 Botões, Black','Maior velocidade para executar com agilidade seus inimigos. Excelente formato para diversas pegadas. Retro-lluminaçao para mais estilo em seu Pegasus!', 89.00,'mouseredragon.jpg','Sim'),
(5,2, 'Mouse Gamer Marvo M519, 12000 DPI, 8 Botões, RGB, Black','O mouse gamer Marvo M519 possui 8 botões programáveis para lhe dar uma vantagem competitiva em qualquer jogo. Com seu sensor óptico de alto desempenho de até 12000 DPI e uma poll rate de 1000Hz, você terá uma movimentação suave e de alta resposta para garantir que o mouse seja tão rápido quanto você.', 39.90,'mousemarvo.jpg','Não'),
(6,2, 'Mouse Gamer Redragon Storm Elite, 16000 DPI, 8 Botões Programáveis, Black, M988-RGB','O novo mouse Storm Elite da ReDragon trás um sensor poderoso e um design ergonômico para você acabar com seus inimigos no campo de batalha.', 179.90,'mouseredragonelite.jpg','Não'),
(7,2, 'Teclado Mecânico Gamer Redragon Mitra Lunar K551W, RGB, Switch Blue, ABNT2, Full-Size, White, K551W-RGB (PT-BLUE)','Aprimore seu desempenho nos jogos com o Mitra K551 com switch mecânico Blue de altíssima qualidade garante um tempo de resposta ágil para os mais exigentes gamers.', 279.90','tecladoredragon.jpg','Sim'),
(8,2, 'Teclado Gamer Mecânico T-Dagger Bermuda, LED Red, Switch Blue, Black, ABNT2, Full-Size, T-TGK312-BL (PT-RED LED)','O Bermuda Single Color é o teclado ideal para os usuários que não podem ficar sem o teclado numérico, seja para o trabalho ou para atalhos em games. Design minimalista e sóbrio que se encaixa em qualquer setup.' 179.00','tecladodagger.jpg','Não'),
(9,2, 'Kit Teclado e Mouse Logitech MK270 Sem Fio Black ABNT, 920-004433','Trabalhe ou entretenha-se em muito mais lugares. A conexão sem fio praticamente elimina atrasos, quedas e interferências, e oferece um alcance de até dez metros.1', 139.00,'tecladomouse.jpg','Sim'),
(10,2, 'Mousepad Gamer Ninja, Control, Médio 400x300mm, Black, MPGN-BLACK-M','O mousepad Gamer Ninja conta com estrutura têxtil de alta densidade para um melhor controle do mouse. E um tamanho médio perfeito para você adicionar em sua área de trabalho permitindo movimentos do mouse precisos.', 26.99,'mousepadninja.jpg','Sim'),
(11,2, 'Mousepad Gamer Redragon Pluto, Grande, 330x260x3mm, RGB, Black, P026','A versão média tem 26cm de altura de 38cm de largura: um tamanho ideal para jogos, superficie macia macro-texturizada para garantir que o mouse se mova com precisão perfeita.', 89.00,'mousepadredragon.jpg','Sim'),
(12,2, 'Mouse Pad Gamer T-Dagger Geometry L, Grande, 780x300mm, T-TMP301','Adicione alta precisão à captura dos movimento do seu Mouse com a linha Geometry - em sua versão "L" que representa o modelo Grande (Large).', 69.00,'mousepaddagger.jpg','Não'),
(13,2, 'Headset Gamer T-Dagger Atlas, 2x3,5mm + USB, Black e Green, T-RGH201','O headset Atlas é a perfeita combinação de conforto, qualidade. Todos os elementos do Atlas foram projetados para um gamer profissional. Os alto-falantes de 40mm com poderoso efeito de graves.', 99.90,'headsetdagger.jpg','Sim'),
(14,2, 'Headset Gamer Redragon Cadmus, RGB, USB, 7.1 Surround, Drivers De 53mm, Black, H370','Fixação auto-ajustável para uso confortável por um longo tempo. A parte externa rígida protege os copos e proporciona um ajuste confortável às orelhas, enquanto a parte interna macia garante praticidade e conforto.', 209.90,'headsetredragon.jpg','Não'),
(15,2, 'Headset Gamer Ninja Naga, 3.5mm + USB, PC, Rainbow, Drivers 40mm, Black','O Naga da Gamer Ninja possui drivers direcionais de 40mm que fornecem som nítido e graves profundos para que você possa capturar efeitos sonoros e detalhes mais vívidos. Pense em agudos ricos, som nítido e graves potentes para criar a experiência de jogo definitiva.', 69.90,'headsetninja.jpg','Não'),
(16,3, 'Monitor Gamer Redragon Aquamarine, 27 Pol, Full HD, VA, 165Hz, 1ms, FreeSync, HDMI/DP, GM27H2G','Elegante e moderno o Redragon Quartz, além de entregar máximo desempenho durante os games, também dá um toque de estilo ao seu setup.', 1619.90,'monitorredragon.jpg','Sim'),
(17,3, 'Smart Monitor Samsung, 24 Pol, Full HD, IPS, Plataforma Tizen, HDMI/Bluetooth, LS24A M506NLMZD','O monitor para todos os momentos da sua vida. Trabalhe sem um PC, com o Microsoft Office 365 ou com o Easy Connection, que permite acesso remoto ao seu computador do escritório. Depois mude e se divirta com o sistema de entretenimento integrado.', 1029.90,'monitorsamsung.jpg','Não'),
(18,3, 'Monitor Gamer Acer Predator XB253Q, 24.5 Pol, FullHD, 240Hz, 0,5ms, HDMI/DP','Nunca mais perca um frag: seu reflexo e sua performance vão ficar ainda melhores com as incríveis taxas de atualização, que oferecem imagens sem rastros e engasgos. Não vai sobrar um cheater pra contar história.', 2459.00,'monitoracer.jpg','Não'),
(19,4, 'Cadeira Gamer SuperFrame Knight, Reclinável, Preto e Vermelho','Conheça a cadeira Knight, desenvolvida para horas de jogatina. Com acolchoado revestido por um tecido de altíssima qualidade, a SuperFrame Knight te proporcionará várias horas de jogo repletas de conforto!', 739.90,'cadeirasuperframe.jpg','Sim'),
(20,4, 'Cadeira Gamer Ninja Hiryu, Preto e Azul','Conheça a cadeira Ninja Hiryu, desenvolvida especialmente para gamers. Com espuma de alta densidade revestida por um couro PU de ótima qualidade, a Hiryu te proporcionará várias horas de jogo repletas de conforto!',' 399.90','cadeiraninja.jpg','Não'),
(21,4, 'Cadeira Gamer Ninja Smoke, Reclinável, Tecido, 4D, Preto E Cinza','A Smoke é a cadeira gamer ideal para quem procura uma cadeira de alta qualidade e alta performance, sem deixar de lado um ótimo conforto para horas de jogos intensos e prolongados.', 1099.00,'cadeirasmoke.jpg','Sim'),
(22,1, 'Memória DDR4 Kingston Fury SuperFrame, 8GB, 3200Mhz, Black, KF432C16BB/8CL','As memórias FURY são módulos de memória de ótima qualidade com especificação SDRAM, com base em 8 componentes FBGA de 1G x 8 bits por módulo.',' 189.99,'memoriafury.jpg','Sim'),
(23,1, 'Memória DDR4 XPG Gammix D10, 16GB, 3600Mhz, CL18, Black, AX4U360016G18I-SB10','Os módulos de memória XPG GAMMIX D10 DDR4 são projetados para jogadores e entusiastas de PC com suporte para nova implementação Intel X299 plus SPD 2666MHz, com velocidades de fábrica até 3600MHz que funciona imediatamente. Com PCB de alta qualidade, o D10 melhora a qualidade de transferência de sinal e mantém a operação estável em todos os momentos.', 369.99, 'memoriaxpg.jpg','Não'),
(24,1, 'Memória DDR4 Corsair Value Select, 4GB, 2133MHz, CMV4GX4M1A2133C15','Os módulos de memória DDR4 VALUE SELECT levam a mesma confiabilidade de teste e qualidade dos módulos gamers, porém, foram desenhados para suportar situações de computação padrão, como aplicações comerciais e residenciais. Uma linha construída para prover estabilidade livre de problemas mesmo em ambientes desafiadores.', 139.90,'memoriacorsair.jpg','Não');

ALTER TABLE 'tbprodutos'
ADD PRIMARY KEY ('id_produto');

ALTER TABLE 'tbprodutos'
MODIFY 'id_produto' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


CREATE TABLE 'tbtipos'
'id_tipo' int(11) NOT NULL,
'sigla_tipo' varchar(3) NOT NULL,
'rotulo_tipo' varchar(15) NOT NULL

INSERT INTO 'tbtipos' ('id_tipo', 'sigla_tipo', 'rotulo_tipo') VALUES
(1, 'har', 'Hardware'),
(2, 'per', 'Perifericos'),
(3, 'mon', 'Monitor'),
(4, 'cad', 'Cadeira');

ALTER TABLE 'tbtipos'
ADD PRIMARY KEY ('id_tipo');

ALTER TABLE 'tbtipos'
MODIFY 'id_tipo' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

CREATE TABLE 'tbusuarios'
'id_usuario' int(11) NOT NULL,
'login_usuario' varchar(30) NOT NULL,
'senha_usuario' varchar(8) NOT NULL,
'nivel_usuario' ENUM('sup','com') NOT NULL,

INSERT INTO 'tbusuarios' 
('id_usuario', 'login_usuario', 'senha_usuario', 'nivel_usuario') VALUES

(1, 'danyllo', '1234', 'sup'),
(2, 'victor', 'abcd', 'cli'),
(3, 'kaua', 'efgh', 'cli'),
(4, 'igor', '5678', 'sup');
(5, 'caio', 'ijkl', 'cli');

ALTER TABLE 'tbusuarios'
ADD PRIMARY KEY ('id_usuario'),
ADD UNIQUE KEY 'login_usuario_uniq'('login_usuario');

ALTER TABLE 'tbusuarios'
MODIFY 'id_usuario' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE 'tbprodutos'
ADD CONSTRAINT 'id_tipo_produto_fk' FOREIGN KEY ('id_tipo_produto')
REFERENCES 'tbtipos'('id_tipo')
ON DELETE no action
ON UPDATE no action;  

CREATE VIEW vw_tbprodutos AS
SELECT	
p.id_produto,
p.id_tipo_produto,
t.sigla_tipo,
t.rotulo_tipo,
p.descri_produto,
p.resumo_produto,
p.valor_produto,
p.imagem_produto,
p.destaque_produto
FROM tbprodutos p
JOIN tbtipos t
WHERE p.id_tipo_produto=t.id_tipo;

