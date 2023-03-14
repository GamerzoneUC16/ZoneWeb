insert tipos (sigla,rotulo) values ('pla','Placa de video');
insert tipos (sigla,rotulo) values ('har','Hardware');
insert tipos (sigla,rotulo) values ('per','Periférico');
insert tipos (sigla,rotulo) values ('cad','Cadeira');
insert tipos (sigla,rotulo) values ('mon','Monitor');
insert tipos (sigla,rotulo) values ('acs','Acessórios');

insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Placa Gráfica Nvidia RTX2060', 'As placas gráficas GeForce RTX são equipadas com a arquitetura Turing GPU e a nova plataforma RTX. Isso oferece maior desempenho em comparação com as placas gráficas da geração anterior e traz o poder do traçado de raios em tempo real e da IA ??para os jogos.','KO Ultra Gaming 6GB GDDR6', 2344.99 , 'sim', 1);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'PLACA DE VIDEO MSI GEFORCE GTX 1650', 'O dissipador de calor extrudado de alumínio maximiza a área de contato direto com a GPU e a memória para transferir o calor com eficiência. Melhora a dissipação de calor ao guiar o fluxo de ar para o PCB através das seções do dissipador de calor.','Esse componente eletrônico processa as informações que chegam ao dispositivo e as transforma em imagens ou vídeos para exibi-las visualmente.', 959.99, 'sim', 1);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Cadeira Gamer Craft Preta e Vermelha', 'Se você passa um longo período de tempo sentado na frente do computador sabe o quanto a cadeira influencia no aconchego do seu corpo, não é? E para aprimorar esses momentos, nada melhor do que contar com um móvel como a Cadeira Gamer Craft. Além de estrutura aconchegante, ela também possui apoio para os braços com regulagem, ajuste de altura e rodízios – tudo para se adaptar às suas necessidades.','Para ficar em uma posição ideal, com as pernas bem apoiadas e confortáveis enquanto joga, o sistema de ajuste de altura dessa cadeira é ótimo - ao acionar o dispositivo na base,', 803.58, 'sim', 4);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Cadeira Gamer Ninja Twilight, Preto e Branco', 'Assegurando um produto de qualidade com ajuste de altura.as cadeiras gamer Ninja foram feitas para acompanhar gamers de diversas alturas, além de proporcionar uma postura correta e melhor adaptação do jogador em relação à sua área de trabalho. ','Desenvolvida especialmente para gamers. A Gamer Ninja Twilight foi projetada para você aproveitar o máximo de tempo nas suas jogatinas ou até mesmo em seu trabalho, uma cadeira extremamente confortável e de alta qualidade.', 470.47, 'sim', 4);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Processador AMD Ryzen 5 5600G 3.9GHz (4.4GHz Turbo)', 'O Ryzen 5 5600G conta com 6 núcleos incríveis para quem quer apenas jogar. Os processadores AMD Ryzen série 5000 capacitam a próxima geração de jogos exigentes, proporcionando experiências imersivas únicas e dominando qualquer tarefa multithread como 3D e renderização de vídeo e compilação de software.','Com grande poder de processamento do seu vídeo integrado, vêm as tecnologias de ponta para ​oferecer suporte.', 1045.88, 'sim', 2);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Cadeira Gamer TGT Heron', 'A cadeira Heron te dá a possibilidade de inclinação personalizada.', 'Cadeira Preta e Azul', 540.00,'sim', 4);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Headset Gamer Redragon Zeus', 'Som estéreo Surround 7.1 Virtual', 'Headset Gamer', 330.00,'sim', 3);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Gabinete  T-Dagger TGC P03W', 'Painel frontal texturizado e com iluminação RGB integrada', 'Gabinete Gamer Branco',200.00, 'sim', 2);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Mouse Multilaser Sem Fio', 'Tecnologia 2.4Ghz. Design Automático com alcande de 10 metros.', 'Mouse sem fio Multilaser', 50.00, 'sim', 3);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Mini Teclado Wireless Tv Box Pc Android Tv Smart', 'USB portátil como mouse touch integrado para controlar o seu Tv Box, Video Game, Smart TV, Notebook. Possui teclado QWERTY, setas direcionais, teclados de atalho e um touchpad para que possa controlar também o mouse dele.', 'Mini Teclado NT', 39.90,'sim', 6);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'KIT GAMER DUST', 'Acompanha teclado ABNT, Headphone e mouse com fio - Possuem iluminação com padroes de cores em RGB', 'Kit Gamer DUST', 320.77, 'sim', 3);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Microfone gamer trust lance GXT-242','Sensor condensador de microfone, Ligação USB digital que funciona em qualquer pc e portátil. Perfeito para podcasts, vlogs, locuções e gravações de música ou transmissão em fluxos no YouTube, Twitch e Facebook.',  'Microfone Gamer Trust', 499.90, 'sim',  3);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'Cadeira Gamer Roxtor LED Preta','Sistema Led/RGB estático ou dinâmico, com até 04 modos, Controle remoto para ajuste das funções Led; Elevação por pistão a gás classe 3; Rodas de nylon revestidas; Braços com regulagem 3D; Encosto reclinável em até 155º; Almofadas para apoio lombar e pescoço, ajustáveis','Cadeira Gamer Roxtor', 1720.00, 'sim', 4);
insert produtos ( titulo, descricao, resumo, preco, destaque, tipos_id) values ( 'ACER Monitor Gamer Nitro KG282K 28" 3840x2160 4K UHD IPS, PRETO', '28 POLEGADAS com resolução de 3840 x 2160 em taxa de atualização de 160 Hz. Visor LED e Tela 4K', 'Monitor Gamer ACER 28pol ', 2650.00, 'sim', 2);

insert images (caminho, principal_img, produto_id) values ('nvidiartx.png',1,1);
insert images (caminho, principal_img, produto_id) values ('rtx2060.jpg',0,1);
insert images (caminho, principal_img, produto_id) values ('lateralrtx.jpg',0,1);
insert images (caminho, principal_img, produto_id) values ('placa.jpg',0,1);

insert images (caminho, principal_img, produto_id) values ('pvmsi.png',1,2);
insert images (caminho, principal_img, produto_id) values ('msiplaca.jpg',0,2);
insert images (caminho, principal_img, produto_id) values ('msilateral.jpg',0,2);

insert images (caminho, principal_img, produto_id) values ('cadeirag.png',1,3);
insert images (caminho, principal_img, produto_id) values ('medidacadeira.webp',0,3);
insert images (caminho, principal_img, produto_id) values ('atrascad.webp',0,3);

insert images (caminho, principal_img, produto_id) values ('cadeiranin.png',1,4);
insert images (caminho, principal_img, produto_id) values ('ninjalateral.jpg',0,4);
insert images (caminho, principal_img, produto_id) values ('atrasninja.jpg',0,4);

insert images (caminho, principal_img, produto_id) values ('amd-5.webp',1,5);
insert images (caminho, principal_img, produto_id) values ('amdryz.jpg',0,5);
insert images (caminho, principal_img, produto_id) values ('caixaryzen.jpg',0,5);

insert images (caminho, principal_img, produto_id) values ('cadeiraz.png',1,6);
insert images (caminho, principal_img, produto_id) values ('atrascadeiraz.webp',0,6);
insert images (caminho, principal_img, produto_id) values ('atrascadeiraz.webp',0,6);
insert images (caminho, principal_img, produto_id) values ('inclinacadeiraz.webp',0,6);

insert images (caminho, principal_img, produto_id) values ('rdragonfone.jpg',1,7);
insert images (caminho, principal_img, produto_id) values ('lateralrdragon.jpg',0,7);
insert images (caminho, principal_img, produto_id) values ('1-rdragon.jpg',0,7);

insert images (caminho, principal_img, produto_id) values ('ttagger.jpg',0,8);

insert images (caminho, principal_img, produto_id) values ('multilaser.jpg',1,9);
insert images (caminho, principal_img, produto_id) values ('lateralmlaser.jpg',0,9);
insert images (caminho, principal_img, produto_id) values ('plugmlaser.jpg',0,9);

insert images (caminho, principal_img, produto_id) values ('miniteclado.jpg',1,10);
insert images (caminho, principal_img, produto_id) values ('caixaminitec.jpg',0,10);
insert images (caminho, principal_img, produto_id) values ('ledminit.jpg',0,10);
insert images (caminho, principal_img, produto_id) values ('pilhaminit',0,10);

insert images (caminho, principal_img, produto_id) values ('kitgamer.jpg',1,11);
insert images (caminho, principal_img, produto_id) values ('kitdustfone.jpg',0,11);
insert images (caminho, principal_img, produto_id) values ('kitdustmouse.jpg',0,11);
insert images (caminho, principal_img, produto_id) values ('kitdustteclado.jpg',0,11);
insert images (caminho, principal_img, produto_id) values ('kitdustbrinde.jpg',0,11);

insert images (caminho, principal_img, produto_id) values ('mictrust.jpg',1,12);
insert images (caminho, principal_img, produto_id) values ('mictrustfoto.jpg',0,12);

insert images (caminho, principal_img, produto_id) values ('cadeiraroxtor.jpg',1,14);
insert images (caminho, principal_img, produto_id) values ('cadeiraroxtorlateral.jpg',0,14);
insert images (caminho, principal_img, produto_id) values ('cadeiraroxtortraseira.jpg',0,14);
insert images (caminho, principal_img, produto_id) values ('cadeiraroxtormedida.jpg',0,14);

insert images (caminho, principal_img, produto_id) values ('acer.jpg',1,15);
insert images (caminho, principal_img, produto_id) values ('acerlateral',0,15);
insert images (caminho, principal_img, produto_id) values ('acertraseira.jpg',0,15);



































