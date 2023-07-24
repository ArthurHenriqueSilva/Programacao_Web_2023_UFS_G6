<!DOCTYPE php>
<php lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Teste - Implantação</title>
</head>
<body>
    O seu endereço IP é: <? echo $_SERVER["REMOTE_ADDR"]; ?>
    <h1>Distribuição dos imigrantes de determinado país. q1</h1>
    <form action="/distribuicao_imigrantes_pais" method="post">
        <label for="pais_filtro_distribuicao_imigrantes_pais">Pais para filtragem: </label>
        <input type="text" name="pais_filtro_distribuicao_imigrantes_pais">
        <input type="submit" value="Enviar">
    </form>

    <h1>País com mais imigração entre meses. q2</h1>
    <form action="/pais_mais_imigracao_periodo" method="post">
        <label for="mes_inicio_pais_mais_imigracao_periodo">Mês inicial para filtragem</label>
        <select name="mes_inicio_pais_mais_imigracao_periodo" >
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
        
        <label for="mes_fim_pais_mais_imigracao_periodo">Mês final para filtragem</label>
        <select name="mes_fim_pais_mais_imigracao_periodo" >
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>

        <input type="submit" value="Enviar">
    </form>

    <h1>Tipo principal de imigrante entre os meses. q3</h1>
    <form action="/tipo_imigracao_mais_popular_periodo" method="post">
        <label for="mes_inicio_tipo_imigracao_mais_popular_periodo">Mês inicial para filtragem</label>
        <select name="mes_inicio_tipo_imigracao_mais_popular_periodo" >
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
        
        <label for="mes_fim_tipo_imigracao_mais_popular_periodo">Mês final para filtragem</label>
        <select name="mes_fim_tipo_imigracao_mais_popular_periodo" >
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>

        <input type="submit" value="Enviar">
    </form>

    <h1>Periodo mais popular para um tipo de imigrante. q4</h1>
    <form action="/periodo_popular_tipo" method="post">
        <label for="tipo_filtro_periodo_popular">Tipo para filtragem: </label>
        <select name="tipo_filtro_periodo_popular" >
            <option value="Fronteiriço">Fronteiriço</option>
            <option value="Provisório">Provisório</option>
            <option value="Residente">Residente</option>
            <option value="Temporário">Temporário</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>

    <h1>Mes mais popular do estado para um tipo de imigrante. q5</h1>
    <form action="/mes_popular_estado" method="post">
        <label for="estado_filtro_mes_popular_estado">Estado para filtragem: </label>
        <input type="text" name="estado_filtro_mes_popular_estado"> <br>

        <label for="classificacao_filtro_mes_popular_estado">Tipo para filtragem: </label>
        <select name="classificacao_filtro_mes_popular_estado" >
            <option value="Fronteiriço">Fronteiriço</option>
            <option value="Provisório">Provisório</option>
            <option value="Residente">Residente</option>
            <option value="Temporário">Temporário</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>

    <h1>Qual o estado que possui mais registros de imigrantes residentes no mes especificado ? q6</h1>
    <form action="/estado_mais_residente_no_mes" method="post">
        <label for="mes_estado_mais_residente_por_periodo">Mês para filtragem</label>
        <select name="mes_estado_mais_residente_por_periodo" >
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>
    
    <h1>Qual Estado recebeu mais imigrantes de determinado País ? q7</h1>
    <form action="/estado_mais_imigrantes" method="post">
        <label for="pais_filtro_estado_mais_imigrantes">Pais para filtragem: </label>
        <input type="text" name="pais_filtro_estado_mais_imigrantes">
        <input type="submit" value="Enviar">
    </form>

    <h1>Qual o tipo mais comum de imigrante vindo de determinado país ? q8</h1>
    <form action="/tipo_imigrante_pais" method="post">
        <label for="pais_filtro_tipo_imigrante_pais">Pais para filtragem: </label>
        <input type="text" name="pais_filtro_tipo_imigrante_pais">
        <input type="submit" value="Enviar">
    </form>

    <h1>Qual a quantidade de imigrantes de determinado país no mês especificado ? q9</h1>
    <form action="/quantidade_pais_maior_periodo_imigracao" method="post">
        <label for="pais_filtro_pais_imigracao_periodo_popular">Pais para filtragem: </label>
        <input type="text" name="pais_filtro_pais_imigracao_periodo_popular"> <br>
        <label for="mes_filtro_pais_imigracao_periodo_popular">Mês para filtragem</label>
        <select name="mes_filtro_pais_imigracao_periodo_popular" >
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>

    <h1>Qual o tipo de imigrante mais recorrente no mês e país especificado ? q10</h1>
    <form action="/classificacao_imigracao_mais_popular_mes" method="post">
        <label for="pais_filtro_classificacao_imigracao_mais_popular_mes">Pais para filtragem: </label>
        <input type="text" name="pais_filtro_classificacao_imigracao_mais_popular_mes"> <br>
        <label for="mes_filtro_classificacao_pais_tempo">Mês para filtragem</label>
        <select name="mes_filtro_classificacao_pais_tempo" >
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>

    <form action="/">
        <input type="submit" value="Recarregar">
    </form>
</body>
</html>
