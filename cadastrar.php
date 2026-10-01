<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Ordem de Serviço</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Nova Ordem de Serviço</h1>

        <form action="salvar.php" method="post">
            <label>Cliente</label>
            <input type="text" name="cliente" required>

            <label>Equipemento</label>
            <input type="text" name="equipamento" required>

            <label>Problema apresentado</label>
            <textarea name="problema" required></textarea>

            <label>Data de Entrada</label>
            <input type="date" name="data_entrada" required>

            <label>Status</label>
            <select name="status" required>
                <option value="Recebido">Recebido</option>
                <option value="Em análise">Em análise</option>
                <option value="Em manutenção">Em manutenção</option>
                <option value="Concluído">Concluído</option>
            </select>
            <button type="submit">Cadastrar ordem</button>
        </form>
        <a href="index.php"></a>
    </div>
</body>
</html>