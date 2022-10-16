async function buscarSigno() {
  const dataNascimento = document.querySelector("#data_nascimento").value;

  if (!dataNascimento) {
    Swal.fire(
      "Data de nascimento obrigatória",
      "Selecione sua data de nascimento!",
      "error"
    );

    return;
  }

  const { data } = await axios.get(
    `http://localhost:80/buscarSigno.php?data_nascimento=${dataNascimento}`
  );

  console.log(data);

  Swal.fire(data.signoNome, "", "success");
}
