INSERT INTO `tb_usuario`(`idt_usuario`, `usr_usuario`, `pwd_usuario`) VALUES (1,"igortullio","12345"), (2,"pedropaul","12345"), (3,"caioleandro","12345");

INSERT INTO `tb_grupo`(`idt_grupo`, `nme_grupo`) VALUES (1,"Grupo 1"), (2,"Grupo 2"), (3,"Grupo 3"), (4,"Grupo 4"), (5,"Grupo 5");

INSERT INTO `ta_usuario_grupo`(`fk_idt_usuario`, `fk_idt_grupo`) VALUES (1,1), (1,2), (2,2), (2,3), (3,3), (3,4);

INSERT INTO `tb_disciplina`(`idt_disciplina`, `nme_disciplina`, `fk_idt_grupo`) VALUES (1,"Banco de Dados",1), (2,"Estágio",1), 
	(3,"Sist Temp Real Emb",1), (4,"Projeto de Jogos",2), (5,"Banco de Dados",2), (6,"Banco de Dados",3), (7,"Projeto de Jogos",3), 
	(8,"Estágio",4), (9,"Prob e Estat",4), (10,"Prob e Estat",5);