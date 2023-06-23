create database ajol;
use ajol

create table Usuario
(
id_usuario int not null auto_increment primary key,
nome_usuario varchar(100) not null,
cpf_usuario char(14) not null unique,
login_usuario  char(50)  not null unique,
senha_usuario   char(50) not null, 
img_usuario longblob not null, 
email_usuario varchar(30) not null, 
data_nasc_usuario datetime not null, 
endereco_usuario varchar(30) not null, 
numero_usuario int not null,
compl_usuario decimal(10,3) null, 
bairro_usuario varchar(100) not null, 
cep_usuario char(9) not null,
obs_usuario varchar(255) null, 
status_usuario varchar(20) not null

)

Create table Funcionario
(
id_funcionario int not null auto_increment primary key,
nome_funcionario varchar(100) not null,
login_usuario char(50)not null unique,
senha_usuario char(50) not null,
email_usuario varchar(50) not null,
cpf_funcionario char(14) not null unique,
data_nasc_funcionario datetime not null,
endereco_funcionario varchar(30) not null,
numero_funcionario int not null,
compl_funcionario decimal(10,3) null,
bairro_funcionario varchar(100) not null,
cep_funcionario char(9) not null,
obs_funcionario varchar(255) null,
status_funcionario varchar(20) null

)

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
status_itemcompra varchar(30) null  

)

Create table Categoria
(
id_categoria int not null Auto_increment primary key,
Nome_categoria varchar(30)not null,
descricao_categoria varchar(255)null,
obs_categoria varchar(255)null,
status_categoria varchar(30)null
)

Create table Produto
(
id_produto int not null auto_increment primary key ,
id_categoria_produto int not null  ,
nome_produto varchar(30) not null  ,
marca_produto varchar(50) not null  ,
datacadastro_produto datetime not null  ,
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
status_produto varchar(20) null  
)

create table Compra
(
id_compra int not null Auto_increment primary key ,
id_usuario_compra int not null  ,
obs_compra varchar(255) null  ,
status_compra varchar(30) not null  
)

