create database ajol;
use ajol;

create table usuario
(
id_usuario	int	not null	auto_increment primary key,
nome_usuario	varchar(100)	not null,	
cpf_usuario	char(14)	not null,
login_usuario char(50) not null,
senha_usuario char(50) not null,
data_nasc_usuario	datetime	 null,	
endereco_usuario	varchar(30)	null,	
numero_usuario	int	 null,	
compl_usuario	decimal(10,3)	 null,	
bairro_usuario	varchar(100)	null,	
cep_usuario	char(9)	null,	
obs_usuario	varchar(255)	null,	
status_usuario	varchar(20)	null	
)
select *from compra_carrinho

alter table usuario add login_usuario char(50) not null
alter table usuario add senha_usuario char(50) not null


insert into usuario (nome_usuario,cpf_usuario,login_usuario,senha_usuario,data_nasc_usuario,endereco_usuario,numero_usuario,compl_usuario,bairro_usuario,cep_usuario, obs_usuario,status_usuario)
values
('adminstrador','11111111111111','adm','123','','sss','12','1','centre','1256-3256','oo','ativo');


select *from usuario




create table funcionario
(
id_funcionario	int	not null	auto_increment primary key,
nome_funcionario	varchar(100)	not null,	
cpf_funcionario	char(14)	not null	unique,
data_nasc_funcionario	datetime	 null,	
endereco_funcionario	varchar(30)	null,	
numero_funcionario	int	 null,	
compl_funcionario	decimal(10,3)	 null,	
bairro_funcionario	varchar(100)	null,	
cep_funcionario	char(9)	null,	
obs_funcionario	varchar(255)	null,	
status_funcionario	varchar(20)	null	
)

create table categoria			
(
id_categoria	int	not null	Auto_increment primary key,
Nome_categoria	varchar(30)	not null	unique,
descricao_categoria	varchar(255)	null,	
obs_categoria	varchar(255)	null,	
status_categoria	varchar(30)	null	
)

create table produto
(
id_produto	int	not null	auto_increment primary key,
id_categoria_produto	int	not null,	
nome_produto	varchar(30)	not null	unique,
marca_produto	varchar(50)	not null,	
datacadastro_produto	datetime	not null,
lote_produto	varchar(30)	null,	
qtde_produto	int	not null,	
peso_produto	decimal(10,3)	not null,	
escala_produto	decimal(10,3)	not null,	
valor_produto	int	not null,	
desconto_produto	decimal(10,3)	null,	
img_produto	Longblob	null,	
obs_produto	varchar(255)	null,	
status_produto	varchar(20)	null,

constraint fk_id_categoria_produto foreign Key (id_categoria_produto) references categoria(id_categoria)	
)

create table item_produto
(
id_itemproduto	int	not null	Auto_increment primary key,
id_produto	int	not null,	
obs_itemcompra	varchar(255)	null,	
status_itemcompra	varchar(30)	null,
	
constraint fk_id_produto foreign Key (id_produto) references produto(id_produto)	
)

create table compra_carrinho
(
id_compra	int	not null	Auto_increment primary key,
id_usuario	int	not null,	
id_itemproduto	int	not null,	
formapg_compra	varchar(100)	not null,	
cupom_compra	varchar(100)	null,	
valortotal_compra	decimal(10,2)	null,	
qte_compra	int	not null,	
obs_compra	varchar(255)	null,	
status_compra	varchar(30)	null,	

constraint fk_id_usuario foreign Key (id_usuario) references usuario(id_usuario),	
constraint fk_id_itemproduto foreign Key (id_itemproduto) references produto(id_produto)	
)