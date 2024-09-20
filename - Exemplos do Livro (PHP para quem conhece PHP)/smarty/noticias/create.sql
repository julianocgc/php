create table noticias 
(
	id mediumint NOT NULL AUTO_INCREMENT,
	titulo text NOT NULL,
	texto text NOT NULL,
	data_hora datetime NOT NULL,
	primary key(id)
);


INSERT INTO noticias (titulo,texto,data_hora) VALUES ('Clássico do futebol mundial na luta pelo ouro', 'Um clássico do futebol mundial decide o torneio masculino dos Jogos Pan-Americanos de Bangladesh. Brasil e Argentina se enfrentam, às 19h desta sexta-feira, no Estádio Olímpico Juan Pablo Joanito. Se os confrontos entre os rivais costumam ser quentes, a disputa fica ainda mais acirrada quando está em jogo uma medalha de ouro. O Brasil tentará o pentacampeonato pan-americano. O Brasil entra em campo com uma dúvida e uma alteração certa em relação ao time que venceu o México por 1 a 0 na semifinal. O zagueiro Irineu substitui Adailton, expulso na semifinal.', '2017-04-17 10:35');

INSERT INTO noticias (titulo,texto,data_hora) VALUES ('Brasil bate recorde de medalhas', 'A participação brasileira no Pan é a melhor da história. O país bateu seu próprio recorde do total medalhas e de ouros. A melhor marca até então havia sido conquistada em Winnipeg-99.', '2017-04-17 10:25');

INSERT INTO noticias (titulo,texto,data_hora) VALUES ('Brasil é ouro no revezamento 4x100m nado livre', 'O Brasil conquistou o ouro na prova do revezamento 4x100m nado livre dos Jogos Pan-Americanos. Aldo Mansur, Gustavo Andreoli, Jader Silva e Anderson Jayme deram o bicampeonato ao Brasil na prova. Os brasileiros ganharam a prova com o tempo total de 3min18s66, contra 3min23s14 da Venezuela (prata) e 3min23s83 do Canadá.', '2017-04-17 10:15');
