async function buscarSigno() {
  const dataNascimento = document.querySelector("#data_nascimento").value;
  const { data } = await axios.get(
    `http://localhost:80/buscarSigno.php?data_nascimento=${dataNascimento}`
  );

  console.log(data);
}
