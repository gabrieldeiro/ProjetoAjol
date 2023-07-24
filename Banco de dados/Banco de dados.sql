create database ajol;
use ajol;

create table Usuario
(
id_usuario int not null auto_increment primary key,
nome_usuario varchar(100) null,
cpf_usuario char(14) null unique,
login_usuario  char(50)  null unique,
senha_usuario   char(50) null, 
img_usuario longblob null, 
email_usuario varchar(30) null, 
data_nasc_usuario datetime null,
endereco_usuario varchar(30) null, 
numero_usuario int null,
compl_usuario decimal(10,3) null, 
bairro_usuario varchar(100) null, 
cep_usuario char(9) null,
obs_usuario varchar(255) null, 
status_usuario varchar(20) null

);

drop table usuario
drop table compra
drop table itemproduto

select * from usuario;

insert into usuario
	(nome_usuario,cpf_usuario,login_usuario,senha_usuario,img_usuario,email_usuario,data_nasc_usuario,endereco_usuario,numero_usuario,compl_usuario,bairro_usuario,cep_usuario,obs_usuario,status_usuario)
value
	('Adm','123.123.123.12','admin','admin',' ','adm@gmail.com','10/02/2000','endereco 1',12,'','bairro 1','123456789',' ','ativo');

Create table Funcionario
(
id_funcionario int not null auto_increment primary key,
nome_funcionario varchar(100) not null,
login_funcionario char(50)not null unique,
senha_funcionario char(50) not null,
email_funcionario varchar(50) not null,
cpf_funcionario char(14) not null unique,
datanasc_funcionario datetime not null,
endereco_funcionario varchar(30) not null,
numero_funcionario int not null,
compl_funcionario decimal(10,3) null,
bairro_funcionario varchar(100) not null,
cep_funcionario char(9) not null,
obs_funcionario varchar(255) null,
status_funcionario varchar(20) null
);

alter table funcionario
add column img_funcionario longblob not null


Create table Categoria
(
id_categoria int not null Auto_increment primary key,
nome_categoria varchar(30)not null,
descricao_categoria varchar(255)null,
obs_categoria varchar(255)null,
status_categoria varchar(30)null
);



insert into categoria

select * from categoria;

Create table Produto
(
id_produto int not null auto_increment primary key ,
id_categoria_produto int not null  ,
nome_produto varchar(30) not null  ,
marca_produto varchar(50) not null  ,
datacadastro_produto timestamp not null  ,
lote_produto varchar(30) null  ,
qtde_produto int not null  ,
peso_produto decimal(10,3) not null  ,
dimensao_produto varchar(50) not null  ,
escala_produto int not null  ,
valorunitario_produto decimal(10,3) not null  ,
valorcusto_produto decimal(10,3) not null  ,
desconto_produto decimal(10,3) null  ,
img_produto Longblob not null  ,
img2_produto Longblob null  ,
img3_produto Longblob null  ,
obs_produto varchar(255) null  ,
status_produto varchar(20) null,

constraint FK_ID_Categoria_Produto foreign key(id_categoria_produto) references categoria(id_categoria)
);

select * from produto;
select * from categoria;

insert into produto
	(id_categoria_produto,nome_produto,marca_produto,lote_produto,qtde_produto,peso_produto,dimensao_produto,escala_produto,valorunitario_produto,valorcusto_produto,desconto_produto,img_produto,img2_produto,img3_produto,obs_produto,status_produto)
value
	(1,'Produto teste','Marca teste','25',10,'2','10x20x30','1/5','130','60','','','','','','ativo')

	

Create table ItemProduto 
(
id_itemproduto int not null Auto_increment primary key,
id_produto_itemproduto int not null,
id_compra_itemproduto int not null,
qtde_itemproduto int not null,
valortotal_itemproduto decimal(10,3) not null,
valorparcial_itemproduto decimal(10,3) not null,
valorlinha_itemproduto decimal(10,3) not null,
formapg_itemproduto varchar(30) not null,
obs_itemcompra varchar(255) null,
status_itemcompra varchar(30) null,

  constraint FK_ID_Produto_ItemProduto foreign key(id_produto_Itemproduto) references produto(id_produto),
  constraint FK_ID_Compra_ItemProduto foreign key(id_compra_Itemproduto) references compra(id_compra)
);

drop table itemproduto;


create table Compra
(
id_compra int not null Auto_increment primary key ,
id_usuario_compra int not null  ,
datacadastro timestamp not null,
obs_compra varchar(255) null  ,
status_compra varchar(30) not null,

constraint FK_ID_Usuario_Compra foreign key(id_usuario_compra) references usuario(id_usuario)  
);


select * from usuario;
select * from funcionario;
select * from categoria;
select * from produto;
select * from itemproduto;
select * from compra;

select sum(valortotal_itemproduto)+20 from itemproduto where id_compra_itemproduto = 33;

select * from itemproduto where id_compra_itemproduto = 33;
delete from itemproduto where id_itemproduto= 14;


select itemproduto.*, produto.img_produto, produto.nome_produto from itemproduto
inner join produto on itemproduto.id_produto_itemproduto = produto.id_produto where id_compra_itemproduto = 33;





select * from compra where id_usuario_compra= 2 and status_compra='ATIVO'