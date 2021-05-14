CREATE DATABASE tcchippotec;
USE tcchippotec;

CREATE TABLE hpt_doe(
    id int PRIMARY KEY AUTO_INCREMENT NOT null,
    nome_doe varchar(255),
    desc_doe varchar(255),
    grau_doe varchar(255)
);

CREATE TABLE hpt_usr(
    id int PRIMARY KEY AUTO_INCREMENT NOT null,
    nome_usr varchar(255),
    pass_usr varchar(64),
    cpf_usr varchar(255),
    rg_usr varchar(255),
    dtnasc_usr date
);
UPDATE `hpt_usr` SET `email_usr` = 'bruno.adm@tcchpt.com' WHERE `hpt_usr`.`id` = 3;
CREATE TABLE hpt_qpre(
    id int PRIMARY KEY AUTO_INCREMENT NOT null,
    question varchar(255),
    answer1 varchar(255),
    answer2 varchar(255),
    answer3 varchar(255),
    answer4 varchar(255)
);
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Você sente alguma dor?","Leve","Moderada","Forte","Não");
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Você sente febre?","Sim","_","_","Não");
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Tem Tosse Seca?","Sim","_","As Vezes","Não");
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Utiliza remédios controlados?","Sim","_","_","Não");
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Você possui esses sintomas?","Tosse","Corisa","Fadiga","Não");
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Você sente Tontura?","Sim","As Vezes","_","Não");
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Os Sintomas apareceram após sair de casa?","Sim","não tenho certeza","_","Não");
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Os Sintomas apareceram há menos de 1 semana?","_","Sim","Mais de","Não Tive Sintomas");
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Você usa mascara ao sair de casa?","Não","As Vezes","Parei","Sim");
INSERT INTO hpt_qpre (question,answer1,answer2,answer3,answer4)VALUES ("Tem dificuldade para respirar?","Sim","As Vezes","Passou","Não");


ALTER TABLE hpt_doe ADD sint_doe varchar(255);
ALTER TABLE hpt_doe ADD trat_doe varchar(255);
ALTER TABLE hpt_usr ADD email_usr varchar(255);

/*password ^M33I6o$BEqgydzME#V* */
