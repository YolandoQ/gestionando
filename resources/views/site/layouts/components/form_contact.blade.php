<form action= {{route($route)}} method="POST">
    @csrf
    <input name="name" type="text" placeholder="Nome" class={{$border}}>
    <br>
    <input name="number" type="text" placeholder="Telefone" class={{$border}}>
    <br>
    <input name="email" type="text" placeholder="E-mail" class={{$border}}>
    <br>
    <select name="reason" class={{$border}}>
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="description" class={{$border}}>Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class={{$border}}>ENVIAR</button>
</form>