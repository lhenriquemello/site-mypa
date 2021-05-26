<?php

$sigla = $_GET['sigla'];
 
$representantes = array(
	0 => array('REPRESENTANTES' => 'MAGI REPRESENTAÇÕES', 'RESPONSÁVEL' => 'PEDRO HENRIQUE LAMARA PORTES CARNEIRO', 'REGIÃO' => 'BETIM - MG', 'TELEFONES' => '(31) 3511-2490 - CEL: 31-98316-4229 wpp', 'EMAIL' => 'CONTATO@MAGILTDA.COM.BR; pedro.equipemagirepresentacoes@outlook.com', 'ENDEREÇO' => 'Rua Gardênia, 148 – Bairro Alto das Flores, Betim/MG.'),
	1 => array('REPRESENTANTES' => 'LADD LEONARDO DE ARAÚJO', 'RESPONSÁVEL' => 'LEONARDO ARAUJO', 'REGIÃO' => 'AMAPA - AP', 'TELEFONES' => '96-8112-0342', 'EMAIL' => 'LEO.REPRESENTACOES.AP@HOTMAIL.COM;CLBBREPRESENTACOES@HOTMAIL.COM', 'ENDEREÇO' => ''),
	2 => array('REPRESENTANTES' => 'ANA LUIZA ROSA DA FONSECA', 'RESPONSÁVEL' => 'RUBIA DA FONSECA', 'REGIÃO' => 'B.HORIZONTE - MG', 'TELEFONES' => '31-3312-4495 / 31-3377-5877 T / 31-99982-8830', 'EMAIL' => 'ANAROSALIREPRESENTANTE@GMAIL.COM;RUBIA-LISBOA@UOL.COM.BR;EXCLUSIVAREPRESENTA@GMAIL.COM', 'ENDEREÇO' => 'AV AUGUSTO DE LIMA 655 -AP 519 - BELO HORIZONTE- MG'),
	3 => array('REPRESENTANTES' => 'CLAUDEMIRO DE HOLANDA CAVALCANTI NETO', 'RESPONSÁVEL' => 'MIRO CAVALCANTI', 'REGIÃO' => 'BELEM PA', 'TELEFONES' => '91- 98186-1234 / 91- 98875-0040', 'EMAIL' => 'MIRO.CAVALCANTI@GIFFEN.COM.BR', 'ENDEREÇO' => ''),
	4 => array('REPRESENTANTES' => 'ALEXANDRE ROCHA', 'RESPONSÁVEL' => 'ALEXANDRE ROCHA', 'REGIÃO' => 'BRASILIA - DF', 'TELEFONES' => '61-99202-4156', 'EMAIL' => 'ALEXPROCHA71@GMAIL.COM', 'ENDEREÇO' => 'RUA 12 NORTE LOTE 08 APTO 704 CEP 71909-540'),
	5 => array('REPRESENTANTES' => 'JEAN KARLO MOREIRA DE SOUZA', 'RESPONSÁVEL' => 'JEAN KARLO MOREIRA DE SOUZA', 'REGIÃO' => 'CUIABA  - MT', 'TELEFONES' => '65-98408-2783 / (65)3661-1992', 'EMAIL' => 'suporterepnovaera@terra.com.br;jean@repnovaera.com.br', 'ENDEREÇO' => 'RUA BLUMENAU 139 - COOPHEMA - CUIABA MT'),
	6 => array('REPRESENTANTES' => 'Fernando Freitas Szczepanski', 'RESPONSÁVEL' => 'FERNANDO FREITAS', 'REGIÃO' => 'Cuiaba / MT', 'TELEFONES' => '(65) 99233-2359', 'EMAIL' => 'fernandorepresentacoesmt@gmail.com', 'ENDEREÇO' => ''),
	7 => array('REPRESENTANTES' => 'ALEXANDRE LEAL ( CENTER SUL REPRESENTAÇÕES)', 'RESPONSÁVEL' => 'ALEXANDRE LEAL', 'REGIÃO' => 'CURITIBA - PR', 'TELEFONES' => '41 -  99572-4972 T', 'EMAIL' => 'alexandre_suportepr@yahoo.com.br', 'ENDEREÇO' => 'RUA CAMILO CASTELO BRANCO, 497 CURITIBA CEP: 81010-170'),
	8 => array('REPRESENTANTES' => 'SUL BRASIL REPRES. COM LTDA', 'RESPONSÁVEL' => 'ANTONIO FERREIRA', 'REGIÃO' => 'CURITIBA - PR', 'TELEFONES' => '41-3378-5950 / 41-99933-2000 T', 'EMAIL' => 'adriana@sulbrasilrp.com.br;sulbrasil@sulbrasilrp.com.br; sulbrasilmarina@gmail.com;tabelas@sulbrasilrp.com.br', 'ENDEREÇO' => 'AV COMENDADOR FRANCO,4879 CURITIBA - PR'),
	9 => array('REPRESENTANTES' => 'CRISTIANO DE MORAES', 'RESPONSÁVEL' => 'CRISTIANO DE MORAIS', 'REGIÃO' => 'CURITIBA PR', 'TELEFONES' => '(41) 999586196', 'EMAIL' => 'cristiano@valenterepresentacoes.com.br', 'ENDEREÇO' => ''),
	10 => array('REPRESENTANTES' => 'J AGAPE  REPRESENTACOES LTDA - ME', 'RESPONSÁVEL' => 'JOSE ALVES', 'REGIÃO' => 'GOIANIA - GO', 'TELEFONES' => '62- 98122-9059 T  /  C/62-9 9152-8624', 'EMAIL' => 'agape.representacoes@hotmail.com', 'ENDEREÇO' => 'RUA LUIZ DE GODÓY QD, 19 LT 22 - ANAPOLIS/GO'),
	11 => array('REPRESENTANTES' => 'MARCIO TELES DOURADO FILHO', 'RESPONSÁVEL' => 'MARCIO TELES', 'REGIÃO' => 'GOIANIA - GO', 'TELEFONES' => '(62) 99293-8223', 'EMAIL' => 'marciotd.filho@hotmail.com', 'ENDEREÇO' => ''),
	12 => array('REPRESENTANTES' => 'BROTHERS REPRESENTAÇÕES', 'RESPONSÁVEL' => 'MARCIO TELES', 'REGIÃO' => 'GOIANIA - GO', 'TELEFONES' => '(62) 99293-8223', 'EMAIL' => 'marciotd.filho@hotmail.com', 'ENDEREÇO' => ''),
	13 => array('REPRESENTANTES' => 'J LEANDRO REPRESENTANTES', 'RESPONSÁVEL' => 'LEONARDO DE ALMEIDA BEZERRA', 'REGIÃO' => 'GOIANIA - GO', 'TELEFONES' => '061-3354-9169', 'EMAIL' => 'jleandrorepres@gmail.com', 'ENDEREÇO' => 'QUADRA CNG 7 SN LT 7 AP 101'),
	14 => array('REPRESENTANTES' => 'ANTONIO RIBEIRO BOTELHO FILHO', 'RESPONSÁVEL' => 'ANTONIO RIBEIRO', 'REGIÃO' => 'GOIAS GO', 'TELEFONES' => '64-3680-1974/64-99924-1504/ 64-99236-6557', 'EMAIL' => 'RIBEIROREPRESENTACOESSP@GMAIL.COM', 'ENDEREÇO' => 'RUA MANOEL FERNANDES TEIXEIRA QUADRA 1 LOTE 31 RESIDENCIAL PARAISO'),
	15 => array('REPRESENTANTES' => 'MURILO DE SOUZA BRESSANE DORATIOTTO', 'RESPONSÁVEL' => 'MURILO DE SOUZA BRESSANE DORATIOTTO', 'REGIÃO' => 'INTERIOR SP', 'TELEFONES' => '11-9.6403-3111', 'EMAIL' => 'MURILODORATIOTTO@UOL.COM.BR', 'ENDEREÇO' => ''),
	16 => array('REPRESENTANTES' => 'A  A N DOS REIS - ME', 'RESPONSÁVEL' => 'ANA NAZARE DOS REIS', 'REGIÃO' => 'MANAUS - AM', 'TELEFONES' => '92 -3663-6688 / 92 - 994946515', 'EMAIL' => 'anamanu2@yahoo.com.br', 'ENDEREÇO' => ''),
	17 => array('REPRESENTANTES' => 'JOAO DE SOUZA BEZERRA', 'RESPONSÁVEL' => 'JOÃO DE SOUZA BEZERRA', 'REGIÃO' => 'MANAUS AM', 'TELEFONES' => '92-99272-1681', 'EMAIL' => 'joaodesouzabezerra1@gmail.com', 'ENDEREÇO' => ''),
	18 => array('REPRESENTANTES' => 'WKF REPRESENTAÇÕES', 'RESPONSÁVEL' => 'WANDNER ADRIANO ALVES', 'REGIÃO' => 'MARINGA - PR', 'TELEFONES' => '44 -  3028-8883 / 44-99178-9467 V / 44-99826- 5298 V', 'EMAIL' => 'financeiro@wkfrepresentacoes.com.br;WKFRP@YAHOO.COM.BR;DAIANEWKFRP@GMAIL.COM;comercial@wkfrepresentacoes.com.br', 'ENDEREÇO' => 'AV. COLOMBO, 7485 - MARINGA - PR'),
	19 => array('REPRESENTANTES' => 'SNAKE REPRESENTAÇÃO', 'RESPONSÁVEL' => 'ELAINE ALVES', 'REGIÃO' => 'MAUÁ SP', 'TELEFONES' => '11-2786-1982 / 11-99259-4204', 'EMAIL' => 'elaine@snakerepresentacoes.com.br', 'ENDEREÇO' => 'RUA ANGELIA GOES 161 JD ARAGUAIA'),
	20 => array('REPRESENTANTES' => 'ESTEIO REPRESENTACOES LTDA', 'RESPONSÁVEL' => 'ANTONIO ANIVAL FERREIRA', 'REGIÃO' => 'MINAS GERAIS  -MG', 'TELEFONES' => '34-9145-2282', 'EMAIL' => 'esteiorep@yahoo.com.br', 'ENDEREÇO' => ''),
	21 => array('REPRESENTANTES' => 'BARBOSA E CONVERSAN', 'RESPONSÁVEL' => 'ANTÔNIO BARBOSA', 'REGIÃO' => 'PALMAS - TO', 'TELEFONES' => '(63)9 9940 5963/9 8125 6799', 'EMAIL' => 'UNIAOVENDASPALMAS@GMAIL.COM', 'ENDEREÇO' => 'RUA CAMPO GRANDE QD NW 5,LT 03 AURENY 1- PALMAS - TO'),
	22 => array('REPRESENTANTES' => 'RAPHAEL LIMA DE BRITO REPRESENTACOES', 'RESPONSÁVEL' => 'RAPHAEL LIMA DE BRITO REPRESENTACOES', 'REGIÃO' => 'PORTO ALEGRE - RS', 'TELEFONES' => '51- 32245592', 'EMAIL' => 'RAPHAEL@SPAZIOFAMIGLIA.COM.BR', 'ENDEREÇO' => ''),
	23 => array('REPRESENTANTES' => 'EMERSON J LINK  DA SILVA  ( ROTA SUL)', 'RESPONSÁVEL' => 'EMERSON J LINK  DA SILVA', 'REGIÃO' => 'R.G.SUL - RS', 'TELEFONES' => '51- 99877-1703 /  51 - 998777- 7730', 'EMAIL' => 'rotasulcomercial@gmail.com', 'ENDEREÇO' => 'AV PROVEZANO 55 - BAIRRO ANCHIETA - PORTO ALEGRE - 90200-200'),
	24 => array('REPRESENTANTES' => 'ARLINDO HENRIQUES COELHO', 'RESPONSÁVEL' => 'ARLINDO HENRIQUE COELHO', 'REGIÃO' => 'RIO DE JANEIRO - RJ', 'TELEFONES' => '21-3798-9198 / 21-7892-4498 N / 21-96843-2673 C', 'EMAIL' => 'GOLDENREPRESENTACOESRJ@GMAIL.COM', 'ENDEREÇO' => 'RUA CESAR LATTES BLOCO 1 APTO 107 - RIO DE JANEIRO/RJ'),
	25 => array('REPRESENTANTES' => 'LEANDRO MARQUES DE OLIVEIRA', 'RESPONSÁVEL' => 'LEANDRO MARQUES DE OLIVEIRA', 'REGIÃO' => 'RIO DE JANEIRO - RJ', 'TELEFONES' => '21-99636-1426', 'EMAIL' => 'LEANDROESTRATEGIA@GMAIL.COM', 'ENDEREÇO' => ''),
	26 => array('REPRESENTANTES' => 'JORGE EDUARDO FERREIRA DOS SANTOS', 'RESPONSÁVEL' => 'JORGE EDUARDO FERREIRA DOS SANTOS', 'REGIÃO' => 'RIO DE JANEIRO - RJ', 'TELEFONES' => '21-98824-3971', 'EMAIL' => 'SHOWREP@GMAIL.COM', 'ENDEREÇO' => 'AV. Flavio Vasconcelos 25 - Esperança - Rio de Janeiro - RJ'),
	27 => array('REPRESENTANTES' => 'LEANDRO ARGENTA POSTRINGER', 'RESPONSÁVEL' => 'LEANDRO ARGENTA POSTRINGER', 'REGIÃO' => 'RIO GRANDE DO SUL - RS', 'TELEFONES' => '51-98503-7805', 'EMAIL' => 'contato@larepresentacoes.com.br / argentapostringer@gmail.com', 'ENDEREÇO' => ''),
	28 => array('REPRESENTANTES' => 'ALEXANDRE CARMONA PINTO', 'RESPONSÁVEL' => 'ALEXANDRE CARMONA PINTO', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11 -98187-9428', 'EMAIL' => 'ALEXANDREBRINQUEDOS@UOL.COM.BR', 'ENDEREÇO' => ''),
	29 => array('REPRESENTANTES' => 'ANA RITA COELHO DE ARAUJO', 'RESPONSÁVEL' => 'ANA RITA COELHO', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-3229-9496/ 11-98367-8154 T  / 11-96711-4312 O', 'EMAIL' => 'jcs_ana@hotmail.com', 'ENDEREÇO' => 'RUA PAULA SOUZA, 471 4º ANDAR SALA 46 - SÃO PAULO/SP'),
	30 => array('REPRESENTANTES' => 'ATTIVA REPRESENTAÇÃO COMERCIAL LTDA', 'RESPONSÁVEL' => 'SARA COUTO', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-32282107 / 11-96913-0990 V', 'EMAIL' => 'attivarepresentacoes2020@gmail.com', 'ENDEREÇO' => 'AV SENADOR QUEIROZ 305 - 6 ANDAR SALA 02'),
	31 => array('REPRESENTANTES' => 'BOVOLIN E SUSSUMU COM. E REPRESENTAÇÕES', 'RESPONSÁVEL' => 'CARLOS  BOVOLIN / SUSSUMO', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11 -  3228-6294 / 11-99954-2610', 'EMAIL' => 'representacoesbovolin@hotmail.com', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ,279 4º ANDAR SALA 42 - SÃO PAULO/SP'),
	32 => array('REPRESENTANTES' => 'CAIO HENRIQUE DE FREITAS', 'RESPONSÁVEL' => 'CAIO HENRIQUE DE FREITAS', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-98626-3545', 'EMAIL' => 'vendas.caiohenrique@hotmail.com', 'ENDEREÇO' => 'AV AVELINO PARANHO, 210'),
	33 => array('REPRESENTANTES' => 'CHUANG MING HONG - ME', 'RESPONSÁVEL' => 'ANDRE CHUANG MING', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3228-2323 / 11-99509-7604 T', 'EMAIL' => 'andrepedidos10@gmail.com ;financeiroandre10@gmail.com', 'ENDEREÇO' => 'AV SENADOR QUEIROZ 605 15º ANDAR SALA 1513 - SÃO PAULO/SP'),
	34 => array('REPRESENTANTES' => 'CLOVIS MATIOTA', 'RESPONSÁVEL' => 'CLOVIS MATIOTA', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11 -97187-7788 V', 'EMAIL' => 'clovismatiota@hotmail.com', 'ENDEREÇO' => 'NÃO POSSUI ESCRITÓRIO'),
	35 => array('REPRESENTANTES' => 'CLEBER ANDRADE DOS SANTOS', 'RESPONSÁVEL' => 'CLEBER ANDRADE', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '(11)98245-6298', 'EMAIL' => 'CLEBER.TOYS@gmail.com', 'ENDEREÇO' => ''),
	36 => array('REPRESENTANTES' => 'COSTA PAULA REPRESENTACOES LTDA', 'RESPONSÁVEL' => 'SAMANTA COSTA', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3313-0482 / 11-3448-8628 / 11-94960-0090 T', 'EMAIL' => 'paularepresentacoes@gmail.com', 'ENDEREÇO' => 'RUA SENADOR QUEIROZ 4 ANDAR SALA 414'),
	37 => array('REPRESENTANTES' => 'DAVI DOTTA', 'RESPONSÁVEL' => 'DAVI DOTTA', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 98609-4938', 'EMAIL' => 'DAVIDOTTA@GMAIL.COM', 'ENDEREÇO' => ''),
	38 => array('REPRESENTANTES' => 'EDVAR FRANCISCO ARGOLO SANTOS', 'RESPONSÁVEL' => 'EDVAR ARGOLA (CHIQUINHO)', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3431-5182 / 11-94742-1596 N /1197740-4055', 'EMAIL' => 'alessandrafenix1@gmail.com', 'ENDEREÇO' => 'AV.SENADOR QUEIROZ,96 11 ANDAR SALA 1101 - SÃO PAULO/SP CEP. 01026-000'),
	39 => array('REPRESENTANTES' => 'EQUIPE 3L REPRESENTAÇÕES LTDA', 'RESPONSÁVEL' => 'LUIZ LOPES LEMOS', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3229-9991 / 11-991062546 V / 11-98431-6042 O', 'EMAIL' => 'equipeluiz@gmail.com', 'ENDEREÇO' => 'RUA MIGUEL CARLOS,11 1º ANDAR SALA 13 - SÃO PAULO/SP'),
	40 => array('REPRESENTANTES' => 'GABRIELA DE CARVALHO ROCHA - KG REPRES', 'RESPONSÁVEL' => 'GABRIELA DE CARVALHO ROCHA', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3315-9452 / 11-98075-1664 O', 'EMAIL' => 'kgfinanceiro@gmail.com', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ,312 11º ANDAR - SALA 1103 - SÃO PAULO/SP'),
	41 => array('REPRESENTANTES' => 'HERO JETHANAND GIANANI', 'RESPONSÁVEL' => 'HERO JETHANAND GIANANI', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 2950-1640 / 11-98314-2214 T', 'EMAIL' => 'herogianani@gmail.com', 'ENDEREÇO' => 'R.GILBERTO SAMPAIO, 43 APTO.61 - PAULICEIA - SÃO PAULO/SP'),
	42 => array('REPRESENTANTES' => 'IRÁ SANTANA', 'RESPONSÁVEL' => 'IRÁ SANTANA', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-9.4089-2696', 'EMAIL' => 'irahrepresentacoes@gmail.com', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ,305 6 andar sala 2'),
	43 => array('REPRESENTANTES' => 'J.B  & FILHOS REPRESENTACOES LTDA - ME', 'RESPONSÁVEL' => 'SILVIO DUARTE DE SOUZA', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3326-7588 / 11-3312-4030 / 1198440-1238 N', 'EMAIL' => 'vendas.jbrepre@gmail.com;VENDAS02.JBREPRE@GMAIL.COM', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ,274 19º ANDAR SALA 191/192- SÃO PAULO/SP'),
	44 => array('REPRESENTANTES' => 'JOJO  REPRESENTACOES COMERCIAIS LTDA-ME', 'RESPONSÁVEL' => 'JOYCE SILVA / JOSI SILVA/ CLEYTON RAFAEL', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3326-79274 /11-99577-6661 /11-99653-5379', 'EMAIL' => 'josys85@hotmail.com;joycerep@hotmail.com', 'ENDEREÇO' => 'Senador Queiroz 305, 6° andar sala 05'),
	45 => array('REPRESENTANTES' => 'KFOURI E KFOURI REPRESENTACOES S/S LTDA', 'RESPONSÁVEL' => 'EMILIO KFOURI', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-  3228-4866 / 11-99631-4638 V / 1166929-0033 V', 'EMAIL' => 'flavio@mkrepre.com.br emilio.lk@hotmail.com', 'ENDEREÇO' => 'AV. CARLOS DE SOUZA NAZARETH, 184 4º ANDAR SALA 42 - SÃO PAULO/SP'),
	46 => array('REPRESENTANTES' => 'L C MACIEL - ME', 'RESPONSÁVEL' => 'LUIZ MACIEL ( LUIZINHO)', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-  98487-5880 T/11-97121-1063 V/11-96787-1445 O', 'EMAIL' => 'luizinho.representacoes@hotmail.com', 'ENDEREÇO' => 'RUA BRIGADEIRO TOBIAS,669 LOJA 20 - SÃO PAULO/SP'),
	47 => array('REPRESENTANTES' => 'L.E.FILARDI REPRESENTACOES - EPP ', 'RESPONSÁVEL' => 'MARIA JOSÉ FILARDI', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3326-0006 / 11-98545-4695 T', 'EMAIL' => 'filardi-vendas@hotmail.com;', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ,498 SALA 12 - SÃO PAULO/SP'),
	48 => array('REPRESENTANTES' => 'LEONIDAS GROLLA JUNIOR', 'RESPONSÁVEL' => 'LEONIDAS GROLLA JUNIOR  (LÉO)', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3228-2450 / 11-94027-5867', 'EMAIL' => 'contato@leorepresentacoes.com', 'ENDEREÇO' => 'AV SENADOR QUEIROS, 312 11º 1104 SÃO PAULO/SP'),
	49 => array('REPRESENTANTES' => 'LUIZ REPRESENTAÇÕES (LOCO)', 'RESPONSÁVEL' => 'LUIZ PEREIRA DA SILVA', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 99786-8115 / 2407-6184', 'EMAIL' => 'LPREPRESENTACOES@TERRA.COM.BR', 'ENDEREÇO' => ''),
	50 => array('REPRESENTANTES' => 'MAGAZINE DA 25 COM UTILIDADES NEXT', 'RESPONSÁVEL' => 'JUNIOR MORAIS / ALESSANDRA RODRIGUES DE MORAIS', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-3228-9077 / 1198962-4303', 'EMAIL' => 'comissoes@nextrepresentacoes.com.br;alessandra@nextrepresentacoes.com.br', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ, 312 9º ANDAR - SALA 902 - SÃO PAULO/SP'),
	51 => array('REPRESENTANTES' => 'MANOEL VIEIRA NETO', 'RESPONSÁVEL' => 'MANOEL VIEIRA NETO', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 94747-1690', 'EMAIL' => 'mr.suasvendas@gmail.com', 'ENDEREÇO' => ''),
	52 => array('REPRESENTANTES' => 'MARINALVA N. CABRAL REPRESENTACAO COM. ME', 'RESPONSÁVEL' => 'MARINALVA  CABRAL', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-3229-2528/ 94876-0450 T -11-95708-4913 O', 'EMAIL' => 'cristina.hiday@gmail.com;marinalva.hiday@gmail.com', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ,312 14º ANDAR - SÃO PAULO/SP'),
	53 => array('REPRESENTANTES' => 'MURILO FACINE MESSIAS', 'RESPONSÁVEL' => 'MURILO FACINE MESSIAS', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-3313-4530 / 11-96708-3181 O', 'EMAIL' => 'murilo.mfvendas@hotmail.com', 'ENDEREÇO' => 'NÃO POSSUI ESCRITÓRIO'),
	54 => array('REPRESENTANTES' => 'NELSON  CADAMA CARUSO & CIA LTDA', 'RESPONSÁVEL' => 'NELSON  CADAMA CARUSO', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3227-8135 / 11-99623-5968 V', 'EMAIL' => 'nelsoncadama@hotmail.com', 'ENDEREÇO' => 'AV SENADOR QUEIROZ,605 - 12º ANDAR - SÃO PAULO/SP'),
	55 => array('REPRESENTANTES' => 'PITUTA CO. DE BRIN. E REPRES. LTDA EPP', 'RESPONSÁVEL' => 'ANTONIO MARCOS MARTINS / VINICIUS LOPES RIBAS', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '(11) 3313-1110 / 11-7816-0350 N/ 11-94746-7789 N', 'EMAIL' => 'sidney@nelsonrepres.com.br', 'ENDEREÇO' => 'RUA MIGUEL CARLOS 11,SALA 62 - SAO PAULO -SP'),
	56 => array('REPRESENTANTES' => 'REPRESENTAÇOES LIDER LTDA ME', 'RESPONSÁVEL' => 'JOÃO CARDOSO DE SÁ', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3315-1515 / 11-98536-0537 V / 11-99551-3969 V', 'EMAIL' => 'liderpagamentos@gmail.com', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ,498 9 ANDAR SALA 91 - SÃO PAULO/SP'),
	57 => array('REPRESENTANTES' => 'REPRESENTACOES NATO NACIONAL S/C LTDA', 'RESPONSÁVEL' => 'FABIO NATO', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-3229-6577 / 11-93004-3388 / 11-93004-4783 C', 'EMAIL' => 'fabio@natonacional.com.br; faturamento@natonacional.com.br; cobranca@natonacional.com.br', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ,667 2º ANDAR SALA 22 - SÃO PAULO/SP'),
	58 => array('REPRESENTANTES' => 'SANDRA REGINA SETTE', 'RESPONSÁVEL' => 'MONIQUE SETTE / SANDRA SETTE', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-97705-3652 / 11-98947-2384', 'EMAIL' => 'monique_opcao@hotmail.com', 'ENDEREÇO' => 'AV. SENADOR QUEIROZ,605 22º ANDAR SALA 2219 - SÃO PAULO/SP'),
	59 => array('REPRESENTANTES' => 'SIDNEY DE OLIVEIRA BASTOS', 'RESPONSÁVEL' => 'SIDNEY DE OLIVEIRA BASTOS', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-5062-4313 / 11-99987-6612 V/11-94750-2867 N', 'EMAIL' => 'sidneyobastos@uol.com.br', 'ENDEREÇO' => 'NÃO POSSUI ESCRITÓRIO'),
	60 => array('REPRESENTANTES' => 'SILVIO HUMBERTO PRIMO - EPP', 'RESPONSÁVEL' => 'SILVIO HUMBERTO PRIMO', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3227-8215 / 11-98702-9897 T/11-98707-3476 T', 'EMAIL' => 'psilviorepresentacao@hotmail.com', 'ENDEREÇO' => 'AVENIDA SENADOR QUEIROZ,667 5º ANDAR  SALA 51 - SÃO PAULO/SP'),
	61 => array('REPRESENTANTES' => 'SERGIO ROBERTO RODRIGUES SINNA', 'RESPONSÁVEL' => 'SERGIO ROBERTO RODRIGUES SINNA', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-99950-0927', 'EMAIL' => 'sergiosinna@uol.com.br', 'ENDEREÇO' => 'RUA DOUTOR ERNESTO VERGANA 508, VILA ASSUNÇÃO - PRAIA GRANDE - SP'),
	62 => array('REPRESENTANTES' => 'TANIA ALMEIDA DO NASCIMENTO (MANA REPRESENTAÇÕES)', 'RESPONSÁVEL' => 'TANIA ALMEIDA', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3228-9678 / 11-94089-31396 / 11-98696-0529T', 'EMAIL' => 'MANA_IMPORT@HOTMAIL.COM', 'ENDEREÇO' => 'AV.SENADOR QUEIROZ,312  8°  SL- 808 - SÃO PAULO/SP'),
	63 => array('REPRESENTANTES' => 'TOP VENDAS DO BRASIL (TIGRÃO)', 'RESPONSÁVEL' => 'EDSON FRANHANE', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3326-7208 / 11-3212-0488 / 11-98501-6827 T', 'EMAIL' => 'financeirotopvendas@gmail.com;topvendasdobrasil@gmail.com;topvendasdobrasil@gmail.com', 'ENDEREÇO' => 'RUA MIGUEL CARLOS, 11  º ANDAR - SÃO PAULO/SP'),
	64 => array('REPRESENTANTES' => 'VANDERLEY ANTONIO LOPES', 'RESPONSÁVEL' => 'VANDERLEY ANTONIO LOPES', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '94333-5078 -94001-0939', 'EMAIL' => 'VANDERLEYREPRESENTACOES@YAHOO.COM.BR', 'ENDEREÇO' => ''),
	65 => array('REPRESENTANTES' => 'WIZA  COMERCIAL LTDA - ME', 'RESPONSÁVEL' => 'ROSANA GOUVEA (GERENTE) IZA SALOMÃO (PROPRIETARIA)', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3229-9899 / 11-98643-6945 C / 11-98225--7184 C', 'EMAIL' => 'vendas.wiza@gmail.com', 'ENDEREÇO' => 'RUA MIGUEL CARLOS, 11  3º ANDAR - SÃO PAULO/SP'),
	66 => array('REPRESENTANTES' => 'RL REPRESENTAÇÃO', 'RESPONSÁVEL' => 'RAFAEL LEE', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11- 3228-2525 / 11-98188-8030', 'EMAIL' => 'produtos@rlrepresentacao.com.br;andre@rlrepresentacao.com.br;rlvales@rlrepresentacao.com.br; produtos@rlrepresentacao.com.br', 'ENDEREÇO' => 'Av. Senador Queiroz, 305 - 2° andar - Centro - CEP: 01026-001 - SP/SP'),
	67 => array('REPRESENTANTES' => 'RICARDO HENRIQUE BELCHIOR (ELO REPRESENTAÇÕES)', 'RESPONSÁVEL' => 'RICARDO BELCHIOR /DOUGLAS GONÇALVES', 'REGIÃO' => 'S.PAULO / SP', 'TELEFONES' => '11-97211-6191 - 11- 98756-4481', 'EMAIL' => 'RICARDOHBELCHIOR@HOTMAIL.COM;ELODR.REPRESENTACOES@gmail.com', 'ENDEREÇO' => ''),
	68 => array('REPRESENTANTES' => 'MYKAELLA SARDELI BORGES', 'RESPONSÁVEL' => 'ADEMIR SARDELI BORGES', 'REGIÃO' => 'SANTA CATARINA - SC', 'TELEFONES' => '48-3091-0899 /48-99948-6349', 'EMAIL' => 'toprepresentacoesc@hotmail.com', 'ENDEREÇO' => ''),
	69 => array('REPRESENTANTES' => 'TIAGO ESPER REPRESENTAÇÕES', 'RESPONSÁVEL' => 'TIAGO ESPER', 'REGIÃO' => 'SANTA CATARINA - SC', 'TELEFONES' => '048-99171-0410', 'EMAIL' => 'TIAGOBRINQUEDOS@GMAIL.COM', 'ENDEREÇO' => ''),
	70 => array('REPRESENTANTES' => 'LLC REPRESENTAÇÕES', 'RESPONSÁVEL' => 'CASSIO REIS', 'REGIÃO' => 'VITORIA E MG', 'TELEFONES' => '33-3015-4910 / 33-98727-0830C / 27-99901-3334 V', 'EMAIL' => 'comercial@topseven.com.br;suporte@topseven.com.br', 'ENDEREÇO' => 'RUA GRAÇA ARANHA, 413 - ESPLANADA - GOV.VALADARES/MG'),
	71 => array('REPRESENTANTES' => 'A P Oliveira Comércio e Representações L', 'RESPONSÁVEL' => 'Denis', 'REGIÃO' => 'Maranhão - MA', 'TELEFONES' => '(98) 98126-9693', 'EMAIL' => 'denisrep@hotmail.com', 'ENDEREÇO' => ''),
	72 => array('REPRESENTANTES' => 'Rennan Lisboa', 'RESPONSÁVEL' => 'Rennan', 'REGIÃO' => 'Maranhão - MA', 'TELEFONES' => '(98) 98244-1468 | 98810-9483 | 3238-3082 ', 'EMAIL' => 'rennan-lisboa@hotmail.com', 'ENDEREÇO' => ''),
	73 => array('REPRESENTANTES' => 'Wallace Rosa de Souza - ME', 'RESPONSÁVEL' => ' Wallace', 'REGIÃO' => 'Ceará - CE', 'TELEFONES' => '(88) 99733-4040', 'EMAIL' => ' wsrepresentacoestop@gmail.com', 'ENDEREÇO' => ''),
	74 => array('REPRESENTANTES' => 'M H C da Silva Representações - ME', 'RESPONSÁVEL' => 'Antonio Júlio', 'REGIÃO' => 'Rio Grande do Norte - RN', 'TELEFONES' => '(84) 99917-1278', 'EMAIL' => 'vendabmrep@hotmail.com', 'ENDEREÇO' => ''),

	75 => array('REPRESENTANTES' => 'Francisco Wesley Zuza Ferreira', 'RESPONSÁVEL' => 'Wesley', 'REGIÃO' => 'Paraíba - PB', 'TELEFONES' => '(83) 9119-5575', 'EMAIL' => 'wzmiz.rep@gmail.com', 'ENDEREÇO' => ''),

	76 => array('REPRESENTANTES' => 'Alexandre Lucena da Silva', 'RESPONSÁVEL' => 'Alexandre', 'REGIÃO' => 'Paraíba - PB', 'TELEFONES' => '(83) 98825-4355', 'EMAIL' => 'a.lucena@hotmail.com', 'ENDEREÇO' => ''),

	77 => array('REPRESENTANTES' => 'Francisco Kleibe Souza Bastos', 'RESPONSÁVEL' => 'Francisco', 'REGIÃO' => 'Pernambuco/Agreste PE', 'TELEFONES' => '(81) 99735-8855', 'EMAIL' => 'bastosrepresent@hotmail.com', 'ENDEREÇO' => ''),
	78 => array('REPRESENTANTES' => 'Brainer Representações de Papelaria, MAT', 'RESPONSÁVEL' => 'Marcos Brainer', 'REGIÃO' => 'Pernambuco/Agreste PE', 'TELEFONES' => '(81) 99855-1017', 'EMAIL' => 'marcos-brainer@hotmail.com', 'ENDEREÇO' => ''),
	79 => array('REPRESENTANTES' => 'Joaquim Paixão Cardoso', 'RESPONSÁVEL' => 'Joaquim Paixão', 'REGIÃO' => 'Pernambuco/Agreste PE', 'TELEFONES' => '(81) 99779-5204', 'EMAIL' => 'joaquimrepresentacoes@hotmail.com', 'ENDEREÇO' => ''),
	80 => array('REPRESENTANTES' => 'Ednaldo Mendes Cosméticos LTDA ME', 'RESPONSÁVEL' => 'Ednaldo Mendes', 'REGIÃO' => 'Pernambuco/Sertão PE', 'TELEFONES' => '(87) 98877-3450', 'EMAIL' => 'vendasednaldomendes@gmail.com', 'ENDEREÇO' => ''),
	81 => array('REPRESENTANTES' => 'E. S. Silva Representações - ME', 'RESPONSÁVEL' => 'Etevaldo', 'REGIÃO' => 'Alagoas - Al', 'TELEFONES' => '(82) 99631-8720', 'EMAIL' => 'e.valdo@hotmail.com', 'ENDEREÇO' => ''),
	82 => array('REPRESENTANTES' => 'Barroso Representações e Cia LTDA - ME', 'RESPONSÁVEL' => 'Gilson Barroso', 'REGIÃO' => 'Sergipe - SE', 'TELEFONES' => '(79) 99949-1890', 'EMAIL' => 'barroso_gil10@hotmail.com', 'ENDEREÇO' => ''),
	83 => array('REPRESENTANTES' => 'Joibrinq Representações LTDA', 'RESPONSÁVEL' => 'Sandro', 'REGIÃO' => 'Bahia - BA', 'TELEFONES' => '(75) 98804-7353', 'EMAIL' => 'joilbrinq@grupojsvendas.com.br;sandro@grupojsvendas.com.br', 'ENDEREÇO' => ''),
	84 => array('REPRESENTANTES' => '', 'RESPONSÁVEL' => '', 'REGIÃO' => 'Campo - SP', 'TELEFONES' => '+55 11 95132-1004 whatsapp', 'EMAIL' => 'contato.mypa@gmail.com', 'ENDEREÇO' => ''),
);

 

$listar = array();
$item = null;

$item .= '<div class="list-group">';

foreach ($representantes as $key => $value) {
	if(preg_match('/'.$sigla.'$/i', $value['REGIÃO'])) {

		if(!empty($value['REPRESENTANTES'])) {
			$item .= '<h5>REPRESENTANTES</h5>';
			$item .= '<p>'.$value['REPRESENTANTES'].'</p>';
		}

		if(!empty($value['RESPONSÁVEL'])) {
			$item .= '<h5>RESPONSÁVEL</h5>';
			$item .= '<p>'.$value['RESPONSÁVEL'].'</p>';
		}
		

		if(!empty($value['REGIÃO'])) {
			$item .= '<h5>REGIÃO</h5>';
			$item .= '<p>'.$value['REGIÃO'].'</p>';
		}
		

		if(!empty($value['TELEFONES'])) {
			$item .= '<h5>TELEFONES</h5>';
			$item .= '<p>'.$value['TELEFONES'].'</p>';	
		}


		if(!empty($value['EMAIL'])) {
			$item .= '<h5>EMAIL</h5>';
			$value['EMAIL'] = str_replace(';', '<br/>', $value['EMAIL']);
			$item .= '<p>'.$value['EMAIL'].'</p>';
		}
		

		if(!empty($value['ENDEREÇO'])) {
			$item .= '<h5>ENDEREÇO</h5>';
			$item .= '<p>'.$value['ENDEREÇO'].'</p>';
		}
		
		$item .= '<hr/>';
		array_push($listar, $value);
	}
}
$item .= '</div>';

echo $item;

